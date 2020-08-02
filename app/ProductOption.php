<?php

namespace App;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Wildside\Userstamps\Userstamps;

class ProductOption extends Model
{
    use SoftDeletes;
    use HasSlug;
    use Userstamps;
    use HasUUID;

    protected $guarded = [ 'id' ];
    protected $uuidFieldName = 'external_id';
    //
    public function product()
    {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['product_id', 'key'])
            ->saveSlugsTo('slug');
    }
}
