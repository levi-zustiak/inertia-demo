<!DOCTYPE html>
<html class="h-full bg-gray-200">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @viteReactRefresh
    @vite(['resources/js/app.jsx', 'resources/css/app.css'])
    @inertiaHead
    @routes
</head>
<body class="font-sans antialiased leading-none text-gray-800">

@inertia

</body>
</html>
