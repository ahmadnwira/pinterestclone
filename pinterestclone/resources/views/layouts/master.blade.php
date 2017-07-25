<!DOCTYPE html>
<html>
<head>
    <title>pinterestclone |by Ahmed Salah</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    @include('layouts/nav')
    @include('layouts/header')
    
    <div class="container">
        @yield('content')
    </div>
    
    @include('layouts/footer')

 <script src="/js/jquery.js"></script>
 <script src="/js/bootstrap.js"></script>
 <script src="/js/script.js"></script>

</body>
</html>