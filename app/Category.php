<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    protected $fillable = ['name', 'icon', 'order'];

    public array $translatable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
