<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = ['name', 'link', 'sort_order', 'parent_id', 'type', 'position','table_id', 'status', 'created_by'];
}
