<?php

class SuperhogDriver extends IntegrationDriver
{

    public function getListings()
    {
        $listingsData = Http::get('./////');

        $commentsData = Http::get('comments?ids=' . Arr::pluck($listingsData, 'id'));

        $commentsData = Http::get('reviews?ids=' . Arr::pluck($listingsData, 'id'));

        // Transform

        return ListingDTO::create($listingsData);
    }

    public function getReviews()
    {
        return [];
    }
}