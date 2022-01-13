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
    <div class="grid gap-x-28 gap-y-10 ml-auto mr-auto" style="width:592px;padding-top:180px;grid-template-columns: 240px 240px; grid-template-rows:240px 240px">
    <x-option text="Dodaj zgłoszenie"/>
    <x-option text="Moje zgłoszenia"/>
    <x-option text="Moje konto"/>
    <x-option text="Lorem ipsum"/>
    </div>


  </section>
  <x-footer />
</div>
  <!--  <h1>Home Page</h1>
    <a href="{{route('login')}}">Login</a>-->

</body>
</html>
