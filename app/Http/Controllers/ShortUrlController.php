<?php

namespace App\Http\Controllers;

use App\ShortUrl;
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

        do{
            $token = bin2hex(random_bytes(3));
        } while (ShortUrl::whereToken($token)->count() > 0);

        $request->request->add([
            'token' => $token,
            'creator_ip_address' => $request->ip(),
        ]);

        $short_url = ShortUrl::create($request->all());

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

        return redirect($short_url->full_url);
    }
}
