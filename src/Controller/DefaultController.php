<?php

namespace App\Controller;

use App\Model\CalculateModel;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    private CalculateModel $calculateModel;

    public function __construct()
    {
        $this->calculateModel = new CalculateModel();
    }

    public function index(): Response
    {
        $number = $this->calculateModel->addTwoNumbers(5, 10);

        return new Response(
            "
                    <html>
                        <body>
                            Wynik: $number 
                        </body>
                    </html>
                "
        );
    }

    public function xxx(): Response
    {
        $i = 100;
        $i += 156;
        return new Response('Wynik: ' . $i);
    }
}
