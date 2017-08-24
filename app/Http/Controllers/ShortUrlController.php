<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\ShortUrl;
use App\ShortUrlStatistics;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

         $validator = Validator::make($request->all(), [
            'full_url' => 'required|url',
         
         ]);

         if ($validator->fails()) {
            
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $ip = $request->ip();
        $ip_count = ShortUrl::where('creator_ip_address', $ip)->where('created_at', '>' , Carbon::now()->subDays(1))->count();
        
        if ($ip_count > 3) {
            return redirect('/') ->withErrors(['You can only use it three times during 24 hours.']);
        }


        do{
            $token = bin2hex(random_bytes(3));
        } while (ShortUrl::whereToken($token)->count() > 0);

        $request->request->add([
            'token' => $token,
            'creator_ip_address' => $request->ip(),
        ]);

        $short_url = ShortUrl::create($request->all());

        $short_url_statistics = ShortUrlStatistics::create([
            'short_url_id' => $short_url->id,

        ]);

        if ($request->isJson()){
            return $short_url->toJson();
        } else {
            return view('front-page', [
                'short_url' => $short_url,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShortUrl  $shortUrl
     * @return \Illuminate\Http\Response
     */
    public function show(ShortUrl $shortUrl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShortUrl  $shortUrl
     * @return \Illuminate\Http\Response
     */
    public function edit(ShortUrl $shortUrl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShortUrl  $shortUrl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShortUrl $shortUrl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShortUrl  $shortUrl
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShortUrl $shortUrl)
    {
        //
    }

    public function redirect(string $token) {
        $short_url = ShortUrl::whereToken($token)->firstOrFail();

        $short_url_search = ShortUrl::where('token', $token)->first();


        ShortUrlStatistics::where('short_url_id',$short_url_search->id)->increment('clicks');


        return redirect($short_url->full_url);
    }
}
