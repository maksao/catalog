<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(isset($meta_keywords) && $meta_keywords !='')
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endif
    @if(isset($meta_description) && $meta_description != '')
        <meta name="description" content="{{ $meta_description }}">
    @endisset

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if(isset($meta_title) || isset($page_title))
            @if(isset($meta_title))
                {{ $meta_title }}
            @elseif( isset($page_title) )
                {{ $page_title }}
            @endif
        @else
            {{ env('APP_NAME') }}
        @endif
    </title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/public/others/jquery-toast/jquery.toast.css" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="app">

        <div class="shadow sticky-top">
            <nav class="navbar navbar-expand-md bg-primary navbar-dark">
                <div class="container-fluid px-0">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', '[Нет данных]') }}
                    </a>
                </div>
            </nav>
            <div class="bg-white">

{{--                 Хлебные крошки--}}

                @yield('breadcrumbs')
                @isset($breadcrumbs)
                    {{ $breadcrumbs }}
                @endisset

            </div>
        </div>

        <div class="container-fluid">
            <div class="row wrapper">
                @hasSection('l_side')
                    <nav class="col-xl-2 order-1 sidebar">
                        @yield('l_side')
                    </nav>
                @endif
                <main class="content col order-3 order-xl-2">

                    {{-- Заголовок страницы --}}

                    @isset($page_title)
                        <div class="page-title">{{ $page_title }}</div>
                    @endisset

                    @yield('content')

                </main>
                @hasSection('r_side')
                    <nav class="col-xl-2 order-xl-3 order-2 sidebar">
                        @yield('r_side')
                    </nav>
                @endif
            </div>
        </div>
        @stack('modals')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/others/jquery-toast/jquery.toast.js"></script>

    {{-- Выводим всплывающие уведомления --}}
    @include('components.messages.check_notices')

    @stack('scripts')
    <!-- Scripts END-->
</body>
</html>
