<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    
    protected $table = "members";
    
    protected $fillable = [
        'name',
        'email',
    ];
    public function trainers(){
        return $this->hasOne(Trainer::class);
    }
    public function membership(){
        return $this->hasOne(Membership::class);
    }
        
    
}
