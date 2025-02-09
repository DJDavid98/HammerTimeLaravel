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
        'address'                  => '地址',
        'affiliate_url'            => '附属网址',
        'age'                      => '年龄',
        'amount'                   => '数额',
        'announcement'             => '公告',
        'area'                     => '区域',
        'audience_prize'           => '观众奖',
        'audience_winner'          => 'audience winner',
        'available'                => '可用的',
        'birthday'                 => '生日',
        'body'                     => '身体',
        'city'                     => '城市',
        'company'                  => 'company',
        'compilation'              => '汇编',
        'concept'                  => '概念',
        'conditions'               => '状况',
        'content'                  => '内容',
        'contest'                  => 'contest',
        'country'                  => '国家',
        'cover'                    => '覆盖',
        'created_at'               => '创建于',
        'creator'                  => '创建者',
        'currency'                 => '货币',
        'current_password'         => '当前密码',
        'customer'                 => '顾客',
        'date'                     => '日期',
        'date_of_birth'            => '出生日期',
        'dates'                    => '日期',
        'day'                      => '天',
        'deleted_at'               => '删除于',
        'description'              => '描述',
        'display_type'             => '显示类型',
        'district'                 => '地区',
        'duration'                 => '期间',
        'email'                    => '邮箱',
        'excerpt'                  => '摘要',
        'filter'                   => '过滤',
        'finished_at'              => '完成于',
        'first_name'               => '名',
        'gender'                   => '性别',
        'grand_prize'              => '大奖',
        'group'                    => '组',
        'hour'                     => '时',
        'image'                    => '图像',
        'image_desktop'            => '桌面图像',
        'image_main'               => '主图',
        'image_mobile'             => '移动图像',
        'images'                   => '图片',
        'is_audience_winner'       => '是观众赢家',
        'is_hidden'                => '被隐藏',
        'is_subscribed'            => '已订阅',
        'is_visible'               => '是可见的',
        'is_winner'                => '是赢家',
        'items'                    => '项目',
        'key'                      => '钥匙',
        'last_name'                => '姓',
        'lesson'                   => '课程',
        'line_address_1'           => '线路地址 1',
        'line_address_2'           => '线路地址 2',
        'login'                    => '登录',
        'message'                  => '信息',
        'middle_name'              => '中间名字',
        'minute'                   => '分',
        'mobile'                   => '手机',
        'month'                    => '月',
        'name'                     => '名称',
        'national_code'            => '国家代码',
        'number'                   => '数字',
        'password'                 => '密码',
        'password_confirmation'    => '确认密码',
        'phone'                    => '电话',
        'photo'                    => '照片',
        'portfolio'                => '文件夹',
        'postal_code'              => '邮政编码',
        'preview'                  => '预览',
        'price'                    => '价格',
        'product_id'               => '产品编号',
        'product_uid'              => '产品UID',
        'product_uuid'             => '产品UUID',
        'promo_code'               => '促销代码',
        'province'                 => '省',
        'quantity'                 => '数量',
        'reason'                   => '原因',
        'recaptcha_response_field' => '重复验证码响应字段',
        'referee'                  => '裁判',
        'referees'                 => '裁判员',
        'reject_reason'            => '拒绝理由',
        'remember'                 => '记住',
        'restored_at'              => '恢复于',
        'result_text_under_image'  => '图像下的结果文本',
        'role'                     => '角色',
        'rule'                     => '规则',
        'rules'                    => '规则',
        'second'                   => '秒',
        'sex'                      => '性别',
        'shipment'                 => '运输',
        'short_text'               => '短文本',
        'size'                     => '大小',
        'skills'                   => '技能',
        'slug'                     => '蛞蝓',
        'specialization'           => '专业化',
        'started_at'               => '开始于',
        'state'                    => '状态',
        'status'                   => '地位',
        'street'                   => '街道',
        'student'                  => '学生',
        'subject'                  => '主题',
        'tag'                      => '标签',
        'tags'                     => '标签',
        'teacher'                  => '教师',
        'terms'                    => '条款',
        'test_description'         => '测试说明',
        'test_locale'              => '测试语言环境',
        'test_name'                => '测试名称',
        'text'                     => '文本',
        'time'                     => '时间',
        'title'                    => '标题',
        'type'                     => '类型',
        'updated_at'               => '更新于',
        'user'                     => '用户',
        'username'                 => '用户名',
        'value'                    => '价值',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => '年',
    ],
];
