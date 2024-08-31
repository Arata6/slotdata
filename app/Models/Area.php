<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    public function parlors()   
    {
        return $this->hasMany(Parlor::class);  
    }
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function getByArea(int $limit_count = 5)
    {
         return $this->parlors()->with('Area')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
