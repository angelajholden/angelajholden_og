var $a = jQuery.noConflict();

// http://www.webdesignerdepot.com/2013/11/how-to-use-video-backgrounds-for-incredible-visual-impact-part-1/

//<video id="bgvideo" muted autoplay loop>
//	<source src="video/video.mp4" type="video/mp4"></source>
//	<source src="video/video.webm" type="video/webm"></source>
//	<source src="video/video.ogv" type="video/ogg"></source>
//</video>

$a(document).ready(function() {

	//var vid = document.getElementById("bgvideo");
	//vid.playbackRate = 0.65;

	$a('video#bgvideo').on("loadedmetadata", scaleVideo);
	$a(window).on("resize", scaleVideo);

		function scaleVideo() {

			// Got the window height and width and saved them as variables

			var windowHeight = $a(window).height();
			var windowWidth = $a(window).width();

			// Got the video width and video height

			var videoNativeWidth = $a('video#bgvideo')[0].videoWidth;
			var videoNativeHeight = $a('video#bgvideo')[0].videoHeight;

			// Got the scale factors

			var heightScaleFactor = windowHeight / videoNativeHeight;
			var widthScaleFactor = windowWidth / videoNativeWidth;

			// Got the highest scale factor

			if (widthScaleFactor > heightScaleFactor) {
				var scale = widthScaleFactor;
			}
			else {
				var scale = heightScaleFactor;
			}

			var scaledVideoHeight = videoNativeHeight * scale;
			var scaledVideoWidth = videoNativeWidth * scale;

			$a('video#bgvideo').height(scaledVideoHeight);
			$a('video#bgvideo').width(scaledVideoWidth);
		}

});
