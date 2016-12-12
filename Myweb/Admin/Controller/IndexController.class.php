<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       echo "后台首页";
    }
    public function ceshi(){
    	$this->display('Public/public');
    }
}