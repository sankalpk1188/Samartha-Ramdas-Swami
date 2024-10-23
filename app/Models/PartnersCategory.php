<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnersCategory extends Model
{
    use HasFactory;

    protected $table = 'partners_category';

    public function partners(){
        return $this->hasMany(Partners::class, 'partners_cat_id');
    }
}
