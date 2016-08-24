<?php

namespace App\Http\Controllers\Externo;

use App\Services\CategoriaService;
use App\Services\ProdutoService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    protected $produtoService;
    protected $categoriaService;

    function __construct(ProdutoService $produtoService, CategoriaService $categoriaService)
    {
        $this->produtoService = $produtoService;
        $this->categoriaService = $categoriaService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::guest())
            return redirect()->route('dashboard');


        $produtosDestaque = $this->produtoService->listaProdutosDestaque();
        $categorias = $this->categoriaService->all();

        return view('content.Externo.index')->with(['produtos' => $produtosDestaque, 'categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Requests\LoginRequest
    public function store(Request $request)
    {
        if(\Auth::attempt(['emailPessoa' => $request->emailPessoa, 'password' => $request->senhaPessoa])){

            if(!Auth::user()->statusPessoa) {
                Auth::logout();
                return redirect()->back()->withErrors(['usuarioInvalido' => 'Usuário inativo no sistema!']);
            }

            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['erro' => 'Email e senha não conferem']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
