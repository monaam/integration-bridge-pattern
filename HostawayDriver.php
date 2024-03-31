<?php

class HostawayDriver extends IntegrationDriver
{

    public function getListings()
    {
        $listingsData = Http::get('https:/...../getListijgs');

        return ListingDTO::create($listingsData);
    }

    public function getReviews()
    {
        return Http::get('reviews');
    }
}