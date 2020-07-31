<?php

namespace App;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
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
    use HasUUID;

    protected $guarded = [ 'id' ];
    protected $uuidFieldName = 'external_id';
    protected $with = ['productType'];
    //

    public function productType()
    {
        return $this->hasOne(ProductType::class, 'id', 'product_types_id');
    }
    /**
     * Get the options for generating the slug.
     * @throws \Exception
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
