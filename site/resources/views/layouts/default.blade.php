<!DOCTYPE html>

<html lang="pt-br">

<head>

    @include('includes.head')

</head>

<body>
@yield('corpo')  


<div class="container">

    <header class="linha">

        @include('includes.header')
    
    </header>

    

    <div id="main" class="row">

        @yield('conteúdo')

</div>

    <footer class="linha">

        @include('includes.footer')

    </footer>
    
</body>

</html>