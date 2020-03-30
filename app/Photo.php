<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

	protected $uploads = '/images/'; //For not putting the hard coded image path

    protected $fillable = ['file'];

    public function getFileAttribute($photo) //For not putting the hard coded image path
  {
	return $this->uploads . $photo;
  }
}


