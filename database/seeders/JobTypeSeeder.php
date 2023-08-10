<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\JobBoard\Models\JobType;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends BaseSeeder
{
    public function run(): void
    {
        JobType::query()->truncate();
        DB::table('jb_job_types_translations')->truncate();

        $data = [
            [
                'name' => 'Full Time',
                'is_default' => 1,
            ],
            [
                'name' => 'Part Time',
            ],
        ];

        foreach ($data as $item) {
            JobType::query()->create($item);
        }
    }
}
