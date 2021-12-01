<?php

namespace Database\Seeders;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Konsultant;
class CreateKonsultantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
       {
           $user = [
               [
                  'email'=>'admin@itsolutionstuff.com',
                  'Imie'=>'Piotr',
                  'Nazwisko'=>'Kowalski',
                  'Telefon'=>'666444367',
                   'is_admin'=>'1',
                  'password'=> '123456',
               ],
               [
                  'email'=>'user@itsolutionstuff.com',
                  'Imie'=>'Jan',
                  'Nazwisko'=>'Nowak',
                  'Telefon'=>'555444367',
                   'is_admin'=>'0',
                  'password'=> '123456',
               ],
           ];

           foreach ($user as $key => $value) {
               Konsultant::create($value);
           }
       }
}
