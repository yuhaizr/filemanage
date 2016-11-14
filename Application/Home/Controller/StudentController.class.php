<?php
namespace Home\Controller;
use Home\Model\StudentModel;
use Home\Controller\BaseController;
use Think\Model;
    
class StudentController extends BaseController {
    
    private $teacherlevel = '';
    
    public function __construct(){
        parent::__construct();
        

        $classModel = M("Class");
        $where['is_valid'] = '1';
        $classlist = $classModel->where($where)->select();

        $this->assign('classlist',$classlist);

    }
    
    public function showList(){
        $searchValue = I('searchValue');
         
        $model = new StudentModel();
        $data = $model->showList($searchValue);
    
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->assign('searchValue',$searchValue);
        $this->display();

    }
    
    public function detail(){
        $model = M('Student');
        $id = I('id');
        if (isset($id) && $id){
            $where['id'] = $id;
            $info = $model->where($where)->find();
            $this->assign('info',$info);
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    public function modify(){
        $model = M('Student');
    
        $id = I('id');
        if (isset($id) && $id){
            $where['id'] = $id;
            $info = $model->where($where)->find();

            $this->assign('info',$info);
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    public function  add(){
        if ('menu' == I('type')){
            $this->display();exit();
        }
        $data = $_POST;

        $model = M('Student');
        $this->check($data,"add?type=menu");

        
        $data['ctime'] = date('Y-m-d H:i:s');
        $data['cuid'] = $_SESSION['authId'];
        $data['password'] = md5('123456');
        $res = $model->add($data);
        if ($res == false){
            $this->error('添加失败');
        }else{
            $this->success('添加成功','showList');
        }
    
    }
    
    public function save(){
        $id = I('id');
        $data = $_POST;
        $model = M('Student');
        $this->check($data,"modify?id=".$id);
    

        if (isset($id) && $id){
    
            $where['id'] = $id;
            $res = $model->where($where)->save($data);
             
            if ($res === false){
                $this->error('保存失败');
            }else{
                $this->success('保存成功','showList');
            }
    
    
        }else{
            $this->error('id 丢失');
        }
    }
    
    public function del(){
        $id = I('id');
    
        $model = M('Student');
    
        if (isset($id) && $id){
            $data['is_valid'] = '0';
            $where['id'] = $id;
            $res = $model->where($where)->save($data);
             
            if ($res === false){
                $this->error('删除失败');
            }else{
                $this->success('删除成功','showList');
            }
    
    
        }else{
            $this->error('id 丢失');
        }
    }
    private function check($data,$gourl){
        
        if (isset($data['id'])&& $data['id']){
            if (isset($data['number']) && $data['number'] ){
                $where['number'] = $data['number'];
                $where['id'] = array('neq',$data['id']);
                $student = M("Student");
                $info = $student->where($where)->find();
                if ($info){
                    $this->error("学号不能重复输入");
                }
                
            }
            
        }else {
            if (isset($data['number']) && $data['number'] ){
                $where['number'] = $data['number'];
                $student = M("Student");
                $info = $student->where($where)->find();
                if ($info){
                    $this->error("学号不能重复输入");
                }
            
            }
        }
        
        if (isset($data['name']) && mbstrlen($data['name']) > 30 ){
            $this->error('学生姓名必须小于30字',$gourl);
        }
        if (isset($data['number']) && mbstrlen($data['number']) > 11 ){
            $this->error('学号必须小于11字',$gourl);
        }        
        
        if (isset($data['political']) && mbstrlen($data['political']) > 30 ){
            $this->error('政治面貌必须小于30字',$gourl);
        }
        
        if (isset($data['phone']) && mbstrlen($data['phone']) > 11 ){
            $this->error('电话号码必须小于11字',$gourl);
        }
        if (isset($data['addr']) && mbstrlen($data['addr']) > 100 ){
            $this->error('地址必须小于100字',$gourl);
        }
        if (isset($data['activity']) && mbstrlen($data['activity']) > 300 ){
            $this->error('参与活动必须小于300字',$gourl);
        }        
        if (isset($data['award_punishment']) && mbstrlen($data['award_punishment']) > 300 ){
            $this->error('获奖处分情况必须小于300字',$gourl);
        }
    
    
    
    }
}