<?php
namespace Home\Controller;
use Home\Model\FileTempModel;
use Home\Controller\BaseController;
use Think\Model;
class FileTempController extends BaseController {
    
    public function showList(){
        $searchValue = I('searchValue');
         
        $model = new FileTempModel();
        $data = $model->showList($searchValue);
    
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->assign('searchValue',$searchValue);
        $this->display();

    }
    
    public function detail(){
        $model = M('File_temp');
        $id = I('id');
        if (isset($id) && $id){
            $where['id'] = $id;
            $info = $model->where($where)->find();
            $info['name'] = json_decode($info['name'],1);
            $this->assign('info',$info);
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    public function modify(){
        $model = M('File_temp');
    
        $id = I('id');
        if (isset($id) && $id){
            $where['id'] = $id;
            $info = $model->where($where)->find();
            $info['name'] = json_decode($info['name'],1);
           
          //  var_dump($info['name']);exit();
            
            $this->assign('info',$info);
        }else{
            $this->error('id缺失');
        }
        $this->display();
    }
    public function  add(){
        if ('menu' == I('type')){
            $this->display();exit();
        }
        $data = $_POST;

        $model = M('File_temp');
        $this->check($data,"add?type=menu");
        $data['name'] = array_combine($data['key'],$data['name']);
        unset($data['key']);
        $data['name'] = json_encode($data['name']); 
        
        $data['ctime'] = date('Y-m-d H:i:s');
        $data['cuid'] = $_SESSION['authId'];
        $res = $model->add($data);
        if ($res == false){
            $this->error('添加失败');
        }else{
            $this->success('添加成功','showList');
        }
    
    }
    
    public function save(){
        $id = I('id');
        $data = $_POST;
        $model = M('File_temp');
        $this->check($data,"modify?id=".$id);
    
        $data['name'] = array_combine($data['key'],$data['name']);
        unset($data['key']);
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
    
        $model = M('File_temp');
    
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
        if (isset($data['title']) && mbstrlen($data['title']) > 30 ){
            $this->error('档案模板名称必须小于30字',$gourl);
        }
        if (isset($data['mark']) && mbstrlen($data['mark']) > 100 ){
            $this->error('档案模板名称必须小于100字',$gourl);
        }
        
        if (isset($data['name']) && !$data['name'] && !is_array($data['name'])){
            $this->error('至少需要一个列名');
        }
    
    
    
    }
}