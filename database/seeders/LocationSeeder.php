<?php

namespace Database\Seeders;

use Botble\Base\Models\MetaBox;
use Botble\Language\Models\LanguageMeta;
use Botble\Location\Location;
use Botble\Location\Models\City;
use Botble\Location\Models\Country;
use Botble\Location\Models\State;
use Botble\Slug\Models\Slug;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        City::query()->truncate();
        DB::table('cities_translations')->truncate();
        State::query()->truncate();
        DB::table('states_translations')->truncate();
        Country::query()->truncate();
        DB::table('countries_translations')->truncate();

        Slug::query()->whereIn('reference_type', [City::class, State::class, Country::class])->delete();
        MetaBox::query()->whereIn('reference_type', [City::class, State::class, Country::class])->delete();
        LanguageMeta::query()->whereIn('reference_type', [City::class, State::class, Country::class])->delete();

        app(Location::class)->downloadRemoteLocation('us');
    }
}
