<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Acme Blog</title>
    
    <meta name="description" content="Lorem ipsum dolor" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Acme Blog">
    <meta name="twitter:description" content="Lorem ipsum">
    <meta name="twitter:site" content="http://juanpablob.com">
    <meta name="twitter:creator" content="@juanpablob">
    <meta name="google-site-verification" content="">
    <meta property="fb:admins" content="">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Acme Site">
    <meta property="og:description" content="Lorem ipsum">

    <!--<link rel="shortcut icon" href="{{asset "favicon.ico"}}">-->
    <link rel="stylesheet" href="assets/js/styles/obsidian.css">
    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body class="home-template">

    <a href="/" class="logo-readium"><span class="logo" style="background-image: url(assets/img/readium-logo.png)"></span></a>


<div class="teaserimage">
    <div class="teaserimage-image" style="background-image: url(assets/img/cover.jpg);">
        Teaser Image
    </div>
</div>

<header class="blog-header">
    <a class="blog-logo" href="/" style="background-image: url(assets/img/jp.jpg)">Juan Pablo Barrientos</a>
    
    <h1 class="blog-title">Juan Pablo Barrientos L.</h1>
    <h2 class="blog-description">Self-made developer and proudly fan of tea, lettuce and soups.</h2>
    
    <div class="custom-links">
        <a href="https://twitter.com/juanpablob" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
        <a href="https://plus.google.com/113570202169808481097/posts" target="_blank"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
        <a href="https://www.pinterest.com/markreadM/" target="_blank"><i class="fa fa-pinterest"></i></a>&nbsp;&nbsp;·&nbsp;&nbsp;
        <a href="/aboutme/">Sobre mi</a>&nbsp;&nbsp;·&nbsp;&nbsp;
        <a href="/veroffentlichungen/">Trabajos</a>&nbsp;&nbsp;·&nbsp;&nbsp;
        <a href="/alles-ausser-sprachkritik/">Contacto</a>
    </div>
</header>

<script>
    (function ($) {
        "use strict";
    
        $(document).ready(function(){
    
            var $window = $(window),
                $image = $('.teaserimage-image');
            $window.on('scroll', function() {
                var top = $window.scrollTop();
    
                if (top < 0 || top > 1500) { return; }
                $image
                    .css('transform', 'translate3d(0px, '+top/3+'px, 0px)')
                    .css('opacity', 1-Math.max(top/700, 0));
            });
            $window.trigger('scroll');
    
        });
    
    }(jQuery));
</script>

<main class="content" role="main">
    
    <h5 class="index-headline featured"><span>Featured</span></h5>
    
    <div class="container featured">
        <article class="{{post_class}}" itemscope itemtype="http://schema.org/BlogPosting" role="article">
            <div class="article-item">
                <header class="post-header">
                    <h2 class="post-title" itemprop="name"><a href="{{url}}" itemprop="url">Gastropub Echo Park food truck Pinterest, distillery</a></h2>
                </header>
                <section class="post-excerpt" itemprop="description">
                    <p>Tumblr distillery narwhal bitters. Tote bag cliche bicycle rights, blog readymade slow-carb keytar Echo Park tofu leggings pour-over letterpress gentrify synth. Gluten-free DIY sustainable YOLO&hellip;</p>
                </section>
                <div class="post-meta"><time datetime="">11 Apr 2014</time> on <a href="#">digital strategy</a>, <a href="#">marketing</a></div>
            </div>
        </article>
    </div>
    
    
    <h5 class="index-headline normal"><span>Regular</span></h5>
    
    <div class="cf frame">
        <article class="{{post_class}}" itemscope itemtype="http://schema.org/BlogPosting" role="article">
            <div class="article-item">
                <header class="post-header">
                    <h2 class="post-title" itemprop="name"><a href="{{url}}" itemprop="url">Gastropub Echo Park food truck Pinterest, distillery</a></h2>
                </header>
                <section class="post-excerpt" itemprop="description">
                    <p>Tumblr distillery narwhal bitters. Tote bag cliche bicycle rights, blog readymade slow-carb keytar Echo Park tofu leggings pour-over letterpress gentrify synth. Gluten-free DIY sustainable YOLO&hellip;</p>
                </section>
                <div class="post-meta"><time datetime="">11 Apr 2014</time> on <a href="#">digital strategy</a>, <a href="#">marketing</a></div>
            </div>
        </article>
    </div>


    <nav class="pagination" role="navigation">
        <span class="page-number">Page 1 of 4</span>
        &nbsp;&nbsp;·&nbsp;&nbsp;
        <a class="older-posts" href="/page/2/">Older</a>
    </nav>

</main>

<footer class="site-footer">
    <a class="subscribe icon-feed" href="#"><span class="tooltip"> Subscribe!</span></a>
    <div class="inner">
         <section class="copyright">All content copyright <a href="#">Juan Pablo Barrientos</a> &copy; 2014 &bull; All rights reserved.</section>
         <section class="poweredby">Proudly published with <a href="http://ghost.org"> Ghost</a></section>
    </div>
</footer>
    
    <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
    <script src="assets/js/readingTime.min.js"></script>
    <script src="assets/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</body>
</html>
