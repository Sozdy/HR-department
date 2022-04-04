@extends("app")

@section("layout")

    <div class="layout-content">
        @yield('content')
    </div>

    @include('inc.footer')

@endsection
