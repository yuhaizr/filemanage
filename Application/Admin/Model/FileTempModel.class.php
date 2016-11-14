<?php
namespace Admin\Model;
use Home\Model\BaseModel;
use Think\Page;

class FileTempModel extends BaseModel{
    public function showList($searchValue){
    
        $paramer = array(
            'searchValue' => $searchValue,
        );
    
        $model = M('File_temp');
        $where = array();
        $where['is_valid'] = '1';
        if ($searchValue){
            $where['_string'] = " name LIKE  '%".$searchValue."%' ";
        }
    
    
        $total = $model->where($where)->count();
    
        $page = new Page($total,2,$paramer);
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
}
