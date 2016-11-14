<?php
namespace Home\Controller;
use Home\Model\CourseModel;
use Home\Controller\BaseController;

    
class CourseController extends BaseController {
    

    
    public function __construct(){
        parent::__construct();
        
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
         
        $model = new CourseModel();
        $data = $model->showList($searchValue);
    
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->assign('searchValue',$searchValue);
        $this->display();

    }
    
    public function detail(){
        $model = M('Course');
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
        $model = M('Course');
    
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

        $model = M('Course');
        $this->check($data,"add?type=menu");

        
        $data['ctime'] = date('Y-m-d H:i:s');
        $data['cuid'] = $_SESSION['authId'];
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
        $model = M('Course');
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
    
        $model = M('Course');
    
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
        if (isset($data['name']) && mbstrlen($data['name']) > 30 ){
            $this->error('课程必须小于30字',$gourl);
        }
        if (isset($data['mark']) && mbstrlen($data['mark']) > 300 ){
            $this->error('备注必须小于300字',$gourl);
        }
        
    }
    
    
    /**
     * 成绩添加
     */
    public function addScore(){
        $type = I('type');
        
        $info['course_id'] = I("course_id");
        $info['class_id'] = I("class_id");
        $info['student_id'] = I("student_id");
        $info['year'] = I("year");
        $info['term'] = I("term");
        
        $this->assign('info',$info);
        
        $info['score'] = I("score");
        
        $info['ctime'] = date('Y-m-d H:i:s');
        $info['cuid'] = $_SESSION['authId'];
        
        if ($type == "menu"){
            
            $info['course_id'] = I("course_id");
            $info['class_id'] = I("class_id");
            $info['student_id'] = I("student_id");
            
            $where = array();
            $class = M('Class');
            $where['is_valid'] = '1';
            $classList = $class->where($where)->select();
            
            
            $where = array();
            $course = M("Course");
            $where['is_valid'] = '1';
            $courseList = $course->where($where)->select();
            
            $where = array();
            $student = M("Student");
            $where['is_valid'] = '1';
            if (isset($info['class_id']) && $info['class_id']){
                $where['class_id'] = $info['class_id'];
            }
            
            $studentList = $student->where($where)->select();
            
            
        
            
            $this->assign('classList',$classList);
            $this->assign('courseList',$courseList);
            $this->assign('studentList',$studentList);
            
            

            
            $this->display();
            exit();
        }
        
        
        
    }
    
    public function saveScore(){
        $type = I('type');
        
        $info['course_id'] = I("course_id");
        $info['class_id'] = I("class_id");
        $info['student_id'] = I("student_id");
        $info['year'] = I("year");
        $info['term'] = I("term");
        
        $this->assign('info',$info);
        
        $info['score'] = I("score");
        
        $info['ctime'] = date('Y-m-d H:i:s');
        $info['cuid'] = $_SESSION['authId'];
        

        
        $url ='addScore?type=menu&course_id='.$info['course_id']
        ."&class_id=".$info['class_id']
        ."&year=".$info['year']
        ."&student_id=".$info['student_id']
        ."&term=".$info['term'];
        
        $this->is_have($info,$url);
        $model = M('Score');
        
        unset($info['class_id']);
        
        $res = $model->add($info);
        
        
        if ($res == false){
            $this->error('添加失败',$url);
        }else{
            $this->success('添加成功',$url);
        }
        
        
        
    }
    
    private function is_have($info,$url){
        unset($info['class_id']);
        unset($info['score']);
        unset($info['ctime']);
        unset($info['cuid']);
        $model = M('Score');
        $list = $model->where($info)->select();
        if($list){
            $this->error("已经录入过了",$url);
        }
        
    }
    
    
}