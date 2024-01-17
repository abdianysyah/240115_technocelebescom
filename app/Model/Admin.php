<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
    protected $table = "admin";
    protected $primaryKey = "admin_id";
    
    protected $fillable = [
        'admin_id', 'email', 'password','created_at','updated_at'
    ];
}