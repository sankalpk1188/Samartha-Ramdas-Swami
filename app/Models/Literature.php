<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Literature extends Model
{
    use HasFactory;
    protected $table='literature';
    protected $fillable = ['marathi_title'];
    public function detailPages()
    {
        return $this->hasMany(DetailPage::class, 'author_id');
    }
}
