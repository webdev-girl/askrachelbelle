var options = {
  strings: ["<i>First</i> sentence.", "&amp; a second sentence."],
  typeSpeed: 40
}

var typed = new Typed(".element", options);
<script>
  var typed = new Typed('#typed', {
    stringsElement: '#typed-strings'
  });
</script>
// init controller
var controller = new ScrollMagic.Controller();

// create a scene
new ScrollMagic.Scene({
		duration: 100,	// the scene should last for a scroll distance of 100px
		offset: 50	// start this scene after scrolling for 50px
	})
	.setPin("#my-sticky-element") // pins the element for the the scene's duration
	.addTo(controller); // assign the scene to the controller
