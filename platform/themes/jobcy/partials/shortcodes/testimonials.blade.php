<section class="happy-section bg-theme">
    <div class="theme-container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h2 class="section-main-title mb-3">{!! BaseHelper::clean($shortcode->title) !!}</h2>
                    <p class="text-normal mx-auto happy-section-explanation">{!! BaseHelper::clean($shortcode->subtitle) !!}</p>
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
    <div class="section-box">
        <div class="theme-container">
            <ul class="list-partners">
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay="0s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/samsung.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/google.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/facebook.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/pinterest.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".4s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/avaya.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".5s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/forbes.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/avis.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/nielsen.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">
                    <a href="#">
                        <figure><img alt="Intern.co.uk" src="{{ asset('storage/logos/doordash.svg') }}" /></figure>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
