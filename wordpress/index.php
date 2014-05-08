<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Redwood Project: Character + Community + Leadership </title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://redwood-project.com/Wordpress/xmlrpc.php" />
<link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="http://redwood-project.com/Wordpress/feed/" />
<link rel="alternate" type="application/rss+xml" title=" &raquo; Comments Feed" href="http://redwood-project.com/Wordpress/comments/feed/" />
<link rel='stylesheet' id='admin-bar-css'  href='http://redwood-project.com/Wordpress/wp-includes/css/admin-bar.min.css?ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='mtf_css-css'  href='http://redwood-project.com/Wordpress/wp-content/plugins/mini-twitter-feed/minitwitter.css?ver=3.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='pinboard-css'  href='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='colorbox-css'  href='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/styles/colorbox.css' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelementplayer-css'  href='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/styles/mediaelementplayer.css' type='text/css' media='all' />
	<!--[if lt IE 9]>
	<script src="http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/html5.js" type="text/javascript"></script>
	<![endif]-->
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/ios-orientationchange-fix.js'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/jquery-migrate.js'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/fitvids.js'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/mediaelement.js'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/mediaelementplayer.js'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/jquery.masonry.min.js'></script>
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-content/themes/pinboard/scripts/colorbox.js'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://redwood-project.com/Wordpress/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://redwood-project.com/Wordpress/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 3.5.2" />
<script>
/* <![CDATA[ */
	jQuery(document).ready(function($) {
		$('#access .menu > li > a').each(function() {
			var title = $(this).attr('title');
			if(typeof title !== 'undefined' && title !== false) {
				$(this).append('<br /> <span>'+title+'</span>');
				$(this).removeAttr('title');
			}
		});
		function pinboard_move_elements(container) {
			if( container.hasClass('onecol') ) {
				var thumb = $('.entry-thumbnail', container);
				if('undefined' !== typeof thumb)
					$('.entry-container', container).before(thumb);
				var video = $('.entry-attachment', container);
				if('undefined' !== typeof video)
					$('.entry-container', container).before(video);
				var gallery = $('.post-gallery', container);
				if('undefined' !== typeof gallery)
					$('.entry-container', container).before(gallery);
				var meta = $('.entry-meta', container);
				if('undefined' !== typeof meta)
					$('.entry-container', container).after(meta);
			}
		}
		function pinboard_restore_elements(container) {
			if( container.hasClass('onecol') ) {
				var thumb = $('.entry-thumbnail', container);
				if('undefined' !== typeof thumb)
					$('.entry-header', container).after(thumb);
				var video = $('.entry-attachment', container);
				if('undefined' !== typeof video)
					$('.entry-header', container).after(video);
				var gallery = $('.post-gallery', container);
				if('undefined' !== typeof gallery)
					$('.entry-header', container).after(gallery);
				var meta = $('.entry-meta', container);
				if('undefined' !== typeof meta)
					$('.entry-header', container).append(meta);
				else
					$('.entry-header', container).html(meta.html());
			}
		}
		if( ($(window).width() > 960) || ($(document).width() > 960) ) {
			// Viewport is greater than tablet: portrait
		} else {
			$('#content .post').each(function() {
				pinboard_move_elements($(this));
			});
		}
		$(window).resize(function() {
			if( ($(window).width() > 960) || ($(document).width() > 960) ) {
									$('.page-template-template-full-width-php #content .post, .page-template-template-blog-full-width-php #content .post, .page-template-template-blog-four-col-php #content .post').each(function() {
						pinboard_restore_elements($(this));
					});
							} else {
				$('#content .post').each(function() {
					pinboard_move_elements($(this));
				});
			}
			if( ($(window).width() > 760) || ($(document).width() > 760) ) {
				var maxh = 0;
				$('#access .menu > li > a').each(function() {
					if(parseInt($(this).css('height'))>maxh) {
						maxh = parseInt($(this).css('height'));
					}
				});
				$('#access .menu > li > a').css('height', maxh);
			} else {
				$('#access .menu > li > a').css('height', 'auto');
			}
		});
		if( ($(window).width() > 760) || ($(document).width() > 760) ) {
			var maxh = 0;
			$('#access .menu > li > a').each(function() {
				var title = $(this).attr('title');
				if(typeof title !== 'undefined' && title !== false) {
					$(this).append('<br /> <span>'+title+'</span>');
					$(this).removeAttr('title');
				}
				if(parseInt($(this).css('height'))>maxh) {
					maxh = parseInt($(this).css('height'));
				}
			});
			$('#access .menu > li > a').css('height', maxh);
							$('#access li').mouseenter(function() {
					$(this).children('ul').css('display', 'none').stop(true, true).fadeIn(250).css('display', 'block').children('ul').css('display', 'none');
				});
				$('#access li').mouseleave(function() {
					$(this).children('ul').stop(true, true).fadeOut(250).css('display', 'block');
				});
					} else {
			$('#access li').each(function() {
				if($(this).children('ul').length)
					$(this).append('<span class="drop-down-toggle"><span class="drop-down-arrow"></span></span>');
			});
			$('.drop-down-toggle').click(function() {
				$(this).parent().children('ul').slideToggle(250);
			});
		}
					$('#slider').flexslider({
				selector: '.slides > li',
				video: true,
				prevText: '&larr;',
				nextText: '&rarr;',
				pausePlay: true,
				pauseText: '||',
				playText: '>',
				before: function() {
					$('#slider .entry-title').hide();
				},
				after: function() {
					$('#slider .entry-title').fadeIn();
				}
			});
							var $content = $('.entries');
			$content.imagesLoaded(function() {
				$content.masonry({
					itemSelector : '.hentry',
					columnWidth : function( containerWidth ) {
						return containerWidth / 12;
					},
				});
			});
														$('audio,video').mediaelementplayer({
			videoWidth: '100%',
			videoHeight: '100%',
			audioWidth: '100%',
			alwaysShowControls: true,
			features: ['playpause','progress','tracks','volume'],
			videoVolume: 'horizontal'
		});
		$(".entry-attachment, .entry-content").fitVids({ customSelector: "iframe, object, embed"});
	});
	jQuery(window).load(function() {
					jQuery('.entry-content a[href$=".jpg"],.entry-content a[href$=".jpeg"],.entry-content a[href$=".png"],.entry-content a[href$=".gif"],a.colorbox').colorbox();
			});
/* ]]> */
</script>
<style type="text/css">
							#wrapper {
			background: #f4f4f4;
		}
				#header {
			border-color: #f37321;
		}
		#access {
			background: #f37321;
		}
										body,
		#slider .entry-title,
		.page-title,
		#sidebar-wide .widget-title,
		#sidebar-boxes .widget-title,
		#sidebar-footer-wide .widget-title {
			font-family:"Helvetica Neue", "Nimbus Sans L", sans-serif;
		}
		h1, h2, h3, h4, h5, h6,
		#site-title,
		#site-description,
		.entry-title,
		#comments-title,
		#reply-title,
		.widget-title {
			font-family:"Helvetica Neue", "Nimbus Sans L", sans-serif;
		}
		.entry-content {
			font-family:"Helvetica Neue", "Nimbus Sans L", sans-serif;
		}
																										</style>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 28px !important; }
	* html body { margin-top: 28px !important; }
</style>
<style type="text/css">
	#site-title .home,
	#site-description {
		position:absolute !important;
		clip:rect(1px, 1px, 1px, 1px);
	}
</style>
<style type="text/css" id="custom-background-css">
body.custom-background { background-color: #dedede; }
</style>
</head>

<body class="blog logged-in admin-bar no-customize-support custom-background">
	<div id="wrapper">
		<header id="header">
			<h1 id="site-title">
									<a href="http://redwood-project.com/Wordpress/" rel="home">
						<img src="http://redwood-project.com/Wordpress/wp-content/uploads/2013/05/cropped-WhiteRWBlogLogo22.jpg" alt="" width="472" height="140" />
					</a>
								<a class="home" href="http://redwood-project.com/Wordpress/" rel="home"></a>
			</h1>
							<div id="site-description"></div>
							<form role="search" method="get" id="searchform" action="http://redwood-project.com/Wordpress//" >
	<input type="text" value="" placeholder="Search this website&#8230;" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="Search" />
</form>			<div id="social-media-icons">
							<a class="social-media-icon facebook" href="https://www.facebook.com/pages/The-Redwood-Project/159162924097944">Facebook</a>
									<a class="social-media-icon twitter" href="https://twitter.com/RedwoodProject">Twitter</a>
																										</div>
				<div class="clear"></div>
			<nav id="access">
				<a class="nav-show" href="#access">Show Navigation</a>
				<a class="nav-hide" href="#nogo">Hide Navigation</a>
				<div class="menu-redwood-project-blog-menu-container"><ul id="menu-redwood-project-blog-menu" class="menu"><li id="menu-item-286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-286"><a href="http://redwood-project.com">Home</a></li>
<li id="menu-item-297" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-297"><a href="http://www.redwood-project.com/index.html">The Project</a></li>
<li id="menu-item-298" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-298"><a href="http://www.redwood-project.com/index/business.html">Business</a></li>
<li id="menu-item-299" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-299"><a href="http://www.redwood-project.com/index/schools.html">Schools</a></li>
<li id="menu-item-300" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-300"><a href="http://www.redwood-project.com/index/individuals.html">Individuals</a></li>
<li id="menu-item-301" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-301"><a href="http://redwood-project.com/index/#aboutus">About Us</a></li>
<li id="menu-item-302" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-302"><a href="http://www.redwood-project.com/index/">Get with the Project</a></li>
</ul></div>				<div class="clear"></div>
			</nav><!-- #access -->
		</header><!-- #header -->														<div id="container">
		<section id="content" class="column twothirdcol">
										<div class="entries">
											<article class="post-348 post type-post status-publish format-standard hentry category-about-the-project column onecol" id="post-348">
	<div class="entry">
									<div class="entry-container">
			<header class="entry-header">
				<h2 class="entry-title"><a href="http://redwood-project.com/Wordpress/2014/02/05/think-youre-a-good-communicator-think-again/" rel="bookmark" title="Think You&#8217;re a Good Communicator? Think again.">Think You&#8217;re a Good Communicator? Think again.</a></h2>
							</header><!-- .entry-header -->
										<div class="entry-summary">
					<p>We hear a lot about the value of communication in a relationship. It&#8217;s important say the experts. True &#8211; being open, honest and clear with the people who matter are critical components of a successful relationship. No doubt about it.</p>
<p>The way I evaluated whether I was a good communicator was my ability to share what mattered to me, what I did or did not like and what I needed more of from the other person. I knew this could be hard for some people, but never was for me. So that makes me a good communicator, right?</p>
<p><span class="Apple-style-span" style="font-style: normal;"><span class="Apple-style-span" style="font-style: normal;"><span class="Apple-style-span" style="font-style: normal;">Not yet. I&#8217;ve been missing a big component of what successful commnication actually looks like.</span></span></span></p>
<div> <a href="http://redwood-project.com/Wordpress/2014/02/05/think-youre-a-good-communicator-think-again/#more-348" class="more-link">(more&#8230;)</a></div>
				</div><!-- .entry-summary -->
						<div class="clear"></div>
		</div><!-- .entry-container -->
							<aside class="entry-meta">
							<span class="entry-author-link"><a href="http://redwood-project.com/Wordpress/author/administrator/" title="Posts by Scott" rel="author">Scott</a></span>
									<span class="entry-date"><a href="http://redwood-project.com/Wordpress/2014/02/05/think-youre-a-good-communicator-think-again/" rel="bookmark" title="Think You&#8217;re a Good Communicator? Think again.">February 5, 2014</a></span>
												<span class="entry-category"><a href="http://redwood-project.com/Wordpress/category/about-the-project/" title="View all posts in About The Project" rel="category tag">About The Project</a></span>
								<span class="edit-link"><a class="post-edit-link" href="http://redwood-project.com/Wordpress/wp-admin/post.php?post=348&amp;action=edit" title="Edit Post">Edit</a></span>									<span class="entry-permalink"><a href="http://redwood-project.com/Wordpress/2014/02/05/think-youre-a-good-communicator-think-again/" rel="bookmark" title="Think You&#8217;re a Good Communicator? Think again.">Permalink</a></span>
										<div class="clear"></div>
		</aside><!-- .entry-meta -->
				</div><!-- .entry -->
</article><!-- .post -->											<article class="post-335 post type-post status-publish format-standard hentry category-amazing-research category-the-science-of-sappiness column onecol" id="post-335">
	<div class="entry">
									<div class="entry-container">
			<header class="entry-header">
				<h2 class="entry-title"><a href="http://redwood-project.com/Wordpress/2013/09/07/procrastination-animated/" rel="bookmark" title="Procrastination&#8230;Animated">Procrastination&#8230;Animated</a></h2>
							</header><!-- .entry-header -->
										<div class="entry-summary">
					<p>Procrastination and the desire to ditch it and nail what you know needs to be done is a very common request I hear from students and parents. What makes procrastination so frustrating as that when you are doing it, you <em>know</em><em> </em>you shouldn&#8217;t be. You know that what you are doing is hurting you and will cause all sorts of grief down the road. And sometimes &#8220;down the road&#8221; may be tomorrow morning.</p>
<p>I will be writing on this more and more as it seems to be something with which so many people struggle.</p>
<p>For starters, here is a really neat video that neatly paints a picture of what is going on in that brains of ours when we are dragging our feet.</p>
<p><iframe width="660" height="371" src="http://www.youtube.com/embed/1nBwfZZvjKo?feature=oembed" frameborder="0" allowfullscreen></iframe></p>
				</div><!-- .entry-summary -->
						<div class="clear"></div>
		</div><!-- .entry-container -->
							<aside class="entry-meta">
							<span class="entry-author-link"><a href="http://redwood-project.com/Wordpress/author/administrator/" title="Posts by Scott" rel="author">Scott</a></span>
									<span class="entry-date"><a href="http://redwood-project.com/Wordpress/2013/09/07/procrastination-animated/" rel="bookmark" title="Procrastination&#8230;Animated">September 7, 2013</a></span>
												<span class="entry-category"><a href="http://redwood-project.com/Wordpress/category/amazing-research/" title="View all posts in Amazing Research" rel="category tag">Amazing Research</a>, <a href="http://redwood-project.com/Wordpress/category/the-science-of-sappiness/" title="View all posts in The Science of Happiness" rel="category tag">The Science of Happiness</a></span>
								<span class="edit-link"><a class="post-edit-link" href="http://redwood-project.com/Wordpress/wp-admin/post.php?post=335&amp;action=edit" title="Edit Post">Edit</a></span>									<span class="entry-permalink"><a href="http://redwood-project.com/Wordpress/2013/09/07/procrastination-animated/" rel="bookmark" title="Procrastination&#8230;Animated">Permalink</a></span>
										<div class="clear"></div>
		</aside><!-- .entry-meta -->
				</div><!-- .entry -->
</article><!-- .post -->											<article class="post-327 post type-post status-publish format-standard hentry category-life-discuss column onecol" id="post-327">
	<div class="entry">
									<div class="entry-container">
			<header class="entry-header">
				<h2 class="entry-title"><a href="http://redwood-project.com/Wordpress/2013/07/03/the-victory-fallacy/" rel="bookmark" title="The &#8220;Victory!&#8221; Fallacy">The &#8220;Victory!&#8221; Fallacy</a></h2>
							</header><!-- .entry-header -->
										<div class="entry-summary">
					<p>Did any of you guys watch Entourage? Pretty fun show with some very memorable moments. Here&#8217;s one scene that stands out and has stuck with me:</p>
<p>The one and only Johnny Drama has hit rock bottom after what he thinks is another failed TV audition. He drives out to the desert &#8211; alone, sad, broken. As the sun sets he gets a call from his buddies saying the producers loved him and his show is going to be a hit. With the camera panning up and Cream&#8217;s &#8220;White Room&#8221; rocking in the background, Drama throws his arms up in a giant V and bellows &#8220;Victory!&#8221; in to the sweeping vista in front of him at the top of his lungs. Awesome.</p>
<p>I&#8217;ve thought about what my &#8220;Victory!&#8221; moment would look like many times. I&#8217;ve even practiced it (honestly). I&#8217;ve wonderd and dreamed about just how amazing it would feel.</p>
<p>Until I realized it was an illusion. A tempting, appealing myth.</p>
<p> <a href="http://redwood-project.com/Wordpress/2013/07/03/the-victory-fallacy/#more-327" class="more-link">(more&#8230;)</a></p>
				</div><!-- .entry-summary -->
						<div class="clear"></div>
		</div><!-- .entry-container -->
							<aside class="entry-meta">
							<span class="entry-author-link"><a href="http://redwood-project.com/Wordpress/author/administrator/" title="Posts by Scott" rel="author">Scott</a></span>
									<span class="entry-date"><a href="http://redwood-project.com/Wordpress/2013/07/03/the-victory-fallacy/" rel="bookmark" title="The &#8220;Victory!&#8221; Fallacy">July 3, 2013</a></span>
												<span class="entry-category"><a href="http://redwood-project.com/Wordpress/category/life-discuss/" title="View all posts in Life. Discuss." rel="category tag">Life. Discuss.</a></span>
								<span class="edit-link"><a class="post-edit-link" href="http://redwood-project.com/Wordpress/wp-admin/post.php?post=327&amp;action=edit" title="Edit Post">Edit</a></span>									<span class="entry-permalink"><a href="http://redwood-project.com/Wordpress/2013/07/03/the-victory-fallacy/" rel="bookmark" title="The &#8220;Victory!&#8221; Fallacy">Permalink</a></span>
										<div class="clear"></div>
		</aside><!-- .entry-meta -->
				</div><!-- .entry -->
</article><!-- .post -->									</div><!-- .entries -->
							<div id="posts-nav" class="navigation">
				<div class="nav-prev"></div>
									<div class="nav-all"><a href="http://redwood-project.com/Wordpress/page/2/" >Read all Articles &rarr;</a></div>
								<div class="clear"></div>
			</div><!-- #posts-nav -->
							</section><!-- #content -->
					<div id="sidebar" class="column threecol">
					<div id="sidebar-bottom" class="widget-area" role="complementary">
		<div class="column onecol"><aside id="kebo_twitter_feed_widget-2" class="widget kebo_twitter_feed_widget"><h3 class="widget-title">Redwood Project Tweets</h3>

<ul class="kebo-tweets slider light" id="kebo-tweet-slider" data-timer="10000" data-transition="1000" data-animation="fade">

        
            
        
        
                
            
            <li class="ktweet">

                <div class="kmeta">
                    <a class="kaccount" href="https://twitter.com/RedwoodProject" target="_blank">@RedwoodProject</a>
                    <a class="kdate" href="https://twitter.com/RedwoodProject/statuses/455072730724171776" target="_blank">
                        <time title="Time posted: 12th Apr 2014 19:59:28" datetime="2014-04-12T19:59:28+00:00" aria-label="Posted on 12th Apr 2014 19:59:28">April 12, 2014</time>
                    </a>
                </div>

                <p class="ktext">
                                        Rewood partnered w a education company there who liked what we are accomplishing & will be helping us deliver the sessions starting in May!                </p>

                <div class="kfooter">
                    <a class="kreply" title="Reply" href="https://twitter.com/intent/tweet?in_reply_to=455072730724171776"></a>
                    <a class="kretweet" title="Re-Tweet" href="https://twitter.com/intent/retweet?tweet_id=455072730724171776"></a>
                    <a class="kfavorite" title="Favorite" href="https://twitter.com/intent/favorite?tweet_id=455072730724171776"></a>
                </div>

            </li>

            
        
                
            
            <li class="ktweet">

                <div class="kmeta">
                    <a class="kaccount" href="https://twitter.com/RedwoodProject" target="_blank">@RedwoodProject</a>
                    <a class="kdate" href="https://twitter.com/RedwoodProject/statuses/455072262790459392" target="_blank">
                        <time title="Time posted: 12th Apr 2014 19:57:36" datetime="2014-04-12T19:57:36+00:00" aria-label="Posted on 12th Apr 2014 19:57:36">April 12, 2014</time>
                    </a>
                </div>

                <p class="ktext">
                                        Redwood takes China!! After a 2 wk trip to Shanghai making preparations, we are ready to run our first sessions with Chinese students!                </p>

                <div class="kfooter">
                    <a class="kreply" title="Reply" href="https://twitter.com/intent/tweet?in_reply_to=455072262790459392"></a>
                    <a class="kretweet" title="Re-Tweet" href="https://twitter.com/intent/retweet?tweet_id=455072262790459392"></a>
                    <a class="kfavorite" title="Favorite" href="https://twitter.com/intent/favorite?tweet_id=455072262790459392"></a>
                </div>

            </li>

            
        
                
            
                
            
            <li class="ktweet">

                <div class="kmeta">
                    <a class="kaccount" href="https://twitter.com/RedwoodProject" target="_blank">@RedwoodProject</a>
                    <a class="kdate" href="https://twitter.com/RedwoodProject/statuses/395788224888840192" target="_blank">
                        <time title="Time posted: 31st Oct 2013 05:44:00" datetime="2013-10-31T05:44:00+00:00" aria-label="Posted on 31st Oct 2013 05:44:00">October 31, 2013</time>
                    </a>
                </div>

                <p class="ktext">
                                        Big night in Beantown! Heard this: if u are 12 yrs old in Boston you've seen 3 Red Sox titles, 3 Pats Super Bowls, 1 Celts Title & 1 B's cup                </p>

                <div class="kfooter">
                    <a class="kreply" title="Reply" href="https://twitter.com/intent/tweet?in_reply_to=395788224888840192"></a>
                    <a class="kretweet" title="Re-Tweet" href="https://twitter.com/intent/retweet?tweet_id=395788224888840192"></a>
                    <a class="kfavorite" title="Favorite" href="https://twitter.com/intent/favorite?tweet_id=395788224888840192"></a>
                </div>

            </li>

            
        
                
            
            <li class="ktweet">

                <div class="kmeta">
                    <a class="kaccount" href="https://twitter.com/RedwoodProject" target="_blank">@RedwoodProject</a>
                    <a class="kdate" href="https://twitter.com/RedwoodProject/statuses/385104564141432832" target="_blank">
                        <time title="Time posted: 01st Oct 2013 18:10:57" datetime="2013-10-01T18:10:57+00:00" aria-label="Posted on 01st Oct 2013 18:10:57">October 1, 2013</time>
                    </a>
                </div>

                <p class="ktext">
                                        Ambition requires hard work. W/o hard work, resilience, focus & guts you're not ambitious, you're a dreamer.                </p>

                <div class="kfooter">
                    <a class="kreply" title="Reply" href="https://twitter.com/intent/tweet?in_reply_to=385104564141432832"></a>
                    <a class="kretweet" title="Re-Tweet" href="https://twitter.com/intent/retweet?tweet_id=385104564141432832"></a>
                    <a class="kfavorite" title="Favorite" href="https://twitter.com/intent/favorite?tweet_id=385104564141432832"></a>
                </div>

            </li>

            
        
                
            
            <li class="ktweet">

                <div class="kmeta">
                    <a class="kaccount" href="https://twitter.com/RedwoodProject" target="_blank">@RedwoodProject</a>
                    <a class="kdate" href="https://twitter.com/RedwoodProject/statuses/383253155875549184" target="_blank">
                        <time title="Time posted: 26th Sep 2013 15:34:07" datetime="2013-09-26T15:34:07+00:00" aria-label="Posted on 26th Sep 2013 15:34:07">September 26, 2013</time>
                    </a>
                </div>

                <p class="ktext">
                                        Thanks to the Grand Erie District School Board. 75 students through Rdwd in 2 days! A amazing collection of students & teachers Growing Big.                </p>

                <div class="kfooter">
                    <a class="kreply" title="Reply" href="https://twitter.com/intent/tweet?in_reply_to=383253155875549184"></a>
                    <a class="kretweet" title="Re-Tweet" href="https://twitter.com/intent/retweet?tweet_id=383253155875549184"></a>
                    <a class="kfavorite" title="Favorite" href="https://twitter.com/intent/favorite?tweet_id=383253155875549184"></a>
                </div>

            </li>

                
                
      
            
    
</ul>

<script type="text/javascript">
    
    /*
     * Capture Show/Hide photo link clicks, then show/hide the photo.
     */
    jQuery( '.ktweet .kfooter a:not(.ktogglemedia)' ).click(function(e) {
    
        // Prevent Click from Reloading page
        e.preventDefault();
        
        var href = jQuery(this).attr('href');
        window.open( href, 'twitter', 'width=600, height=400, top=0, left=0');

    });

</script></aside><!-- .widget --></div><div class="column onecol"><aside id="pis_posts_in_sidebar-2" class="widget posts-in-sidebar"><h3 class="widget-title">Hot Posts</h3>
				
				
			
						<ul class="pis-ul">

				
										
					<li class="pis-li">

																			<p class="pis-title">
																										<a class="pis-title-link" href="http://redwood-project.com/Wordpress/2014/02/05/think-youre-a-good-communicator-think-again/" title="Permalink to Think You&#8217;re a Good Communicator? Think again." rel="bookmark">
																		Think You&#8217;re a Good Communicator? Think again.																											</a>
															</p>
						
																									
												
														
														
																													
						
												
												
												
					</li>

				
										
					<li class="pis-li">

																			<p class="pis-title">
																										<a class="pis-title-link" href="http://redwood-project.com/Wordpress/2013/09/07/procrastination-animated/" title="Permalink to Procrastination&#8230;Animated" rel="bookmark">
																		Procrastination&#8230;Animated																											</a>
															</p>
						
																									
												
														
														
																													
						
												
												
												
					</li>

				
										
					<li class="pis-li">

																			<p class="pis-title">
																										<a class="pis-title-link" href="http://redwood-project.com/Wordpress/2013/07/03/the-victory-fallacy/" title="Permalink to The &#8220;Victory!&#8221; Fallacy" rel="bookmark">
																		The &#8220;Victory!&#8221; Fallacy																											</a>
															</p>
						
																									
												
														
														
																													
						
												
												
												
					</li>

				
			</ul>
			<!-- / ul#pis-ul -->

						
				
				
		<!-- Generated by Posts in Sidebar v1.13 -->
</aside><!-- .widget --></div>	</div><!-- #sidebar-bottom -->
</div><!-- #sidebar -->				<div class="clear"></div>
	</div><!-- #container -->
									<div id="footer">
				<div id="footer-area" class="widget-area" role="complementary">
		<div class="column threecol"><aside id="categories-3" class="widget widget_categories"><h3 class="widget-title">Categories</h3>		<ul>
	<li class="cat-item cat-item-1"><a href="http://redwood-project.com/Wordpress/category/about-the-project/" title="Topics that describe what the Project is about, it&#039;s objectives and upcoming programs.">About The Project</a>
</li>
	<li class="cat-item cat-item-5"><a href="http://redwood-project.com/Wordpress/category/amazing-research/" title="Posts outlining some of the specific and ground breaking research that continues to inspire the Redwood Project.">Amazing Research</a>
</li>
	<li class="cat-item cat-item-8"><a href="http://redwood-project.com/Wordpress/category/life-discuss/" title="Just like it says">Life. Discuss.</a>
</li>
	<li class="cat-item cat-item-6"><a href="http://redwood-project.com/Wordpress/category/people-that-fire-us-up/" title="Other Great Happiness Work. Posts describing all the amazing work being done by other leaders in the field of human flourishing">People that Fire Us Up</a>
</li>
	<li class="cat-item cat-item-7"><a href="http://redwood-project.com/Wordpress/category/redwood-project-success-stories/" title="Posts discussing individual stories of Members and accomplishments of the Project">RWP Success Stories</a>
</li>
	<li class="cat-item cat-item-3"><a href="http://redwood-project.com/Wordpress/category/the-science-of-sappiness/" title="Posts used during development and testing">The Science of Happiness</a>
</li>
		</ul>
</aside><!-- .widget --></div><div class="column threecol"><aside id="archives-3" class="widget widget_archive"><h3 class="widget-title">Archives</h3>		<select name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> <option value="">Select Month</option> 	<option value='http://redwood-project.com/Wordpress/2014/02/'> February 2014 </option>
	<option value='http://redwood-project.com/Wordpress/2013/09/'> September 2013 </option>
	<option value='http://redwood-project.com/Wordpress/2013/07/'> July 2013 </option>
	<option value='http://redwood-project.com/Wordpress/2013/05/'> May 2013 </option>
	<option value='http://redwood-project.com/Wordpress/2013/04/'> April 2013 </option>
	<option value='http://redwood-project.com/Wordpress/2013/03/'> March 2013 </option>
	<option value='http://redwood-project.com/Wordpress/2012/12/'> December 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2012/11/'> November 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2012/07/'> July 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2012/05/'> May 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2012/04/'> April 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2012/03/'> March 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2012/02/'> February 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2012/01/'> January 2012 </option>
	<option value='http://redwood-project.com/Wordpress/2011/12/'> December 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2011/11/'> November 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2011/09/'> September 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2011/07/'> July 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2011/04/'> April 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2011/03/'> March 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2011/02/'> February 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2011/01/'> January 2011 </option>
	<option value='http://redwood-project.com/Wordpress/2010/12/'> December 2010 </option>
	<option value='http://redwood-project.com/Wordpress/2010/09/'> September 2010 </option>
	<option value='http://redwood-project.com/Wordpress/2010/08/'> August 2010 </option>
 </select>
</aside><!-- .widget --></div><div class="column threecol"><aside id="meta-3" class="widget widget_meta"><h3 class="widget-title">Meta</h3>			<ul>
			<li><a href="http://redwood-project.com/Wordpress/wp-admin/">Site Admin</a></li>			<li><a href="http://redwood-project.com/Wordpress/wp-login.php?action=logout&#038;_wpnonce=cafdef12a3">Log out</a></li>
			<li><a href="http://redwood-project.com/Wordpress/feed/" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="http://redwood-project.com/Wordpress/comments/feed/" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
						</ul>
</aside><!-- .widget --></div>		<div class="clear"></div>
	</div><!-- #footer-area -->
			<div id="copyright">
				<p class="copyright twocol">© 2014 </p>
									<p class="credits twocol">
																															Powered by <a href="http://www.onedesigns.com/wordpress-themes/pinboard" title="Pinboard Theme">Pinboard Theme</a> and <a href="http://wordpress.org/" title="WordPress">WordPress</a>											</p>
								<div class="clear"></div>
			</div><!-- #copyright -->
		</div><!-- #footer -->
	</div><!-- #wrapper -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<link rel='stylesheet' id='kebo-twitter-plugin-css'  href='http://redwood-project.com/Wordpress/wp-content/plugins/kebo-twitter-feed/css/plugin.css?ver=0.9.8' type='text/css' media='all' />
<script type='text/javascript' src='http://redwood-project.com/Wordpress/wp-includes/js/admin-bar.min.js?ver=3.5.2'></script>
    <script type="text/javascript">
        //<![CDATA[
        jQuery(document).ready(function() {
            
            var timer = jQuery( "#kebo-tweet-slider" ).data( "timer" );
            var transition = jQuery( "#kebo-tweet-slider" ).data( "transition" );
            var tcount = 1;
            var limit = jQuery("#kebo-tweet-slider .ktweet").size();
            var theight = jQuery('#kebo-tweet-slider .ktweet').eq(0).outerHeight();
            var initTweets = setInterval( fadeTweets, timer );
            
            jQuery('#kebo-tweet-slider .ktweet').eq(0).fadeToggle('1000').delay( timer - transition ).fadeToggle('1000');
            jQuery('#kebo-tweet-slider').height(theight);

            function fadeTweets() {

                if (tcount == limit) {
                    tcount = 0;
                }
                theight = jQuery('#kebo-tweet-slider .ktweet').eq(tcount).outerHeight();
                jQuery('#kebo-tweet-slider').height(theight);
                jQuery('#kebo-tweet-slider .ktweet').eq(tcount).fadeToggle('1000').delay( timer - transition ).fadeToggle('1000');

                ++tcount;

            }

        });
        //]]>
    </script>
    	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq nojs" role="navigation">
			<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Top navigation toolbar." tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://redwood-project.com/Wordpress/wp-admin/about.php" title="About WordPress"><span class="ab-icon"></span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/about.php">About WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item"  href="http://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item"  href="http://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item"  href="http://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item"  href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://redwood-project.com/Wordpress/wp-admin/">redwood-project.com/Wordpress</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/">Dashboard</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/themes.php">Themes</a>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/customize.php?url=http%3A%2F%2Fredwood-project.com%2FWordpress%2Findex.php">Customize</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/widgets.php">Widgets</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/nav-menus.php">Menus</a>		</li>
		<li id="wp-admin-bar-background"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/themes.php?page=custom-background">Background</a>		</li>
		<li id="wp-admin-bar-header"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/themes.php?page=custom-header">Header</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-updates"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/update-core.php" title="6 Plugin Updates, 3 Theme Updates"><span class="ab-icon"></span><span class="ab-label">9</span><span class="screen-reader-text">6 Plugin Updates, 3 Theme Updates</span></a>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/edit-comments.php" title="0 comments awaiting moderation"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://redwood-project.com/Wordpress/wp-admin/post-new.php" title="Add New"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-link"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/link-add.php">Link</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/user-new.php">User</a>		</li></ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://redwood-project.com/Wordpress/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><input type="submit" class="adminbar-button" value="Search"/></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item"  aria-haspopup="true" href="http://redwood-project.com/Wordpress/wp-admin/profile.php" title="My Account">Howdy, Scott<img alt='' src='http://0.gravatar.com/avatar/09f6cd464e78ee9c9d0df3b7fb7f9be7?s=16&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D16&amp;r=G' class='avatar avatar-16 photo' height='16' width='16' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://redwood-project.com/Wordpress/wp-admin/profile.php"><img alt='' src='http://0.gravatar.com/avatar/09f6cd464e78ee9c9d0df3b7fb7f9be7?s=64&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&amp;r=G' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>Scott</span><span class='username'>administrator</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item"  href="http://redwood-project.com/Wordpress/wp-login.php?action=logout&#038;_wpnonce=cafdef12a3">Log Out</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://redwood-project.com/Wordpress/wp-login.php?action=logout&#038;_wpnonce=cafdef12a3">Log Out</a>
					</div>

		</body>
</html>
<!-- Dynamic Page Served (once) in 1.116 seconds -->
<!-- Cached page served by WP-Cache -->
<script type="text/javascript">(function (d, w) {var x = d.getElementsByTagName('SCRIPT')[0];var f = function () {var s = d.createElement('SCRIPT');s.type = 'text/javascript';s.async = true;s.src = "//np.lexity.com/embed/YW/80bc9cdcedbd70aff7e88ad5cf2f7ee2?id=27e3c73f95bd";x.parentNode.insertBefore(s, x);};w.attachEvent ? w.attachEvent('onload',f) :w.addEventListener('load',f,false);}(document, window));</script>