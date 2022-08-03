<?php 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Users extends Controller
{
 
    public function index()
    {    
        $model = new UserModel();
 
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('user/users', $data);
    }    
 
    public function create()
    {    
        return view('user/create-user');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new UserModel();
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            ];
 
        $save = $model->insert($data);
        if($save == true){
            session()->setFlashdata('message', 'Added Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
            return redirect()->to( base_url('public/index.php/users') );
            // return redirect()->route('public/index.php/users');
        }else{
            session()->setFlashdata('message', 'Data not saved!');
            session()->setFlashdata('alert-class', 'alert-danger');
            echo 'Data not inserted';
            return redirect()->to( base_url('public/index.php/users') );
            
        }
        
    }
 
    public function edit($id = null)
    {
      
     $model = new UserModel();
 
     $data['user'] = $model->where('id', $id)->first();
 
     return view('user/edit-user', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new UserModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/users') );
    }
 
    public function delete($id = null)
    {
 
     $model = new UserModel();
 
     $data['user'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/users') );
    }
}