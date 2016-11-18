<?php
class user_model extends CI_Model{

  function __construct(){
    parent::__construct();
  }

  function get_all_colum(){
    $query = $this->db->get('userList');
    return $query->result();//여러행 반환
  }
  function check_pw($argId,$argPw){
    //매개변수 아이디의 비밀번호가 입력갑과맞는지 검사
      $this->db->where('id =',$argId);
      $query = $this->db->get('userList');
      $data = $query->row();
      if($argPw == $data->pw){
        return TRUE;
      }else{
        return FALSE;
      }
  }

  function check_id($argId){
    //매개변수의 아이디가 존재하는지 여부 조사
    $this->db->where('id =',$argId);
    $query = $this->db->get('userList');
    $str = $query->row();//단일행 반환
    if($str){
        //아이디가 이미존재함
        return TRUE;
    }else{
        //아이디가 존재하지않음
        return FALSE;
    }
  }

  function input_id($argData){

    $data = array(
      'name' =>$argData['name'],
      'id'   =>$argData['id'],
      'pw'   =>$argData['pw'],
      'birth'=>$argData['birth'],
      'sex'  =>$argData['sex']
    );
    //넘겨받는 데이터를 DB에 저장한다. userList
    $this->db->insert('userList',$data);
    return;
  }
}
 ?>
