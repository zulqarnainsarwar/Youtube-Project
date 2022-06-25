<?php

namespace App\Http\Controllers\ApI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\playlist;

class YoutubeController extends Controller
{
    //
    public function getplaylist(){

        $key = env('YOUTUBE_KEY');
        $base_url = env('BASE_URL');
        $channel_id = env('CHANNEL_ID');
        $maxResult = 1000;
       $api_url= $base_url."playlists?order=date&part=snippet&channelId=".$channel_id."maxResults=".$maxResult."&key=".$key;
        $response = Http::get($api_url);
       return $response->body();
    }
}
