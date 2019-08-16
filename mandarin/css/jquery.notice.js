(function($){
    $.fn.notice_l = function(options) {
    
    var options = $.extend({  
        text:'Notification',
		type: 'info',
        duration: 3000,
		speedOpen: 300,
		speedClose: 200, 
        sticked:true,
        position:{bottom:0,left:0} 
    }, options);
    
    var listNotice = $('#listNotice'); 
    
    
    if (!listNotice.length) { 
     
        var listNotice = $('<ul>', {id: 'listNotice', css: options.position }).appendTo(this);
        
    }
    
    var notice = $('<li class="notice '+ options.type +'"></li>');
    listNotice.append(notice);
    setTimeout(function(){
		$(".notice").animate({marginLeft: 0}, options.speedClose)
	}, 1);
	if($('.notice').length > 3)
	{
		$('.notice:first-child').animate({marginBottom: '-50px', opacity: 0}, options.speedOpen,function(){ 
                $(this).remove(); 
            });
	}
    notice.html(options.text); 
    notice.click(function(){  
        notice.animate({marginBottom: '-50px', opacity: 0}, options.speedOpen,function(){ 
            $(this).remove(); 
        });
    });
    if (!options.sticked) {
        setTimeout(function(){ 
            notice.animate({marginBottom: '-50px', opacity: 0}, options.speedOpen,function(){ 
                $(this).remove(); 
            });
        }, options.duration);
    }
};

})(jQuery);