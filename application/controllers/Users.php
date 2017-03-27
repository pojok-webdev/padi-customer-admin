<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function index(){
        $users = $this->user->get();
        $data['users'] = $users;
        $this->load->view('users/tables',$data);
    }
    function updatepassword(){
        $params = $this->input->post();
        change_password($params["id"],$params["password"]);
    }
    function edit(){
        $id = $this->uri->segment(3);
        $obj = $this->user->getbyid($id);
        $data["obj"] = $obj;
        $this->load->view('users/edit1',$data);
    }
}
?>