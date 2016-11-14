<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends BaseController
{

    
    public function index()
    {
        
        $this->display();
       
    }
    
    /**
     * 密码修改页面
     */
    public function modPassword(){
        
        $this->display();
        
    }
    
    /**
     * 保存密码
     */
    public function savePassword(){
        $oldpassword = I('oldpassword');
        $password = I('password');
        
        if ( (mbstrlen($password) < 3 )||(mbstrlen($password) > 10)){
            $this->error("密码必须在3到10位");
        }
        
        $utype = $_SESSION['utype'];
        //管理员
        if ($utype == 1){
            $model = M("Admin");
            
        }elseif ($utype == 2){
            $model = M("Teacher");

            
        }elseif ($utype == 3){
            $model = M("Student");
        }else{
            $this->error("用户信息错误，请重新登入",U("Login/index"));
        }
        
        $where['id'] = $_SESSION['uid'];
        $where['is_valid'] = 1;
        $info = $model->where($where)->find();
        if (!$info){
            $this->error("用户信息错误，请重新登入",U("Login/index"));
        }
        
        if (md5($oldpassword) == $info['password']){
            $data['password'] = md5($password);
            $res = $model->where($where)->save($data);
            if ($res !== false){
                $this->success("密码修改成功",U("Login/index"));
            }else{
                $this->error("密码修改失败");
            }
        
        }else{
            $this->error('原密码错误');
        }
        
    }
    
    

}