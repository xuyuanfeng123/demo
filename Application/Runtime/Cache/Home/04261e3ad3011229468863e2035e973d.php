<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 700px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}

a{ color: #333; text-decoration: none}

.top{ width: 100%; background: rgba(14, 196, 210, 0.99); color: #fff; height: 100px; line-height: 150px; text-align: right;}
.top span{ margin-right: 20px}


.left{ width: 260px; float: left; height: 100%; background: rgba(121, 217, 221, 0.4)}
.left ul{ list-style: none; width: 100%;}
.left ul li{ height: 40px; width: 100%; border: 1px solid #ddd; line-height: 40px; text-align: center;}
.left .selected{ background: rgba(14, 196, 210, 0.99); color: #fff}
.left .selected a{ color: #fff}

.right{ float: left; width: 1020px;}
.page-title{ margin-left: 10px; margin-top: 5px; font-size: 12px; color: rgba(14, 196, 210, 0.99)}
.title{ background: rgba(14, 196, 210, 0.99); color: #fff}
.search-box{ width: 500px; margin: 0 auto; margin-top: 100px; }
.search-input{ width: 350px; height: 40px; border: 1px solid #999; border-radius: 3px; font-size: 14px; padding-left: 5px; vertical-align: middle; margin-left: 25px;}
.search-button{ width: 100px; height: 38px; border: 1px solid #999; border-radius: 3px; text-decoration: none; display: inline-block; vertical-align: middle; text-align: center; line-height: 38px; color: #fff; background: #666}
</style>

<div class="top">
    <span>欢迎管理员：admin</span>
</div>

<div class="left">
    <ul>
        <li>用户列表</li>
        <li><a href="<?php echo U('Index/index');?>">今日出勤</a></li>
        <li class="selected"><a href="<?php echo U('Index/signs');?>">出勤统计</a></li>
    </ul>
</div>

<div class="right">
    <div class="page-title">首页>>出勤统计</div>
        <table>
            <tr class="title">
                <td colspan="7">本月出勤统计</td>
            </tr>
            <tr>
                <td>员工姓名</td>
                <td>全勤</td>
                <td>迟到次数</td>
                <td>早退次数</td>
                <td>旷工上半天次数</td>
                <td>旷工下半天次数</td>
                <td>旷工一天次数</td>
                <td>本月应发工资</td>
            </tr>
            <?php foreach ($aa as $ke => $val) {?>
            <?php foreach ($aa[$ke] as $kk => $vv) {?>
            <?php foreach ($aa[$ke] as $kk => $vv) {?>
            <tr>
                <td><?php print_r($ke)?></td>

                <td>
                <?php if($kk == 1){?>
                    <?= $vv?>
                <?php }else{?>

                <?php }?>
                </td>

                <td>
                <?php if($kk == 2){?>
                    <?= $vv?>
                <?php }else{?>

                <?php }?>

                </td>
                <td>
                <?php if($kk == 3){?>
                    <?= $vv?>
                <?php }else{?>

                <?php }?>
                </td>

                <td>

                <?php if($kk == 4){?>
                <?= $vv?>
                <?php }else{?>

                <?php }?>
                </td>
                <td>

                <?php if($kk == 5){?>
                <?= $vv?>
                <?php }else{?>

                <?php }?>
                </td>
                <td>
                <?php if($kk == 0){?>
                <?= $vv?>
                <?php }else{?>

                <?php }?>
                </td>
                <td>
                    <?php if($kk == 1){?>
                        $15000
                    <?php }else if($kk == 2){?>
                        $<?= 15000-10*$vv?>
                    <?php }else if($kk == 3){?>
                        $<?= 15000-10*$vv?>
                    <?php }else if($kk == 4){?>
                        $<?= 15000-500*$vv?>
                    <?php }else if($kk == 5){?>
                        $<?= 15000-500*$vv?>
                    <?php }else if($kk == 0){?>
                        $<?= 15000-1000*$vv?>
                    <?php }?>
                </td>
            </tr>
            <?php }?>
            <?php }?>
            <?php }?>
        </table>
    </div>
</div>