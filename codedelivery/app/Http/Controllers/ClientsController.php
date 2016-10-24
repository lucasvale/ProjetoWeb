<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Services\ClientServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ClientsController extends Controller
{

    private $repository;
    private $clientServices;

    public function __construct(ClientRepository $repository,ClientServices $clientServices)
    {
        $this->repository=$repository;
        $this->clientServices=$clientServices;
    }

    public function index(){

        $clients = $this->repository->paginate();

        return view('admin.clients.index',compact('clients'));

    }

    public function create(){

        return view('admin.clients.create');
    }

    public function store(AdminClientRequest $request){

        $data = $request->all();

        $this->clientServices->create($data);

        return redirect()->route('admin.clients.index');

    }

    public function edit($id){

        $client = $this->repository->find($id);

        return view('admin.clients.edit',compact('client'));

    }

    public function update(AdminClientRequest $request,$id){

        $data = $request->all();

        $this->clientServices->update($data,$id);

        return redirect()->route('admin.clients.index');
    }

    public function profile(){

        return view('profile',array('user'=>Auth::user()));
    }

    public function update_avatar(Request $request){

        if($request->hasFile('avatar')){

            $avatar =$request->file('avatar');

            $filename= time().'.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

            $user=Auth::user();
            $user->avatar=$filename;
            $user->save();

        }
        return view('profile',array('user'=>Auth::user()));
    }
}


