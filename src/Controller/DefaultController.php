<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        $number = random_int(0, 15);

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }

    public function xxx(): Response
    {
        $i = 100;
        $i += 156;
        return new Response('Wynik: ' . $i);
    }
}
