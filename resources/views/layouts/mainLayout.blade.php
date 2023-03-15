<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/js/app.js')

        <script>
            function confirmDelete () {
                confirm("Vuoi procedere con l'eliminazione?");
            }
        </script>

        <title>@yield('page_name') Laravel-dc-comics</title>

        
    </head>
    <body>

        <header>
            HEADER
        </header>

        <main>
            @yield('page_content')
        </main>

        <footer>
            FOOTER
        </footer>
    </body>
</html>
