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
        'address'                  => 'abordare',
        'affiliate_url'            => 'URL afiliat',
        'age'                      => 'vârstă',
        'amount'                   => 'Cantitate',
        'announcement'             => 'anunţ',
        'area'                     => 'zonă',
        'audience_prize'           => 'premiul publicului',
        'audience_winner'          => 'audience winner',
        'available'                => 'disponibil',
        'birthday'                 => 'zi de nastere',
        'body'                     => 'corp',
        'city'                     => 'oraș',
        'company'                  => 'company',
        'compilation'              => 'compilare',
        'concept'                  => 'concept',
        'conditions'               => 'conditii',
        'content'                  => 'conţinut',
        'contest'                  => 'contest',
        'country'                  => 'țară',
        'cover'                    => 'acoperi',
        'created_at'               => 'creat la',
        'creator'                  => 'creator',
        'currency'                 => 'valută',
        'current_password'         => 'Parola actuală',
        'customer'                 => 'client',
        'date'                     => 'Data',
        'date_of_birth'            => 'Data de nastere',
        'dates'                    => 'datele',
        'day'                      => 'zi',
        'deleted_at'               => 'șters la',
        'description'              => 'Descriere',
        'display_type'             => 'tipul de afișare',
        'district'                 => 'district',
        'duration'                 => 'durată',
        'email'                    => 'e-mail',
        'excerpt'                  => 'extras',
        'filter'                   => 'filtru',
        'finished_at'              => 'terminat la',
        'first_name'               => 'Nume',
        'gender'                   => 'gen',
        'grand_prize'              => 'grand prize',
        'group'                    => 'grup',
        'hour'                     => 'ora',
        'image'                    => 'imagine',
        'image_desktop'            => 'imagine de pe desktop',
        'image_main'               => 'imaginea principală',
        'image_mobile'             => 'imaginea mobilă',
        'images'                   => 'imagini',
        'is_audience_winner'       => 'este câștigătorul publicului',
        'is_hidden'                => 'este ascuns',
        'is_subscribed'            => 'este abonat',
        'is_visible'               => 'este vizibil',
        'is_winner'                => 'este câștigător',
        'items'                    => 'articole',
        'key'                      => 'cheie',
        'last_name'                => 'numele de familie',
        'lesson'                   => 'lecţie',
        'line_address_1'           => 'adresa de linie 1',
        'line_address_2'           => 'adresa de linie 2',
        'login'                    => 'log in',
        'message'                  => 'mesaj',
        'middle_name'              => 'al doilea prenume',
        'minute'                   => 'minut',
        'mobile'                   => 'mobil',
        'month'                    => 'lună',
        'name'                     => 'Nume',
        'national_code'            => 'cod national',
        'number'                   => 'număr',
        'password'                 => 'parola',
        'password_confirmation'    => 'Confirmarea parolei',
        'phone'                    => 'telefon',
        'photo'                    => 'fotografie',
        'portfolio'                => 'portofoliu',
        'postal_code'              => 'Cod poștal',
        'preview'                  => 'previzualizare',
        'price'                    => 'Preț',
        'product_id'               => 'ID-ul produsului',
        'product_uid'              => 'UID-ul produsului',
        'product_uuid'             => 'UUID produs',
        'promo_code'               => 'Cod promoțional',
        'province'                 => 'provincie',
        'quantity'                 => 'cantitate',
        'reason'                   => 'motiv',
        'recaptcha_response_field' => 'câmp de răspuns recaptcha',
        'referee'                  => 'arbitru',
        'referees'                 => 'arbitrii',
        'reject_reason'            => 'respinge motivul',
        'remember'                 => 'tine minte',
        'restored_at'              => 'restaurat la',
        'result_text_under_image'  => 'textul rezultat sub imagine',
        'role'                     => 'rol',
        'rule'                     => 'regulă',
        'rules'                    => 'reguli',
        'second'                   => 'al doilea',
        'sex'                      => 'sex',
        'shipment'                 => 'expediere',
        'short_text'               => 'text scurt',
        'size'                     => 'mărimea',
        'skills'                   => 'aptitudini',
        'slug'                     => 'melc',
        'specialization'           => 'specializare',
        'started_at'               => 'început la',
        'state'                    => 'stat',
        'status'                   => 'stare',
        'street'                   => 'stradă',
        'student'                  => 'student',
        'subject'                  => 'subiect',
        'tag'                      => 'etichetă',
        'tags'                     => 'Etichete',
        'teacher'                  => 'profesor',
        'terms'                    => 'termeni',
        'test_description'         => 'Descriere Test',
        'test_locale'              => 'locale de testare',
        'test_name'                => 'numele testului',
        'text'                     => 'text',
        'time'                     => 'timp',
        'title'                    => 'titlu',
        'type'                     => 'tip',
        'updated_at'               => 'actualizat la',
        'user'                     => 'utilizator',
        'username'                 => 'nume de utilizator',
        'value'                    => 'valoare',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'an',
    ],
];
