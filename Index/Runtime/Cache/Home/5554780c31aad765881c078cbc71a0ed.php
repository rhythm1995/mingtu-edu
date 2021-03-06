<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<!--[if lt IE 9]>
<script src="http//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php echo ($home["name"]); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/england/Public/images/favicon.gif"/>
    <link rel="stylesheet" href="/england/Public/css/style.css" media="screen"/><!-- MAIN STYLE CSS FILE -->
    <link rel="stylesheet" href="/england/Public/css/responsive.css" media="screen"/><!-- RESPONSIVE CSS FILE -->
    <link rel="stylesheet" href="/england/Public/css/responsive.css" media="screen"/><!-- RESPONSIVE CSS FILE -->
    <link rel="stylesheet" id="style-color" href="/england/Public/css/colors/blue-color.css" media="screen"/>
    <!-- DEFAULT BLUE COLOR CSS FILE -->
    <link href='http//fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
    <!-- ROBOTO FONT FROM GOOGLE CSS FILE -->
    <link rel="stylesheet" href="/england/Public/css/prettyPhoto.css" media="screen"/><!--PRETTYPHOTO CSS FILE -->
    <link rel="stylesheet" href="/england/Public/css/font-awesome/font-awesome.min.css" media="screen"/>
    <!-- FONT AWESOME ICONS CSS FILE -->
    <link rel="stylesheet" href="/england/Public/css/layer-slider.css" media="screen"/><!-- LAYER SLIDER CSS FILE -->
    <link rel="stylesheet" href="/england/Public/css/flexslider.css" media="screen"/><!-- FLEX SLIDER CSS FILE -->
    <link rel="stylesheet" href="/england/Public/css/revolution-slider.css" media="screen"/>
    <!-- REVOLUTION SLIDER CSS FILE -->
    <!-- All JavaScript Files (FOR FASTER LOADING OF YOUR SITE, REMOVE ALL JS PLUGINS YOU WILL NOT USE)-->
    <script type="text/javascript" src="/england/Public/js/jquery.min.js"></script><!-- JQUERY JS FILE -->
    <script type="text/javascript" src="http//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- JQUERY UI JS FILE -->
    <script type="text/javascript" src="/england/Public/js/flex-slider.min.js"></script><!-- FLEX SLIDER JS FILE -->
    <script type="text/javascript" src="/england/Public/js/navigation.min.js"></script><!-- MAIN NAVIGATION JS FILE -->
    <script type="text/javascript" src="/england/Public/js/jquery.layerslider.js"></script><!-- LAYER SLIDER JS FILE -->
    <script type="text/javascript" src="/england/Public/js/layerslider.transitions.js"></script>
    <!-- LAYER SLIDER TRANSITIONS JS FILE -->
    <script type="text/javascript" src="/england/Public/js/map.min.js"></script><!-- GOOGLE MAP JS FILE -->
    <script type="text/javascript" src="/england/Public/js/carousel.js"></script><!-- CAROUSEL SLIDER JS -->
    <script type="text/javascript" src="/england/Public/js/jquery.theme.plugins.min.js"></script>
    <!-- REVOLUTION SLIDER PLUGINS JS FILE -->
    <script type="text/javascript" src="/england/Public/js/jquery.themepunch.revolution.min.js"></script>
    <!-- REVOLUTION SLIDER JS FILE -->
    <script type="text/javascript" src="/england/Public/js/flickr.js"></script><!-- FLICKR WIDGET JS FILE -->
    <script type="text/javascript" src="/england/Public/js/instagram.js"></script><!-- INSTAGRAM WIDGET JS FILE -->
    <script type="text/javascript" src="/england/Public/js/jquery.twitter.js"></script><!--TWITTER WIDGET JS FILE -->
    <script type="text/javascript" src="/england/Public/js/prettyPhoto.min.js"></script><!-- PRETTYPHOTO JS FILE -->
    <script type="text/javascript" src="/england/Public/js/jquery.tooltips.min.js"></script><!-- TOOLTIPS JS FILE -->
    <script type="text/javascript" src="/england/Public/js/isotope.min.js"></script><!--ISOTOPE JS FILE -->
    <script type="text/javascript" src="/england/Public/js/scrolltopcontrol.js"></script><!-- SCROLL TO TOP JS PLUGIN -->
    <script type="text/javascript" src="/england/Public/js/jquery.easy-pie-chart.js"></script><!-- EASY PIE JS FILE -->
    <script type="text/javascript" src="/england/Public/js/jquery.transit.min.js"></script><!-- TRANSITION JS FILE -->
    <script type="text/javascript" src="/england/Public/js/custom.js"></script><!-- CUSTOM JAVASCRIPT JS FILE -->
</head>
<body>
<div id="container">
    <!-- main container starts-->
    <div id="wrapp">
        <!-- main wrapp starts-->
        <header id="header" style="margin-top: 30px">
            <!--header starts -->
            <div class="container">
                <div class="head-wrapp">
                    <a href="<?php echo U('index/index');?>" id="logo"><span style="font-size: 30px;font-weight: bolder;color: #2f2f2f"><?php echo ($home["name"]); ?></span>
                        </a>
                    <a href="<?php echo U('index/change');?>"><?php echo ($home["lan"]); ?></a>
                    <!--your logo-->
                    <nav class="top-search">
                        <!-- search starts-->
                        <form action="<?php echo U('index/article_list');?>" method="get">
                            <button class="search-btn"></button>
                            <input name="search" class="search-field" type="text" onblur="if(this.value=='')this.value='Search';"
                                   onfocus="if(this.value=='Search')this.value='';" value="Search"/>
                        </form>
                    </nav>
                    <!--search ends -->
                </div>
            </div>
            <div id="main-navigation" class="fixed">
                <!--main navigation wrapper starts -->
                <div class="container">
                    <ul class="main-menu">
                        <?php if(is_array($category)): foreach($category as $key=>$cate): if($cate["url"] == '0'): ?><li><a href="#"><?php echo ($cate["categoryname"]); ?></a>
                                    <?php else: ?>
                                <li><a href="<?php echo ($cate["url"]); ?>"><?php echo ($cate["categoryname"]); ?></a><?php endif; ?>
                            <ul>
                                <?php if(is_array($categories)): foreach($categories as $key=>$it): if($cate["id"] == $it['type']): if($it["url"] == '0'): ?><li><a href="<?php echo U('index/article_list');?>?category=<?php echo ($it["id"]); ?>"><?php echo ($it["categoryname"]); ?></a>
                                            </li>
                                            <?php else: ?>
                                            <li><a href="<?php echo ($it["url"]); ?>"><?php echo ($it["categoryname"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
                            </ul>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
            <!--main navigation wrapper ends -->
        </header>


<div id="content">
    <div id="breadcrumb">
        <!-- breadcrumb starts-->
        <div class="container">
            <div class="one-half">
                <a href="<?php echo U('index/article_list');?>?category=<?php echo ($article["category"]); ?>"><h4><?php echo ($article["categoryName"]); ?></h4></a>
            </div>
        </div>
    </div>
    <!--breadcrumbs ends -->
    <div class="container">
        <div class="one">
            <div class="three-fourth">
                <div class="blog-post">
                    <div class="permalink">
                        <h4><a href="#"><?php echo ($article["title"]); ?></a></h4>
                    </div>
                    <ul class="post-meta">
                        <li><i class="icon-time"></i><?php echo ($article["time"]); ?></li>
                        <!-- Date -->
                        <li><i class="icon-user"></i><a href="#"><?php echo ($article["author"]); ?></a></li>
                        <!-- Author -->
                        <li><i class="icon-tags"></i><a href="#"><?php echo ($article["categoryname"]); ?></a></li>
                        <!-- Category -->
                    </ul>
                    <!-- End post-meta -->
                    <div class="post-intro" id="information"><?php echo ($article["information"]); ?>
                    </div>
                </div>
            </div>

            
<div class="one-fourth sidebar right">
    <div class="widget">
        <h4 class="widget-title">联系方式</h4>
        <?php if(is_array($information)): foreach($information as $k=>$v): endforeach; endif; ?>
        <p><?php echo ($k); ?>： <?php echo ($v); ?></p>
    </div>
    <div>
        <a href="<?php echo U('message/index');?>" class="button grey huge round">联系我们</a>
    </div>
</div>
</div>
</div>
</div>
<!-- 调用脚部文件 -->

<section class="footer-call-to-action">
    <section class="container">
        <div class="three-fourth">
            <h4>如果您对我们提供的服务感兴趣,请联系我们.</h4>
        </div>
        <div class="one-fourth">
            <a href="<?php echo U('message/index');?>" class="button grey huge round">联系方式</a>
        </div>
    </section>
</section><!-- footer call to action ends -->
<footer id="footer" class="style-01"><!--footer starts -->
    <section class="container">
        <section class="one-third">
            <h4><?php echo ($home["name"]); ?></h4>
            <ul class="twitter-feeds">
                <!-- twitter widget starts-->
            </ul>
            <!-- twitter widget ends-->
            <p>
                <a href="<?php echo U('index/index');?>">首页</a>
            </p>
        </section>
        <section class="one-third">
            <h4>列表</h4>
            <ul>
                <!-- latest posts widget starts-->
                <?php if(is_array($categories)): foreach($categories as $key=>$category): ?><li><a href="<?php echo U('index/article_list');?>?category=<?php echo ($category["id"]); ?>"><?php echo ($article["categoryname"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
            <!-- lastest posts widget ends-->
        </section>
        <section class="one-third">
            <h4>服务</h4>
            <ul>
                <!-- flickr widget starts-->
                <?php if(is_array($bottom_articles)): foreach($bottom_articles as $key=>$article): ?><li><a href="<?php echo U('index/article');?>?id=<?php echo ($article["id"]); ?>"><?php echo ($article["title"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
        </section>
    </section>
</footer>
<section id="copyrights">
    <section class="container">
        <div class="one-half">
            <p>
                Copyright &copy; 2016  All rights reserved.
            </p>
        </div>
        <div class="one-half">
            <ul class="copyright_links">
                <li><a href="#" title="Home">Home</a></li>
            </ul>
        </div>
    </section>
</section>
</div>
<!-- main wrapp starts-->
</div>
<!-- main container ends-->

</body>
</html>