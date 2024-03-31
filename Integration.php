<?php

class Integration extends IntegrationDriver
{

    protected IntegrationDriver $driver;

    /**
     * @param string $driver
     */
    public function __construct(string $driver)
    {
        if ($driver === "hostaway") {
            $this->driver = new HostawayDriver();
            return;
        }

        if ($driver === "superhog") {
            $this->driver = new SuperhogDriver();
            return;
        }
    }

    public function getListings()
    {
        return $this->driver->getListings();
    }

    public function getReviews()
    {
        return $this->driver->getReviews();
    }
}