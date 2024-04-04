<?php

namespace App\Models;

use App\Models\Artikel;
use App\Models\ArtikelYt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function artikel()
    {
        return $this->belongsToMany(Artikel::class, 'artikel_categories', 'category_id', 'artikel_id');
    }
    public function artikelyt()
    {
        return $this->belongsToMany(ArtikelYt::class, 'artikel_yt_categories', 'category_id', 'artikelyt_id');
    }
}
