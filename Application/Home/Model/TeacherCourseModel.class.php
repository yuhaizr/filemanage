<?php
namespace Home\Model;
use Home\Model\BaseModel;
use Think\Page;

class TeacherCourseModel extends BaseModel{
    public function showList($course_id,$class_id,$year,$term){
    
        $paramer = array(
            'course_id' => $course_id,
            'class_id' => $class_id,
            'year' => $year,
            'term' => $term,
        );
    
        $model = M('Teacher_course');
        $where = array();
        $where['is_valid'] = '1';
        if ($course_id){
            $where['course_id'] = $course_id;
        }
        if ($class_id){
            $where['class_id'] = $class_id;
        }    
        if ($year){
            $where['year'] = $year;
        }
        if ($term){
            $where['term'] = $term;
        }        
        
        $total = $model->where($where)->count();
    
        $page = new Page($total,20,$paramer);
        $show = $page->show();
        $list = $model
        ->where($where)
        ->order(' ctime DESC ')
        ->limit($page->firstRow, $page->listRows)
        ->select();
        $list = $this->fixList($list);
        return array(
            'list' => $list,
            'page' => $show,
        );
    }
    
    private function fixList($list){
        $teacher = M("Teacher");
        $class = M("Class");
        $course = M("Course");
        if (is_array($list)){
            foreach ($list as $key => &$val){
                if (isset($val['teacher_id']) && $val['teacher_id']){
                    $where['id'] = $val['teacher_id'];
                    $info = $teacher->where($where)->find();
                    if ($info){
                        $val['teacher_id'] = $info['name'];
                    }
                }
                if (isset($val['class_id']) && $val['class_id']){
                    $where['id'] = $val['class_id'];
                    $info = $class->where($where)->find();
                    if ($info){
                        $val['class_id'] = $info['name'];
                    }
                }                
                if (isset($val['course_id']) && $val['course_id']){
                    $where['id'] = $val['course_id'];
                    $info = $course->where($where)->find();
                    if ($info){
                        $val['course_id'] = $info['name'];
                    }
                }               
                if (isset($val['term']) && $val['term']){
       
                    if ($val['term'] == '1'){
                        $val['term'] = '上学期';
                    }
                    if ($val['term'] == '2'){
                        $val['term'] = '下学期';
                    }                    
                }                
                
            }
    
        }
    
    
        return $list;
    }
    
    public function getFileTempList(){
        $fileTemp = M("File_temp");
        $where['is_valid'] = '1';
        $list = $fileTemp->where($where)->select();
        return  $list;
    }
}
