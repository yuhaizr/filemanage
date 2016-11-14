<?php
namespace Home\Controller;
use Home\Model\ScoreModel;
use Home\Controller\BaseController;
use Think\Model;

    
class ScoreController extends BaseController {
    
    private $scoreModel = null;
    
    public function __construct(){
        parent::__construct();
        $this->scoreModel = new ScoreModel();
        

    }
    
    public function showList(){
        $info['course_id'] = I("course_id");
        $info['class_id'] = I("class_id");
        $info['year'] = I("year");
        $info['term'] = I("term");
        
        $this->assign('info',$info);
         
        $model = new ScoreModel();
        $data = $model->showList($info['course_id'],$info['class_id'],$info['year'],$info['term']);
    
        $this->getDetail('');
        
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
    
        $this->display();

    }
    
    public function detail(){
        $model = M('Score');
        $id = I('id');
        if (isset($id) && $id){
            $where['id'] = $id;
            $info = $model->where($where)->find();
            $this->getDetail($id);
            $this->assign('info',$info);
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    public function modify(){
        $model = M('Score');
    
        $id = I('id');
        if (isset($id) && $id){

            $this->getDetail($id);
            
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    
    
    private function getDetail($id){
        if (isset($id) && $id){
            $model = M('Score');
            $where['id'] = $id;
            $info = $model->where($where)->find();
            
            
            $this->assign('info',$info);            
        }

        
        
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
    }
    
    public function  add(){
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

    public function save(){
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
        

        
        $url ='add?type=menu&course_id='.$info['course_id']
        ."&class_id=".$info['class_id']
        ."&year=".$info['year']
        ."&student_id=".$info['student_id']
        ."&term=".$info['term'];
        
        
        $model = M('Score');
        $where['id'] = I('id');
        if (isset($where['id']) && $where['id']){
            
             $saveData['score'] = $info['score'];
             $info = $model->where($where)->find();
             $url ='modify?type=menu&course_id='.$info['course_id']
            ."&class_id=".$info['class_id']
            ."&year=".$info['year']
            ."&student_id=".$info['student_id']
            ."&term=".$info['term']."&id=".$where['id']; 
            
           
            $res = $model->where($where)->save($saveData);
            
            if ($res === false){
                
                $this->error('保存失败',$url);
            }else{
                $this->scoreModel->updateStudentCount($info['student_id'], $info['year'], $info['term']);
                $this->success('保存成功',$url);
            }
            
        }else{
            $this->is_have($info,$url);
            
             
            $res = $model->add($info);
            
            
            if ($res === false){
                
                $this->error('添加失败',$url);
            }else{
                $this->scoreModel->updateStudentCount($info['student_id'], $info['year'], $info['term']);
                $this->success('添加成功',$url);
            }
        }
        

    }
    
    public function del(){
        $id = I('id');
    
        $model = M('Score');
    
        if (isset($id) && $id){
            $data['is_valid'] = '0';
            $where['id'] = $id;
            $res = $model->where($where)->save($data);
             
            if ($res === false){
                $this->error('删除失败');
            }else{
                $info = $model->where($where)->find();
                $this->scoreModel->updateStudentCount($info['student_id'], $info['year'], $info['term']);
                $this->success('删除成功','showList');
            }
    
    
        }else{
            $this->error('id 丢失');
        }
    }
    private function check($data,$gourl){
/*         if (isset($data['name']) && mbstrlen($data['name']) > 30 ){
            $this->error('课程必须小于30字',$gourl);
        }
        if (isset($data['mark']) && mbstrlen($data['mark']) > 300 ){
            $this->error('备注必须小于300字',$gourl);
        } */
        
    }
    
    

    
    public function saveScore(){
   
        
        
        
    }
    
    private function is_have($info,$url){
        unset($info['class_id']);
        unset($info['score']);
        unset($info['ctime']);
        unset($info['cuid']);
        $model = M('Score');
        
        $info['is_valid'] = '1';
        $list = $model->where($info)->select();
        if($list){
            $this->error("已经录入过了",$url);
        }
        
    }
    
    
}