<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FacebookController extends Controller
{




public function postMessage(Request $request)
{
    $request->validate(['message' => 'required|string|max:500']);
    $message = $request->input('message');
    $pageId = trim(env('FB_PAGE_ID'));
    $accessToken = trim(env('FB_PAGE_ACCESS_TOKEN'));

    if (!$pageId || !$accessToken) {
        return back()->with('error', 'Missing FB_PAGE_ID or FB_PAGE_ACCESS_TOKEN');
    }

    // $response = Http::post("https://graph.facebook.com/v19.0/{$pageId}/feed", [
    //     'message' => $message,
    //     'access_token' => $accessToken,
    // ]);


   $image = $request->file('img');
    if(isset($image)){
    // $caption = $request->input('caption', '');

    // Upload photo to Facebook Page
    $response = Http::attach(
        'source', file_get_contents($image->getRealPath()), $image->getClientOriginalName()
    )->post("https://graph.facebook.com/v19.0/{$pageId}/photos", [
        'caption' =>  $message,
        'access_token' => $accessToken,
    ]);



    if ($response->successful()) {
        return back()->with('success', 'Post published! Post ID: ' . $response->json('id'));
    } else {
        return back()->with('error', 'Facebook API error: ' . $response->body());
    }
}
}


}


