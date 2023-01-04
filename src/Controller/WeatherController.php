<?php

namespace App\Controller;

use App\Form\CityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    #[Route('/weather', name: 'app_weather')]
    public function index(): Response
    {

        $form = $this->createForm(CityType::class);

        return $this->render('weather/index.html.twig', [
            'aze' => "aze",
        ]);
    }

    // #[Route('/weather/city', name: 'city_weather')]
    // public function weather(): Response
    // {
    //     $geo = "https://api.openweathermap.org/data/2.5/weather?q={city name}&appid=89b7447c9fe662461ca7593fe20e3e01";
        
    //     $url = "https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid=89b7447c9fe662461ca7593fe20e3e01";
    // }
}
