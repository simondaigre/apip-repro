<?php

namespace App\Dto;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use App\Provider\PersonProvider;
use Symfony\Component\JsonStreamer\Attribute\JsonStreamable;

#[JsonStreamable]
#[ApiResource(
    shortName: 'Person',
    operations: [
        new GetCollection(),
    ],
    provider: PersonProvider::class,
    jsonStream: true
)]
readonly class PersonDto
{
    public function __construct(
        /** @var CityDto[] */
        #[ApiProperty(readableLink: true)]
        public array $cities,
    ) {
    }
}
