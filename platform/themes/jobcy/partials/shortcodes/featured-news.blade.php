<section class="bg-white">
    <div class="theme-container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-left mb-5">
                    <h2 class="section-main-title mb-3">From blog</h2>
                    <p class="text-muted">Latest News & Events</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <featured-news-component url="{{ route('public.ajax.featured-posts') }}"></featured-news-component>
    </div>
    <!--end container-->
</section>
