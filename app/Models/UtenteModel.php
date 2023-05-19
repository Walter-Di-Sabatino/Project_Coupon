<?php

namespace App\Models;

use App\Models\User;
use App\Models\Resources\Buono;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtenteModel 
{
    public function getInfoUser($username){
        return User::where('username', $username)->get();
    }
    
    public function setNewDatiUser($username, $password = "", $nome = "", $cognome = "", $genere = "", $dataNascita = "1900-01-01", $email="", $telefono="", $ruolo=""){
            
        if ($password!=""){ 
            User::where('username', $username)->update([
                'password' => $password
            ]);
        }
        
        if ($nome!=""){ 
            User::where('username', $username)->update([
                'nome' => $nome
            ]);
        }
        
        if ($cognome!=""){ 
            User::where('username', $username)->update([
                'cognome' => $cognome
            ]);
        }
        
        if ($genere!=""){ 
            User::where('username', $username)->update([
                'genere' => $genere
            ]);
        }
        
        if ($dataNascita!=""){ 
            User::where('username', $username)->update([
                'dataNascita' => $dataNascita
            ]);
        }
      
        if ($email!=""){ 
            User::where('username', $username)->update([
                'email' => $email
            ]);
        }
        
        
        if ($telefono!=""){ 
            User::where('username', $username)->update([
                'telefono' => $telefono
            ]);
        }
        
        if ($ruolo!=""){ 
            User::where('username', $username)->update([
                'ruolo' => $ruolo
            ]);
        }
    }
    
    public function getCouponUser($usernameUser) {
        return Buono::where('userRich', $usernameUser)->get();
    }

    public function getAllStaff() {
        $staff = User::where('ruolo','staff')->get();
        return $staff;
    }
    
}
