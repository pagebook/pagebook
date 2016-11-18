<?php
class Blog extends CI_Controller{

  public function index(){
    // $data = array(
    //   'title' => 'My Title',
    //   'heading' => 'My Heading',
    //   'message' => 'My Message'
    // );
    //
    // $this->load->view("blogview",$data);
    $config['hostname'] = "localhost";
    $config['username'] = "root";
    $config['password'] = "";
    $config['database'] = "kim";
    $config['dbdriver'] = "mysqli";
    $config['dbprefix'] = "";
    $config['pconnect'] = FALSE;
    $config['db_debug'] = TRUE;
    $this->load->model('User_model','',$config);
    //DB설정 과 모델로드

    $data['todo_list'] = $this->User_model->get_last_ten_entries();
    //로드된 모델에서의 함수호출

    $data['title'] = 'My Real Title';
    $data['heading'] = 'My Real Heading';

    $this->load->view('blogview',$data);

  }

  function test(){
    echo "hello<br>";
    echo $this->input->post('ID');
    //포스트값 출력방식
  }
}
 ?>
