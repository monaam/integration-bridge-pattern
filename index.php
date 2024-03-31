<?php

$driver = "hostaway"; // or superhog

$integration = new Integration($driver);

$listings = $integration->getListings();

$reviews = $integration->getReviews();