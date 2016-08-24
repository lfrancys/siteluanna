<?php namespace App\Repositories;

use Andersonef\Repositories\Abstracts\RepositoryAbstract;
use \App\Entities\Categoria;

/**
 * Data repository to work with entity Categoria.
 *
 * Class CategoriaRepository
 * @package App\Repositories
 */
class CategoriaRepository extends RepositoryAbstract{


    public function entity()
    {
        return \App\Entities\Categoria::class;
    }

}