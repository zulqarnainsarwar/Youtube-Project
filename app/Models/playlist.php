<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;

    public $tablle ='tbl_playlists';
    protected $fillable = [
        'chanel_id',
        'playlist_id',
        'title',
        'description',
        'thumbnails',
        'publishedAt'];
}
