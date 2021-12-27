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
<x-nav/>
<div class="float-left w-4/5">
  <section class="bg-white relative" style="height:1124px;font-family: 'Ubuntu', sans-serif;">
    <div class="absolute top-8 left-0 font-extrabold text-5xl" style="color:#393939">liner</div>
    <div class="w-96 ml-auto mr-auto">
      <h1 class="text-center font-bold pt-40 text-2xl">Title</h1>
      <p class="text-justify leading-6">
        — Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="grid grid-rows-2 grid-cols-2 gap-x-28 gap-y-10 ml-auto mr-auto" style="width:800px;margin-top:180px;grid-template-columns: 330px 330px; grid-template-rows:200px 200px">
      <div class="shadow-md rounded-lg p-5">— Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat.
      </div>
      <div class="shadow-md rounded-lg p-5">— Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat.
      </div>
      <div class="shadow-md rounded-lg p-5">— Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat.
      </div>
      <div class="shadow-md rounded-lg p-5">— Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat.
      </div>
    </div>
  </section>
  <x-footer />
</div>
  <!--  <h1>Home Page</h1>
    <a href="{{route('login')}}">Login</a>-->

</body>
</html>
