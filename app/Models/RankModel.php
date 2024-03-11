<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankModel extends Model
{
    protected $table = 'rank';
    public $timestamps = false;
    protected $fillable = [
        'rank',
        'rank_order',
        'category'
    ];
}
