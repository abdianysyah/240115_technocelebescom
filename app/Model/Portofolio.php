<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model {
    protected $table = "portofolio";
    protected $primaryKey = "portofolio_id";
    
    protected $fillable = [
        'title', 'category', 'picture','content','created_at','updated_at'
    ];
}