<?php

namespace Theme\Jobcy\Http\Controllers;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\JobBoard\Http\Resources\CompanyResource;
use Botble\JobBoard\Repositories\Interfaces\CompanyInterface;
use Botble\Location\Repositories\Interfaces\CityInterface;
use Botble\Testimonial\Repositories\Interfaces\TestimonialInterface;
use Botble\Theme\Http\Controllers\PublicController;
use Illuminate\Http\Request;
use Theme\Jobcy\Http\Resources\CityResource;
use Theme\Jobcy\Http\Resources\PostResource;
use Theme\Jobcy\Http\Resources\TestimonialResource;

class JobcyController extends PublicController
{
    public function ajaxGetTestimonials(
        Request $request,
        BaseHttpResponse $response,
        TestimonialInterface $testimonialRepository
    ) {
        if (! $request->ajax() || ! $request->wantsJson()) {
            return $response->setNextUrl(route('public.index'));
        }

        $testimonials = $testimonialRepository->allBy(['status' => BaseStatusEnum::PUBLISHED]);

        return $response->setData(TestimonialResource::collection($testimonials));
    }

    public function ajaxGetFeaturedPosts(Request $request, BaseHttpResponse $response)
    {
        if (! $request->ajax() || ! $request->wantsJson()) {
            return $response->setNextUrl(route('public.index'));
        }

        $posts = app(PostInterface::class)->getFeatured(3);

        return $response
            ->setData(PostResource::collection($posts))
            ->toApiResponse();
    }

    public function ajaxGetFeaturedCompanies(Request $request, BaseHttpResponse $response)
    {
        if (! $request->ajax() || ! $request->wantsJson()) {
            return $response->setNextUrl(route('public.index'));
        }

        $companyIds = (array)$request->input('companies', []);

        $companies = app(CompanyInterface::class)->getModel()
            ->where([
                'status' => BaseStatusEnum::PUBLISHED,
                'is_featured' => 1,
            ])
            ->whereIn('id', $companyIds)
            ->orderBy('created_at', 'desc')
            ->get();

        $images = (array)$request->input('images', []);

        if (count($images)) {
            foreach ($companies as &$company) {
                if (! empty($images[$company->id])) {
                    $company->logo = $images[$company->id];
                }
            }
        }

        return $response
            ->setData(CompanyResource::collection($companies))
            ->toApiResponse();
    }

    public function ajaxGetCities(Request $request, CityInterface $cityRepository, BaseHttpResponse $response)
    {
        if (! $request->ajax() || ! $request->wantsJson()) {
            return $response->setNextUrl(route('public.index'));
        }

        $keyword = $request->input('k');

        $cities = $cityRepository->filters($keyword, null, ['state']);

        return $response->setData(CityResource::collection($cities));
    }
}
