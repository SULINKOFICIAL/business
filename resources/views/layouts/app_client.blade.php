<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">
    @include('includes.head')
    <body class="flex h-full demo1 sidebar-fixed header-fixed bg-[#fefefe] dark:bg-coal-500">
        <!--begin::Theme mode setup on page load-->
        @include('includes.config')
        <!--end::Theme mode setup on page load-->
        <!--begin::Page layout-->
        <div class="flex grow">
            <div class="wrapper flex grow flex-col">
                @include('includes.header')
                <main class="grow content pt-5" id="content" role="content">
                    <div class="container-fixed" id="content_container">
                    </div>
                    <div class="container-fixed">
                        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                            <div class="flex flex-col justify-center gap-2">
                                <h1 class="text-xl font-semibold leading-none text-gray-900">
                                    Dashboard
                                </h1>
                                <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                                    Central Hub for Personal Customization
                                </div>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <a class="btn btn-sm btn-light" href="html/demo1/public-profile/profiles/default.html">
                                View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container-fixed">
                        <div class="grid gap-5 lg:gap-7.5">
                            @yield('content')
                        </div>
                    </div>
                </main>
                @include('includes.footer')
            </div>
        </div>
        <!--end::Page layout-->
        <!--begin::Page scripts-->
        <script src="{{ asset('assets/js/core.bundle.js') }}"></script>
        <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/widgets/general.js') }}"></script>
        <script src="{{ asset('assets/js/layouts/demo1.js') }}"></script>
        <!--end::Page scripts-->
    </body>
</html>