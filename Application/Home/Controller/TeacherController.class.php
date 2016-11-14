<?php
namespace Home\Controller;
use Home\Model\TeacherModel;
use Home\Controller\BaseController;
    
class TeacherController extends BaseController {
    
    private $teacherlevel = '';
    
    public function __construct(){
        parent::__construct();
        
        $this->teacherlevel = C("TEACHER_LEVEL");
     
       $this->assign('teacherlevel',$this->teacherlevel);
       
       if ($_SESSION['utype'] == 1 ){
           $this->assign('my_modify_btn','1');
           $this->assign('my_del_btn','1');
           $this->assign('my_detail_btn','0');
       }else{
           $this->assign('my_modify_btn','0');
           $this->assign('my_del_btn','0');
           $this->assign('my_detail_btn','1');
       }

    }
    
    public function showList(){
        $searchValue = I('searchValue');
         
        $model = new TeacherModel();
        $data = $model->showList($searchValue);
    
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->assign('searchValue',$searchValue);
        $this->display();

    }
    
    public function detail(){
        $model = M('Teacher');
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
        $model = M('Teacher');
    
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

        $model = M('Teacher');
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
        $model = M('Teacher');
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
    
        $model = M('Teacher');
    
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
                $teacher = M("Teacher");
                $info = $teacher->where($where)->find();
                if ($info){
                    $this->error("工号不能重复输入");
                }
            }
        }else {
            if (isset($data['number']) && $data['number'] ){
                $where['number'] = $data['number'];
                $teacher = M("Teacher");
                $info = $teacher->where($where)->find();
                if ($info){
                    $this->error("工号不能重复输入");
                }
            }
        }
        
        if (isset($data['name']) && mbstrlen($data['name']) > 30 ){
            $this->error('教师姓名必须小于30字',$gourl);
        }
        if (isset($data['political']) && mbstrlen($data['political']) > 30 ){
            $this->error('政治面貌必须小于30字',$gourl);
        }
        
        if (isset($data['phone']) && mbstrlen($data['phone']) > 11 ){
            $this->error('电话号码必须小于11字',$gourl);
        }
        if (isset($data['教师教学发展机构']) && mbstrlen($data['教师教学发展机构']) > 100 ){
            $this->error('教师教学发展机构必须小于100字',$gourl);
        }
        

    
    
    
    }
}