<?php
class Clients extends CI_Controller{
    function index(){
        $this->load->model('client');
        $users = $this->client->get();
        $data['clients'] = $clients;
        $this->load->view('clients/tables',$data);
    }
}
?>