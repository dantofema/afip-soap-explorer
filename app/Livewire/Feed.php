<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Vedmant\FeedReader\Facades\FeedReader;

class Feed extends Component
{

    public array $news=[];
    public string $title;

    public function mount(): void
    {
        $feed = FeedReader::read('https://www.afip.gob.ar/ws/rss/feed.xml');

        foreach ($feed->get_items() as $item) {
            $pubDate = $item->data['child']['']['pubDate'][0]['data'];
            $this->news[] = [
            'title' => $item->data['child']['']['title'][0]['data'],
            'link' => $item->data['child']['']['link'][0]['data'],
            'description' => $item->data['child']['']['description'][0]['data'],
            'date' => Carbon::parse($pubDate, 'UTC')->format('d-m-Y'),
                      ];
        }

        $this->title= $feed->get_title();

    }
    public function render()
    {
        return view('livewire.feed');
    }
}
