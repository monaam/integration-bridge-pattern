<?php

abstract class IntegrationDriver
{
    /**
     * Get listings with their reviews and comments
     * @return mixed
     */
    public abstract function getListings();

    public abstract function getReviews();
}