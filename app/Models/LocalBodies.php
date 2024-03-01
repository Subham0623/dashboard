<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LocalBodies extends Model
{
    use HasFactory,SoftDeletes  ;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'code',
        'name',
        'type',
        'total_ward',
        'district_id',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'code');
    }
}
