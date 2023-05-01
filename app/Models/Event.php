<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
  /**
   * Get the comments for the blog post.
   */
  public function workshops(): HasMany
  {
    return $this->hasMany(Workshop::class);
  }
}
