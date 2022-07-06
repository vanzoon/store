<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;
  use HasSlug;

  public function getSlugOptions(): SlugOptions
  {
    return SlugOptions::create()
      ->generateSlugsFrom('name')
      ->saveSlugsTo('slug');
  }

  protected $fillable = [
    'name',
    'categories_id',
  ];

  protected $hidden = [];


  public function products()
  {
    return $this->hasMany(Product::class, 'categories_id');
  }

  public function child_categories()
  {
    return $this->hasMany(Category::class, 'categories_id');
  }

  public function definition()
  {
  }
}
