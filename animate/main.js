(function($){
 
    $.fn.anchorScroll = function(options) {
 
        var defaults =
            speed: 1100,
            fx: "jswing"
        }; 
 
        var options = $.extend(defaults, options);
        return this.each(function(){
 
                var element = this;
 
                $(element).click(function(e) { 
 
                    var locationHref = window.location.href;
                    var elementClick = $(element).attr("href");
 
                    var destination = $(elementClick).offset().top;
 
                    $("html,body").animate({ scrollTop: destination}, options.speed,  options.fx);
 
                    e.preventDefault();
                    return false;
 
                });
 
        });
 
    };
 
})(jQuery);