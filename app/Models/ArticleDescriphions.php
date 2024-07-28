<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ArticleDescriphions extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'article_descriphions';


    protected $guarded = [];

    public function getpicturesaattribute()
    {
        return $this->getMedia();
    }


}
