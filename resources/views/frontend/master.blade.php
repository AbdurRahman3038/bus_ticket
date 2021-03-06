
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>My Trip</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="/css/homeDesign">
<meta name="theme-color" content="#7952b3">


    @stack('css')
  </head>



  <body class="d-flex h-100 text-center text-white" style="background-color: #5279556b;">

<div style="height: 30px;" class="cover-container-fluid w-100 d-flex mx-auto flex-column">

    @include('frontend.partisan.header')







  <main class=" text-dark">

    @yield('content')




    {{-- @include('frontend.content.searchbox') --}}

    {{-- searchbox was here --}}



  </main>

  {{-- footer was here --}}
  @include('frontend.partisan.footer')

</div>



  </body>
</html>
