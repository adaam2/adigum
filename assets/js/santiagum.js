$.fn.toggleClick = function(){
    var functions = arguments;
    
    return this.click(function() {
        var iteration = $(this).data('iteration') || 0;
        
        functions[iteration].apply(this, arguments);
        iteration = (iteration + 1) % functions.length;
        
        $(this).data('iteration', iteration);
    });
};

var santiagum = {
    teaserImage: function() {
        var $window = $(window),
        $image = $('.post-image-image, .teaserimage-image');
        
        $window.on('scroll', function() {
            var top = $window.scrollTop();
            
            if(top < 0 || top > 1500) {
                return;
            }
            
            $image.css('transform', 'translate3d(0px, '+top/3+'px, 0px)').css('opacity', 1-Math.max(top/700, 0));
        });
        
        $window.trigger('scroll');            
        
        $('.article-image').css('height', $(window).height());
        var height = $('.article-image').height();
        $('.post-content').css('padding-top', height + 'px');
    },
    
    ui: function() {
        // Fake links
        $('a[href="#"], .topofpage').click(function(e) {
            e.preventDefault();
        });
        
        // External links
        $('a[rel="external"]').attr('target', '_blank');
        
        // Do scroll
        $('.doscroll').click(function(e) {
            e.preventDefault();
            
            var elementClicked = $(this).attr('href');
            var destination = $(elementClicked).offset().top;
            
            $('html:not(:animated),body:not(:animated)').animate({
                scrollTop: destination - 30
            }, 500);
        });
        
        // Calculate reading time
        $('.post-content').readingTime({
            readingTimeTarget: '.post-reading-time',
            wordCountTarget: '.post-word-count'
        });
        
        // Search
        $('aside form input').focus(function() {
            $(this).animate({
                'width': '100%'
            });
        });
        
        $('aside form input').blur(function() {
            $(this).animate({
                'width': '70%'
            });
        });
        
        // Comments
        $('#comments input#author').attr('placeholder', $('#comments .comment-form-author label').text());
        $('#comments input#email').attr('placeholder', $('#comments .comment-form-email label').text());
        $('#comments input#url').attr('placeholder', $('#comments .comment-form-url label').text());
        $('#comments textarea#comment').attr('placeholder', $('#comments .comment-form-comment label').text());
    },
    
    triggers: function() {
        // Show/Hide Aside Nav
        $('.logo-santiagum').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            $(this).hide();
            
            $('.wrapper').animate({
                'left': '250px'
            }, 'swing');
            
            $('aside').animate({
                'left': '0'
            });
            
            $('body, .wrapper').addClass('overflow-hidden');
        });
        
        $('.wrapper').click(function(e) {
            e.stopPropagation();
            
            if($('body').hasClass('overflow-hidden')) {
                $('.wrapper').animate({
                    'left': '0'
                }, 'swing');
                
                $('aside').animate({
                    'left': '-250px'
                });
                
                $('body, .wrapper').removeClass('overflow-hidden');
                
                $('.logo-santiagum').delay(500).fadeIn('fast');
            }
        })
        
        // Show/Hide Comments
        $('#comments .index-headline span').toggleClick(
            function() {
                $(this).html('Hide Comments <i class="fa fa-arrow-up"></i>');
                
                $('#comments').find('.comments-wrapper').slideDown(900);
            },
            function() {
                var $this = $(this);
                $('#comments').find('.comments-wrapper').slideUp(500, function() {
                    $this.html('Show Comments <i class="fa fa-arrow-down"></i>');
                });
            }
        );
    },
    
    init: function() {
        santiagum.ui();
        santiagum.teaserImage();
        santiagum.triggers();
        
        hljs.initHighlightingOnLoad();
    }
};