<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    
    protected $table = "datas";
     protected $fillable = [
        'date',
        'event',
        'participant',
        'total',
        'average',
        'body',
        'parlor_id'
    ];
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('parlor')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
     public function parlor()
    {
        return $this->belongsTo(Parlor::class);
    }
}

