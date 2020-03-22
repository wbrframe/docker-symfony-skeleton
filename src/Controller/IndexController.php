<?php

declare(strict_types=1);

namespace App\Controller;

use App\Traits\EntityManagerTrait;
use App\Traits\TwigTrait;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * IndexController.
 */
class IndexController
{
    use EntityManagerTrait;
    use TwigTrait;

    /**
     * @return Response
     *
     * @Route("/", methods={"GET"}, name="app_index")
     */
    public function executeAction(): Response
    {
        $databaseName = $this->em->getConnection()->getDatabase();

        return new Response($this->twig->render('index.html.twig', [
            'content' => \sprintf('Database `%s` is ready.', $databaseName),
        ]));
    }
}
