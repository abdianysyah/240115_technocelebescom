<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Users extends Model {
    protected $table = "users";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'name', 'email', 'password','created_at','updated_at'
    ];
}