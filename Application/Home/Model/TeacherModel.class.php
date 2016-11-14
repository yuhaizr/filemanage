<?php
namespace Home\Model;
use Home\Model\BaseModel;
use Think\Page;

class TeacherModel extends BaseModel{
    public function showList($searchValue){
    
        $paramer = array(
            'searchValue' => $searchValue,
        );
    
        $model = M('Teacher');
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
