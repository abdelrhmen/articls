<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Articles extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'articls';


    protected $guarded = [];

    public function getpicturesaattribute()
    {
        return $this->getMedia();
    }

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
