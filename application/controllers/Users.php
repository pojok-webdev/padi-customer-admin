<?php
class Users extends CI_Controller{
    function index(){
        $this->load->model('user');
        $users = $this->user->get();
        $data['users'] = $users;
        $this->load->view('users/tables',$data);
    }
    function updatepassword(){
        $params = $this->input->post();
//        echo $params["id"] . " and " . $params["password"];
        change_password($params["id"],$params["password"]);
    }
}
?>