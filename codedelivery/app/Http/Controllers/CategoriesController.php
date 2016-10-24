<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Models\Product;
use CodeDelivery\Repositories\CategoryRepository;

use CodeDelivery\Http\Requests\AdminCategoryRequest;
use CodeDelivery\Repositories\ProductRepository;
use Illuminate\Support\Facades\DB;
class CategoriesController extends Controller
{

    private $repository;
    private $productRepository;
    public function __construct(CategoryRepository $repository, ProductRepository $productRepository)
    {
        $this->repository=$repository;
        $this->productRepository=$productRepository;
    }

    public function index(){

        $categories = $this->repository->paginate();

        return view('admin.categories.index',compact('categories'));

    }

    public function create(){

        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request){

        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.categories.index');

    }

    public function edit($id){

        $category = $this->repository->find($id);

        return view('admin.categories.edit',compact('category'));

    }

    public function update(AdminCategoryRequest $request,$id){

        $data = $request->all();

        $this->repository->update($data,$id);

        return redirect()->route('admin.categories.index');
    }

    public function description($id){

        $category = $this->repository->find($id);
        $products = $this->productRepository->findWhere(['category_id'=>$id]);

        return view('admin.categories.description',compact('category','products'));

    }
}
