<?php

$new_email = 'support@intern.co.uk';
$old_email = 'contactus@Jobcy.com';

return [
    'name' => 'core/acl::auth.settings.email.title',
    'description' => 'core/acl::auth.settings.email.description',
    'templates' => [
        'password-reminder' => [
            'title' => 'Reset password',
            'description' => 'Send email to user when requesting reset password',
            'subject' => 'Reset Password',
            'can_off' => false,
            'variables' => [
                'reset_link' => 'Reset password link',
                'old_email' => $old_email,
                'new_email' => $new_email,
            ],
        ],
    ],
];
