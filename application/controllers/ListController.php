<?php
class ListController extends CI_Controller{
    private $user;

  function __construct($data){
    parent::__construct();
    $this->user['id'] = $data['id'];
    $this->user['time'] = $data['time'];
  }

  function ShowTimeLine(){
    $this->load->view('main',$this->user);
  }
}
 ?>
