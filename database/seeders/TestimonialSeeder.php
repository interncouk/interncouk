<?php

namespace Database\Seeders;

use Botble\Base\Models\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Language\Models\LanguageMeta;
use Botble\Slug\Models\Slug;
use Botble\Testimonial\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('testimonials');

        $testimonials = [
            [
                'name' => 'Jeffrey Montgomery',
                'company' => 'Product Manager',
            ],
            [
                'name' => 'Rebecca Swartz',
                'company' => 'Creative Designer',
            ],
            [
                'name' => 'Charles Dickens',
                'company' => 'Store Assistant',
            ],
        ];

        Testimonial::query()->truncate();
        DB::table('testimonials_translations')->truncate();
        Slug::query()->where('reference_type', Testimonial::class)->delete();
        MetaBox::query()->where('reference_type', Testimonial::class)->delete();
        LanguageMeta::query()->where('reference_type', Testimonial::class)->delete();

        foreach ($testimonials as $index => $item) {
            $item['image'] = 'testimonials/' . ($index + 1) . '.png';
            $item['content'] = 'Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless.';

            Testimonial::query()->create($item);
        }

        $translations = [
            [
                'name' => 'Adam Williams',
                'company' => 'Giám đốc Microsoft',
            ],
            [
                'name' => 'Retha Deowalim',
                'company' => 'Giám đốc Apple',
            ],
            [
                'name' => 'Sam J. Wasim',
                'company' => 'Nhà sáng lập Pio',
            ],
            [
                'name' => 'Usan Gulwarm',
                'company' => 'Giám đốc Facewarm',
            ],
        ];

        foreach ($translations as $index => $item) {
            $item['lang_code'] = 'vi';
            $item['testimonials_id'] = $index + 1;

            DB::table('testimonials_translations')->insert($item);
        }
    }
}
