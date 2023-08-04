<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Post;
use Botble\JobBoard\Enums\AccountTypeEnum;
use Botble\JobBoard\Models\Account;
use Botble\JobBoard\Models\Category;
use Botble\JobBoard\Models\Company;
use Botble\JobBoard\Models\Job;
use Botble\Language\Models\LanguageMeta;
use Botble\Menu\Models\Menu as MenuModel;
use Botble\Menu\Models\MenuLocation;
use Botble\Menu\Models\MenuNode;
use Botble\Page\Models\Page;
use Illuminate\Support\Arr;
use Botble\Menu\Facades\Menu;

class MenuSeeder extends BaseSeeder
{
    public function run(): void
    {
        $candidate = Account::query()
            ->where('is_public_profile', true)
            ->where('type', AccountTypeEnum::JOB_SEEKER)
            ->inRandomOrder()
            ->first();

        $data = [
            'en_US' => [
                [
                    'name' => 'Main menu',
                    'slug' => 'main-menu',
                    'location' => 'main-menu',
                    'items' => [
                        [
                            'title' => 'Home',
                            'url' => '/',
                        ],
                        [
                            'title' => 'Jobs',
                            'url' => '/jobs',
                            'children' => [
                                [
                                    'title' => 'Jobs',
                                    'url' => '/jobs',
                                ],
                                [
                                    'title' => 'Job Detail',
                                    'url' => Job::first()->first()->url,
                                ],
                                [
                                    'title' => 'Job External',
                                    'url' => Job::skip(1)->first()->url,
                                ],
                                [
                                    'title' => 'Job Hide Company',
                                    'url' => Job::skip(2)->first()->url,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Categories',
                            'reference_id' => 10,
                            'reference_type' => Page::class,
                            'children' => [
                                [
                                    'title' => 'Categories',
                                    'reference_id' => 10,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Category Detail',
                                    'reference_id' => 1,
                                    'reference_type' => Category::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Pages',
                            'url' => '#',
                            'children' => [
                                [
                                    'title' => 'Companies',
                                    'reference_id' => 11,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Company Detail',
                                    'url' => Company::first()->url,
                                ],
                                [
                                    'title' => 'Candidates Grid',
                                    'reference_id' => 15,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Candidates List',
                                    'reference_id' => 16,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Candidates Details',
                                    'url' => $candidate->url,
                                ],
                                [
                                    'title' => 'Terms Of Use',
                                    'reference_id' => 8,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Terms & Conditions',
                                    'reference_id' => 9,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'FAQ',
                                    'reference_id' => 5,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Cookie Policy',
                                    'reference_id' => 4,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Coming Soon',
                                    'reference_id' => 12,
                                    'reference_type' => Page::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Blog',
                            'reference_id' => 2,
                            'reference_type' => Page::class,
                            'children' => [
                                [
                                    'title' => 'Blog',
                                    'reference_id' => 2,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Post Detail',
                                    'url' => Post::first()->url,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Contact',
                            'reference_id' => 3,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Company',
                    'slug' => 'company',
                    'items' => [
                        [
                            'title' => 'About Us',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Contact Us',
                            'reference_id' => 3,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Services',
                            'reference_id' => 7,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Blog',
                            'reference_id' => 2,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'For Jobs',
                    'slug' => 'for-jobs',
                    'items' => [
                        [
                            'title' => 'Browse Categories',
                            'reference_id' => 10,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Browse Jobs',
                            'url' => '/jobs',
                        ],
                        [
                            'title' => 'Job Details',
                            'url' => Job::first()->url,
                        ],
                        [
                            'title' => 'Saved Jobs',
                            'url' => '/jobs/saved-jobs',
                        ],
                        [
                            'title' => 'Job External',
                            'url' => Job::skip(1)->first()->url,
                        ],
                        [
                            'title' => 'Job Hide Company',
                            'url' => Job::skip(2)->first()->url,
                        ],
                    ],
                ],
                [
                    'name' => 'For Candidates',
                    'slug' => 'for-candidates',
                    'items' => [
                        [
                            'title' => 'Candidates List',
                            'reference_id' => 15,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Candidates Grid',
                            'reference_id' => 16,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Candidates Details',
                            'url' => $candidate->url,
                        ],
                    ],
                ],
                [
                    'name' => 'Support',
                    'slug' => 'support',
                    'items' => [
                        [
                            'title' => 'Terms Of Use',
                            'reference_id' => 8,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Terms & Conditions',
                            'reference_id' => 9,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'FAQ',
                            'reference_id' => 5,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Cookie Policy',
                            'reference_id' => 4,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Coming Soon',
                            'reference_id' => 12,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
            ],
            'vi' => [
                [
                    'name' => 'Menu chinh',
                    'slug' => 'menu-chinh',
                    'location' => 'main-menu',
                    'items' => [
                        [
                            'title' => 'Trang chủ',
                            'url' => '/',
                            'children' => [
                                [
                                    'title' => 'Trang chủ',
                                    'url' => '/',
                                ],
                                [
                                    'title' => 'Trang chủ 2',
                                    'reference_id' => 13,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Trang chủ 3',
                                    'reference_id' => 14,
                                    'reference_type' => Page::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Việc làm',
                            'url' => '/jobs',
                            'children' => [
                                [
                                    'title' => 'Việc làm',
                                    'url' => '/jobs',
                                ],
                                [
                                    'title' => 'Chi tiết việc làm',
                                    'url' => Job::first()->url,
                                ],
                                [
                                    'title' => 'Việc làm bên ngoài',
                                    'url' => Job::skip(1)->first()->url,
                                ],
                                [
                                    'title' => 'Việc làm ẩn công ty',
                                    'url' => Job::skip(2)->first()->url,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Danh mục',
                            'reference_id' => 10,
                            'reference_type' => Page::class,
                            'children' => [
                                [
                                    'title' => 'Tất cả danh mục',
                                    'reference_id' => 10,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Danh mục chi tiết',
                                    'reference_id' => 1,
                                    'reference_type' => Category::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Trang',
                            'url' => '#',
                            'children' => [
                                [
                                    'title' => 'Công ty',
                                    'reference_id' => 11,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Chi tiết công ty',
                                    'url' => Company::first()->url,
                                ],
                                [
                                    'title' => 'Danh sách ứng viên dạng lưới',
                                    'reference_id' => 15,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Danh sách ứng viên dạng danh sách',
                                    'reference_id' => 16,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Chi tiết ứng viên',
                                    'url' => $candidate->url,
                                ],
                                [
                                    'title' => 'Điều khoản sử dụng',
                                    'reference_id' => 8,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Điều khoản và quy định',
                                    'reference_id' => 9,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Hỏi đáp',
                                    'reference_id' => 5,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Chính sách cookie',
                                    'reference_id' => 4,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Sắp ra mắt',
                                    'reference_id' => 12,
                                    'reference_type' => Page::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Blog',
                            'reference_id' => 2,
                            'reference_type' => Page::class,
                            'children' => [
                                [
                                    'title' => 'Blog',
                                    'reference_id' => 2,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Chi tiết bài viết',
                                    'url' => Post::first()->url,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Liên hệ',
                            'reference_id' => 3,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Công ty',
                    'slug' => 'cong-ty',
                    'items' => [
                        [
                            'title' => 'Về chúng tôi',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Liên hệ',
                            'reference_id' => 3,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Dịch vụ',
                            'reference_id' => 7,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Blog',
                            'reference_id' => 2,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'For Jobs',
                    'slug' => 've-cac-cong-viec',
                    'items' => [
                        [
                            'title' => 'Browse Categories',
                            'reference_id' => 10,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Browse Jobs',
                            'url' => '/jobs',
                        ],
                        [
                            'title' => 'Job Details',
                            'reference_id' => 1,
                            'reference_type' => Job::class,
                        ],
                        [
                            'title' => 'Saved Jobs',
                            'url' => '/jobs/saved-jobs',
                        ],
                        [
                            'title' => 'Job External',
                            'reference_id' => 2,
                            'reference_type' => Job::class,
                        ],
                        [
                            'title' => 'Job Hide Company',
                            'reference_id' => 3,
                            'reference_type' => Job::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Dành cho ứng viên',
                    'slug' => 'danh-cho-ung-vien',
                    'items' => [
                        [
                            'title' => 'Candidates List',
                            'reference_id' => 15,
                            'reference_type' => Job::class,
                        ],
                        [
                            'title' => 'Candidates Grid',
                            'reference_id' => 16,
                            'reference_type' => Job::class,
                        ],
                        [
                            'title' => 'Candidates Details',
                            'reference_id' => 2,
                            'reference_type' => Account::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Hổ trợ',
                    'slug' => 'ho-tro',
                    'items' => [
                        [
                            'title' => 'Điều khoản sử dụng',
                            'reference_id' => 8,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Điều khoản và điều kiện',
                            'reference_id' => 9,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Câu hỏi thường gặp',
                            'reference_id' => 5,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Cookie Policy',
                            'reference_id' => 4,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Coming Soon',
                            'reference_id' => 12,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
            ],
        ];

        MenuModel::query()->truncate();
        MenuLocation::query()->truncate();
        MenuNode::query()->truncate();
        LanguageMeta::query()->where('reference_type', MenuModel::class)->delete();
        LanguageMeta::query()->where('reference_type', MenuLocation::class)->delete();

        foreach ($data as $locale => $menus) {
            foreach ($menus as $index => $item) {
                $menu = MenuModel::query()->create(Arr::except($item, ['items', 'location']));

                if (isset($item['location'])) {
                    $menuLocation = MenuLocation::query()->create([
                        'menu_id' => $menu->id,
                        'location' => $item['location'],
                    ]);

                    $originValue = LanguageMeta::query()->where([
                        'reference_id' => $locale == 'en_US' ? 1 : 2,
                        'reference_type' => MenuLocation::class,
                    ])->value('lang_meta_origin');

                    LanguageMeta::saveMetaData($menuLocation, $locale, $originValue);
                }

                foreach ($item['items'] as $menuNode) {
                    $this->createMenuNode($index, $menuNode, $locale, $menu->id);
                }

                $originValue = null;

                if ($locale !== 'en_US') {
                    $originValue = LanguageMeta::query()->where([
                        'reference_id' => $index + 1,
                        'reference_type' => MenuModel::class,
                    ])->value('lang_meta_origin');
                }

                LanguageMeta::saveMetaData($menu, $locale, $originValue);
            }
        }

        Menu::clearCacheMenuItems();
    }

    protected function createMenuNode(int $index, array $menuNode, string $locale, int|string $menuId, int|string $parentId = 0): void
    {
        $menuNode['menu_id'] = $menuId;
        $menuNode['parent_id'] = $parentId;

        if (isset($menuNode['url'])) {
            $menuNode['url'] = str_replace(url(''), '', $menuNode['url']);
        }

        if (Arr::has($menuNode, 'children')) {
            $children = $menuNode['children'];
            $menuNode['has_child'] = true;

            unset($menuNode['children']);
        } else {
            $children = [];
            $menuNode['has_child'] = false;
        }

        $createdNode = MenuNode::query()->create($menuNode);

        if ($children) {
            foreach ($children as $child) {
                $this->createMenuNode($index, $child, $locale, $menuId, $createdNode->id);
            }
        }
    }
}
