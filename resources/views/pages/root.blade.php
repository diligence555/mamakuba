<!DOCTYPE HTML>
<html>
	<head>
		<title>MaMaKuBa</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ URL::asset('css/for-root/app-for-head.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/for-root/main.css') }}">
		<noscript><link rel="stylesheet" href="{{ URL::asset('css/for-root/noscript.css') }}" /></noscript>
		
	</head>
	<body>
        <div id="app"> 
         @include('layouts._header') 
        
        </div>

		<div id="wrapper">

			<div id="main">
				<div id="reel">

					<!-- Header Item -->

						<div id="header" class="item" data-width="400">
							<div class="inner">
								<h1>MaMaKuBa</h1>
								<p>这是一个<br />
								充满温馨的网站</p>
							</div>
						</div>

					<!-- Thumb Items -->

						<article class="item thumb" data-width="282">
							<h2>孩子的成长中总是充满了好奇与欣喜</h2>
							<a href="{{ asset('images/for-root/fulls/01.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/01.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="384">
							<h2>宝宝安详的睡态给人带来一种美好的憧憬感</h2>
							<a href="{{ asset('images/for-root/fulls/02.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/02.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="274">
							<h2>相信每个妈妈经过身心调整后能再有机会怀上健康的宝宝</h2>
							<a href="{{ asset('images/for-root/fulls/03.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/03.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="320">
							<h2>丧失宝宝后需要时间来恢复</h2>
							<a href="{{ asset('images/for-root/fulls/04.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/04.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="476">
							<h2>生命的孕育过程是十分脆弱的</h2>
							<a href="{{ asset('images/for-root/fulls/05.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/05.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="232">
							<h2>最后一家人幸福健康地生活在一起</h2>
							<a href="{{ asset('images/for-root/fulls/06.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/06.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="352">
							<h2>每个宝宝降临世界都是件幸运而幸福的事情</h2>
							<a href="{{ asset('images/for-root/fulls/07.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/07.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="348">
							<h2>有些小天使不幸夭折，带着父母的爱回去了</h2>
							<a href="{{ asset('images/for-root/fulls/08.png') }}" class="image"><img src="{{ asset('images/for-root/thumbs/08.png') }}" alt=""></a>
						</article>

						<article class="item thumb" data-width="348">
							<h2>我们的公众号</h2>
							<a href="{{ asset('images/for-root/fulls/09.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/09.jpg') }}" alt=""></a>
						</article>

					<!-- Filler Thumb Items (just for demonstration purposes) -->
						<!-- <article class="item thumb" data-width="476"><h2>Kingdom of the Wind</h2><a href="{{ asset('images/for-root/fulls/05.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/05.jpg') }}" alt=""></a></article>
						<article class="item thumb" data-width="232"><h2>The Pursuit</h2><a href="{{ asset('images/for-root/fulls/06.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/06.jpg') }}" alt=""></a></article>
						<article class="item thumb" data-width="352"><h2>Boundless</h2><a href="{{ asset('images/for-root/fulls/07.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/07.jpg') }}" alt=""></a></article>
						<article class="item thumb" data-width="348"><h2>The Spectators</h2><a href="{{ asset('images/for-root/fulls/08.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/08.jpg') }}" alt=""></a></article>
						<article class="item thumb" data-width="282"><h2>You really got me</h2><a href="{{ asset('images/for-root/fulls/01.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/01.jpg') }}" alt=""></a></article>
						<article class="item thumb" data-width="384"><h2>Ad Infinitum</h2><a href="{{ asset('images/for-root/fulls/02.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/02.jpg') }}" alt=""></a></article>
						<article class="item thumb" data-width="274"><h2>Different.</h2><a href="{{ asset('images/for-root/fulls/03.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/03.jpg') }}" alt=""></a></article>
						<article class="item thumb" data-width="282"><h2>Elysium</h2><a href="{{ asset('images/for-root/fulls/04.jpg') }}" class="image"><img src="{{ asset('images/for-root/thumbs/04.jpg') }}" alt=""></a></article> -->

				</div>
			</div>

			<div id="footer">
				<div class="left">
					<p>This is <strong>“妈妈，哭吧”</strong>。是一个集咨询、分享、交流、关怀、宣教为一体的平台</a>。我们对所有需要的朋友开放<br />
					。为丧婴人群提供生命关怀，以专业和非专业的生命关怀服务为辅助，<strong>帮助丧婴人群</strong>走出丧婴心理困境，重拾生活信心。</p>
				</div>
				<div class="right">
					
					<ul class="copyright">
						<li>&copy;  2018 ICP证：</li><a class="record" href="http://www.miitbeian.gov.cn/" target="_block">浙ICP备18018431号</a>
					</ul>
				</div>
			</div>

		</div>

		<!-- Scripts -->

			<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script> 
            <script type="text/javascript" src="{{ URL::asset('js/for-root/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/for-root/jquery.poptrox.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/for-root/skel.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/for-root/skel-viewport.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/for-root/util.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/for-root/main.js') }}"></script>
            

	</body>
</html>