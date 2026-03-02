<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{

use HasFactory;
protected $fillable = ['slug', 'title', 'author', 'kategori', 'gambar', 'detail_gambar', 'body', 'published_at'];

protected $casts = ['published_at' => 'datetime'];

public function author() : BelongsTo
{
    return $this->belongsTo(User::class);
}

public function kategori() : BelongsTo 
{
return $this->belongsTo(Kategori::class);
}
}
