<?php namespace App\Services;

use Andersonef\Repositories\Abstracts\ServiceAbstract;
use Illuminate\Database\DatabaseManager;
use \App\Repositories\CategoriaRepository;

/**
 * Service layer that will applies all application rules to work with Categoria class.
 *
 * Class CategoriaService
 * @package App\Services
 */
class CategoriaService extends ServiceAbstract{

    /**
     * This constructor will receive by dependency injection a instance of CategoriaRepository and DatabaseManager.
     *
     * @param CategoriaRepository $repository
     * @param DatabaseManager $db
     */
    public function __construct(CategoriaRepository $repository, DatabaseManager $db)
    {
        parent::__construct($repository, $db);
    }



}