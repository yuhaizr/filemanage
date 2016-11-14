<?php
namespace Home\Model;
use Home\Model\BaseModel;


class CountModel extends BaseModel{
    
    /**
     * 学生成绩波动情况
     * @param unknown $class_id
     * @param unknown $student_id
     * @return multitype:string
     */
    public function changeCount($student_id){
        $legend = array();
        $totalScoreData = array();
        $rankData = array();
        
        $year = $this->getYearByStudentid($student_id);
        if ($year){
            
            for ($i =0 ; $i <=4   ;$i++){
                for ($term = 1; $term <=2 ; $term ++){
                  $now_year = $year  + $i;
                  $totalScore = $this->getTotalScore($student_id, $now_year, $term);
                  $totalScoreData[] = $totalScore;
                 // $rankData[] = $this->getRank($now_year, $term, $totalScore);

                  if ($term == 1){
                      $legend[] = $now_year . "年上学年";
                  }
                  if ($term == 1){
                      $legend[] = $now_year . "年下学年";
                  }
                }
                
            }
            
        }
        

        
        
       // $data['totalScoreData'] = $totalScoreData;
       // $data['rankData'] = $rankData;
        
        $jsonData['legend'] =   $legend;
        $jsonData['data'] =   $totalScoreData;
        //echo json_encode($jsonData);exit();
        
        $legend = json_encode($legend);
        $data = json_encode($totalScoreData);
        
        
        return array('legend'=>$legend,'data'=>$data);
     
    }
    
    public function getYearByStudentid($student_id){
        
        $student = M("Student");
        $class = M("Class");
        $studentwhere['id'] = $student_id;
        $studentinfo = $student->where($studentwhere)->find();
        if ($studentinfo){
            $class_id = $studentinfo['class_id'];
            $classwhere['id'] = $class_id;
            $classinfo  = $class->where($class_id)->find();
            if ($classinfo){
                $year = $classinfo['year'];
                if ($year){
                     
                     return $year;
                }
        
        
            }
        }
        
        return false;
    }
    
    
    /**
     * 获取学生总成绩数据
     */
    public function getTotalScore($student_id,$year,$term){
        $student_count = M("Student_count");
        $where['student_id'] = $student_id;
        $where['year'] = $year;
        $where['term'] = $term;
        $info = $student_count->where($where)->find();
        if ($info){
            return intval($info['total_score']);
        }else{
            return 0;
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
    
    
    public function getRankCount($class_id,$year,$term){
       
        if ($year){
            $where['year'] = $year;
        }
        
        if ($term){
            $where['term'] = $term;
        }
        
        if ($class_id){
            $student = M("Student");
            $classwhere['is_valid'] = '1';
            $classwhere['class_id'] = $class_id;
            $student_list  = $student->where($classwhere)->select();
            $student_list_id = array();
            if ($student_list){
                foreach ($student_list as $key => $val){
                    $student_list_id[] = $val['id'];
                }
            }
            $where['student_id'] = array('in',$student_list_id);
            
        }
        $student_count = M('Student_count');
        $list = $student_count
                ->where($where)
                ->order(" total_score DESC ")
                ->select();
        
        $list = $this->fix_list($list);        
        return array('list' => $list);
        
    }
    
    private function fix_list($list){
        $student = M("Student");
        $class = M("Class");
        foreach ($list as $key => &$val) {
            if (isset($val['student_id']) && $val['student_id']){
                
                $where['is_valid'] = '1';
                $where['id'] = $val['student_id'];
                $info = $student->where($where)->find();
        
                if ($info){
                    $val['name'] = $info['name'];
         
                    
                    $class_id = $info['class_id'];
     
                    if ($class_id){
                        $classwhere['id'] = $class_id;
                        $classwhere['is_valid'] = '1';
                       
                        $classInfo = $class->where($classwhere)->find();
                        if ($classInfo){
                            $val['classname'] = $classInfo['name'];
                        }                      
                    }

                    
                    
                }
          
            }
            
            
            if (!isset($val['name'] ) || !$val['name'] ){
                $val['name'] = '';          
            }
            if (!isset($val['classname'] ) || !$val['classname'] ){
                $val['classname'] = '';
            
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
        
        return $list;
    }
    
 
}
