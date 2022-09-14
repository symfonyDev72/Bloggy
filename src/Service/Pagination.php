<?php

namespace App\Service;

use Knp\Component\Pager\PaginatorInterface;

class Pagination
{

    // private PaginatorInterface $paginator;
    private $paginator;

    public function __construct(PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
    }

    public function makePagination($request, array $objectsList, int $per_page)
    {

        $page = $request->query->getInt('page', 1);
        if ($page > ceil(count($objectsList) / $per_page) || $page <= 0) {
            $page = 1;
        }

        $results = $this->paginator->paginate(
            $objectsList, // on passe les données de l entité voulue
            $page, //récupération page en cours,sinon 1 par défaut
            $per_page //nombre d'articles par page
        );

        return $results;
    }
}
