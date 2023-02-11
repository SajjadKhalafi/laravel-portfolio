<!doctype html>
<html class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="text-gray-800 dark:text-gray-200 ">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
  <x-layout.navbar />
  {{ $slot }}
  <x-layout.footer />
</div>
@vite('resources/js/app.js')
</body>
</html>
