<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Sistema de Estudos</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    
    <div class="container">
        
        <nav class="navbar">
            
            <h2>Sistema de Estudos</h2>
            
            <div class="menu">
                
                <a href="/dashboard">
                    Dashboard
                </a>

                <a href="/subjects">
                    Matérias
                </a>

                <a href="/studies">
                    Estudos
                </a>

            </div>

        </nav>

        @yield('content')

    </div>

</body>

</html>