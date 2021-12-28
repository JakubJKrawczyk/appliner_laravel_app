<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>


<body style="background-color:#393939">
<x-nav logo="false"/>
<div class="float-left w-4/5">
  <section class="bg-white relative" style="height:1124px;font-family: 'Ubuntu', sans-serif;">
  


  </section>
  <x-footer />
</div>
  <!--  <h1>Home Page</h1>
    <a href="{{route('login')}}">Login</a>-->

</body>
</html>
