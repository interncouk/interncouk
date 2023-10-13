@if (is_plugin_active('job-board'))
    @php
        $withCategories = !empty($withCategories);
        $colClass = $withCategories ? 'col-lg-3' : 'col-lg-4';
    @endphp
        <div class="registration-form px-lg-3 px-3 bg-transparent">
            <div class="row g-0 d-flex justify-content-center">
                <div class="{{ $colClass }} search-item-btn d-flex justify-content-center">
                    <div class="mt-3 mt-lg-0 h-100 mb-3 mb-lg-0">
                        <button class="btn btn-primary submit-btn w-100" type="submit">
                            <i class="uil uil-user me-1"></i>
                            <a href="#signupInternModal" class="text-white register-intern-button" data-bs-toggle="modal">{{ __('Register as an intern') }}</a>
                        </button>
                    </div>
            </div><!--end row-->
        </div><!--end container-->
@endif
