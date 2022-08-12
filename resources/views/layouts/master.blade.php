<!DOCTYPE html>

<html lang="ar" dir="rtl">
<head>
    <title>به عشق یاسر</title>
    @include('layouts.head')
</head>


<body lang="fa" dir="rtl">

<x-navbar />

<main>
    @yield('main')
</main>

<x-footer/>


@include('layouts.scripts')
@yield('script')

</body>
</html>
