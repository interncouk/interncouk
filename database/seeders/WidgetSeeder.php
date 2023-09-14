<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Widget\Models\Widget as WidgetModel;
use Botble\Theme\Facades\Theme;

class WidgetSeeder extends BaseSeeder
{
    public function run(): void
    {
        WidgetModel::query()->truncate();

        $data = [
            'en_US' => [
                [
                    'widget_id' => 'NewsletterWidget',
                    'sidebar_id' => 'pre_footer_sidebar',
                    'position' => 0,
                    'data' => [
                        'id' => 'NewsletterWidget',
                        'title' => 'Get New Jobs Notification!',
                        'subtitle' => 'Subscribe & get all related jobs notification.',
                        'image' => 'general/newsletter-image.png',
                    ],
                ],
                [
                    'widget_id' => 'SiteInfoWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 0,
                    'data' => [
                        'id' => 'SiteInfoWidget',
                        'name' => 'Intern.co.uk',
                        'about' => 'It is a long established fact that a reader will be of a page reader will be of at its layout.',
                        'follow_us_heading' => 'Follow us on:',
                        'social_links' => json_encode([
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.facebook.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-facebook',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.twitter.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-twitter',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.instagram.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-instagram',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.pinterest.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-pinterest',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.youtube.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-youtube',
                                ],
                            ],
                        ]),
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 1,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'Company',
                        'menu_id' => 'company',
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 2,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'For Jobs',
                        'menu_id' => 'for-jobs',
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 3,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'For Candidates',
                        'menu_id' => 'for-candidates',
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 4,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'Support',
                        'menu_id' => 'support',
                    ],
                ],

                [
                    'widget_id' => 'BlogSearchWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 1,
                    'data' => [
                        'id' => 'BlogSearchWidget',
                        'name' => 'Search',
                    ],
                ],
                [
                    'widget_id' => 'BlogCategoriesWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 2,
                    'data' => [
                        'id' => 'BlogCategoriesWidget',
                        'name' => 'Categories',
                    ],
                ],
                [
                    'widget_id' => 'BlogPostsWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 3,
                    'data' => [
                        'id' => 'BlogPostsWidget',
                        'type' => 'popular',
                        'name' => 'Popular Posts',
                    ],
                ],
                [
                    'widget_id' => 'BlogTagsWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 4,
                    'data' => [
                        'id' => 'BlogTagsWidget',
                        'name' => 'Popular Tags',
                    ],
                ],

            ],
            'vi' => [
                [
                    'widget_id' => 'NewsletterWidget',
                    'sidebar_id' => 'pre_footer_sidebar',
                    'position' => 0,
                    'data' => [
                        'id' => 'NewsletterWidget',
                        'title' => 'Nhận thông báo việc làm mới!',
                        'subtitle' => 'Đăng ký và nhận tất cả các công việc liên quan thông báo.',
                        'image' => 'general/newsletter-image.png',
                    ],
                ],
                [
                    'widget_id' => 'SiteInfoWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 0,
                    'data' => [
                        'id' => 'SiteInfoWidget',
                        'name' => 'Intern.co.uk',
                        'about' => 'It is a long established fact that a reader will be of a page reader will be of at its layout.',
                        'follow_us_heading' => 'Theo dõi chúng tôi tại:',
                        'social_links' => json_encode([
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.facebook.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-facebook',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.twitter.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-twitter',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.instagram.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-instagram',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.pinterest.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-pinterest',
                                ],
                            ],
                            [
                                [
                                    'key' => 'url',
                                    'value' => 'https://www.youtube.com/',
                                ],
                                [
                                    'key' => 'icon',
                                    'value' => 'mdi mdi-youtube',
                                ],
                            ],
                        ]),
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 1,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'Công ty',
                        'menu_id' => 'company',
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 2,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'For Jobs',
                        'menu_id' => 'for-jobs',
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 3,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'Dành cho ứng viên',
                        'menu_id' => 'for-candidates',
                    ],
                ],
                [
                    'widget_id' => 'CustomMenuWidget',
                    'sidebar_id' => 'footer_sidebar',
                    'position' => 4,
                    'data' => [
                        'id' => 'CustomMenuWidget',
                        'name' => 'Hổ trợ',
                        'menu_id' => 'support',
                    ],
                ],

                [
                    'widget_id' => 'BlogSearchWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 1,
                    'data' => [
                        'id' => 'BlogSearchWidget',
                        'name' => 'Tìm kiếm',
                    ],
                ],
                [
                    'widget_id' => 'BlogCategoriesWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 2,
                    'data' => [
                        'id' => 'BlogCategoriesWidget',
                        'name' => 'Danh mục',
                    ],
                ],
                [
                    'widget_id' => 'BlogPostsWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 3,
                    'data' => [
                        'id' => 'BlogPostsWidget',
                        'type' => 'popular',
                        'name' => 'Bài viết phổ biến',
                    ],
                ],
                [
                    'widget_id' => 'BlogTagsWidget',
                    'sidebar_id' => 'primary_sidebar',
                    'position' => 4,
                    'data' => [
                        'id' => 'BlogTagsWidget',
                        'name' => 'Thẻ mới nhất',
                    ],
                ],
            ],
        ];

        $theme = Theme::getThemeName();

        foreach ($data as $locale => $widgets) {
            foreach ($widgets as $item) {
                $item['theme'] = $locale == 'en_US' ? $theme : ($theme . '-' . $locale);
                WidgetModel::query()->create($item);
            }
        }
    }
}
