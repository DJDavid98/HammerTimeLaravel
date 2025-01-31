<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Teto\HTTP\AcceptLanguage;

class LanguageDetector {
  protected array $ignored_segments = [
    // Server invite redirect
    'discord',
    // Login magic links
    'bot-login',
    // oAuth flow related
    'oauth',
  ];

  protected const LOCALIZED_PATH_REGEX = '/^[a-z]{2}(?:[_-][a-zA-Z\d]{2,})?($|\/)/';

  public function handle(Request $request, Closure $next) {
    $request_path = $request->path();
    $first_route_segment = $request->segment(1);
    $is_localized_path = preg_match(self::LOCALIZED_PATH_REGEX, $request_path);
    if ($is_localized_path){
      // Perform language validation
      $request_path = preg_replace(self::LOCALIZED_PATH_REGEX, '$1', $request_path);
      $route_locale = $this->validateLocale($first_route_segment);
    }
    else {
      if (in_array($first_route_segment, $this->ignored_segments, true)){
        return $next($request);
      }

      // Perform language detection
      $route_locale = $this->detectLocale();
    }

    if ($first_route_segment === $route_locale || $request->method() !== 'GET'){
      // No redirection
      return $next($request);
    }

    // Force accurate locale route prefix
    $query = $request->query->all();
    $query_string = !empty($query) ? '?'.http_build_query($query) : '';
    $redirect_path = "/$route_locale/$request_path$query_string";

    return redirect($redirect_path);
  }

  protected function detectLocale():string {
    $ui_locale_map = Config::get('languages.ui_locale_map');
    $accepts_list = AcceptLanguage::get();
    foreach ($accepts_list as $accepts){
      $language_key = $accepts['language'].($accepts['region'] ? "-{$accepts['region']}" : '');
      if (!array_key_exists($language_key, $ui_locale_map)){
        continue;
      }

      App::setLocale($ui_locale_map[$language_key]);

      return $language_key;
    }

    return config('app.fallback_locale');
  }

  protected function validateLocale(string $locale):string {
    // Resolve aliases
    $locale_route_alias = Config::get('languages.locale_route_alias');
    if (array_key_exists($locale, $locale_route_alias)){
      $locale = $locale_route_alias[$locale];
    }

    // Check UI to Laravel locale mapping
    $ui_locale_map = Config::get('languages.ui_locale_map');
    if (array_key_exists($locale, $ui_locale_map)){
      App::setlocale($ui_locale_map[$locale]);

      return $locale;
    }

    // Check Laravel to UI reverse locale mapping
    $ui_locale_map_flip = array_flip($ui_locale_map);
    if (array_key_exists($locale, $ui_locale_map_flip)){
      App::setlocale($locale);

      return $ui_locale_map_flip[$locale];
    }

    return config('app.fallback_locale');
  }
}
