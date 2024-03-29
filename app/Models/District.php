<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class District extends Model
{
    use HasFactory,SoftDeletes  ;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'code',
        'name',
        'province_id',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
