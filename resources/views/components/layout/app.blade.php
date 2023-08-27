<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.partials.head')
</head>

<body>
    <div class="container mx-auto">

        @yield('contents')

    </div>

    @stack('scripts')
</body>

</html>
