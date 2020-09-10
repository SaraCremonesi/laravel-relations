<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  protected $fillable = [
  'title',
  'minutes',
  'album_id'
  ];

  protected function album() {
    return $this->belongsTo('App\Album');
  }
}
