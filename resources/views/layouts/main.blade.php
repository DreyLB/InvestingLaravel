<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>

        <!-- Fonte google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body >
      <body>
        <header class="py-3 header bg-dark">
          <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0 text-white">Investing</h1>
            <nav>
              <ul class="nav">
                <li class="nav-item"><a class="nav-link " href="/">DashBoard</a></li>
                <li class="nav-item"><a class="nav-link " href="/carteira">Carteira</a></li>
                <li class="nav-item"><a class="nav-link " href="/dividendos">Dividendos</a></li>
                <li class="nav-item"><a class="nav-link " href="/transacoes">Compra/Venda</a></li>
              </ul>
            </nav>
          </div>
        </header>
        
      
        <main class="container mt-4">
          @yield('content')
        </main>
      
        <footer class="text-center text-white py-3 mt-4">
          <p>© 2024 Meu Site. Todos os direitos reservados.</p>
        </footer>
      
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>


