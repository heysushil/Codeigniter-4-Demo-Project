<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\CodeIgniter;
// use CodeIgniter\Validation;
use App\Models\AdminModel;
use CodeIgniter\API\ResponseTrait;
use Config\Services;

class Admin extends BaseController{

    use ResponseTrait;
    // private $model;
    // define ('model', new AdminModel()); 
    // helper(['form','url']);
    // public $model = new AdminModel();
    public function __construct()
    {
        // parent::__construct();
        // $this->model = model('App/Models/AdminModel');
        $this->model = new AdminModel(); 
        $this->validation = \Config\Services::validation();
        
        // Use this library to use curl operation
        $this->client = \Config\Services::curlrequest();

        helper(['form','url']);
    }

    // This function use to pass the views files on page file where to link header footer and the main file also pass the hole data form controller method which use as per requirments.
    function index(){
        // echo base_url();
        // echo site_url();
        // echo url
        $data['page'] = 'admin_users';
        $data['title'] = 'Admin Dashboard: Hi';
        return view('admin/page', $data);
        // return view('admin/header', $data)
        //     . view('admin/admin_users')
        //     . view('admin/footer');
    }

    function admin_user_data(){
        // $validation = \Config\Services::validation();

        $form_data = array(
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
        );

        if($this->validation->run($form_data, 'admin_user_data') == false){
            $errors = $this->validation->listErrors('list');
            // $this->pr($this->validator);
            $res['errors'] = $errors;
            return json_encode($res);
        }else{
            $this->model->insert($form_data);
            // $this->pr($form_data);
            $res['success'] = 'Data inserted successfully';
            return json_encode($res);
            // $admin_model = new AdminModel();
            // $admin_model->insert($form_data);
            // $model->insert($form_data);
            // $this->pr($form_data);
        }

        echo 'outer message';
    }

    // Use to access free api 
    function curl_admin(){
        // Import curlrequest to use this or use service method to use related methods
        // $client = \Config\Services::curlrequest();
        // $response = \Config\Services::response();
        // $service = new Services();
        $client = service('curlrequest');
        
        // Fetch api data using curlrequest().
        $option = [
            'baseURL' => 'https://api.publicapis.org/entries',
            'timeout' => 3,
        ];
        // $this->client->curlrequest($option);
        // $result = $client->request('GET',$option['baseURL']);
        $result = $client->get($option['baseURL']);
        
        // Geting response from api
        
        // echo 'Get Reason: '. $result->getReason();
        // echo 'Get Status: '. $result->getStatusCode();
        $get_result = $result->getBody();
        // $get_result = $this->respondCreated($result);
        // $get_result = json_decode($result);
        // $this->pr($get_result);
        // echo '<pre>'; print_r($result['body:protected']);
        // echo $service->response();
        // echo $get_result->count;
        // echo '<pre>'; var_dump($get_result);
        
        $json_data = (array) json_decode($get_result);
        // $json_data = json_decode(json_encode($get_result, true));
        // $this->pr($json_data['entries']);die;
        $i=1;
        foreach ($json_data['entries'] as $key => $value){
            echo $value->Category;
            // $this->pr($value);
            echo '<br>';
            // $i++;
        }
        // echo $json_data['count'];
        // $this->pr($json_data['entries']);
    }

    function pr($arrayData){
        echo '<pre>';
        print_r($arrayData);
    }

    public function db(){
        // $this->admin_model->db_table();
        $admin_model = new AdminModel();
        $admin_model->db_table();
    }
}