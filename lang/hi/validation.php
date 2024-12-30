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
        'address'                  => 'पता',
        'affiliate_url'            => 'संबद्ध यूआरएल',
        'age'                      => 'उम्र',
        'amount'                   => 'रकम',
        'announcement'             => 'घोषणा',
        'area'                     => 'क्षेत्र',
        'audience_prize'           => 'दर्शक पुरस्कार',
        'audience_winner'          => 'audience winner',
        'available'                => 'उपलब्ध',
        'birthday'                 => 'जन्मदिन',
        'body'                     => 'तन',
        'city'                     => 'शहर',
        'company'                  => 'company',
        'compilation'              => 'संकलन',
        'concept'                  => 'अवधारणा',
        'conditions'               => 'स्थितियाँ',
        'content'                  => 'विषय',
        'contest'                  => 'contest',
        'country'                  => 'देश',
        'cover'                    => 'ढकना',
        'created_at'               => 'पर बनाया गया',
        'creator'                  => 'रचनाकार',
        'currency'                 => 'मुद्रा',
        'current_password'         => 'वर्तमान पासवर्ड',
        'customer'                 => 'ग्राहक',
        'date'                     => 'दिनांक',
        'date_of_birth'            => 'जन्म की तारीख',
        'dates'                    => 'खजूर',
        'day'                      => 'दिन',
        'deleted_at'               => 'पर हटा दिया गया',
        'description'              => 'विवरण',
        'display_type'             => 'डिस्प्ले प्रकार',
        'district'                 => 'जिला Seoni',
        'duration'                 => 'समयांतराल',
        'email'                    => 'ईमेल',
        'excerpt'                  => 'अंश',
        'filter'                   => 'फिल्टर',
        'finished_at'              => 'पर समाप्त हुआ',
        'first_name'               => 'संतोष',
        'gender'                   => 'लिंग',
        'grand_prize'              => 'भव्य पुरस्कार',
        'group'                    => 'समूह',
        'hour'                     => 'घंटा',
        'image'                    => 'छवि',
        'image_desktop'            => 'डेस्कटॉप छवि',
        'image_main'               => 'मुख्य छवि',
        'image_mobile'             => 'मोबाइल छवि',
        'images'                   => 'इमेजिस',
        'is_audience_winner'       => 'दर्शक विजेता है',
        'is_hidden'                => 'छिपा है',
        'is_subscribed'            => 'सदस्यता ली गयी है',
        'is_visible'               => 'दिखाई दे रहा है',
        'is_winner'                => 'विजेता है',
        'items'                    => 'सामान',
        'key'                      => 'चाबी',
        'last_name'                => 'उपनाम',
        'lesson'                   => 'सबक',
        'line_address_1'           => 'पंक्ति का पता 1',
        'line_address_2'           => 'रेखा पता 2',
        'login'                    => 'लॉग इन करें',
        'message'                  => 'संदेश',
        'middle_name'              => 'मध्य नाम',
        'minute'                   => 'मिनट',
        'mobile'                   => 'मोबाइल',
        'month'                    => 'महीना',
        'name'                     => 'नाम',
        'national_code'            => 'राष्ट्रीय कोड',
        'number'                   => 'संख्या',
        'password'                 => 'कूटशब्द',
        'password_confirmation'    => 'पासवर्ड पुष्टि',
        'phone'                    => 'फ़ोन',
        'photo'                    => 'तस्वीर',
        'portfolio'                => 'पोर्टफोलियो',
        'postal_code'              => 'डाक कोड',
        'preview'                  => 'पूर्व दर्शन',
        'price'                    => 'कीमत',
        'product_id'               => 'उत्पाद आयडी',
        'product_uid'              => 'उत्पाद यूआईडी',
        'product_uuid'             => 'उत्पाद यूयूआईडी',
        'promo_code'               => 'प्रचार कोड',
        'province'                 => 'प्रांत',
        'quantity'                 => 'मात्रा',
        'reason'                   => 'कारण',
        'recaptcha_response_field' => 'रिकैप्चा प्रतिक्रिया क्षेत्र',
        'referee'                  => 'पंच',
        'referees'                 => 'रेफरी',
        'reject_reason'            => 'कारण को अस्वीकार करें',
        'remember'                 => 'याद रखना',
        'restored_at'              => 'पर बहाल',
        'result_text_under_image'  => 'छवि के नीचे परिणाम पाठ',
        'role'                     => 'भूमिका',
        'rule'                     => 'नियम',
        'rules'                    => 'नियम',
        'second'                   => 'दूसरा',
        'sex'                      => 'लिंग',
        'shipment'                 => 'लदान',
        'short_text'               => 'लघु पाठ',
        'size'                     => 'आकार',
        'skills'                   => 'कौशल',
        'slug'                     => 'काउंटर',
        'specialization'           => 'विशेषज्ञता',
        'started_at'               => 'इस समय पर शुरू किया',
        'state'                    => 'राज्य',
        'status'                   => 'स्थिति',
        'street'                   => 'सड़क',
        'student'                  => 'छात्र',
        'subject'                  => 'विषय',
        'tag'                      => 'टैग',
        'tags'                     => 'टैग',
        'teacher'                  => 'शिक्षक',
        'terms'                    => 'शर्तें',
        'test_description'         => 'टेस्ट का विवरण',
        'test_locale'              => 'भाषा',
        'test_name'                => 'टेस्ट का नाम',
        'text'                     => 'लेख',
        'time'                     => 'समय',
        'title'                    => 'शीर्षक',
        'type'                     => 'प्रकार',
        'updated_at'               => 'पर अपडेट किया गया',
        'user'                     => 'उपयोगकर्ता',
        'username'                 => 'उपयोगकर्ता नाम',
        'value'                    => 'कीमत',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'वर्ष',
    ],
];
