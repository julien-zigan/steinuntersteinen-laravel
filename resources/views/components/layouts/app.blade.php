<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ isset($title) ? $title . ' - Juliens Laravel-Kenntnisse' : 'Juliens Laravel-Kenntnisse'}} </title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="d-flex flex-column  min-vh-100 bg-body-tertiary"
          @if(isset($pageBackground))
              style="background-image: url({{ asset('img/pile-black-wrapped-gifts-copy-space.jpg')  }});
                    background-size: cover;
                    background-position: center;
                    background-attachment: fixed; {{-- Optional: Keeps the image still while scrolling --}}
                    min-height: 100vh;
                    width: 100%;"
          @endif>
        <x-navbar />

        <main class="container py-5 grow ">
        {{ $slot }}
        </main>

         <x-footer />
    </body>
</html>
