$(function() {
console.log('gallery.js');
	/******************************
	* STATIC VARIABLES
	******************************/
	var THUMBNAIL_HEIGHT = 88,
		GALLERY = $('#slideshow');


	/******************************
	* EVENT LISTENERS
	******************************/
	GALLERY.find('.thumb').on('click', function() {
		loadClickedImage($(this).data('thumb-id'));
	});
	GALLERY.find('#page-project-prev-btn').on('click', function() {

		slidePrev();
	});
	GALLERY.find('#page-project-next-btn').on('click', function() {
		console.log('slide next');
		slideNext();
	});
	$(document).keydown(function(e){
		switch(e.keyCode) {
			// Left arrow press
			case 37:
				slidePrev();
				break;
			// Right arrow press
			case 39:
				slideNext();
				break;
			default:
				break;
		}
	});


	/******************************
	* GALLERY FUNCTIONS
	******************************/
	var slideNext = function() {
	
	    var active = GALLERY.find('.img-wrapper.active');

		if (active.length === 0) { 
			active = GALLERY.find('.img-wrapper:last');
		}
        console.log("active.length " + active.length);
	    // Setting next image & thumb properties
	    loadNextImage(active);
	    //check if video start current and stop previous

		videoPause(active);
	};

	var loadNextImage = function(active) {
		var next =  active.next(".img-wrapper").length ? active.next(".img-wrapper") : GALLERY.find('.img-wrapper:first'),
			nextThumb = GALLERY.find('[data-thumb-id="' + next.data('img-id') + '"]');
console.log("next "+ next.length);
		// Setting next image & thumb properties
		GALLERY.find('.thumb').removeClass('active');
		nextThumb.addClass('active');
		active.addClass('last-active');

		// Transitioning to next image & thumbnail
		scrollThumbnails(nextThumb);
		next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
				active.removeClass('active last-active');
			});

        videoPlay(next);
	};

	var slidePrev = function() {
		var active = GALLERY.find('.img-wrapper.active');
console.log("active " + active);
		if (active.length === 0) {
			active = GALLERY.find('.img-wrapper:last');
		}

		// Setting next image & thumb properties
		loadPrevImage(active);
        videoPause(active);
	};

	var loadPrevImage = function(active) {
		var prev =  active.prev(".img-wrapper").length ? active.prev(".img-wrapper") : GALLERY.find('.img-wrapper:last'),
			prevThumb = GALLERY.find('[data-thumb-id="' + prev.data('img-id') + '"]');

		// Setting next image & thumb properties
		GALLERY.find('.thumb').removeClass('active');
		prevThumb.addClass('active');
		active.addClass('last-active');

		// Transitioning to next image & thumbnail
		scrollThumbnails(prevThumb);
		prev.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
				active.removeClass('active last-active');
			});


        videoPlay(prev);
	};

	var loadClickedImage = function(id) {
		var image =  GALLERY.find('[data-img-id="' + id + '"]'),
			imgThumb = GALLERY.find('[data-thumb-id="' + id + '"]'),
			currActive = GALLERY.find('.img-wrapper.active');

		// Setting image & thumb properties
		GALLERY.find('.thumb').removeClass('active');
		currActive.addClass('last-active').removeClass('active');
		imgThumb.addClass('active');
	    
		// Transitioning to image & thumbnail
		scrollThumbnails(imgThumb);
		image.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
				currActive.removeClass('last-active');
			});
	};

	var scrollThumbnails = function(thumb) {
		var offset, // used for thumbnail offset
			first,  // stores first thumbnail object
			x = thumb.position().top + parseInt(thumb.css('margin-top'), 10);
			console.log('x'+x);
		// Checking current thumbnail offset
		if(x < 0) {
			console.log('x < 0');
			first = GALLERY.find('.thumb:first');
			offset = parseInt(first.css('margin-top'), 10) - x;
			offset = 10;
            console.log('offset'+offset);
			first.animate({
				marginTop: offset
			}, 1000);
		} else {
			x = thumb.position().top;
            //console.log('x1'+x);
			var currOffset = ( x + THUMBNAIL_HEIGHT ) - thumb.parent().height();
            //console.log('THUMBNAIL_WIDTH'+THUMBNAIL_HEIGHT);
            //console.log('currOffset'+currOffset);

			if(currOffset > 0) {
				/*first = GALLERY.find('.thumb:first');
				offset = parseInt(first.css('margin-left'), 10) - currOffset;
				first.animate({
					marginLeft: offset
				}, 1000);*/
				first = GALLERY.find('.thumb:first');
				offset = parseInt(first.css('margin-top'), 10) - currOffset;
				first.animate({
					marginTop: offset
				}, 1000);
			}
		}
	};
	var videoPlay = function(elem) {
        var video = elem.find('video');
        if(video.length != 0){
            console.log('video next');
            console.log(video);
            video[0].play();
        }
	}

    var videoPause = function(elem) {
        var video = elem.find('video');
        if(video.length != 0){
            console.log('video pause');
            console.log(video);
            video[0].pause();
            video[0].currentTime = 0.0;
            //video[0].stop();
        }
    }


}());