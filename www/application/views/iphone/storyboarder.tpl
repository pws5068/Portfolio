<h3>Storyboarder - Iphone</h3>

<p>The goal of this project was to present our users with a simple &amp; elegant way to design a photo collage.  Ultimately, these users are given a means to tell their story through a series of photos.  They are then presented with the option to Print &amp; Ship their creations with the help of the <a href="http://dev.sincerely.com/">Sincerely Ship</a> Library.
</p>
<img class="thumbnail" src="/image/content/paul_storyboarder_icon_med.jpg" style="margin-left:100px">
<p>Although Storyboarder was released on the same day as <a href="/iphone/lonely_planet_postcards">Lonely Planet Postcards</a>, this app was designed first; making it my debut into the Objective-C world.</p>

<div id="iphone_background">
	<div id="screens">
		<!-- iPhone screenshots -->
		<img src="/image/content/screen_shots/iphone/storyboarder/screen1.png">
		<img src="/image/content/screen_shots/iphone/storyboarder/screen2.png">
		<img src="/image/content/screen_shots/iphone/storyboarder/screen3.png">
		<img src="/image/content/screen_shots/iphone/storyboarder/screen4.png">
		<img src="/image/content/screen_shots/iphone/storyboarder/screen5.png">
	</div>
</div>

<h3>Technical Challenges</h3>

<p>Overall, the design of <a href="http://www.StoryBoarderApp.com">Storyboarder</a> was relatively straight forward.  Every project however, bears hidden technical hurdles and this was no exception.  Apple's guidelines warn against placing full-size photos into a UIScrollView.  Storyboarder relies on the use of ScrollViews to enable user interaction (zooming / panning) with their media.  The solution is of course to create a smaller, compliant copy of the image to place in the scrollview.</p>

<p>This simple change reveals the true crux of the project.  The image must be stored in full size to maintain 300dpi print-quality. Cropping the user's images based on their location in the UIScrollView is no longer a simple task.  I now needed to calculate the scaled offsets,zoomScale,relative full-size placement and other criteria from the small preview UIImage against the full-scale version.  All while keeping memory usage in control.</p>

<p>Be sure to check out the latest version of <a href="http://itunes.apple.com/us/app/storyboarder-postcard-collage/id463623442?ls=1&mt=8">Storyboarder in the App Store</a> and follow the <a href="http://www.twitter.com/storyboarder">@storyboarder Twitter</a> account</p></a>