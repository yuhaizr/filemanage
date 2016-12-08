<?php
namespace Home\Controller;
use Home\Controller\BaseController;
use Home\Model\CountModel;
use Think\Model;


    
class CountController extends BaseController {
  
    public function __construct(){
        parent::__construct();
    
    }
  
    /**
     * 学生成绩波动情况
     */
    public function changeCount(){
        

        $info['student_id'] = I('student_id');
        
        //学生只能看自己的走势
        if ($_SESSION['utype'] == 3){
            $info['student_id'] = $_SESSION['uid'];
            $studentwhere['id'] = $_SESSION['uid'];
        }
        
        
        $countModel = new CountModel();
        $res = $countModel->changeCount($info['student_id']);
        
        $this->assign('legend',$res['legend']);
        $this->assign('data',$res['data']);
        
        $student = M("Student");
        $where['id'] = $info['student_id'];
        $info = $student->where($where)->find();
        
        $this->assign('info',$info);
        
        
        $studentwhere['is_valid'] = 1;
        
        $studentList = $student->where($studentwhere)->select();
        $this->assign('studentList',$studentList);
        

        $this->display();
    }
    
    public function rankCount(){
        
        $info['class_id'] = I('class_id')?I('class_id'):'';
        $info['year'] = I('year');
        $info['term'] = I('term');
        
        if (!isset($info['year']) || !$info['year']){
            $info['year'] = date("Y");
        }
        if (!isset($info['term']) || !$info['term']){

            if (date("m") < 9){
                $info['term'] = 1;
            }else{
                $info['term'] = 2;
            }
            
        }       
        
        $countModel = new CountModel();
        
        $res = $countModel->getRankCount($info['class_id'],$info['year'],$info['term']);
        
        $where = array();
        $class = M('Class');
        $where['is_valid'] = '1';
        $classList = $class->where($where)->select();
        
        $this->assign('classList',$classList);
        
        $this->assign('list',$res['list']);
        
        $this->assign('info',$info);
        
        $this->display();
    }
    
    public function studentCount(){
        $info['endyear'] = I('endyear');
        $info['startyear'] = I('startyear');
        if (!isset($info['endyear']) || !$info['endyear']){
            $info['endyear'] = date("Y");
        }   
        if (!isset($info['startyear']) || !$info['startyear']){
            $info['startyear'] = $info['endyear'] - 5;
        }
        
        
        if ($info['startyear'] > $info['endyear']){
            $this->error("开始年份不能大于结束年份","studentCount");
        }
        
        $countModel = new CountModel();
    
        $res = $countModel->getstudentCount($info['startyear'],$info['endyear']);
      
        $this->assign('legend',$res['legend']);
        $this->assign('data',$res['data']);
        

   
        $this->assign('info',$info);
        
        $this->display();
        
    }
  
}
    