<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table="author";
    protected $fillable = ['marathi_title'];
    public function detailPages()
    {
        return $this->hasMany(DetailPage::class, 'literature_id');
    }
}
