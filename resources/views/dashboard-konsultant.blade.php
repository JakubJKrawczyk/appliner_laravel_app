<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Konsultant
    <form method="POST" action="{{ route('logout-konsultant') }}">
        @csrf

        <x-dropdown-link :href="route('logout-konsultant')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
  </body>
</html>
