<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parlors extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'businessHours',
        'lottery',
        'adress',
        'lotteryTime',
        'machine',
        'exchange',
        'recomendation',
        'area_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
