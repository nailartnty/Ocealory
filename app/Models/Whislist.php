<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whislist extends Model
{
    use HasFactory;

    protected $table = 'whislists';
    
    protected $fillable = [
        'user_id',
        'product_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
