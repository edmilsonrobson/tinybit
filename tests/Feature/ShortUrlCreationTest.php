<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ShortUrlCreationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use DatabaseTransactions;

    public function testExample()
    {
    	$url2 = "https://laravel.com/docs/5.4/validation#rule-active-url";
        $url = "https://www.google.com.br/search?q=europe+map&client=firefox-b-ab&tbm=isch&imgil=YX9MU-Obi_hETM%253A%253BMApJnvEZtL09MM%253Bhttp%25253A%25252F%25252Fwww.worldatlas.com%25252Fwebimage%25252Fcountrys%25252Feu.htm&source=iu&pf=m&fir=YX9MU-Obi_hETM%253A%252CMApJnvEZtL09MM%252C_&usg=__SAKOBSfsvMvzPegq56dvgn7jZ-E%3D&biw=1600&bih=750&ved=0ahUKEwjBlpukqN_VAhVDhZAKHeZrAH4QyjcINw&ei=UBiWWcGuMMOKwgTm14HwBw#imgrc=YX9MU-Obi_hETM:";
        $this->post('/short-urls', [ 'full_url' => $url2 ]);
        $this->assertDatabaseHas('short_urls', [
		  'full_url' => $url2
        ]);

    }

     public function testExampleMissing()
    {
        $url = '1234';
        $this->post('/short-urls', [ 'full_url' => $url ]);
        $this->assertDatabaseMissing('short_urls', [
		  'full_url' => $url
        ]);

    }
}
