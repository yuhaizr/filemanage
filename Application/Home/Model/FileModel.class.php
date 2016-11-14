<?php
namespace Home\Model;
use Home\Model\BaseModel;
use Think\Page;

class FileModel extends BaseModel{
    public function showList($searchValue,$file_temp_id){
    
        $paramer = array(
            'searchValue' => $searchValue,
            'file_temp_id' => $file_temp_id,
        );
        
        $model = M('File');
        $where = array();
        $where['is_valid'] = '1';
        if ($searchValue){
          
            $searchValue = str_replace('"','',json_encode($searchValue));
            $searchValue = str_replace("\\",'_',$searchValue);
         //  $searchValue = trim(json_encode($searchValue),'"') ;
        //   var_dump(" value LIKE  '%".$searchValue."%' ");exit();
            $where['_string'] = " value LIKE  '%".$searchValue."%' ";
        }
        if ($file_temp_id){
            $where['file_temp_id'] = $file_temp_id;
        }
    

        $total = $model->where($where)->count();
    
        $page = new Page($total,20,$paramer);
        $show = $page->show();
        $list = $model
        ->where($where)
        ->order(' ctime DESC ')
        ->limit($page->firstRow, $page->listRows)
        ->select();
        
//  
        $list = $this->fixList($list);
  //      var_dump($list);exit();
        return array(
            'list' => $list,
            'page' => $show,
        );
    }
    
    private function fixList($list){
    
        $tempinfo = array();
        if (is_array($list)){
            foreach ($list as $key => &$val){
                if (!$tempinfo){
                    $where['id'] = $val['file_temp_id'];
                    $fileTempModel = new FileTempModel();
                    $tempinfo = $fileTempModel->where($where)->find();
                    $tempinfo = json_decode($tempinfo['name'],1);
                }
   
    
                $val['value'] = json_decode($val['value'],1);
            
                if (is_array($val['value']) && $val['value']){
                    foreach ($val['value'] as $k => &$v){
                      
                       if (!array_key_exists($k, $tempinfo)){
                           unset($val['value'][$k]);
                       }
                    }
                }
            }

    
        }
    
    
        return $list;
    }
}
