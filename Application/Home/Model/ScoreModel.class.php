<?php
namespace Home\Model;
use Home\Model\BaseModel;
use Think\Page;

class ScoreModel extends BaseModel{
    public function showList($course_id,$class_id,$year,$term){
    
        $paramer = array(
            'course_id' => $course_id,
            'class_id' => $class_id,
            'year' => $year,
            'term' => $term,
        );
    
        $model = M('Score');
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
        $student = M("Student");
        $class = M("Class");
        $course = M("Course");
        if (is_array($list)){
            foreach ($list as $key => &$val){
                if (isset($val['student_id']) && $val['student_id']){
                    $where['id'] = $val['student_id'];
                    $info = $student->where($where)->find();
                    if ($info){
                        $val['student_id'] = $info['name'];
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
    
    /**
     * 更新学生总分数和排名情况
     */
    public function updateStudentCount($student_id,$year,$term){
        $where['student_id'] = $student_id;
        $where['year'] = $year;
        $where['term'] = $term;
        $where['is_valid'] = '1';
        
        $course = M('course');
        $coursewhere['is_valid'] = '1';
        $coursewhere['type'] = '1';
        $courseList = $course->field('id')->where($coursewhere)->select();
       
        
        $student_count = M("Student_count");
        $info = $student_count->where($where)->find();
        $data = $where;
        
        $scorewhere = $where;
        if ($courseList){
            $courseIdList = array();
            foreach ($courseList as $key => $val){
                $courseIdList[] = $val['id'];
            }
        
            $scorewhere['course_id'] = array('in',$courseIdList);
        }
  
        $score = M("Score");
        $total_score = intval($score->fetchSql(false)->where($scorewhere)->sum('score'));
        
        
        $data['total_score'] = $total_score;
        //$rank = $this->getRank($year, $term, $total_score);
        //$data['rank'] = $rank;
        if ($info){
           // var_dump($data);exit();
            $student_count->where($where)->save($data);
            
            
            
        }else {
            
            $student_count->add($data);
        }
        
    }
    
    
    /**
     * 获取学生排名
     * @param unknown $year
     * @param unknown $term
     * @param unknown $totalScore
     */
    public function getRank($year,$term,$totalScore){
        if ($year){
            $where['year'] = $year;
        }
        if($term){
            $where['term'] = $term;
        }
    
    
        $where['total_score'] = array('gt',$totalScore);
    
        $student_count = M("Student_count");
         
    
    
    
        return intval( $student_count->where($where)->count()) +1;
    
    }
    
}
