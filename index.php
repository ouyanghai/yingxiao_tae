<script>g_hb_monitor_st=+new Date();window.g_config={appId:2,assetsHost:"http://a.tbcdn.cn"};</script>
<script src="http://a.tbcdn.cn/??s/kissy/1.1.6/seed-min.js,p/shop/1.0/shop-min.js?t=20130812.js"></script>
<?php if( isset($_GET['module_width']) && $_GET['module_width'] == '950' ){ ?>
<link rel="stylesheet" href="/assets/stylesheets/950.css" />
<?php }else{ ?>
<link rel="stylesheet" href="/assets/stylesheets/750.css" />
<?php } ?>

<?php
$button_anniu = array(
    "0"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2k_GGXnhaXXXXXXXX_!!62192401.png",
    "1"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2jnGGXnlaXXXXXXXX_!!62192401.png",
    "2"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2PTGGXl8aXXXXXXXX_!!62192401.png",
    "3"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2M_GGXmdaXXXXXXXX_!!62192401.png",
    "4"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2enKGXkRaXXXXXXXX_!!62192401.png",
    "5"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2f_KGXkJaXXXXXXXX_!!62192401.png",
    "6"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2KnKGXjlaXXXXXXXX_!!62192401.png",
    "7"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2MDKGXjdaXXXXXXXX_!!62192401.png",
    "8"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2eDOGXh4aXXXXXXXX_!!62192401.png",
    "9"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2bnOGXiXaXXXXXXXX_!!62192401.png",
    "10"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2ETOGXg4aXXXXXXXX_!!62192401.png",
    "11"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2NnOGXgNaXXXXXXXX_!!62192401.png",
    "12"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T27TOGXf8aXXXXXXXX_!!62192401.png",
    "13"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2b_SGXfRaXXXXXXXX_!!62192401.png",
    "14"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2xTSGXfXaXXXXXXXX_!!62192401.png",
    "15"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2GTSGXeNaXXXXXXXX_!!62192401.png",
    "16"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T26TSGXd8aXXXXXXXX_!!62192401.png",
    "17"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2f_WGXdJaXXXXXXXX_!!62192401.png",
    "18"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2wDWGXdhaXXXXXXXX_!!62192401.png",
);
$button_leixing = array(
    "1" => "http://img01.taobaocdn.com/imgextra/i1/62192401/T2VfJSXdteXXXXXXXX-62192401.png",
    "2" => "http://img03.taobaocdn.com/imgextra/i3/62192401/T2TeNKXlxcXXXXXXXX-62192401.png",
    "3" => "http://img03.taobaocdn.com/imgextra/i3/62192401/T2n7i7XgFXXXXXXXXX-62192401.png",
    "4" => "http://img04.taobaocdn.com/imgextra/i4/62192401/T2WrxoXjBOXXXXXXXX-62192401.png",
);

# 读取数据，分两步（1. 读取缓存，不存在则 2. 直接读取自己服务器数据，再存缓存）
$sid = isset($_GET['shop_id']) ? $_GET['shop_id'] : '';
$cache = $cacheService->get( "tg_{$sid}" );

if( empty($cache) ){
    $url = "http://i.haodianpu.com/yingxiao/tuangou/getdata?sid=".$sid;
    $json = $fetchService->fetchByGet($url);
    $content = json_decode($json);
    $data = $content->items;
    
    # 添加缓存
    if( time() >= $content->deadline )
        # 活动已到期，则保持100天到期数据
        $expired = 3600*24*300;
    else
        $expired = intval($content->deadline-time());
    
    $cacheService->set( "tg_{$sid}", $json, $expired );
}else{
    $content = json_decode($cache);
    $data = $content->items;
}

if( empty($data) ){
    echo "<table width=\"100%\" height=\"450px\"><tr><td align=\"center\"><img src=\"http://img04.taobaocdn.com/imgextra/i4/62192401/T2AOI6XmdXXXXXXXXX_!!62192401.jpg\" border=\"0\" /></a></tr></td></table>";
}else{
?>
<div id="content" data-cat="J_Cat0">
    <div class="tuanbox">
        <div class="bd">
            <div class="J_TWidget" data-widget-type="Tabs" data-widget-config="{'effect':'none', 'autoplay':false, 'circular':true}">
                <ul class="ks-switchable-nav">
                <?php foreach( $data as $i => $val ){ ?>
                    <li <?php if( $i==0 ){ echo 'class="ks-active"'; } ?>>
                        <div class="tuanlist">
                            <div class="tuanlistimg" ><a href="http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>" target="_blank"><img src="<?php echo $val->pic_url_small; ?>"></a></div>
                            <?php if( isset($_GET['module_width']) && $_GET['module_width']==950 ){ ?>
                            <div class="tuanlistinfo"><?php echo urldecode_utf8($val->title); ?></div>
                            <div class="price"><?php echo $val->tg_jiage; ?><img src="http://img01.taobaocdn.com/imgextra/i1/62192401/T2nhK7XjFXXXXXXXXX-62192401.gif" align="absmiddle"/></div>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
                </ul>
            
                <div class="ks-switchable-content">
                    <?php foreach( $data as $i => $val ){ ?>
                    <div class="tuanboxplay" <?php if($i>0){ echo 'style="display:none;"'; } ?>>
                        <div class="bigtitle taeapp_title"><a class="title_link_<?php echo $i; ?>" target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>"><?php echo urldecode_utf8($val->title); ?></a></div>

                        <div class="mybox1">
                            <div class="mytuan">
                                <div class="d1">
                                    <?php $jiage_arr = explode('.', $val->tg_jiage); ?>
                                    <p class="tuanprice"> ￥ <span style="font-size:36px;" class="price_int_<?php echo $i; ?>"><?php echo $jiage_arr[0]; ?></span>.<span class="price_decimal_<?php echo $i; ?>"><?php echo $jiage_arr[1]; ?></span></p>
                                    
                                    <?php if( strtotime($val->end_time) > time() ){ ?>
                                    <p class="tuanbtn naniu_<?php echo $i; ?>" style="background:url('<?php echo $button_anniu[$val->tg_anniu]; ?>') no-repeat center;"><a class="tuang_link_<?php echo $i; ?>" target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>"> </a></p>
                                    <?php } ?>
                                </div>
                                
                                <div class="d2">
                                    <p><s class="price_old_<?php echo $i; ?>">￥<?php echo $val->price; ?></s></p>
                                    <p style="color:#F60" class="price_discount_<?php echo $i; ?>"><?php echo $val->discount; ?></p>
                                    <p style="color:#309B00" class="price_new_<?php echo $i; ?>"><?php echo floatval($val->price - $val->tg_jiage); ?></p>
                                </div>
                            </div>
                        
                            <div class="myinfo"><span style="color:#66B024;font-size:33px;" class="tuan_amount_<?php echo $i; ?>"><?php echo $val->tg_volume; ?></span> 人已购买<br/>数量有限，赶快下单吧！</div>
                            
                            <div class="mytime taeapp_mytime">
                                <div class="J_TWidget tuan_time_<?php echo $i; ?>" data-widget-type='Countdown' data-widget-config="{'endTime':'<?php echo $val->end_time; ?>', 'interval':1000, 'timeRunCls':'.ks-countdown-run', 'timeUnitCls':{'d':'.ks-d', 'h':'.ks-h', 'm':'.ks-m', 's':'.ks-s', 'i':'.ks-i'}, 'minDigit':1, 'timeEndCls':'.ks-countdown-end'}">
                                    <table class="time-count ks-countdown-run" align="center" style="line-height:25px;">
                                        <tr>
                                            <td class="tit">剩余时间: </td>
                                            <td class="ks-d value"></td><td class="unit">天</td>
                                            <td class="ks-h value"></td><td class="unit">时</span>
                                            <td class="ks-m value"></td><td class="unit">分</span>
                                            <td class="ks-s value"></td><td class="unit" width="50" style="background:url(http://img03.taobaocdn.com/imgextra/i3/62192401/T2OuXlXahOXXXXXXXX-62192401.gif) no-repeat 0 -6px;">秒</td>
                                        </tr>
                                    </table>

                                    <div style="display:none;" class="ks-countdown-end">抱歉，团购已经结束</div> 
                                </div>
                            </div>
                            
                            <div class="myother taeapp_myother"><img class="other_pic_<?php echo $i; ?>" src="<?php echo $button_leixing[$val->tg_leixing]; ?>"></div>

                            <div class="taeapp_sharetuan" style="padding-left:30px;">
                                <ul>
                                    <li style="width:50px;background:none;">分享到：</li>
                                    <li>
                                        <a class="share_taobao_<?php echo $i; ?>" title="分享到淘江湖" target="_blank" href="http://share.jianghu.taobao.com/share/addShare.htm?url=http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>&title=<?php echo urldecode_utf8($val->title); ?>&pic=<?php echo $val->pic_url_small; ?>"><input class="taobao"></a>
                                    </li>

                                    <li>
                                        <a class="share_kaixin_<?php echo $i; ?>" title="分享到开心网" target="_blank" href="http://www.kaixin001.com/rest/records.php?style=11&url=http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>&title=<?php echo $val->title; ?>&pic=<?php echo $val->pic_url_small; ?>"><input class="kaixin001"></a>
                                    </li>
                                    
                                    <li>
                                        <a class="share_renren_<?php echo $i; ?>" title="分享到人人网" target="_blank" href="http://widget.renren.com/dialog/feed?url=http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>&title=<?php echo $val->title; ?>&pic=<?php echo $val->pic_url_small; ?>"><input class="renren"></a>
                                    </li>

                                    <li>
                                        <a class="share_qq_<?php echo $i; ?>" title="分享到腾讯微博" target="_blank" href="http://share.v.t.qq.com/index.php?c=share&a=index&url=http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>&title=<?php echo $val->title; ?>&pic=<?php echo $val->pic_url_small; ?>"><input class="qq"></a>
                                    </li>
                                    
                                    <li>
                                        <a class="share_sina_<?php echo $i; ?>" title="分享到新浪微博" target="_blank" href="http://service.weibo.com/share/share.php?url=http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>&title=<?php echo $val->title; ?>&pic=<?php echo $val->pic_url_small; ?>"><input class="sina"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                        <div class="mybox2">
                            <div class="pic pic_big_<?php echo $i; ?>" style="background-image:url('<?php echo $val->pic_url; ?>');"><a target="_blank"  href="http://item.taobao.com/item.htm?id=<?php echo $val->num_iid; ?>"></a></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
// 店铺浏览js初始化
TShop.use('init', function() {
    TShop.init();
});
</script>
<?php } ?>