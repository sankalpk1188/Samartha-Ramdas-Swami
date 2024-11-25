<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPage extends Model
{
    use HasFactory;
    protected $table='detail_page';
    protected $fillable = [
        'pdf',
        'author_id',
        'literature_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relationship with Literature
    public function literature()
    {
        return $this->belongsTo(Literature::class);
    }
}
