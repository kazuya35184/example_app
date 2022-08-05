<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Service\TweetService;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param TweetService $tweetService
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweets = $tweetService->getTweets();

        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
