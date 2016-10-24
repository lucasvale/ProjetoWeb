<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use CodeDelivery\Repositories\ProductRepository;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $repositoryProducts;
    private $categoryRepository;
    public function __construct(ProductRepository $repositoryProducts, CategoryRepository $categoryRepository)
    {
        $this->repositoryProducts=$repositoryProducts;
        $this->categoryRepository=$categoryRepository;
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function principal(){

        $products = $this->repositoryProducts->paginate();

        $categories = $this->categoryRepository->paginate();

        return view('welcome',compact('products','categories'));
    
    }
}
