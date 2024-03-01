<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{

    use HasFactory, SoftDeletes  ;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'user_id',
        'request_type',
        'ip_address',
        'geo_location',
        'description',
        'activity_type',
        'url',
        'changed_id',
        'old_data',
        'new_data',
        'deleted_data',
    ];

    protected $casts = [
        'geo_location' => 'json',
        'changed_id' => 'json',
        'old_data' => 'json',
        'new_data' => 'json',
        'deleted_data' => 'json',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Define the user relationship
    }
}
