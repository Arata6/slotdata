<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parlor extends Model
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
        
       return $this::with('area')->orderBy('updated_at', 'DESC')->paginate($limit_count);
       
    }
    
    public function getDataWithParlor(int $limit_count = 10)
    {
        return $this::with('datas')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    
    
    public function datas()   
    {
        return $this->hasMany(Data::class);  
    }
    
    public function getByParlor(int $limit_count = 5)
    {
         return $this->datas()->with('parlors')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
