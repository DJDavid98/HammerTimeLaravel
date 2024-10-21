import { getAppName } from '@/utils/app';
import { useMomentLocale } from '@/utils/moment';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { i18nVue } from 'laravel-vue-i18n';

import { createApp, DefineComponent, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import '../css/design/_index.scss';
import '../css/app.scss';
import './bootstrap';

const appName = getAppName();
const langJsonImporters = import.meta.glob('../../lang/php_*.json');
const langJsonPaths = Object.keys(langJsonImporters);
const findLangJsonPath = (lang: string) => langJsonPaths.find(path => path.endsWith(`lang/php_${lang}.json`));

createInertiaApp({
  title: (title) => title ? `${title} - ${appName}` : appName,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    useMomentLocale(props.initialPage.props.app.locale).then(() => {
      createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(ZiggyVue, Ziggy)
        .use(i18nVue, {
          fallbackLang: 'en',
          fallbackMissingTranslations: true,
          resolve: async (lang: string) => {
            const jsonPathForLocale = findLangJsonPath(lang);
            if (!jsonPathForLocale) {
              throw new Error(`Could not find lang json path for lang ${lang}`);
            }
            return await langJsonImporters[jsonPathForLocale]();
          },
        })
        .mount(el);
    });
  },
  progress: {
    color: '#5865F2',
  },
});
