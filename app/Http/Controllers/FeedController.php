<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
class FeedController extends Controller
{
   public function demo() {
    $feed = \Feeds::make('http://website.com/rss', true); // if RSS Feed has invalid mime types, 
    $data = array(
      'title'     => $feed->get_title(),
      'permalink' => $feed->get_permalink(),
      'items'     => $feed->get_items(),
    );

    return view('welcome', $data);
  }
}
