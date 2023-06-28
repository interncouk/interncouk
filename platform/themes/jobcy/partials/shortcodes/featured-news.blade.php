<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-5">
                    <h2 class="title mb-3">{!! BaseHelper::clean($shortcode->title) !!}</h2>
                    <p class="text-muted">{!! BaseHelper::clean($shortcode->subtitle) !!}</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <featured-news-component url="{{ route('public.ajax.featured-posts') }}"></featured-news-component>
    </div>
    <!--end container-->
</section>
