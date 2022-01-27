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
    <div class="w-full h-52 text-center">
    <div class="float-right">
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
  </div>
  <div style="clear:both"></div>
  </div>
    <div class="grid gap-x-28 gap-y-10 ml-auto mr-auto" style="width:592px;padding-top:180px;grid-template-columns: 240px 240px; grid-template-rows:240px 240px">
      <div class="shadow-md rounded-lg p-5 pt-24 text-center text-2xl text-white" style="background-color:#eb8628;">
        <a href="{{ route('add') }}">Archiwizacja zgłoszeń</a>  
      </div>
      <div class="shadow-md rounded-lg p-5 pt-24 text-center text-2xl text-white" style="background-color:#eb8628;">
          Filtrowanie zgłoszeń
      </div>
      <div class="shadow-md rounded-lg p-5 pt-24 text-center text-2xl text-white" style="background-color:#eb8628;">
          Usuń zgłoszenia
      </div>
      <div class="shadow-md rounded-lg p-5 pt-24 text-center text-2xl text-white" style="background-color:#eb8628;">
          Zarządzaj kontami
      </div>
    </div>


  </section>
  <x-footer />
</div>

</body>
</html>
