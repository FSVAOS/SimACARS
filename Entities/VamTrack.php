<?php

namespace Modules\SimACARS\Entities;

use Illuminate\Database\Eloquent\Model;

class VamTrack extends Model
{
    protected $guarded = [];
    public $table = 'vam_tracks';
    public $timestamps = false;
}
