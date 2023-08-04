@if (is_plugin_active('newsletter'))

    @if (!is_current_path('/'))
    <div class="section-box mt-5">
        <div class="theme-container">
            <ul class="list-partners">
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay="0s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/samsung.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/google.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/facebook.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/pinterest.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".4s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/avaya.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".5s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/forbes.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/avis.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/nielsen.svg') }}" /></figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">
                    <a href="#">
                        <figure><img alt="jobhub" src="{{ asset('storage/logos/doordash.svg') }}" /></figure>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @endif
    <div class="section-box my-5">
        <div class="theme-container">
            <div class="box-newsletter">
                <h5 class="text-md-newsletter">Sign up to get</h5>
                <h6 class="text-lg-newsletter">the latest jobs</h6>
                <div class="box-form-newsletter mt-30">
                    <form class="form-newsletter" method="post" action="{{ route('public.newsletter.subscribe') }}">
                        @csrf
                        <input type="email" name="email" class="input-newsletter" value="" placeholder="Enter your email" />
                        <button class="btn btn-default font-heading icon-send-letter" type="submit">{{ __('Subscribe') }}</button>
                    </form>
                </div>
            </div>
            <div class="box-newsletter-bottom">
                <div class="newsletter-bottom"></div>
            </div>
        </div>
    </div>
    <!-- <section class="bg-subscribe">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="text-center text-lg-start">
                        <h2 class="text-white h4">{{ $config['title'] }}</h2>
                        <p class="text-white-50 mb-0">{{ $config['subtitle'] }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4 mt-lg-0">
                        <form class="subscribe-form newsletter-form" method="post" action="{{ route('public.newsletter.subscribe') }}">
                            @csrf
                            <div class="input-group justify-content-center justify-content-lg-end">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('Enter your email') }}">
                                <button class="btn btn-primary" type="submit">{{ __('Subscribe') }}</button>
                            </div>
                            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                <div class="input-group justify-content-center justify-content-lg-end mt-3">
                                    {!! Captcha::display() !!}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if ($config['image'])
            <div class="email-img d-none d-lg-block text-end" style="max-width: 30%">
                <img src="{{ RvMedia::getImageUrl($config['image']) }}" alt="image" class="img-fluid">
            </div>
        @endif
    </section> -->
@endif

