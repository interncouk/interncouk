<?php

$new_email = 'support@intern.co.uk';
$old_email = 'contactus@Jobcy.com';

return [
    'name' => 'plugins/contact::contact.settings.email.title',
    'description' => 'plugins/contact::contact.settings.email.description',
    'templates' => [
        'notice' => [
            'title' => 'plugins/contact::contact.settings.email.templates.notice_title',
            'description' => 'plugins/contact::contact.settings.email.templates.notice_description',
            'subject' => 'Message sent via your contact form from {{ site_title }}',
            'can_off' => true,
            'variables' => [
                'contact_name' => 'Contact name',
                'contact_subject' => 'Contact subject',
                'contact_email' => 'Contact email',
                'contact_phone' => 'Contact phone',
                'contact_address' => 'Contact address',
                'contact_content' => 'Contact content',
                'old_email' => $old_email,
                'new_email' => $new_email,
            ],
        ],
    ],
];
