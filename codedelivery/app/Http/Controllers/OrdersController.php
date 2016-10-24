<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class OrdersController extends Controller
{

    private $repository;
    public function __construct(OrderRepository $repository)
    {
        $this->repository=$repository;
    }

    public function index(){

        $orders = $this->repository->paginate();

        return view('admin.orders.index',compact('orders'));
    }

    public function edit($id,UserRepository $userRepository){

        $list_status=[0=>'pendente',1=>'A caminho',2=>'entregue'];
        $order=$this->repository->find($id);

        $deliveryman=DB::table('users')->where('role','deliveryman')->pluck('name','id');

        return view('admin.orders.edit',compact('order','list_status','deliveryman'));
    }

    public function update(Request $request,$id){

        $all=$request->all();

        $this->repository->update($all,$id);

        return redirect()->route('admin.orders.index');

    }
}
