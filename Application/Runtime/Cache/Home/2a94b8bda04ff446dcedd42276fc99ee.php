<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}
ul{ list-style: none}

.top{ width: 100%; text-align: center;}
.top h2{ margin-top: 50px;}

form{ width: 450px; margin: 0 auto; margin-top: 50px;}
form input{
    width: 300px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding-left: 5px;
    font-size: 14px;
}

form p{
    margin-top: 20px;
    width: 100%;
}

form span{
    width: 100px;
    text-align: right;
    display: inline-block;
}

.where .a_button{
    width: 50px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    background: green;
    color: #fff;
    border: 1px solid green;
    border-radius: 5px;
    margin: 0 auto;
}

.where{
    width: 500px;
    margin: 0 auto;
    margin-top: 20px;
}

.where a{
    padding: 5px;
    border: 1px solid rgba(0, 150, 0, 0.55);
    border-radius: 3px;
    white-space:nowrap;
    display: inline-block;
    margin-top: 10px;
    margin-left: 10px;
    color: #666;
}

.where .a_selected{
    background: rgba(0, 150, 0, 0.55);
    color: #fff;
}

.where li{
    height: 60px;
}

.where span{
    font-size: 18px;
}

.where input{
    width: 100px;
    height: 30px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-left: 10px;
}

.where .senior_where{
    height: auto;
}

.where .senior_where p{
    padding-left: 0px;
}

.where .senior_where p span{
    font-size: 14px;
    width: 100px;
    text-align: right;
    display: inline-block;
}

.house_list{
    width: 500px;
    margin: 0 auto;
    margin-top: 50px;
}

.house_list li{
    margin-top: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 5px;
}

.house_img{
    float: left;
}

.house_desc{
    float: right;
}

.house_img img{
    width: 100px;
    height: 100px;
}

.house_content{
    width: 380px;
    word-wrap: break-word;
}

.house_desc .house_title{
    font-weight: bold;
}

.house_price{
    margin-top: 15px;
}

.house_tags{
    margin-top: 10px;
}

.house_tags a{
    color: #000;
    border: 1px solid #99dd92;
    padding: 2px 5px;
}
</style>

<div class="top">
    <h2>房源筛选</h2>
</div>

<div class="main">
    <ul class="where">
        <li>
                <!-- class="a_selected" -->
            <span>区域：</span>
            <a href="#" class="region" value="all">全部</a>
            <a href="#" class="region" value="1">昌平</a>
            <a href="#" class="region" value="2">海淀</a>
            <a href="#" class="region" value="3">朝阳</a>
        </li>
        <li>
            <span>排序：</span>
            <a href="#" class="sort" value="time">按时间排序</a>
            <a href="#" class="sort" value="price">按价格排序</a>
            <a href="#" class="sort" value="matching">按匹配度排序</a>
        </li>
        <li>
            <span>价格：</span>
            <input type="text" class="price_start"> ~ <input type="text" class="price_end">
            <a class="a_button" href="#">搜索</a>
        </li>
        <li class="senior_where">
            <span>高级筛选：</span>
            <a href="" class="a_selected">重置</a>
            <p>
                <span>房屋类型：</span>
                <a href="">酒店式公寓</a>
                <a href="">小区式公寓</a>
            </p>
            <p>
                <span>出租方式：</span>
                <a href="">整租</a>
                <a href="">合租</a>
            </p>
            <p>
                <span>居室：</span>
                <a href="">一室</a>
                <a href="">二室</a>
                <a href="">三室</a>
                <a href="">四室</a>
            </p>
            <p>
                <span>特色配置：</span>
                <a href="">独立阳台</a>
                <a href="">独立卫浴</a>
                <a href="">空调</a>
                <a href="">WiFi</a>
            </p>
        </li>
    </ul>
    <div style="clear:both"></div>
    <div class="house_list">
        <ul>
        <?php if(is_array($res)): foreach($res as $key=>$val): ?><li>
                <div class="house_img">
                    <img src="/demo/Public/a.png" alt="">
                </div>
                <div class="house_desc">
                    <p class="house_title"><?php echo ($val["room_name"]); ?></p>
                    <p class="house_content">
                        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($val["room_content"]); ?>
                    </p>
                    <p class="house_tags">
                        <a href=""><?php echo ($val["type_name"]); ?></a>
                        <a href=""><?php if($val['mode'] == 1){ ?>
                            <?php echo 整租?>
                        <?php }else{ ?>
                            <?php echo 合租?>
                        <?php } ?>
                        </a>
                        <a href=""><?php echo ($val["room_num"]); ?>室</a>
                    </p>
                    <p class="house_price">
                        价格：￥<span style="margin-right:20px;"><?php echo ($val["price"]); ?></span>

                        时间：<span><?php echo ($val["time"]); ?></span>
                    </p>
                </div>
                <div style="clear:both"></div>
            </li><?php endforeach; endif; ?>
        </ul>
    </div>
</div>
<script src="/demo/Public/jquery.js"></script>
<script>
    var region = null;
    var sort = null;
    //地区
    $('.region').click(function(){
        // alert(1)
        $(this).attr('class','a_selected region');
        $(this).siblings().attr('class','region');
        region = $(this).attr('value');
    });

    //排序
    $('.sort').click(function(){
        // alert(1)
        $(this).attr('class','a_selected sort');
        $(this).siblings().attr('class','sort');
        sort = $(this).attr('value');
    });

    //点击搜索传值
    $('.a_button').click(function(){
        var price_start = $('.price_start').val();
        var price_end = $('.price_end').val();
        $.ajax({
            type:"get",
            url:"<?php echo U('Index/aaa');?>",
            dataType:'json',
            data:{region:region,sort,sort,price_start:price_start,price_end:price_end},
            success:function(msg){
            var str='';
              str +='<ul>';
              $.each(msg,function(k,v){
                str +='<li>';
                str+='<div class="house_img">';
                    str+='<img src="/demo/Public/a.png" alt="">';
                str+= '</div>';
                str+= '<div class="house_desc">';
                    str+= '<p class="house_title">'+v.room_name+'</p>';
                    str+= '<p class="house_content">';
                        str+= '&nbsp;&nbsp;&nbsp;&nbsp;'+v.room_content+'';
                    str+= '</p>';
                    str+= '<p class="house_tags">';
                        str+= '<a href=""><?php echo ($val["type_name"]); ?></a>';
                        str+= '<a href=""><?php if('+v.mode+' == 1){ ?>';
                            str+= '<?php echo 整租?>';
                        str+= '<?php }else{ ?>';
                            str+= '<?php echo 合租?>';
                        str+= '<?php } ?>';
                        str+= '</a>';
                        str+= '<a href="">'+v.room_num+'室</a>';
                    str+= '</p>';
                    str+= '<p class="house_price">';
                        str+= '价格：￥<span style="margin-right:20px;">'+v.price+'</span>';

                        str+= '时间：<span></span>';
                    str+= '</p>';
                str+= '</div>';
                str+= '<div style="clear:both"></div>';
            str+= '</li>';
              });
        str+='</ul>';
        $('.house_list').html(str);
            }
        });
    });

</script>