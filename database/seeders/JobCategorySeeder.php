<?php

namespace Database\Seeders;

use Botble\Base\Models\MetaBox as MetaBoxModel;
use Botble\Base\Supports\BaseSeeder;
use Botble\JobBoard\Models\Category;
use Botble\Slug\Models\Slug;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Botble\Base\Facades\MetaBox;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Str;

class JobCategorySeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('job-categories');

        Category::query()->truncate();
        DB::table('jb_categories_translations')->truncate();
        MetaBoxModel::query()->where('reference_type', Category::class)->delete();
        Slug::query()->where('reference_type', Category::class)->delete();

        $data = [
            'IT & Software',
            'Technology',
            'Government',
            'Accounting / Finance',
            'Construction / Facilities',
            'Tele-communications',
            'Design & Multimedia',
            'Human Resource',
            'Consumer Packaged Goods (CPG)',
            'Manufacturing',
            'Retail',
            'Distribution/Logistics',
            'Supply Chain Operations',
            'Healthcare & Medical',
            'Procurement / Sourcing',
            'Information Technology (IT)',
            'Sales/Business Development',
            'Legal & Professional Services',
            'Life Sciences & Healthcare',
        ];

        $dataTrans = [
            'vi' => [
                'IT & Phần mềm',
                'Công nghệ',
                'Government',
                'Kế toán / Tài chính',
                'Xây dựng / Cơ sở vật chất',
                'Truyền thông qua điện thoại',
                'Thiết kế & Multimedia',
                'Nhân sự',
                'Consumer Packaged Goods (CPG)',
                'Sản xuất',
                'Bán lẻ',
                'Phân phối / Vận chuyển',
                'Quản lý chuỗi cung ứng',
                'Y tế & Y dược',
                'Mua hàng / Nguồn cung ứng',
                'Công nghệ thông tin (IT)',
                'Kinh doanh / Phát triển doanh nghiệp',
                'Pháp lý & Dịch vụ công chức',
                'Khoa học công nghệ & Y dược',
            ],
        ];

        foreach ($data as $index => $item) {
            $category = Category::query()->create([
                'name' => $item,
                'order' => $index,
                'is_featured' => $index < 8,
            ]);

            if ($index < 8) {
                MetaBox::saveMetaBoxData($category, 'icon_image', 'job-categories/' . ($index + 1) . '.png');
            }

            Slug::query()->create([
                'reference_type' => Category::class,
                'reference_id' => $category->id,
                'key' => Str::slug($category->name),
                'prefix' => SlugHelper::getPrefix(Category::class),
            ]);

            DB::table('jb_categories_translations')->insert([
                'lang_code' => 'vi',
                'jb_categories_id' => $category->id,
                'name' => Arr::get($dataTrans, 'vi.' . $index, $item),
            ]);
        }
    }
}
