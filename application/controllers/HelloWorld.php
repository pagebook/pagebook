<?php
class HelloWorld extends CI_Controller{
  public function index(){
    echo "HelloWorld";
  }
  public function second(){
    echo "second message";
  }

  public function shoes($arg1,$arg2){
    echo $arg1;
    echo $arg2;
  }
}
 ?>
