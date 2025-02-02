<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const BORRADOR = 1;
    public const PUBLICADO = 2;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(Post::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function scopeBorrador($query)
    {
        return $query->where('status', self::BORRADOR);
    }

    public function scopePublicado($query)
    {
        return $query->where('status', self::PUBLICADO);
    }

    public function scopeNoEste($query, $id)
    {
        return $query->where('id', '!=', $id);
    }
}
