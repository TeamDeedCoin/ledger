var direction = 'down';

$(function(){
	var top = $('body').scrollTop();

	var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: "onLeave"
        }
    });
	
	$('body').on('mousewheel DOMMouseScroll', function(e){
		if(typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {
			if(e.originalEvent.detail > 0)
				direction = 'down';
			else if(e.originalEvent.detail < 0)
				direction = 'up';
		}else if(typeof e.originalEvent.wheelDelta == 'number') {
			if(e.originalEvent.wheelDelta < 0)
				direction = 'down';
			else if(e.originalEvent.wheelDelta > 0)
				direction = 'up';
		}

		return firstScroll();
	});

	var firstScroll = function(){
		top = $('body').scrollTop();

		return true;
	}

	new ScrollMagic.Scene({
        triggerElement: ".section_overview",
        duration: 1000,
        offset: -600
    })
    .addTo(controller)
    .triggerHook("onCenter")
    .setTween(
        new TimelineMax({delay: 1})
        	.add(TweenMax.to('.section_overview, #overlay', 2, { opacity: 1 } ))
    );

    // Other Letters
    var overviewText = new TimelineMax()
    	.add(TweenMax.to(".section_overview .action3", 0.2, {css:{opacity: 1}}))
	    .add(TweenMax.to(".section_overview .action4", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action5", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action6", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action7", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action8", 0.2, {opacity: 1}));

	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", reverse: false, offset: -200})
        .setTween(overviewText)
        .addTo(controller);

    // Content
    var overviewTable = new TimelineMax()
    	.add(TweenMax.to("#tableOverview .row1", 0.7, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row2", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row3", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row4", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row5", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row6", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row7", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row8", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row9", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row10", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row11", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row12", 0.3, {css:{opacity: 1, right: 0}}))
    	.add(TweenMax.to("#tableOverview .row13", 0.3, {css:{opacity: 1, right: 0}}))

    var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", reverse: false, offset: -100})
    	.setTween(overviewTable)
    	.addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: ".section_consulting",
        duration: 1000,
        offset: -600
    })
    .addTo(controller)
    .triggerHook("onCenter")
    .setTween(
        new TimelineMax({delay: 1})
            .add(TweenMax.to('.section_consulting, #overlayStrong', 2, { opacity: 1 } ))
    );

    // Other Letters
    var consultingText = new TimelineMax()
    	.add(TweenMax.to(".section_consulting .action3", 0.2, {css:{opacity: 1}}))
	    .add(TweenMax.to(".section_consulting .action4", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action5", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action6", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action7", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action8", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action9", 0.2, {opacity: 1}));

	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", reverse: false, offset: -200})
        .setTween(consultingText)
        .addTo(controller);

    var calcWidth = function(){
    	var width = $('#diagram').width();
	    var gap = width * 5 / 100;
	    
	    var rWidth = Math.sqrt( gap * gap + 2500 );
	    var tan = gap / 50;
	    var angle = 90 - 180 * Math.atan(tan) / Math.PI;

	    $('#diagram .dline8').css('transform', 'rotate('+angle+'deg)');
	    $('#diagram .dline9').css('transform', 'rotate(-'+angle+'deg)');
    
	    return rWidth;
    }

    var rWidth = calcWidth();

	// Diagram
    var diagram = new TimelineMax()
    	.add(TweenMax.to(".dobject1", 0.7, {css:{opacity: 1}}))
    	.add(TweenMax.to(".dline1", 0.8, {css:{width: '10%'}}))
    	.add(TweenMax.to(".dobject2", 0.7, {css:{opacity: 1}}))
    	.add(TweenMax.to(".dline2", 0.8, {css:{height: '50px'}}))
    	.add(TweenMax.to(".dobject3", 0.7, {css:{opacity: 1}}))
    	.add(TweenMax.to(".dline3", 0.8, {css:{width: '10%'}}))
    	.add(TweenMax.to(".dobject4", 0.7, {css:{opacity: 1}}))
    	.add(TweenMax.to(".dline4-5", 0.8, {css:{height: '50px'}}))
    	.add(TweenMax.to(".dobject5", 0.7, {css:{opacity: 1}}))
    	.add(TweenMax.to(".dline6-7", 0.8, {css:{height: '50px'}}))
    	.add(TweenMax.to(".dobject6", 0.7, {css:{opacity: 1}}))
    	.add(TweenMax.to(".dline8-9", 0.8, {css:{width: rWidth + 'px'}}))
    	.add(TweenMax.to(".dobject7", 0.7, {css:{opacity: 1}}))
    
   	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", reverse: false, offset: -200})
        .setTween(diagram)
        .addTo(controller);

    $(window).resize(function(){
    	var rWidth = calcWidth();
    	var opacity = $('.dobject7').css('opacity');
    	
        if(opacity && opacity == 1)
    	   $('.dline8-9').width(rWidth);
    });
});