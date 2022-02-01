<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',env('APP_NAME'))</title>

    @include('admin.layouts.partials.head')
    @yield('css')
</head>

<body>

<div id="app">

    @include('admin.layouts.partials.sidebar')

    <div id="main" class='layout-navbar'>

        @include('admin.layouts.partials.navbar')

        <div id="main-content">

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>@yield('sub-title','Sub Title Kısmı')</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page"> siliconmade.com</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">

                            @yield('content')

                        </div>
                    </div>
                </section>
            </div>


            @include('admin.layouts.partials.footer')


        </div>
    </div>
</div>

@include('admin.layouts.partials.scripts')
@yield('scripts')
</body>

</html>
