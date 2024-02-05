<?php

namespace App\Http\Controllers;


use Vedmant\FeedReader\Facades\FeedReader;

class FeedController extends Controller
{
    public function __invoke()
    {
        $f = FeedReader::read('https://www.afip.gob.ar/ws/rss/feed.xml');

        echo $f->get_title();
        dump($f->get_items()[0]->data['child']['']['title'][0]['data']);
        dump($f->get_items()[0]->data['child']['']['link'][0]['data']);
        dump($f->get_items()[0]->data['child']['']['description'][0]['data']);
        dump($f->get_items()[0]->data['child']['']['pubDate'][0]['data']);
        dump($f->get_items());
    }
}
