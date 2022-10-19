<?php

use Swis\JsonApi\Client\DocumentClient;
use Swis\JsonApi\Client\Item;

class Restaurant extends Item
{
    protected $type = 'restaurant';
}

$client = Swis\JsonApi\Client\DocumentClient::create();
$document = $client->get('https://api.food.ee/api/v3/restaurants');
$collection = $document->getData();

foreach ($collection as $item) {
    print $item->name;
}
