<?php

declare(strict_types=1);

return [
    'accepted'             => 'The :attribute must be accepted.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'ascii'                => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'array'   => 'The :attribute must have between :min and :max items.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'can'                  => 'The :attribute field contains an unauthorized value.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_equals'          => 'The :attribute must be a date equal to :date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'decimal'              => 'The :attribute field must have :decimal decimal places.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'doesnt_end_with'      => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with'    => 'The :attribute field must not start with one of the following: :values.',
    'email'                => 'The :attribute must be a valid email address.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'The selected :attribute is invalid.',
    'extensions'           => 'The :attribute field must have one of the following extensions: :values.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'gt'                   => [
        'array'   => 'The :attribute must have more than :value items.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string'  => 'The :attribute must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The :attribute must have :value items or more.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
    ],
    'hex_color'            => 'The :attribute field must be a valid hexadecimal color.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'lowercase'            => 'The :attribute field must be lowercase.',
    'lt'                   => [
        'array'   => 'The :attribute must have less than :value items.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string'  => 'The :attribute must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The :attribute must not have more than :value items.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal :value.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'The :attribute may not have more than :max items.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'numeric' => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max characters.',
    ],
    'max_digits'           => 'The :attribute field must not have more than :max digits.',
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'array'   => 'The :attribute must have at least :min items.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string'  => 'The :attribute must be at least :min characters.',
    ],
    'min_digits'           => 'The :attribute field must have at least :min digits.',
    'missing'              => 'The :attribute field must be missing.',
    'missing_if'           => 'The :attribute field must be missing when :other is :value.',
    'missing_unless'       => 'The :attribute field must be missing unless :other is :value.',
    'missing_with'         => 'The :attribute field must be missing when :values is present.',
    'missing_with_all'     => 'The :attribute field must be missing when :values are present.',
    'multiple_of'          => 'The :attribute must be a multiple of :value.',
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'password'             => [
        'letters'       => 'The :attribute field must contain at least one letter.',
        'mixed'         => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute field must contain at least one number.',
        'symbols'       => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'The :attribute field must be present.',
    'present_if'           => 'The :attribute field must be present when :other is :value.',
    'present_unless'       => 'The :attribute field must be present unless :other is :value.',
    'present_with'         => 'The :attribute field must be present when :values is present.',
    'present_with_all'     => 'The :attribute field must be present when :values are present.',
    'prohibited'           => 'The :attribute field is prohibited.',
    'prohibited_if'        => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless'    => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'array'   => 'The :attribute must contain :size items.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string'  => 'The :attribute must be :size characters.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values',
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'ulid'                 => 'The :attribute field must be a valid ULID.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'uppercase'            => 'The :attribute field must be uppercase.',
    'url'                  => 'The :attribute format is invalid.',
    'uuid'                 => 'The :attribute must be a valid UUID.',
    'attributes'           => [
        'address'                  => 'adres',
        'affiliate_url'            => 'adres URL partnera',
        'age'                      => 'wiek',
        'amount'                   => 'ilość',
        'announcement'             => 'ogłoszenie',
        'area'                     => 'obszar',
        'audience_prize'           => 'nagroda publiczności',
        'audience_winner'          => 'audience winner',
        'available'                => 'dostępny',
        'birthday'                 => 'urodziny',
        'body'                     => 'treść',
        'city'                     => 'miasto',
        'company'                  => 'company',
        'compilation'              => 'kompilacja',
        'concept'                  => 'pojęcie',
        'conditions'               => 'warunki',
        'content'                  => 'zawartość',
        'contest'                  => 'contest',
        'country'                  => 'kraj',
        'cover'                    => 'okładka',
        'created_at'               => 'utworzono',
        'creator'                  => 'twórca',
        'currency'                 => 'waluta',
        'current_password'         => 'aktualne hasło',
        'customer'                 => 'klient',
        'date'                     => 'data',
        'date_of_birth'            => 'data urodzenia',
        'dates'                    => 'Daktyle',
        'day'                      => 'dzień',
        'deleted_at'               => 'skasowano',
        'description'              => 'opis',
        'display_type'             => 'typ wyświetlacza',
        'district'                 => 'dzielnica',
        'duration'                 => 'czas trwania',
        'email'                    => 'adres e-mail',
        'excerpt'                  => 'wyciąg',
        'filter'                   => 'filtr',
        'finished_at'              => 'skończył o godz',
        'first_name'               => 'imię',
        'gender'                   => 'płeć',
        'grand_prize'              => 'grand prize',
        'group'                    => 'grupa',
        'hour'                     => 'godzina',
        'image'                    => 'obrazek',
        'image_desktop'            => 'obraz pulpitu',
        'image_main'               => 'główny obraz',
        'image_mobile'             => 'obraz mobilny',
        'images'                   => 'obrazy',
        'is_audience_winner'       => 'jest zwycięzcą publiczności',
        'is_hidden'                => 'jest ukryty',
        'is_subscribed'            => 'jest zapisany',
        'is_visible'               => 'jest widoczny',
        'is_winner'                => 'jest zwycięzcą',
        'items'                    => 'elementy',
        'key'                      => 'klucz',
        'last_name'                => 'nazwisko',
        'lesson'                   => 'lekcja',
        'line_address_1'           => 'adres 1',
        'line_address_2'           => 'adres 2',
        'login'                    => 'Zaloguj sie',
        'message'                  => 'wiadomość',
        'middle_name'              => 'drugie imię',
        'minute'                   => 'minuta',
        'mobile'                   => 'numer telefonu komórkowego',
        'month'                    => 'miesiąc',
        'name'                     => 'nazwa',
        'national_code'            => 'kod kraju',
        'number'                   => 'numer',
        'password'                 => 'hasło',
        'password_confirmation'    => 'potwierdzenie hasła',
        'phone'                    => 'numer telefonu',
        'photo'                    => 'zdjęcie',
        'portfolio'                => 'teczka',
        'postal_code'              => 'kod pocztowy',
        'preview'                  => 'podgląd',
        'price'                    => 'cena',
        'product_id'               => 'ID produktu',
        'product_uid'              => 'UID produktu',
        'product_uuid'             => 'UUID produktu',
        'promo_code'               => 'kod promocyjny',
        'province'                 => 'województwo/stan',
        'quantity'                 => 'ilość',
        'reason'                   => 'powód',
        'recaptcha_response_field' => 'pole odpowiedzi recaptcha',
        'referee'                  => 'sędzia',
        'referees'                 => 'sędziowie',
        'reject_reason'            => 'odrzucić powód',
        'remember'                 => 'zapamiętaj',
        'restored_at'              => 'odtworzono',
        'result_text_under_image'  => 'wynikowy tekst pod obrazkiem',
        'role'                     => 'rola',
        'rule'                     => 'reguła',
        'rules'                    => 'zasady',
        'second'                   => 'sekunda',
        'sex'                      => 'płeć',
        'shipment'                 => 'wysyłka',
        'short_text'               => 'krótki tekst',
        'size'                     => 'rozmiar',
        'skills'                   => 'umiejętności',
        'slug'                     => 'ślimak',
        'specialization'           => 'specjalizacja',
        'started_at'               => 'zaczęło się o',
        'state'                    => 'stan',
        'status'                   => 'status',
        'street'                   => 'ulica',
        'student'                  => 'uczeń',
        'subject'                  => 'temat',
        'tag'                      => 'etykietka',
        'tags'                     => 'tagi',
        'teacher'                  => 'nauczyciel',
        'terms'                    => 'warunki',
        'test_description'         => 'testowy opis',
        'test_locale'              => 'testowa lokalizacja',
        'test_name'                => 'testowe imię',
        'text'                     => 'tekst',
        'time'                     => 'czas',
        'title'                    => 'tytuł',
        'type'                     => 'typ',
        'updated_at'               => 'zaktualizowano',
        'user'                     => 'użytkownik',
        'username'                 => 'nazwa użytkownika',
        'value'                    => 'wartość',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'rok',
    ],
];
