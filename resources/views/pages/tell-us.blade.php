@extends('layouts.app')

@section('title', '建议与意见')

@section('styles')
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="{{ asset('css/tell-us.css') }}" rel="stylesheet">
  
  <!-- 启用360浏览器的极速模式(webkit) -->
  <meta name="renderer" content="webkit">
	<!-- 避免IE使用兼容模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- uc强制竖屏 -->
	<meta name="screen-orientation" content="portrait" />
	<!-- QQ强制竖屏 -->
	<meta name="x5-orientation" content="portrait">
	<!-- UC强制全屏 -->
	<meta name="full-screen" content="true" />
	<!-- QQ强制全屏 -->
	<meta name="x5-fullscreen" content="true" />
	<!-- 360强制全屏 -->
	<meta name="360-fullscreen" content="true" />


  
@stop

@section('content')
<body class="content">

    <div class="center">
        
        <div class="title">
            <p style="text-align: center;"><span style="font-size: 40px;">联系我们</span></p>
        
        </div>
        <div >
            <p style="text-align: center;"><span style="font-size: 16px;">总机：(+86 10)5992 8888</span></p>
            <p style="text-align: center;"><span style="font-size: 16px;">TEL：(+86 10)5992 8888</span></p>
            <p style="text-align: center;"><span style="font-size: 16px;">邮箱：1565011735@qq.com</span></p>
            <p style="text-align: center;"><span style="font-size: 16px;">地址：浙江省温州市茶山高教园区中心北路</span></p>


               
                <div style="text-align: center;">
                    <img src="{{ asset('images/for-root/thumbs/09.jpg') }}" alt="" style="width:90px;"/>
                    <p><span style="font-size: 16px;">我们的公众号</span></p>

                </div>

        </div>

        
       
    
    </div>
    

    </body> 


@stop