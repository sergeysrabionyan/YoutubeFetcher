<?php


namespace App\Controllers;


use App\Services\YoutubeStatisticHandler;
use App\Stories\StoreYoutubeChannelStoryByLogin;
use App\Stories\StoreYoutubeVideoByLoginStory;

class YoutubeController
{
    public function saveChannel($request, StoreYoutubeChannelStoryByLogin $story)
    {
        return $story->execute($request);
    }

    public function saveVideo($request, StoreYoutubeVideoByLoginStory $story)
    {
        return $story->execute($request);
    }

    public function getTopChannels($request, YoutubeStatisticHandler $service)
    {
        return $service->getTopChannels($request);
    }

    public function getRatingList($request, YoutubeStatisticHandler $service)
    {
        return $service->getRatingList($request);
    }

}