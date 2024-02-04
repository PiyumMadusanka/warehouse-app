<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_code', 'pro_name', 'pro_type', 'pro_qty_per_box', 'pro_lbl_type', 'pro_weight', 'pro_weight_unit', 'note, status'
    ];
}
