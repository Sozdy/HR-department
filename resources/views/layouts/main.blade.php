@extends("app")

@section("layout")

    @include('inc.navbar_new', ["isLogoSmall" => true])

    <div class="layout-content">
        @yield('content')
    </div>

    @include('inc.footer')

@endsection
