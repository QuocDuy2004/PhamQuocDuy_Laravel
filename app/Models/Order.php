<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['user_id', 'delivery_name', 'delivery_gender', 'delivery_email', 'delivery_phone', 'delivery_address','note','type', 'status', 'created_at'];
}
