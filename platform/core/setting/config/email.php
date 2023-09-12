<?php

$new_email = 'support@intern.co.uk';
$old_email = 'contactus@Jobcy.com';

return [
    'name' => 'core/setting::setting.email.template_title',
    'description' => 'core/setting::setting.email.template_description',
    'templates' => [
        'header' => [
            'title' => 'core/setting::setting.email.template_header',
            'description' => 'core/setting::setting.email.template_header_description',
        ],
        'footer' => [
            'title' => 'core/setting::setting.email.template_footer',
            'description' => 'core/setting::setting.email.template_footer_description',
        ],
        'variables' => [
            'old_email' => $old_email,
            'new_email' => $new_email,
        ],
    ],
];
