<?php

namespace App\Provider;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Dto\CityDto;
use App\Dto\PersonDto;

class PersonProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        return new PersonDto(
            cities: [
                new CityDto(name: 'Paris'),
                new CityDto(name: 'La Rochelle')
            ]
        );
    }
}
