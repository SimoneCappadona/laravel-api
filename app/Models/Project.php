<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    

    public function getAbstract($n_chars = 30)
    {
        
    }
    public function type()
    {
       
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technologies()
    {
        

    }
}