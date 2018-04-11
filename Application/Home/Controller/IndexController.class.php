<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){
        $sql = "select region_name,config_name,type_name,price,room_name,room_content,time,room_num,mode from room,region,room_config,room_type where room.rid = region.r_id and room.type_id = room_type.room_type_id and room.cid = room_config.room_config_id";
        $res = M('room')->query($sql);

        $this->assign('res',$res);
        $this->display();
    }

    public function aaa(){
        $data = I('param.');
        $region = $data['region'];
        $sort = $data['sort'];
        $price_start = $data['price_start'];
        $price_end = $data['price_end'];
        $sql = "select region_name,config_name,type_name,price,room_name,room_content,time,room_num,mode from room,region,room_config,room_type where room.rid = region.r_id and room.type_id = room_type.room_type_id and room.cid = room_config.room_config_id and room.rid = $region and price between $price_start and $price_end ORDER BY $sort DESC";
        $res = M('room')->query($sql);
        $res = json_encode($res);
        return $res;
    }


}