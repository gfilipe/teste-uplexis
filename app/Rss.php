<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rss extends Model
{
    public static function getRssGoogleNoticias(){
		$rssURL = "https://news.google.com/news/section?cf=all&hl=pt-BR&pz=1&ned=pt-BR_br&topic=n&output=rss";
		$xml = simplexml_load_file($rssURL)->channel;
		return $xml;
	}
}
