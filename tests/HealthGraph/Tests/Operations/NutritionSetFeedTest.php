<?php

namespace HealthGraph\Tests\Operations;

class NutritionSetFeedTest extends BaseFeedTest
{

    protected function setUp()
    {
        $this->client = $this->getServiceBuilder()->get('client');
        $this->base = 'GetNutritionSetFeed';
    }

}