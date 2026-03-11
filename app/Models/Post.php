<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{

use HasFactory;
protected $fillable = ['slug', 'title', 'author', 'kategori', 'gambar', 'detail_gambar', 'body', 'published_at'];

protected $casts = ['published_at' => 'datetime'];

protected $with = ['author', 'kategori'];

public function author() : BelongsTo
{
    return $this->belongsTo(User::class);
}

public function kategori() : BelongsTo 
{
return $this->belongsTo(Kategori::class);
}

public function scopeSearchFilter(Builder $query, array $filters) : void
{
    $query->when(isset($filters['search']) ? $filters['search'] : false,
        fn($query, $search) =>
        $query->where('title', 'like', '%' . $search . '%')
    );

    $query->when(isset($filters['kategori']) ? $filters['kategori']: false,
    fn($query, $kategori) =>
    $query->whereHas('kategori', fn($query) => $query->where('slug', $kategori)
    ));

    $query->when(isset($filters['author']) ? $filters['author']: false,
    fn($query, $author) =>
    $query->whereHas('author', fn($query) => $query->where('username', $author)
    ));
}
}
