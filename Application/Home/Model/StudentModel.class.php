<?php
namespace Home\Model;
use Home\Model\BaseModel;
use Think\Page;

class StudentModel extends BaseModel{
    public function showList($searchValue){
    
        $paramer = array(
            'searchValue' => $searchValue,
        );
    
        $model = M('Student');
        $where = array();
        $where['is_valid'] = '1';
        if ($searchValue){
            $where['_string'] = " name LIKE  '%".$searchValue."%'  OR number like '%{$searchValue}%' ";
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
        $class = M("Class");
        if (is_array($list)){
            foreach ($list as $key => &$val){
                $class_id = $val['class_id'];
                $where['id'] = $class_id;
                $class_info = $class->where($where)->find();
                if ($class_info){
                    $val['class_id'] = $class_info['name'];
                }
                
                if (isset($val['sex'])){
                    if ($val['sex'] == '1'){
                        $val['sex'] = "男";
                    }else{
                        $val['sex'] = "女";
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
