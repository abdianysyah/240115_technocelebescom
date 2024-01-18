<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    protected $table = "admin";
    protected $primaryKey = "admin_id";
    
    protected $fillable = [
        'C_id', 'email', 'subject','pesan','created_at','updated_at'
    ];
}