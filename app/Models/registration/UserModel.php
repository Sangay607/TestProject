<?php

namespace App\Models\registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_user_master";
    protected $fillable =  [
        'full_name',   
        'contact_no',   
        'email',
        'password',        
        'role_id',      
        'created_at',   
        'created_by',
        'updated_at',
        'updated_by',  
    ];
}
