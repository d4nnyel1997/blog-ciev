<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;


    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'extract', 'body', 'status', 'user_id', 'category_id'];


    /**
     * @var string[]
     */
    protected  $hidden = ['user_id', 'category_id'];


    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * @return BelongsToMany
     */
    public function  tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    /**
     * @return MorphOne
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
