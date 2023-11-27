<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Sifta Pack</title>
</head>
<body>
    <x-navbar />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
    <script src="https://kit.fontawesome.com/041fff5644.js" crossorigin="anonymous"></script>
</body>
</html>
