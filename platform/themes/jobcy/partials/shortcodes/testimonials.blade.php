<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="title mb-3">{!! BaseHelper::clean($shortcode->title) !!}</h2>
                    <p class="text-muted">{!! BaseHelper::clean($shortcode->subtitle) !!}</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row justify-content-center">
            <testimonials-component url="{{ route('public.ajax.testimonials') }}"></testimonials-component>
        </div>
        <!--end row-->
    </div>
</section>
