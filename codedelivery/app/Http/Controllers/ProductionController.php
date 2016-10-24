<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\ProductRepository;

use CodeDelivery\Http\Requests\AdminProductRequest;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;


class ProductionController extends Controller
{

    private $repository;
    private $categoryRepository;
    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository=$repository;
        $this->categoryRepository=$categoryRepository;
    }

    public function index(){

        $products = $this->repository->paginate();

        return view('admin.barkery.producao.producao',compact('products'));

    }

    public function create(){

        $categories=DB::table('categories')->pluck('name','id');

        return view('admin.products.create',compact('categories'));
    }

    public function store(AdminProductRequest $request){

        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.products.index')->onlyInput('name');

    }

    public function edit($id){


        $product = $this->repository->find($id);

        //$categories=$this->categoryRepository->lists('id');

        $categories=DB::table('categories')->pluck('name','id');

        return view('admin.products.edit',compact('product','categories'));

    }

    public function update(Request $request,$id){


        if($request->hasFile('photo')){
            $data = $request->all();

            $image = $request->file('photo');

            $filename= time().'.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save(public_path('/uploads/products/'.$filename));

            $data['photo']=$filename;
        }

        $this->repository->update($data,$id);

        return redirect()->route('admin.products.index');
    }

    public function destroy($id){

        $this->repository->delete($id);

        return redirect()->route('admin.products.index');

    }

    public function description($id){

        $product = $this->repository->find($id);

        return view('admin.products.description',compact('product'));

    }
}
