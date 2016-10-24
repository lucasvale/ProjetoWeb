<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\EmployeeRepository;
use CodeDelivery\Http\Requests\AdminClientRequest;

use CodeDelivery\Services\EmployeeServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ResourcesController extends Controller
{

    private $repository;
    private $employeeService;

    public function __construct(EmployeeRepository $repository, EmployeeServices $employeeServices)
    {
        $this->repository=$repository;
        $this->employeeService=$employeeServices;
    }

    public function index(){

        $employees = $this->repository->paginate(10);

        return view('admin.barkery.rh.rh',compact('employees'));

    }

    public function create(){

        return view('admin.barkery.rh.create');
    }

    public function store(Request $request){

        $data = $request->all();

        $this->employeeService->create($data);

        return redirect()->route('admin.barkery.rh.index');

    }

    public function edit($id){

        $employee = $this->repository->find($id);

        return view('admin.barkery.rh.edit',compact('employee'));
    }

    public function update(Request $request,$id){

        $data = $request->all();

        $this->employeeService->update($data,$id);

        return redirect()->route('admin.barkery.rh.index');
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


