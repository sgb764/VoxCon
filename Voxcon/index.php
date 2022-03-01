<?php
require_once 'core/init.php';
get_header();
?>
<div class='timeline'>
  <div class='container'>
    <div class='col-md-4 hidden-xs hidden-sm'>

        <div class="icon">

						</div>
					</article>
				</div>
				<div class="days">
					<div class="row row-no-gutter">
						<div>
							<div class="day">
								<h1>Welcome to Voxcon</h1>

							</div>
						</div>
					</div>
				</div>
			</div>


    <div class='col-md-8 col-xs-12'>
      <div class='publish'>
        <div class='write'>
          <div class='my-thumbnail' style="background-image: url(<?php echo $user->data()->image_url; ?>);"></div>
          <textarea placeholder="What's on your mind.." id="post"></textarea>
        </div>
        <div class='options'>
          <input id="publish" type='submit' value='post' />
          <div class='clearfix'></div>
        </div>
      </div>
      <div class='posts-area' id='postarea'>
      </div>
      <div id="loadData"></div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  TimelineGetandScroll(7, 0, 'UPDATE');
  setInterval(function(){
    TimelineGetandScroll(7, 0, 'UPDATE');
  }, 1500);
  var postsOffset = 7;
  $(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() > $("#postarea").height()){
      TimelineGetandScroll(7, postsOffset, 'GETandSCROLL'); // SCROLL RETREIVING
      postsOffset = postsOffset + 7;
    }
  });
});

</script>
<?php get_footer(); ?>
