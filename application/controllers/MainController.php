<?php
require_once "ListController.php";
class MainController extends CI_Controller{

  function __construct(){
    parent::__construct();

    $config['hostname'] = "localhost";
    $config['username'] = "root";
    $config['password'] = "";
    $config['database'] = "kim";
    $config['dbdriver'] = "mysqli";
    $config['dbprefix'] = "";
    $config['pconnect'] = FALSE;
    $config['db_debug'] = TRUE;
    //데이터베이스 설정
  $this->load->model('user_model','',$config);
  //두번째 인자값은 불러쓸때 이름을 바꾸는 것이다.
  }
  //CI생성자

  function index(){
    $this->load->view('login');
  }
  //메인메소드

  function checkLogin(){
    //로그인

    $id = $this->input->post('id');
    $pw = $this->input->post('pw');

    $check = $this->user_model->check_id($id);
    //아이디 검사
    if($check){
      $check = $this->user_model->check_pw($id,$pw);
      //비밀번호 검사
      if($check){
        //로그인됨

        $data['id'] = $id;
        $data['time'] = date('h:i:s');

        $login = new ListController($data);
        $login->ShowTimeLine();
        return;
      }else{
        //로그인실패
        echo "<script>
          alert('비밀번호 오류입니다.')</script>";
          //일부로 에러메세지를 따로주는 것임
      }
    }else{
      echo "<script>
        alert('{$id} 는 존재하지않는 아이디입니다.')</script>";
    }
    echo "<script>document.location.href='../../'</script>";
  }

  function insertUser(){
    //회원가입

    $data['id'] = $this->input->post('id');
    $data['pw'] = $this->input->post('pw');
    $data['name'] = $this->input->post('name');
    $data['birth'] = $this->input->post('birth');
    $data['sex'] = $this->input->post('sex');
    //post값으로 넘어오는 값 저장



    $check = $this->user_model->check_id($data['id']);

    if($check){
      echo "<script>
        alert('{$data['id']} 는 이미존재하는 아이디입니다.')</script>";
    }else{
      $this->user_model->input_id($data);
      echo "<script>
        alert('정상적으로 회원가입 되었습니다.')</script>";
    }
    echo "<script>document.location.href='../../'</script>";
  }
}
 ?>
