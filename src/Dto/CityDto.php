<?php

namespace App\Dto;

use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\JsonStreamer\Attribute\JsonStreamable;

#[JsonStreamable]
#[ApiResource(
    shortName: 'City',
    operations: [],
    jsonStream: true
)]
readonly class CityDto
{
    public function __construct(
        public string $name,
    ) {
    }
}
