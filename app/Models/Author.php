<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table="author";
    protected $fillable = ['marathi_title','hindi_title','english_title'];
    public function mrDetailPages()
    {
        return $this->hasMany(DetailPage::class, 'mr_author_id');
    }

    public function hiDetailPages()
    {
        return $this->hasMany(DetailPage::class, 'hi_author_id');
    }

    public function enDetailPages()
    {
        return $this->hasMany(DetailPage::class, 'en_author_id');
    }
    public function detailPages()
    {
        return $this->hasMany(DetailPage::class, 'literature_id');
    }
    
}
