<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPage extends Model
{
    use HasFactory;
    protected $table='detail_page';
    protected $fillable = [
        'mr_pdf_file',
        'hi_pdf_file',
        'en_pdf_file',
        'mr_author_id',
        'hi_author_id',
        'en_author_id',
        'mr_literature_id',
        'hi_literature_id',
        'en_literature_id',
    ];

    public function mr_author()
    {
        return $this->belongsTo(Author::class, 'mr_author_id');
    }

    public function hi_author()
    {
        return $this->belongsTo(Author::class, 'hi_author_id');
    }

    public function en_author()
    {
        return $this->belongsTo(Author::class, 'en_author_id');
    }

    public function mr_literature()
    {
        return $this->belongsTo(Literature::class, 'mr_literature_id');
    }

    public function hi_literature()
    {
        return $this->belongsTo(Literature::class, 'hi_literature_id');
    }

    public function en_literature()
    {
        return $this->belongsTo(Literature::class, 'en_literature_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

 
    public function literature()
    {
        return $this->belongsTo(Literature::class);
    }
}
