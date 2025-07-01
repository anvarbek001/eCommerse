<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasTranslations;

    protected $fillable = ['name', 'attribute_id', 'product_id'];

    public array $translatable = ['name'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
