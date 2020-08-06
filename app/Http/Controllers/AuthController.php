<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me() 
    {
        return 
        [
          "NIS" => "3103118089",
          "Name" => "Mochamad Hakim Haiman",
          "Gender" => "Laki-Laki",
          "Phone" => "082138913460",
          "Klass" => "XII RPL 3",
        ];
    }
    
}