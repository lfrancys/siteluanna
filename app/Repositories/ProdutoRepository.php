<?php namespace App\Repositories;

use Andersonef\Repositories\Abstracts\RepositoryAbstract;
use \App\Entities\Produto;

/**
 * Data repository to work with entity Produto.
 *
 * Class ProdutoRepository
 * @package App\Repositories
 */
class ProdutoRepository extends RepositoryAbstract{


    public function entity()
    {
        return \App\Entities\Produto::class;
    }

}