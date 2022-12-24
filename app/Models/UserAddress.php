<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    public  $table = 'user_domicilio';

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }   
}
