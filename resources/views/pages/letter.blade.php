@extends('layouts.Static_page')

@section('title', '致妈妈的一份信')

@section('styles')
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
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

<div >
<table border="0" align="center" cellpadding="0" cellspacing="0" >
	
	<tr>
		<td>
			<h1>一封宝宝给妈妈的信</h1>
			<p>&nbsp;</p><span class="content">亲爱的妈妈</span>
			<p class="content">&nbsp;&nbsp;&nbsp;&nbsp;我是宝宝，当您看到这封信时，我已经到了天堂，您不要担心，在这儿有很多跟我差不多大的小朋友陪着我，我过得很开心。</p>
			<p class="content">&nbsp;&nbsp;&nbsp;&nbsp; 但是妈妈，我还是会很想您，想念您每天摸着肚子，温柔地在我耳边呢喃，每天跟我说说话，叫我一声“宝宝”，跟我讲述着每天你跟爸爸发生的故事，告诉我外面的世界很精彩，很期待跟我的见面，听到高兴时，我会踢踢脚，您立马感受到了，开心地笑着，抚摸着我。</p>
			<p class="content">&nbsp;&nbsp;&nbsp;&nbsp;妈妈，我也很想跟您说一声对不起，随着我的身子慢慢发育成长，给您增添了不少负担，每当您两手扶着腰走不动路的时候，每当您腰疼欲裂站不直躺不下的时候，每当您为肚子上一条条妊娠纹而烦恼的时候，我都很担心您，也怕您会不会怪我，但是您始终细心呵护着我，从来没有怨言，当我在您肚子里待的时间越来越长时，您就更加紧张我了，我睡着了，您会担心“怎么好久没动了”，我撒欢了，您会担心“怎么动得这么厉害”，这么多月来，您对我的辛苦付出，我都记在心里。</p>
			<p class="content">&nbsp;&nbsp;&nbsp;&nbsp;妈妈，对不起，我知道您和爸爸都很爱护我，但从有一天开始，我觉得我生长的环境让我喘不过气来，我的空间变得好小，我周围的液体变得好混浊，我开始挣扎，我开始抵抗，我的的心跳越来越快，动作越来越剧烈，您发现了我的异常，但还是晚了一步，我的生命停止在您腹中的八个月。</p>
			<p class="content">&nbsp;&nbsp;&nbsp;&nbsp;妈妈，我知道此时的您一定难过极了，哭吧，妈妈，但是哭完了您要答应宝宝，一定要振作起来，和爸爸健健康康地生活下去。</p> 
			<p class="content">&nbsp;&nbsp;&nbsp;&nbsp;妈妈，不要难过，勇敢地面对它，我在天堂生活的很好，您也一定要和爸爸健康幸福地生活下去，我相信您在不久的将来就会有我的弟弟妹妹，一家人幸福安康！</p>
			<p class="pull-right">-----永远爱您的宝宝&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		</td>		
  </tr>
	
</table>
</div>
<div>
	<p style="text-align:center">
        <span>© </span>
        2018 ICP证：
        <a class="record" href="http://www.miitbeian.gov.cn/" target="_block">浙ICP备18018431号</a>
    </p>
</div>


@stop