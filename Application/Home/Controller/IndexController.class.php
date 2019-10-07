<?php
namespace Home\Controller;
use Think\Controller;
use think\Image;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {

    public function index(){     
        if ($_POST) {
            if($_FILES['thumb']['name']){   // 上传文件
                $thumb = imgFile();
                $info = $thumb['info'];
                if(!$info) {// 上传错误提示错误信息
                    echo "<script>alert('上传失败');window.location.href = '".__ROOT__."/index.php/Home/Index/index';</script>";
                }else{// 上传成功
                    $path = $info['thumb']['savepath'];
                    $p = ltrim($path,'.');
                    $img = $info['thumb']['savename'];
                    $pic=$p.$img;

                    $image = new \Think\Image();
                    $image->open('./'.__ROOT__.$pic);
                    // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                    $image->thumb(800, 800)->save('./'.__ROOT__.$pic);

                    $data['url'] =__ROOT__.$pic;
                    $data['addtime'] =date('Y-m-d H:i:s');
                    
                    M("pic")->add($data);

                     $id =1; 
                    if ($_GET['id']) {
                        $id= $_GET['id'];
                    }
                   $res =  M("jump")->where(array('id'=>$id))->save(array('isadd'=>1));
                    // echo "success";die;
                    echo "<script>window.location.href = '".__ROOT__."/index.php/Home/Index/alert';</script>";
                }
                 
            }
          
          }  
        $this->display();
    }

    public function indexnew(){
       $mpic= M('pic');
      
       if (!session('page')){
           session('page',1);
       }
        $page=session('page');
       $res =  $mpic->limit(20)->order("id desc")->select();

       $this->assign("res",$res);

       $this->display();
    }


     public function indexduologo(){
       $mpic= M('pic');
      
       if (!session('page')){
           session('page',1);
       }
        $page=session('page');
       $res =  $mpic->limit(20)->order("id desc")->select();
       // print_r($res);die;
       $this->assign("res",$res);

       $this->display();
    }

     public function indexduo(){
       $mpic= M('pic');
      
       if (!session('page')){
           session('page',1);
       }
        $page=session('page');
       $res =  $mpic->limit(20)->order("id desc")->select();
       // print_r($res);die;
       $this->assign("res",$res);

       $this->display();
    }

    public function fang(){
       if (!session('id')){
           session('id',1);
       }
       $id=1;
       $mpic= M('pic');
       $all = 12 ;
       $total =  $mpic->count();
        $map['id']  = array('egt',session('id'));

       if ( $total < 16 ){
           $res =  $mpic->limit(16)->order("id desc")->select();
           $temarray=array();
           $res_array =array();
           foreach ($res as $k=>$v){
               if($v['ishide'] ==1){
                   continue;
               }
               if ($v['id'] > $id){
                   $id= $v['id'];
               }

               $temarray[] =$v;
               if( ($k+1) % 3 == 0 && $k!=0){
                   $res_array[] =$temarray;
                   $temarray=array();
               }

//               if($k == 15){
//                   $res_array[] =$temarray;
//               }

//               if ( ($total-5) < session('id') ){
//                   session('id',1);
////                   echo "<script>window.location.href = '".__ROOT__."/index.php/Home/Index/fang';</script>";
//               }else{
//                   session('id',1);
//               }

           }

           $all= count($res_array) * 3;

       }
        if ($total >= 16){
            $all = 16 ;
            $res =  $mpic->where($map)->limit(16)->select();

            $res = array_reverse($res);

            $temarray=array();
            $res_array =array();
            foreach ($res as $k=>$v){
                if($v['ishide'] ==1){
                    continue;
                }
                if($k % 4 == 0 && $k!=0){
                    $res_array[] =$temarray;
                    $temarray=array();
                }

                $temarray[] =$v;
                if($k == 15){
                    $res_array[] =$temarray;
                }

                if ($v['id'] > $id){
                    $id= $v['id'];
                }
            }

            if ( ($total-5) < session('id')  ){
                session('id',$id-16);
                echo "<script>window.location.href = '".__ROOT__."/index.php/Home/Index/fang';</script>";
            }else{
                session('id',$id);
            }
        }

        $this->assign("res",$res_array);
        $this->assign("total",$all);
       $this->display();
    }


    public function isone(){
        $id =1; 
        if ($_GET['id']) {
            $id= $_GET['id'];
        }
       $res =  M("jump")->where(array('id'=>$id))->find();
       $result= 1;
       if($res['url'] !="onehen"){
         $result= 0;
       }
       if ($res['isadd'] ==1) {
            M("jump")->where(array('id'=>$id))->save(array('isadd'=>0));
       }
       print_r($res['isadd']);
    }

    public function one(){
        $mpic= M('pic');
        $res =  $mpic->where(array('ishide'=>0))->limit(20)->order("id desc")->select();
        $this->assign("res",$res);
        $this->assign("count",count($res)*2 );
        $this->display();
    }

     public function logo(){
       
        $this->display();
    }

    public function onehen(){
        $mpic= M('pic');
        $res =  $mpic->where(array('ishide'=>0))->order("id desc")->select();
        $this->assign("res",$res);
        $this->assign("count",count($res)*2*1000 );
        $this->display();
    }

    public function kong(){
         $id =1; 
        if ($_GET['id']) {
            $id= $_GET['id'];
        }
        $map['id'] = $id;
        $isurl= M("jump")->where($map)->find();
        if($_POST){
             $id =1; 
            if ($_GET['id']) {
              $id= $_GET['id'];
            }

			   
            if (empty($isurl)) {
                $data['id']=$id;
                $data['url']=$_POST['type'];
                M("jump")->add($data);
            }else{
                  $res =  M("jump")->where($map)->save(array('url'=>$_POST['type']));
            }
          
		
            echo "<script>alert('修改成功,当前播放完立即跳转');window.location.href = '".__ROOT__."/index.php/Home/Index/kong/id/".$id." ';</script>";
            exit();
        }
        $this->assign("res",$isurl);
        $this->display();
    }
}