<?php

namespace App;

use Goodechilde\CommonContact\Traits\HasAddresses;
use Goodechilde\CommonContact\Traits\HasEmailAddresses;
use Goodechilde\CommonContact\Traits\HasPhones;
use Goodechilde\CommonContact\Traits\HasSocialMediaAddresses;
use Goodechilde\GcNotes\Traits\HasNotes;
use Goodechilde\GcTags\Traits\HasTags;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Person extends Model
{
    use SoftDeletes;
    use HasAddresses;
    use HasEmailAddresses;
    use HasPhones;
    use HasSocialMediaAddresses;
    use HasTags;
    use HasNotes;
    use Userstamps;

    protected $guarded = [ 'id' ];
    protected $appends = ['full_name'];

    public function personType()
    {
        return $this->hasOne(PersonType::class, 'id', 'person_type_id');
    }

    public function getFullNameAttribute()
    {
        return trim(
            preg_replace(
                '/\s\s+/',
                ' ',
                $this->title . ' ' .
                $this->first_name . ' ' .
                $this->middle_name . ' ' .
                $this->last_name . ' ' .
                $this->suffix . ' ' .
                $this->professional_title
            )
        );
    }

    public function getDisplayNameAttribute()
    {
        return isset($this->preferred_name) ?
            $this->preferred_name . ' ' . $this->last_name :
            $this->last_name . ' ' . $this->last_name;
    }

}
