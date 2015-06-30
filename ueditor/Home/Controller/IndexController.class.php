<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
       $this->display();
    }

    public function editor(){
    	$editor=new \Org\Util\Ueditor();
    	echo $editor->output();
    }
    public function deal(){

    	header("Content-type:text/html;charset=utf-8");
    	$data=array();
    	$data['new_content']=I('post.content');
    	$data['new_ahtor']=I('post.author');
    	$data['new_title']=I('post.title');

    	if($data['new_content']==''||$data['new_ahtor']==''||$data['new_title']==''){
    		echo "内容不符合要求";
    		return ;
    	}
    	else{
    		$m=M("new");

    		if($m->create($data)){
    			$m->add($data);

    		}
    		else{
    			echo "失败了";
    		}

    	}
    	
    	// $aa=htmlspecialchars_decode($content);
    	
    }

    public function getNew(){

    	$m=M('new');
    	$content=(array)($m->select());

        // $content['0']['new_content']=htmlspecialchars_decode($content['0']['new_content']);
        $this->assign("content",$content);
        $this->display();
        

    }
}