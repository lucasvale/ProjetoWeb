<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\EntradaRepository;
use CodeDelivery\Repositories\SaidaRepository;

use CodeDelivery\Http\Requests\AdminProductRequest;
use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;


class FinancesController extends Controller
{

    private $entradaRepository;
    private $saidaRepository;
    public function __construct(SaidaRepository $saidaRepository, EntradaRepository $entradaRepository)
    {
        $this->saidaRepository=$saidaRepository;
        $this->entradaRepository=$entradaRepository;
    }

    public function index(){

        $saidas = $this->saidaRepository->paginate();
        $entradas =$this->entradaRepository->paginate();

        return view('admin.barkery.financeiro.financeiro',compact('saidas','entradas'));

    }

    public function createInput(){

        return view('admin.barkery.financeiro.createInput');
    }

    public function storeInput(Request $request){

        $data = $request->all();

        $this->entradaRepository->create($data);

        return redirect()->route('admin.barkery.finances.index')->onlyInput('name');

    }
    public function createOutput(){

        return view('admin.barkery.financeiro.createOutput');
    }

    public function storeOutput(Request $request){

        $data = $request->all();

        $this->saidaRepository->create($data);

        return redirect()->route('admin.barkery.finances.index')->onlyInput('name');

    }


    public function editInput($id){

        $input = $this->entradaRepository->find($id);

        return view('admin.barkery.financeiro.editInput',compact('input'));

    }

    public function updateInput(Request $request,$id){

        $data = $request->all();

        $this->entradaRepository->update($data,$id);

        return redirect()->route('admin.barkery.finances.index');
    }

    public function editOutput($id){

        $output = $this->saidaRepository->find($id);

        return view('admin.barkery.financeiro.editOutput',compact('output'));

    }

    public function updateOutput(Request $request,$id){

        $data = $request->all();

        $this->saidaRepository->update($data,$id);

        return redirect()->route('admin.barkery.finances.index');
    }


    public function destroyInput($id){

        $this->entradaRepository->delete($id);

        return redirect()->route('admin.barkery.finances.index');
    }

    public function destroyOutput($id){

        $this->saidaRepository->delete($id);

        return redirect()->route('admin.barkery.finances.index');
    }

    public function description($id){

        $product = $this->repository->find($id);

        return view('admin.products.description',compact('product'));

    }
}
