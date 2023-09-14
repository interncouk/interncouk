<div class="col-lg-4">
    <div class="footer-item mt-4 mt-lg-0 me-lg-5">
        <span class="mb-4 h4 d-inline-block">Intern.co.uk</span>
        <p>{!! BaseHelper::clean($config['about']) !!}</p>
        @if ($config['social_links'])
            <p>{!! BaseHelper::clean($config['follow_us_heading']) !!}</p>
            <ul class="footer-social-menu list-inline mb-0">
                @foreach((is_string($config['social_links']) ? json_decode($config['social_links'], true) : $config['social_links']) as $socialLink)
                    @if (count($socialLink) == 2 && $socialLink[0]['value'] && $socialLink[1]['value'])
                        <li class="list-inline-item"><a href="{{ $socialLink[0]['value'] }}"><i class="{{ $socialLink[1]['value'] }}"></i></a></li>
                    @endif
                @endforeach
            </ul>
        @endif
    </div>
</div>
