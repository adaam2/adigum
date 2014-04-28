var santiagum = {
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
        
        // Fit videos
        $('.post-content').fitVids();
        
        // Calculate reading time
        $('.post-content').readingTime({
            readingTimeTarget: '.post-reading-time',
            wordCountTarget: '.post-word-count',
        });
        
        // Create captions from alt tags
        $('.post-content img').each(function() {
            if($(this).attr('alt')) {
                $(this).wrap('<figure class="image"></figure>').after('<figcaption>' + $(this).attr('alt')+'</figcaption>');
            }
        });
        
        // Remove first image of article and make cover post
        /*$('.post-content').each(function() {
            var $this = $(this),
            img = $this.find('img:first'),
            url = img.attr('src');
            
            $('.post-image-image').css('background-image', 'url('+ url +')');
                    
            img.remove();
        });*/
    },
    
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
        
        var height = $('.article-image').height();
        $('.post-content').css('padding-top', height + 'px');
    },
    
    triggers: function() {
        
    },
    
    init: function() {
        santiagum.ui();
        santiagum.teaserImage();
        santiagum.triggers();
        
        hljs.initHighlightingOnLoad();
    }
};