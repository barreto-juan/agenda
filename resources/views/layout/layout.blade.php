<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SNS | @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .nav-link {
            color: #fff;
            display: block;
            padding: 0.5rem 1rem;
            text-decoration: none;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
        }

        .nav-link:hover{
            color: #d1d1d1;
        }
    </style>
</head>
<body>
<div class="container pt-md-4 pt-2 position-relative">

    <header class="d-flex flex-wrap align-items-center justify-content-center mb-5 mx-auto py-3 px-4 position-relative bg-success shadow-lg" style="border-radius: 1.4rem; ">
        <a href=" {{ route('index') }} " class="nav-link font-weight-bold">SNS - Sistema Nacional de Saúde</a>
        <ul class="nav nav-pills mx-auto align-items-center d-none d-md-inline-flex">
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('pacientes-index') }} ">Pacientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('medicos-index') }} ">Médicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('consultas-index') }} ">Consultas</a>
            </li>
        </ul>
        <a href="#" class="btn btn-outline-light d-none d-lg-inline-block">Login</a>
    </header>

    <h3 class="mb-5">
        <span class="mr-2" style="border-left: 5px green solid;">
        </span>
        @yield('item')
    </h3>


    @yield('content')

</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>