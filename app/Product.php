<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Wildside\Userstamps\Userstamps;

class Product extends Model
{
    use SoftDeletes;
    use HasSlug;
    use Userstamps;

    protected $guarded = [ 'id' ];
    //

    /**
     * Get the options for generating the slug.
     * @throws \Exception
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom([random_int(100, 999), 'name'])
            ->saveSlugsTo('slug');
    }
}
