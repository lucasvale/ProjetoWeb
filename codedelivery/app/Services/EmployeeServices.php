<?php

namespace CodeDelivery\Services;


use CodeDelivery\Repositories\EmployeeRepository;
use CodeDelivery\Repositories\UserRepository;

class EmployeeServices
{

    private $employeeRepository;
    Private $userRepository;

    function __construct(EmployeeRepository $employeeRepository,UserRepository $userRepository)
    {
        $this->employeeRepository=$employeeRepository;
        $this->userRepository=$userRepository;

    }

    public function update(array $data,$id){
        $this->employeeRepository->update($data,$id);

        $userId= $this->employeeRepository->find($id,['user_id'])->user_id;

        $this->userRepository->update($data['user'],$userId);

    }

    public function create(array $data){

        $data['user']['password']= bcrypt(123456);

        $user = $this->userRepository->create($data['user']);

        $data['user_id']=$user->id;

        $this->employeeRepository->create($data);


    }
}