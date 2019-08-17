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
                    echo "<script>alert('上传成功');window.location.href = '".__ROOT__."/index.php/Home/Index/index';</script>";
                }
                 
            }
          
          }  
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


    public function one(){
        $mpic= M('pic');
        $res =  $mpic->where(array('ishide'=>0))->limit(20)->order("id desc")->select();
        $this->assign("res",$res);
        $this->assign("count",count($res)*2 );
        $this->display();
    }

    public function kong(){
        if($_POST){
            M("jump")->save(array('url'=>$_POST['type']));
            echo "<script>alert('修改成功,当前播放完立即跳转');window.location.href = '".__ROOT__."/index.php/Home/Index/kong';</script>";
            exit();
        }
        $this->display();
    }
}