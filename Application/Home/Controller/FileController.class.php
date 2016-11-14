<?php
namespace Home\Controller;
use Home\Model\FileModel;
use Home\Model\FileTempModel;
use Home\Controller\BaseController;


class FileController extends BaseController {
    
    public function showList(){
        $searchValue = I('searchValue');
        $file_temp_id = I("file_temp_id");
        
        $this->assign('file_temp_id',$file_temp_id);
        $fileTempModel = new FileTempModel();
        $fileTempList = $fileTempModel->getFileTempList();
        $this->assign('fileTempList',$fileTempList);
        
        $where['id'] = $file_temp_id;
        $tempinfo = $fileTempModel->where($where)->find();
        $tempinfo['name'] = json_decode($tempinfo['name'],1);
      //  var_dump($tempinfo);exit();
        $this->assign('tempinfo',$tempinfo);

        
        if (!isset($file_temp_id) || !$file_temp_id){
            $this->display();
            exit();
            
        }
         
        $model = new FileModel();
        $data = $model->showList($searchValue,$file_temp_id);
    
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->assign('searchValue',$searchValue);
        

        
        $this->display();
    }
    
    public function detail(){
        $model = M('File');
        $id = I('id');
        if (isset($id) && $id){
            $where['id'] = $id;
            $info = $model->where($where)->find();
            $this->assign('info',$info);
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    public function modify(){
        $model = M('File');
        $id = I('id');
  
        if (isset($id) && $id){
            $where['id'] = $id;
            $info = $model->where($where)->find();
    
            $this->assign('info',$info);
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    public function  add(){
        if ('menu' == I('type')){
            $fileTempModel = new FileTempModel();
            $info['fileTempList'] = $fileTempModel->getFileTempList();
            $this->assign('info',$info);
            $file_temp_id = I("file_temp_id");
            $this->assign('file_temp_id',$file_temp_id);
            if (isset($file_temp_id) && $file_temp_id){
                $fileTemp = M('file_temp');
                $where['id'] = $file_temp_id; 
                $tempinfo = $fileTemp->where($where)->find();
                $tempinfo['name'] = json_decode($tempinfo['name'],1);
                //var_dump($tempinfo);exit();
                $this->assign('tempinfo',$tempinfo);
            }else{
                $this->assign('tempinfo',array());
            }
            
            $this->display();exit();
        }
        $getData = $_GET;
        
        $data['file_temp_id'] = $getData['file_temp_id'];
        unset($getData['file_temp_id']);
        $data['value'] = json_encode($getData);
         
        $model = M('File');
        $this->check($data,"add?type=menu");
    

        $data['ctime'] = date('Y-m-d H:i:s');
        $data['cuid'] = $_SESSION['authId'];
        $res = $model->add($data);
        if ($res == false){
            $this->error('添加失败');
        }else{
            $this->success('添加成功','showList?file_temp_id='.$_GET['file_temp_id']);
        }
    
    }
    
    public function save(){
        $id = I('id');
        $data = $_POST;
        $model = M('File');
        $this->check($data,"modify?id=".$id);
    
        $data['name'] = json_encode($data['name']);
        if (isset($id) && $id){
    
            $where['id'] = $id;
            $res = $model->where($where)->save($data);
             
            if ($res === false){
                $this->error('保存失败');
            }else{
                $this->success('保存成功','showList');
            }
    
    
        }else{
            $this->error('id 丢失');
        }
    }
    
    public function del(){
        $id = I('id');
    
        $model = M('File');
    
        if (isset($id) && $id){
            $data['is_valid'] = '0';
            $where['id'] = $id;
            $res = $model->where($where)->save($data);
             
            if ($res === false){
                $this->error('删除失败');
            }else{
                $this->success('删除成功','showList');
            }
    
    
        }else{
            $this->error('id 丢失');
        }
    }
    private function check($data,$gourl){

    
    
    
    }
}