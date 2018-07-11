var hidden = false; // Check if full logo is hidden or not
var direction = 'down';
var noDisturb = false; // Check if it is on the way of performing action

$(function(){
	var top = $('body').scrollTop();

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

	var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: "onLeave"
        }
    });

	new ScrollMagic.Scene({
        triggerElement: "#info",
        duration: 500,
        offset: -600
    })
    .addTo(controller)
    .triggerHook("onCenter")
    .setTween(
        new TimelineMax({delay: 1})
        	.add(TweenMax.to('#info, #overlay', 1, { opacity: 1 } ))
    );
	return false;

	var controller = new ScrollMagic();

	/* Overview */
	// First Two Letters
	var headerOverview = new TimelineMax()
	    .add(TweenMax.to(".section_overview .action1", 0.3, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action2", 0.3, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .line1", 0.3, {width: '60px'}))
	    .add(TweenMax.to(".section_overview .line2", 0.3, {width: '60px'}))
	    .add(TweenMax.to(".section_overview .line3", 0.3, {height: '60px'}))
	    .add(TweenMax.to(".section_overview .line3-4", 0.3, {width: '60px'}))
	    .add(TweenMax.to(".section_overview .line4", 0.8, {width: '150px'}))
	    .add(TweenMax.to(".section_overview .line5", 0.3, {width: '15px'}));

	var scene = new ScrollScene({triggerElement: "#trigger1", reverse: false})
        .setTween(headerOverview)
        .addTo(controller);

    // Other Letters
    var subHeaderOverview = new TimelineMax()
    	.add(TweenMax.to(".section_overview .action3", 0.2, {css:{opacity: 1}, delay: 1.8}))
	    .add(TweenMax.to(".section_overview .action4", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action5", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action6", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action7", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_overview .action8", 0.2, {opacity: 1}));

	var scene = new ScrollScene({triggerElement: "#trigger1", reverse: false})
        .setTween(subHeaderOverview)
        .addTo(controller);

	// Content
    var objectsOverview = new TimelineMax()
    	.add(TweenMax.to("#tableOverview", 1.2, {css:{opacity: 1, right: 0}, delay: 3.3}))
    	.add(TweenMax.to(".section_overview .text1", 1, {css:{opacity: 1}}))
    	.add(TweenMax.to(".section_overview .text2", 1, {css:{opacity: 1}}))

    var scene = new ScrollScene({triggerElement: "#trigger1", reverse: false})
    	.setTween(objectsOverview)
    	.addTo(controller);

    var cline = new TimelineMax()
    	.add(TweenMax.to('.section_overview .cline1', 0.5, {css:{width:'95px'}, delay: 4.8}))
		.add(TweenMax.to('.section_overview .cline2', 1.5, {css:{opacity: 1}}))

	var scene = new ScrollScene({triggerElement: "#trigger1", reverse: false})
    	.setTween(cline)
    	.addTo(controller);    

    var tri = new TimelineMax()
    	.add(TweenMax.to('.section_overview .cline3', 0.5, {css:{opacity: 1}, delay: 5.5}))

    var scene = new ScrollScene({triggerElement: "#trigger1", reverse: false})
    	.setTween(tri)
    	.addTo(controller); 

    /* Consulting */

    // First Two Letters
    var headerConsulting = new TimelineMax()
	    .add(TweenMax.to(".section_consulting .action1", 0.3, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action2", 0.3, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .line1", 0.3, {width: '60px'}))
	    .add(TweenMax.to(".section_consulting .line2", 0.3, {width: '60px'}))
	    .add(TweenMax.to(".section_consulting .line3", 0.3, {height: '60px'}))
	    .add(TweenMax.to(".section_consulting .line3-4", 0.3, {width: '60px'}))
	    .add(TweenMax.to(".section_consulting .line4", 1.2, {width: '170px'}))
	    .add(TweenMax.to(".section_consulting .line5", 0.3, {width: '15px'}));

	var scene = new ScrollScene({triggerElement: "#trigger2", reverse: false})
        .setTween(headerConsulting)
        .addTo(controller);

    // Other Letters
    var subHeaderConsulting = new TimelineMax()
    	.add(TweenMax.to(".section_consulting .action3", 0.2, {css:{opacity: 1}, delay:1.8}))
	    .add(TweenMax.to(".section_consulting .action4", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action5", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action6", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action7", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action8", 0.2, {opacity: 1}))
	    .add(TweenMax.to(".section_consulting .action9", 0.2, {opacity: 1}));

	var scene = new ScrollScene({triggerElement: "#trigger2", reverse: false})
        .setTween(subHeaderConsulting)
        .addTo(controller);

    // Content
    var diagram = new TimelineMax()
    	.add(TweenMax.to(".dobject1", 0.8, {css:{scale: 1}, delay: 3.3}))
    	.add(TweenMax.to(".dline1", 0.8, {css:{width: '100px'}}))
    	.add(TweenMax.to(".dobject2", 0.8, {css:{scale: 1}}))
    	.add(TweenMax.to(".dline2", 0.8, {css:{height: '50px'}}))
    	.add(TweenMax.to(".dobject3", 0.8, {css:{scale: 1}}))
    	.add(TweenMax.to(".dline3", 0.8, {css:{width: '100px'}}))
    	.add(TweenMax.to(".dobject4", 0.8, {css:{scale: 1}}))
    	.add(TweenMax.to(".dline4-5", 0.8, {css:{height: '50px'}}))
    	.add(TweenMax.to(".dobject5", 0.8, {css:{scale: 1}}))
    	.add(TweenMax.to(".dline6-7", 0.8, {css:{height: '50px'}}))
    	.add(TweenMax.to(".dobject6", 0.8, {css:{scale: 1}}))
    	.add(TweenMax.to(".dline8-9", 0.8, {css:{width: '72px'}}))
    	.add(TweenMax.to(".dobject7", 0.8, {css:{scale: 1}}))
    	.add(TweenMax.to(".section_consulting .text1", 1, {css:{opacity: 1}}))
    	.add(TweenMax.to(".section_consulting .text2", 1, {css:{opacity: 1}}))

   	var scene = new ScrollScene({triggerElement: "#trigger2", reverse: false})
        .setTween(diagram)
        .addTo(controller);

    var shapes = new TimelineMax()
    	.add(TweenMax.to(".dline1Shape", 0.1, {css:{opacity: 1}, delay: 4.6}))
    	.add(TweenMax.to(".dline2Shape", 0.1, {css:{opacity: 1}, delay: 1.5}))
    	.add(TweenMax.to(".dline3Shape", 0.1, {css:{opacity: 1}, delay: 1.5}))
    	.add(TweenMax.to(".dline4-5Shape", 0.1, {css:{opacity: 1}, delay: 1.5}))
    	.add(TweenMax.to(".dline6-7Shape", 0.1, {css:{opacity: 1}, delay: 1.5}))
    	.add(TweenMax.to(".dline8-9Shape", 0.1, {css:{opacity: 1}, delay: 1.5}))

    var scene = new ScrollScene({triggerElement: "#trigger2", reverse: false})
        .setTween(shapes)
        .addTo(controller);
});