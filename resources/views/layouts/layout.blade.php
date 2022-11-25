<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8"/>
		<title>ZENI</title>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="{{ asset('assets/front/css/style.css') }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		<!-- JS -->
		<script src="{{ asset('assets/front/js/jquery-1.6.4.min.js') }}"></script>
		<script src="{{ asset('assets/front/js/css3-mediaqueries.js') }}"></script>
		<script src="{{ asset('assets/front/js/custom.js') }}"></script>
		<script src="{{ asset('assets/front/js/tabs.js') }}"></script>

		<!-- Tweet -->
		<link rel="stylesheet" href="{{ asset('assets/front/css/jquery.tweet.css') }}" media="all"  />
		<script src="{{ asset('assets/front/js/tweet/jquery.tweet.js') }}" ></script>
		<!-- ENDS Tweet -->

		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="{{ asset('assets/front/css/superfish.css') }}" />
		<script  src="{{ asset('assets/front/js/superfish-1.4.8/js/hoverIntent.js') }}"></script>
		<script  src="{{ asset('assets/front/js/superfish-1.4.8/js/superfish.js') }}"></script>
		<script  src="{{ asset('assets/front/js/superfish-1.4.8/js/supersubs.js') }}"></script>
		<!-- ENDS superfish -->

		<!-- prettyPhoto -->
		<script  src="{{ asset('assets/front/js/prettyPhoto/js/jquery.prettyPhoto.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('assets/front/js/prettyPhoto/css/prettyPhoto.css') }}"  media="screen" />
		<!-- ENDS prettyPhoto -->

		<!-- poshytip -->
		<link rel="stylesheet" href="{{ asset('assets/front/js/poshytip-1.1/src/tip-twitter/tip-twitter.css') }}"  />
		<link rel="stylesheet" href="{{ asset('assets/front/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css') }}"  />
		<script  src="{{ asset('assets/front/js/poshytip-1.1/src/jquery.poshytip.min.js') }}"></script>
		<!-- ENDS poshytip -->

		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>

		<!-- Flex Slider -->
		<link rel="stylesheet" href="{{ asset('assets/front/css/flexslider.css') }}" >
		<script src="{{ asset('assets/front/js/jquery.flexslider-min.js') }}"></script>
		<!-- ENDS Flex Slider -->

		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="{{ asset('assets/front/css/lessframework.css') }}"/>

		<!-- modernizr -->
		<script src="{{ asset('assets/front/js/modernizr.js') }}"></script>

		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="{{ asset('assets/front/css/skin.css') }}"/>
	</head>
	<body lang="ru">
		<header class="clearfix">
			<!-- top widget -->
			<div id="top-widget-holder">
				<div class="wrapper">
					<div id="top-widget">
						<div class="padding">
						<ul  class="widget-cols clearfix">
								<li class="first-col">
									<div class="widget-block">
										<h4>Recent posts</h4>
										<div class="recent-post">
											<a href="#" class="thumb"><img src="{{ asset('assets/front/img/dummies/54x54.gif') }}" alt="Post" /></a>
											<div class="post-head">
												<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
											</div>
										</div>
										<div class="recent-post">
											<a href="#" class="thumb"><img src="{{ asset('assets/front/img/dummies/54x54.gif') }}" alt="Post" /></a>
											<div class="post-head">
												<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
											</div>
										</div>
										<div class="recent-post">
											<a href="#" class="thumb"><img src="{{ asset('assets/front/img/dummies/54x54.gif') }}" alt="Post" /></a>
											<div class="post-head">
												<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
											</div>
										</div>
									</div>
								</li>
								<li class="second-col">
									<div class="widget-block">
										<h4>Dummy text</h4>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
									</div>
								</li>
								<li class="third-col">
									<div class="widget-block">
										<h4>Dummy text</h4>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
									</div>
								</li>
								<li class="fourth-col">
									<div class="widget-block">
										<h4>Dummy text</h4>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="#" id="top-open">Menu</a>
			</div>
			<!-- ENDS top-widget -->
			<div class="wrapper clearfix">
				<a href="/" id="logo"><img  src="{{ asset('assets/front/img/logo.png') }}" alt="Zeni"></a>
				<nav>
					<ul id="nav" class="sf-menu">
						<li @if (Request::is('/'))
                        class="current-menu-item"
                        @endif><a href="/">HOME</a></li>
						<li @if (Request::is('articles', 'category/*', 'article/*'))
                        class="current-menu-item"
                        @endif><a href="/articles">BLOG</a>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="{{ route('category.single',['slug'=>$category->slug]) }}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
						<li @if (Request::is('contact'))
                        class="current-menu-item"
                        @endif><a href="{{ route('contact') }}">CONTACT</a>
						</li>
                        @if (!Auth::check())
                            <li><a href="{{ route('login.create') }}">LOGIN</a></li>
                            <li><a href="{{ route('register.create') }}">REGISTRATION</a></li>
                        @else
                            <li><a href="{{ route('logout') }}">LOGOUT</a></li>
                        @endif
					</ul>
					<div id="combo-holder"></div>
				</nav>
			</div>
		</header>
		<div id="main">
            <div class="wrapper clearfix">
        @yield('slider')
        @yield('content')
        @yield('sidebar_post')
	        	<!-- ENDS home-block -->
	        	<!-- home-block -->
	        	{{-- <div class="home-block">
	        		<h2 class="home-block-heading"><span>LATEST PROJECTS</span></h2>
	        		<div class="one-fourth-thumbs clearfix">


	        			<figure>
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>

			        		<a href="single.html"  class="thumb"><img src="{{ asset('assets/front/img/dummies/featured-7.jpg') }}" alt="Alt text" /></a>
		        		</figure>

		        		<figure>
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>

			        		<a href="single.html"  class="thumb"><img src="{{ asset('assets/front/img/dummies/featured-8.jpg') }}" alt="Alt text" /></a>
		        		</figure>

		        		<figure>
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>

			        		<a href="single.html"  class="thumb"><img src="{{ asset('assets/front/img/dummies/featured-9.jpg') }}" alt="Alt text" /></a>
		        		</figure>

		        		<figure class="last">
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>

			        		<a href="single.html"  class="thumb"><img src="{{ asset('assets/front/img/dummies/featured-10.jpg') }}" alt="Alt text" /></a>
		        		</figure>

		        		<a href="#" class="more-link right">More projects  &#8594;</a>



	        		</div>


	        	</div> --}}
	        	<!-- ENDS home-block -->

			</div>
		</div>
		<!-- ENDS MAIN -->

		<footer>
			<div class="wrapper">
				<ul  class="widget-cols clearfix">
					<li class="first-col">
						<div class="widget-block">
							<h4>Recent posts</h4>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="{{ asset('assets/front/img/dummies/54x54.gif') }}" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="{{ asset('assets/front/img/dummies/54x54.gif') }}" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="{{ asset('assets/front/img/dummies/54x54.gif') }}" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
						</div>
					</li>
					<li class="second-col">
						<div class="widget-block">
							<h4>Zeni Template</h4>
							<p>Hope you find this template useful you are free to use it on personal and commercial projects. See the full license at this </p>
						</div>
					</li>
					<li class="third-col">
						<div class="widget-block">
							<div id="tweets" class="footer-col tweet">
		         				<h4>Twitter widget</h4>
		         			</div>
		         		</div>
					</li>
					<li class="fourth-col">
						<div class="widget-block">
							<h4>Placeholder images</h4>
							<p>Thanks to for sharing his work as place holder images for this preview. Visit his and find more of his awesome work.</p>
						</div>

					</li>
				</ul>
				<div class="footer-bottom">
					<div class="left">Created by <a href="http://bayguzin.ru">bayguzin.ru</a></div>
					<div class="right">
						<ul id="social-bar">
							<li><a href=""  title="Become a fan" class="poshytip"><img src="{{ asset('assets/front/img/social/facebook.png') }}"  alt="Facebook" /></a></li>
							<li><a href="" title="Follow my tweets" class="poshytip"><img src="{{ asset('assets/front/img/social/twitter.png') }}"  alt="twitter" /></a></li>
							<li><a href=""  title="Add to the circle" class="poshytip"><img src="{{ asset('assets/front/img/social/plus.png') }}" alt="Google plus" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
