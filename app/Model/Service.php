<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    protected $table = "service";
    protected $primaryKey = "admin_id";
    
    protected $fillable = [
        'admin_id', 'email', 'password','created_at','updated_at'
    ];
}