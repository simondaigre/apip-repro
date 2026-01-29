<?php

namespace App\Controller;

use App\Dto\CityDto;
use App\Dto\PersonDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\JsonStreamer\StreamWriterInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\TypeInfo\Type;

final class IndexController extends AbstractController
{
    public function __construct(
        private StreamWriterInterface $jsonStreamWriter,
    ) {
    }

    #[Route('/', name: 'app_index')]
    public function index(): StreamedResponse
    {
        $person = new PersonDto(
            cities: [
                new CityDto(name: 'Paris'),
                new CityDto(name: 'La Rochelle')
            ]
        );

        $type = Type::object(PersonDto::class);

        $json = $this->jsonStreamWriter->write($person, $type);

        return new StreamedResponse($json);

    }
}
