<?php
// 获取参数
$type = isset($_GET['type']) ? $_GET['type'] : '';
$time = isset($_GET['time']) ? $_GET['time'] : 0;
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// 按钮背景图
$bg_buttons = array(
    // 0=>有效，1=>过期
    "750_01" => array("http://img01.taobaocdn.com/imgextra/i1/62192401/T2ZfPMXlpaXXXXXXXX-62192401.png", "http://img02.taobaocdn.com/imgextra/i2/62192401/T2OaYTXdRaXXXXXXXX-62192401.png"),
    
    "750_02" => array("http://img01.taobaocdn.com/imgextra/i1/62192401/T2mFDTXf8aXXXXXXXX-62192401.png", "http://img04.taobaocdn.com/imgextra/i4/62192401/T2V3bTXhtXXXXXXXXX-62192401.png"),
    
    "750_03" => array("http://img03.taobaocdn.com/imgextra/i3/62192401/T2bHPLXdtbXXXXXXXX-62192401.png", "http://img01.taobaocdn.com/imgextra/i1/62192401/T2ccYTXbtaXXXXXXXX-62192401.png"),
    
    "950_01" => array("http://img01.taobaocdn.com/imgextra/i1/62192401/T2VJTTXlRXXXXXXXXX-62192401.png", "http://img03.taobaocdn.com/imgextra/i3/62192401/T21lWWXfFbXXXXXXXX-62192401.png"),
    
    "950_02" => array("http://img03.taobaocdn.com/imgextra/i3/62192401/T22sWXXjNcXXXXXXXX-62192401.png", "http://img03.taobaocdn.com/imgextra/i3/62192401/T22O6SXhNaXXXXXXXX-62192401.png"),
    
    "950_03" => array("http://img01.taobaocdn.com/imgextra/i1/62192401/T2wMLSXjxaXXXXXXXX-62192401.png", "http://img02.taobaocdn.com/imgextra/i2/62192401/T27RrTXd8XXXXXXXXX-62192401.png"),
);

// 购买按钮
$buttons = array(
    "button_1/0"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2AOPTXhJXXXXXXXXX-62192401.png",
    "button_1/1"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2MZjTXoXXXXXXXXXX-62192401.png",
    "button_1/2"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2s9DSXbpaXXXXXXXX-62192401.png",
    "button_1/3"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2RBzSXhFaXXXXXXXX-62192401.png",
    "button_1/4"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T28DLTXbNXXXXXXXXX-62192401.png",
    "button_1/5"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T21BdeXlVOXXXXXXXX-62192401.png",
    "button_1/6"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2EjLJXX0bXXXXXXXX-62192401.png",
    "button_1/7"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T21nPTXcVXXXXXXXXX-62192401.png",
    "button_1/8"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2nEPTXeBXXXXXXXXX-62192401.png",
    "button_1/9"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2t.fTXbtXXXXXXXXX-62192401.png",
    "button_1/10"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2VaRGXndNXXXXXXXX-62192401.png",
    "button_1/11"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2LF_TXdRaXXXXXXXX-62192401.png",
    "button_1/12"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2fqG0Xb4bXXXXXXXX-62192401.png",
    "button_1/13"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2cWqdXeXcXXXXXXXX-62192401.png",
    "button_1/14"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2j5zTXfRXXXXXXXXX-62192401.png",
    "button_1/15"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T23TYTXeXXXXXXXXXX-62192401.png",
    "button_1/16"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T213YSXi8aXXXXXXXX-62192401.png",
    "button_1/17"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2eBLSXgJaXXXXXXXX-62192401.png",
    "button_1/18"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2_NBhXdROXXXXXXXX-62192401.png",

    "button_2/0"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2PZGKXmJbXXXXXXXX-62192401.png",
    "button_2/1"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2ZLzEXnFaXXXXXXXX-62192401.png",
    "button_2/2"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2kzTTXeBXXXXXXXXX-62192401.png",
    "button_2/3"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2HXexXmNXXXXXXXXX-62192401.png",
    "button_2/4"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2jGPTXgpXXXXXXXXX-62192401.png",
    "button_2/5"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2zuDTXiXXXXXXXXXX-62192401.png",
    "button_2/6"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2LFFJXgNdXXXXXXXX-62192401.png",
    "button_2/7"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2rCDTXbtXXXXXXXXX-62192401.png",
    "button_2/8"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2hcfTXjhXXXXXXXXX-62192401.png",
    "button_2/9"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2B5PSXbJaXXXXXXXX-62192401.png",
    "button_2/10"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2.qFSXgVeXXXXXXXX-62192401.png",
    "button_2/11"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T20mTSXXVaXXXXXXXX-62192401.png",
    "button_2/12"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2n72TXi4XXXXXXXXX-62192401.png",
    "button_2/13"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T28GDTXkXXXXXXXXXX-62192401.png",
    "button_2/14"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2WP5VXgxbXXXXXXXX-62192401.png",
    "button_2/15"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2.ADTXelXXXXXXXXX-62192401.png",
    "button_2/16"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2TGaxXadcXXXXXXXX-62192401.png",
    "button_2/17"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2.2jTXnRXXXXXXXXX-62192401.png",
    "button_2/18"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2nlnTXehXXXXXXXXX-62192401.png",

    "button_3/0"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2j5bTXh0XXXXXXXXX-62192401.png",
    "button_3/1"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2k7rSXX4aXXXXXXXX-62192401.png",
    "button_3/2"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2SpzSXhpaXXXXXXXX-62192401.png",
    "button_3/3"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2ejnRXitaXXXXXXXX-62192401.png",
    "button_3/4"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2FhThXi0bXXXXXXXX-62192401.png",
    "button_3/5"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2XezjXcXbXXXXXXXX-62192401.png",
    "button_3/6"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2_bHSXodXXXXXXXXX-62192401.png",
    "button_3/7"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T24AvSXetaXXXXXXXX-62192401.png",
    "button_3/8"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2zavTXe0aXXXXXXXX-62192401.png",
    "button_3/9"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2zavTXe0aXXXXXXXX-62192401.png",
    "button_3/10"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2tW2SXnpaXXXXXXXX-62192401.png",
    "button_3/11"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2r5TSXfhaXXXXXXXX-62192401.png",
    "button_3/12"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2jxbSXetaXXXXXXXX-62192401.png",
    "button_3/13"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2wvfSXmdaXXXXXXXX-62192401.png",
    "button_3/14"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T24AvSXetaXXXXXXXX-62192401.png",
    "button_3/15"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2pXbqXXxbXXXXXXXX-62192401.png",
    "button_3/16"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2tW2SXnpaXXXXXXXX-62192401.png",
    "button_3/17"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2Vx2TXgpXXXXXXXXX-62192401.png",
    "button_3/18"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2WHDTXkJXXXXXXXXX-62192401.png",

    "button_4/0"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2HCYTXdhXXXXXXXXX-62192401.png",
    "button_4/1"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T24yNYXkxXXXXXXXXX-62192401.png",
    "button_4/2"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T25QtQXiBeXXXXXXXX-62192401.png",
    "button_4/3"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2BFjyXd4bXXXXXXXX-62192401.png",
    "button_4/4"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2W1LbXmdbXXXXXXXX-62192401.png",
    "button_4/5"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2vQrTXf0XXXXXXXXX-62192401.png",
    "button_4/6"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2gGvTXdlaXXXXXXXX-62192401.png",
    "button_4/7"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2ZUDRXl8aXXXXXXXX-62192401.png",
    "button_4/8"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T297xqXdBOXXXXXXXX-62192401.png",
    "button_4/9"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2z3_TXiXXXXXXXXXX-62192401.png",
    "button_4/10"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2RhfTXjlXXXXXXXXX-62192401.png",
    "button_4/11"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2VHnMXbBbXXXXXXXX-62192401.png",
    "button_4/12"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2J1LSXo4aXXXXXXXX-62192401.png",
    "button_4/13"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T26SfSXbJaXXXXXXXX-62192401.png",
    "button_4/14"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2VX6UXXJXXXXXXXXX-62192401.png",
    "button_4/15"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2_oLTXb8XXXXXXXXX-62192401.png",
    "button_4/16"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2WlPSXiBaXXXXXXXX-62192401.png",
    "button_4/17"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2Gu_TXjVXXXXXXXXX-62192401.png",
    "button_4/18"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2ZkbTXg0XXXXXXXXX-62192401.png"
);

// 时间
$times = array(
    "time_b/00"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2JD_SXgdaXXXXXXXX-62192401.png",
    "time_b/01"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2xJnTXoJXXXXXXXXX-62192401.png",
    "time_b/02"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2ADbTXdNXXXXXXXXX-62192401.png",
    "time_b/03"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2lN6NXllaXXXXXXXX-62192401.png",
    "time_b/04"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2.u_RXkdaXXXXXXXX-62192401.png",
    "time_b/05"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2NvXkXkXOXXXXXXXX-62192401.png",
    "time_b/06"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2VjyzXf8cXXXXXXXX-62192401.png",
    "time_b/07"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2edLSXh4aXXXXXXXX-62192401.png",
    "time_b/08"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2INjSXjJaXXXXXXXX-62192401.png",
    "time_b/09"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2YzHSXkVaXXXXXXXX-62192401.png",
    "time_b/10"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2f3bTXeVXXXXXXXXX-62192401.png",
    "time_b/11"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2uHR3XiddXXXXXXXX-62192401.png",
    "time_b/12"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2fTDTXbFXXXXXXXXX-62192401.png",
    "time_b/13"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2EBG6XipbXXXXXXXX-62192401.png",
    "time_b/14"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2A8fSXb4aXXXXXXXX-62192401.png",
    "time_b/15"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2ynvSXnhXXXXXXXXX-62192401.png",
    "time_b/16"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2LqJEXcXOXXXXXXXX-62192401.png",
    "time_b/17"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2wFroXX8aXXXXXXXX-62192401.png",
    "time_b/18"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2Qp_SXglaXXXXXXXX-62192401.png",
    "time_b/19"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2QEW3XdXbXXXXXXXX-62192401.png",
    "time_b/20"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2yzzTXhxXXXXXXXXX-62192401.png",
    "time_b/21"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2nmbTXh4XXXXXXXXX-62192401.png",
    "time_b/22"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2iPjMXnVaXXXXXXXX-62192401.png",
    "time_b/23"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2pNnTXhJXXXXXXXXX-62192401.png",
    "time_b/24"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2omrTXbNXXXXXXXXX-62192401.png",
    "time_b/25"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2orDMXlpaXXXXXXXX-62192401.png",
    "time_b/26"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2cMrTXhNXXXXXXXXX-62192401.png",
    "time_b/27"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2Wb2TXaBaXXXXXXXX-62192401.png",
    "time_b/28"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2U4J4XahdXXXXXXXX-62192401.png",
    "time_b/29"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2oTLSXkVaXXXXXXXX-62192401.png",
    "time_b/30"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2XwvTXopXXXXXXXXX-62192401.png",
    "time_b/31"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T21kYTXhFXXXXXXXXX-62192401.png",
    "time_b/32"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2k5PSXihXXXXXXXXX-62192401.png",
    "time_b/33"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2imLSXblaXXXXXXXX-62192401.png",
    "time_b/34"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2.94cXdhNXXXXXXXX-62192401.png",
    "time_b/35"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2ZKYJXm0aXXXXXXXX-62192401.png",
    "time_b/36"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2yiLMXmVaXXXXXXXX-62192401.png",
    "time_b/37"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2llzSXg0aXXXXXXXX-62192401.png",
    "time_b/38"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2xICOXf8bXXXXXXXX-62192401.png",
    "time_b/39"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2jv2SXiNaXXXXXXXX-62192401.png",
    "time_b/40"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2PBFgXeNOXXXXXXXX-62192401.png",
    "time_b/41"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2xsYSXgpaXXXXXXXX-62192401.png",
    "time_b/42"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2YJzSXj8aXXXXXXXX-62192401.png",
    "time_b/43"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2C4DTXihXXXXXXXXX-62192401.png",
    "time_b/44"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2btbTXXXaXXXXXXXX-62192401.png",
    "time_b/45"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T27CBpXhJOXXXXXXXX-62192401.png",
    "time_b/46"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2tDXOXgBeXXXXXXXX-62192401.png",
    "time_b/47"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2Y0TSXhNaXXXXXXXX-62192401.png",
    "time_b/48"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2YDHSXhVaXXXXXXXX-62192401.png",
    "time_b/49"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T21RHKXnxaXXXXXXXX-62192401.png",
    "time_b/50"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2qfLjXdRbXXXXXXXX-62192401.png",
    "time_b/51"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2NQ2SXlFXXXXXXXXX-62192401.png",
    "time_b/52"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2sUTSXelaXXXXXXXX-62192401.png",
    "time_b/53"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2VqjTXbNaXXXXXXXX-62192401.png",
    "time_b/54"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2HEDSXgJaXXXXXXXX-62192401.png",
    "time_b/55"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2f36TXmFXXXXXXXXX-62192401.png",
    "time_b/56"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2tu6TXmFXXXXXXXXX-62192401.png",
    "time_b/57"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2XmYSXhpaXXXXXXXX-62192401.png",
    "time_b/58"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2LAdxXjROXXXXXXXX-62192401.png",
    "time_b/59"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2.EvSXo8XXXXXXXXX-62192401.png",
    "time_b/60"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2eS6MXn4aXXXXXXXX-62192401.png",

    "time_m/00"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2AljlXaBbXXXXXXXX-62192401.png",
    "time_m/01"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2aILOXmpaXXXXXXXX-62192401.png",
    "time_m/02"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2YW6TXl0XXXXXXXXX-62192401.png",
    "time_m/03"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2qMYTXfdXXXXXXXXX-62192401.png",
    "time_m/04"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2N.YTXbNXXXXXXXXX-62192401.png",
    "time_m/05"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2_RdMXc4dXXXXXXXX-62192401.png",
    "time_m/06"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2Rm2SXgRaXXXXXXXX-62192401.png",
    "time_m/07"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2ybvTXoXXXXXXXXXX-62192401.png",
    "time_m/08"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2jdfTXXVaXXXXXXXX-62192401.png",
    "time_m/09"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2nBrSXmXaXXXXXXXX-62192401.png",
    "time_m/10"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2sSbTXelXXXXXXXXX-62192401.png",
    "time_m/11"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2n8TEXolaXXXXXXXX-62192401.png",
    "time_m/12"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2IG2SXntaXXXXXXXX-62192401.png",
    "time_m/13"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2nFYTXjdXXXXXXXXX-62192401.png",
    "time_m/14"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2PnndXdXbXXXXXXXX-62192401.png",
    "time_m/15"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2p5nTXfFXXXXXXXXX-62192401.png",
    "time_m/16"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2wRzSXbRaXXXXXXXX-62192401.png",
    "time_m/17"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2j0y5XXxbXXXXXXXX-62192401.png",
    "time_m/18"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2MdPSXlNaXXXXXXXX-62192401.png",
    "time_m/19"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2X7tFXX0OXXXXXXXX-62192401.png",
    "time_m/20"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2dRjTXeJXXXXXXXXX-62192401.png",
    "time_m/21"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2U1TTXk4XXXXXXXXX-62192401.png",
    "time_m/22"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2av2SXiRaXXXXXXXX-62192401.png",
    "time_m/23"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2TzDSXiFaXXXXXXXX-62192401.png",
    "time_m/24"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2gPpUXn4dXXXXXXXX-62192401.png",
    "time_m/25"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2tQHSXitaXXXXXXXX-62192401.png",
    "time_m/26"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2HInSXgBaXXXXXXXX-62192401.png",
    "time_m/27"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2._DSXg4aXXXXXXXX-62192401.png",
    "time_m/28"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2uNYSXm8aXXXXXXXX-62192401.png",
    "time_m/29"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2LybTXlxXXXXXXXXX-62192401.png",
    "time_m/30"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2fq58XeNbXXXXXXXX-62192401.png",
    "time_m/31"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2xTzTXblXXXXXXXXX-62192401.png",
    "time_m/32"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2_IDSXj0aXXXXXXXX-62192401.png",
    "time_m/33"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T22T4aXoROXXXXXXXX-62192401.png",
    "time_m/34"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2P_PSXhRaXXXXXXXX-62192401.png",
    "time_m/35"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2RnbTXeXXXXXXXXXX-62192401.png",
    "time_m/36"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2wSLSXbJaXXXXXXXX-62192401.png",
    "time_m/37"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2RASgXi4cXXXXXXXX-62192401.png",
    "time_m/38"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2i42TXidXXXXXXXXX-62192401.png",
    "time_m/39"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2eUvSXgJaXXXXXXXX-62192401.png",
    "time_m/40"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2KI6SXkRaXXXXXXXX-62192401.png",
    "time_m/41"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2QlzcXahbXXXXXXXX-62192401.png",
    "time_m/42"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2ZDrHXodaXXXXXXXX-62192401.png",
    "time_m/43"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2PvDSXfhaXXXXXXXX-62192401.png",
    "time_m/44"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2bIx2XktdXXXXXXXX-62192401.png",
    "time_m/45"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2PTLTXdxXXXXXXXXX-62192401.png",
    "time_m/46"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2dGjUXXhXXXXXXXXX-62192401.png",
    "time_m/47"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T29q_TXnhXXXXXXXXX-62192401.png",
    "time_m/48"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2o7zIXlhaXXXXXXXX-62192401.png",
    "time_m/49"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2aJnKXo8aXXXXXXXX-62192401.png",
    "time_m/50"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T28AvKXXBbXXXXXXXX-62192401.png",
    "time_m/51"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2PZ_LXklaXXXXXXXX-62192401.png",
    "time_m/52"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2pRLSXiNaXXXXXXXX-62192401.png",
    "time_m/53"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2o7DTXjXXXXXXXXXX-62192401.png",
    "time_m/54"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2xrTTXataXXXXXXXX-62192401.png",
    "time_m/55"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2UE_TXbxXXXXXXXXX-62192401.png",
    "time_m/56"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2j.PTXclXXXXXXXXX-62192401.png",
    "time_m/57"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2Ee4iXblPXXXXXXXX-62192401.png",
    "time_m/58"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T25mzLXbpbXXXXXXXX-62192401.png",
    "time_m/59"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T20eTTXnlXXXXXXXXX-62192401.png",
    "time_m/60"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2dPmEXgXcXXXXXXXX-62192401.png",

    "time_s/00"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T22o2TXbxXXXXXXXXX-62192401.png",
    "time_s/01"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T20hjSXcpaXXXXXXXX-62192401.png",
    "time_s/02"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2GYDTXXVaXXXXXXXX-62192401.png",
    "time_s/03"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2EoPRXiXaXXXXXXXX-62192401.png",
    "time_s/04"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2tmPSXn0XXXXXXXXX-62192401.png",
    "time_s/05"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2n6fSXdhaXXXXXXXX-62192401.png",
    "time_s/06"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2rPLKXm8aXXXXXXXX-62192401.png",
    "time_s/07"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2b9fSXeBaXXXXXXXX-62192401.png",
    "time_s/08"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2HEYSXedaXXXXXXXX-62192401.png",
    "time_s/09"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2fCPTXdBXXXXXXXXX-62192401.png",
    "time_s/10"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2X1DJXohaXXXXXXXX-62192401.png",
    "time_s/11"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T24WbUXXtXXXXXXXXX-62192401.png",
    "time_s/12"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T23.bTXctXXXXXXXXX-62192401.png",
    "time_s/13"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2tCnSXbxaXXXXXXXX-62192401.png",
    "time_s/14"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2alrTXc4XXXXXXXXX-62192401.png",
    "time_s/15"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2usrTXdXaXXXXXXXX-62192401.png",
    "time_s/16"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2fK2SXhlaXXXXXXXX-62192401.png",
    "time_s/17"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2t5zSXlXaXXXXXXXX-62192401.png",
    "time_s/18"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2eEfTXb0XXXXXXXXX-62192401.png",
    "time_s/19"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2_uvTXm4XXXXXXXXX-62192401.png",
    "time_s/20"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2HfTTXXXaXXXXXXXX-62192401.png",
    "time_s/21"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2lF6TXfdaXXXXXXXX-62192401.png",
    "time_s/22"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2wuLKXkVaXXXXXXXX-62192401.png",
    "time_s/23"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2F9YTXb4XXXXXXXXX-62192401.png",
    "time_s/24"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2dl6TXe0XXXXXXXXX-62192401.png",
    "time_s/25"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2qfzTXXtaXXXXXXXX-62192401.png",
    "time_s/26"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2noHSXotXXXXXXXXX-62192401.png",
    "time_s/27"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2E6jSXXJaXXXXXXXX-62192401.png",
    "time_s/28"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2QVrUXaBXXXXXXXXX-62192401.png",
    "time_s/29"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2QkJLXjReXXXXXXXX-62192401.png",
    "time_s/30"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2eaDIXoVaXXXXXXXX-62192401.png",
    "time_s/31"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2LibSXeJaXXXXXXXX-62192401.png",
    "time_s/32"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2ZcLSXkNaXXXXXXXX-62192401.png",
    "time_s/33"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2xQbSXlJaXXXXXXXX-62192401.png",
    "time_s/34"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2NHOUXctbXXXXXXXX-62192401.png",
    "time_s/35"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2h9mgXixcXXXXXXXX-62192401.png",
    "time_s/36"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2ql6SXoFXXXXXXXXX-62192401.png",
    "time_s/37"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2duzTXlNXXXXXXXXX-62192401.png",
    "time_s/38"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2ckzSXfhaXXXXXXXX-62192401.png",
    "time_s/39"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2OmLTXeJXXXXXXXXX-62192401.png",
    "time_s/40"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2tt2SXj8aXXXXXXXX-62192401.png",
    "time_s/41"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2ZfHTXaXaXXXXXXXX-62192401.png",
    "time_s/42"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2582TXdxXXXXXXXXX-62192401.png",
    "time_s/43"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2MmvSXbxaXXXXXXXX-62192401.png",
    "time_s/44"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2tljSXkVaXXXXXXXX-62192401.png",
    "time_s/45"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T2zOYTXeFXXXXXXXXX-62192401.png",
    "time_s/46"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2N9PRXltaXXXXXXXX-62192401.png",
    "time_s/47"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2VpRHXolNXXXXXXXX-62192401.png",
    "time_s/48"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2z.zTXeFXXXXXXXXX-62192401.png",
    "time_s/49"=>"http://img01.taobaocdn.com/imgextra/i1/62192401/T2M00QXiJeXXXXXXXX-62192401.png",
    "time_s/50"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2ao6TXcXXXXXXXXXX-62192401.png",
    "time_s/51"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2jQ96XlXbXXXXXXXX-62192401.png",
    "time_s/52"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2JsvTXkdXXXXXXXXX-62192401.png",
    "time_s/53"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2EwfMXXlbXXXXXXXX-62192401.png",
    "time_s/54"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T28xfTXk4XXXXXXXXX-62192401.png",
    "time_s/55"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T25CYSXexaXXXXXXXX-62192401.png",
    "time_s/56"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2pHqMXdxbXXXXXXXX-62192401.png",
    "time_s/57"=>"http://img02.taobaocdn.com/imgextra/i2/62192401/T28GrnXXXbXXXXXXXX-62192401.png",
    "time_s/58"=>"http://img04.taobaocdn.com/imgextra/i4/62192401/T2PPjTXkBXXXXXXXXX-62192401.png",
    "time_s/59"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T225_SXhxaXXXXXXXX-62192401.png",
    "time_s/60"=>"http://img03.taobaocdn.com/imgextra/i3/62192401/T2Bm_SXa0aXXXXXXXX-62192401.png"
);

// 默认空白图
$image = "http://img02.taobaocdn.com/imgextra/i2/62192401/T2rmbTXbpXXXXXXXXX-62192401.gif";

if (strstr($type, "bg_dm_") != "") {
    # 团购按钮背景图
    $bg_button = str_replace("bg_dm_", "", $type);
    
    $num = time()<$time ? 0 : 1;
    
    if (isset($bg_buttons[$bg_button][$num])) {
        $image = $bg_buttons[$bg_button][$num];
    }
    
}
else if (time()<$time && strstr($type, "button_") != "") {
    # 购买按钮
    list($i, $j, $k) = explode("_", $type);
    
    $key = $i."_".$j."/".$k;
    
    if (isset($buttons[$key])) {
        $image = $buttons[$key];
    }
}
else if (time()<$time && (strstr($type, "day_")!="" || strstr($type, "hour_")!="" || strstr($type, "minute_")!="")) {
    # 时间
    list($i, $j) = explode("_", $type);
    
    if (strstr($type, "day_")!="") {
        # 天
        $num = ($time-time())/(3600*24);
    } else if (strstr($type, "hour_")!="") {
        # 时
        $num = (($time-time())%(3600*24))/3600;
    } else if (strstr($type, "minute_")!="") {
        # 分
        $num = (($time-time())%3600)/60;
    }

    $num = floor($num);
    $key = "time_".trim($j)."/".str_pad($num, 2, "0", STR_PAD_LEFT);
    
    if (isset($times[$key])) {
        $image = $times[$key];
    }
}

// 两天内有效
if ($id!=0 && time()>=$time && (time()-$time)<48*3600) {
    # 判断是否更新详情
    $cache = $cacheService->get("tg_{$id}");
    
    if (empty($cache)) {
        $cache = "{}";
    }
    $info = json_decode($cache);
    
    if (!isset($info->time) || time()>$info->time) {
        $url = "http://i.haodianpu.com/task/tuangou?id=".$id;
        $rtn = $fetchService->fetchByGet($url);
        
        if (isset($_GET['debug'])) {
            var_dump($rtn);
        }
        
        // 半小时更换一次
        $info->time = time()+1800;
        
        $cache = json_encode($info);
        $cacheService->set("tg_{$id}", $cache, 3600*24);
    }
}

if (isset($_GET['debug'])) {
    echo "<img src='{$image}' />";
} else {
    header("Location: {$image}");
}
?>
