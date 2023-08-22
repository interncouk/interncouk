@if (is_plugin_active('job-board'))
    @php
        $withCategories = !empty($withCategories);
        $colClass = $withCategories ? 'col-lg-3' : 'col-lg-4';
    @endphp
    {!! Form::open(['url' => JobBoardHelper::getJobsPageURL(), 'method' => 'GET']) !!}
        <div class="registration-form px-lg-3 px-3 bg-transparent">
            <div class="row g-0 d-flex justify-content-center">
                <div class="{{ $colClass }} search-item-btn d-flex justify-content-center">
                    <div class="mt-3 mt-lg-0 h-100 mb-3 mb-lg-0">
                        <button class="btn btn-primary submit-btn w-100" type="submit">
                            <i class="uil uil-search me-1"></i>
                            <span>{{ __('Find Job') }}</span>
                        </button>
                    </div>
                </div><!--end col-->
                <div class="{{ $colClass }} search-item-btn d-flex justify-content-center">
                    <div class="mt-3 mt-lg-0 h-100 mb-3 mb-lg-0">
                            <a href="{{ route('public.account.jobs.create') }}" class="btn btn-primary submit-btn w-100"><i class="mdi mdi-plus"></i> {{ __('Post a job') }}</a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    {!! Form::close() !!}
@endif
