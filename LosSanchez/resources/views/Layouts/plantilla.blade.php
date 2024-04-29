<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/appR.css"/>
    <link rel="stylesheet" href="../../css/main.css" />
    <link rel="stylesheet" href="../../css/bootstrap-icons.min.css" />
    <title>Los Sanchez</title>
</head>
<body class="d-flex flex-column min-vh-100">
   <header>
    @include('Layouts.Header')
        </header>
        <section>
            @yield('content')
        </section>
        <footer class="footer mt-auto">
        @include('Layouts.Footer')
        </footer>
    <script src="https://kit.fontawesome.com/a0e3249e3f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../js/registroCliente.js"></script>
    <script>
      function sesionToggle() {
        const toggleMenu = document.querySelector(".sesion");
        toggleMenu.classList.toggle("active");
      }
    </script>
</body>
</html>
