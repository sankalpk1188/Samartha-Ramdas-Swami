<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Literature extends Model
{
    use HasFactory;
    protected $table='literature';   protected $fillable = ['marathi_title', 'hindi_title', 'english_title'];
    public function mrDetailPages()
    {
        return $this->hasMany(DetailPage::class, 'mr_literature_id');
    }

    public function hiDetailPages()
    {
        return $this->hasMany(DetailPage::class, 'hi_literature_id');
    }

    public function enDetailPages()
    {
        return $this->hasMany(DetailPage::class, 'en_literature_id');
    }
    public function detailPages()
    {
        return $this->hasMany(DetailPage::class, 'author_id');
    }
}
