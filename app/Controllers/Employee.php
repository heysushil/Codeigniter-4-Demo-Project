<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\EmployeeModel;
use CodeIgniter\RESTful\ResourceController;

class Employee extends ResourceController{

    use ResponseTrait;
    protected $format = 'json';

    function index(){
        $model = new EmployeeModel();
        $data = $model->orderBy('id','DESC')->findAll();
        return $this->respond($data);
    }

    function create(){
        $model = new EmployeeModel();
        $data = [
            'name'=>$this->request->getVar('name'),
            'email'=>$this->request->getVar('email'),
        ];
        print_r($data);
        $result = $model->insert($data);
        if($result == true){
            $response = [
                'status'=>201,
                'error'=>null,
                'messege'=>[
                    'success' => 'Employee created successfully',
                ],
            ];
        }
        return $this->respondCreated($response);
    }

    function show($id=null){
        $model = new EmployeeModel();
        $singleData = $model->where('id',$id)->first();
        if($singleData){
            return $this->respond($singleData);
        }else{
            return $this->failNotFound('No employee found');
        }
    }

    function update($id = null)
    {
        $model = new EmployeeModel();
        // echo 'ID: ' . $id;
        // $name = $this->request->getVar('name');
        // $json = $this->request->getJSON();
        // if($json){
        //     $data = [
        //         'name'=>$json->name,
        //         'email'=>$json->email,
        //     ];
        // }
        // var_dump($json);
        // print_r($data);
        // echo 'Name: ' . $this->request->getVar('name');
        // die;
        // 'email' => $this->request->getVar('email'),
        // echo 'id: ' . $id;
        
        $check_id = $model->where('id',$id)->first();
        // $id = $this->request->getVar('id');
        // echo 'id: ' . $id;
        // print_r($check_id);die;
        if($check_id){
            // print_r($check_id);die;
        
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
            ];
            print_r($data);die;
            $result = $model->update($id, $data);
            // echo $data;
            if($result == true){
                $response = [
                    'status'=>200,
                    'error'=>null,
                    'message'=>['success'=>'Employee data updated successfully'],
                ];
                return $this->respond($response);
            }else{
                return $this->failNotFound('Problem on updateing employee data.');
            }
        }else{
            echo 'No data available';
        }
        
    }

    function delete($id = null)
    {
        $model = new EmployeeModel();
        // $id = $this->request->getVar('id');
        $result = $model->where('id',$id)->delete($id);
        if($result === true){
            $response = [
                'status'=>200,
                'error'=>null,
                'message'=>['success'=>'Employee deleted successfully.'],
            ];
            return $this->respond($response);
        }else{
            return $this->failNotFound('Problem on deleting employee. Tye again.');
        }
    }
}