<?php
namespace Home\Model;
use Home\Model\BaseModel;
use Think\Page;

class CourseModel extends BaseModel{
    public function showList($searchValue){
    
        $paramer = array(
            'searchValue' => $searchValue,
        );
    
        $model = M('Course');
        $where = array();
        $where['is_valid'] = '1';
        if ($searchValue){
            $where['_string'] = " name LIKE  '%".$searchValue."%' ";
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
    
        if (is_array($list)){
            foreach ($list as $key => &$val){
                    if (isset($val['type']) && $val['type']){
                        if ($val['type'] == '1'){
                            $val['type'] = '普通课程';
                        }
                        if ($val['type'] == '2'){
                            $val['type'] = '证书考试';
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
