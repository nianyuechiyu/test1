<?php
namespace app\index\controller;
   class Index extends \think\Controller{
       function index(){
            $res = \think\Db::name('users')->select();
            var_dump($res);
            return $this->fetch('index');
           
       }
   }
?>