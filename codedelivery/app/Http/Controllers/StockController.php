<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Models\FeedStock;
use CodeDelivery\Repositories\EmployeeRepository;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\FeedStockRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{

    private $repository;
    private $employeeRepository;


    public function __construct(FeedStockRepository $repository, EmployeeRepository $employeeRepository)
    {
        $this->repository=$repository;
        $this->employeeRepository=$employeeRepository;
    }

    public function index(){

        $feedStocks = $this->repository->paginate();

        return view('admin.barkery.estoque.index',compact('feedStocks'));

    }

    public function create(){

        $providers=DB::table('providers')->pluck('fantasia','id');

        return view('admin.barkery.estoque.create',compact('providers'));

    }

    public function store(Request $request){

        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.barkery.stock.index');

    }

    public function reduce($id){

        $feedstock=$this->repository->find($id);

        return view('admin.barkery.estoque.spent',compact('feedstock'));

    }
    public function add($id){

        $feedstock=$this->repository->find($id);

        return view('admin.barkery.estoque.replacement',compact('feedstock'));

    }


    public function spent(Request $request,$id){

        $data = $request->all();

        $feedstock= $this->repository->find($id);

        $data['qtd']=$feedstock['qtd']-$data['qtd'];

        $this->repository->update($data,$id);

        return redirect()->route('admin.barkery.stock.index');

    }

    public function replacement(Request $request,$id){

        $data = $request->all();

        $feedstock= $this->repository->find($id);

        $data['qtd']=$feedstock['qtd']+$data['qtd'];

        $this->repository->update($data,$id);

        return redirect()->route('admin.barkery.stock.index');

    }

    public function edit($id){

        $feedstock = $this->repository->find($id);

        $providers=DB::table('providers')->pluck('fantasia','id');

        return view('admin.barkery.estoque.edit',compact('feedstock','providers'));

    }

    public function update(Request $request,$id){

        $data = $request->all();

        $this->repository->update($data,$id);

        return redirect()->route('admin.barkery.stock.index');
    }

}


