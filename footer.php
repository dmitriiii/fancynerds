<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fancynerds
 */

?>



<?php wp_footer(); ?>

</main>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col col-25">
						<div class="footer__column">
							<h6 class="footer__title">Services</h6>

							<ul class="footer__menu">
								<li class="footer__item">
									<a href="#" class="link">SEO for Small Business</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">SEO for Local Services</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">Enterprise SEO</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">National SEO</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">International SEO</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col col-25">
						<div class="footer__column">
							<h6 class="footer__title">Learn</h6>

							<ul class="footer__menu">
								<li class="footer__item">
									<a href="#" class="link">Why SEO Matters</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">How to Choose an Agency</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">Keyword Research Explained</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">On Page SEO Explained</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">Off Page SEO Explained</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col col-25">
						<div class="footer__column">
							<h6 class="footer__title">Company</h6>

							<ul class="footer__menu">
								<li class="footer__item">
									<a href="#" class="link">About Company</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">IFor Customers</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">SEO Blog &amp; News</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">Careers &amp; Reviews</a>
								</li>
								<li class="footer__item">
									<a href="#" class="link">Sitemap</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col col-25 subscribe-col">
						<div class="footer__column">
							<h6 class="footer__title">Subscribe</h6>

							<p class="footer__text">Follow our newsletter to stay updated about agency.</p>

							<form class="form form__subscribe">
								<div class="form__group">
									<input placeholder="Your mail" class="form__control">
									<button class="form__button button--rounded">
										<i class="flaticon-send"></i>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div><!-- #page -->

	<div id="myModal" class="modal">
	  <!-- Modal content -->
	  <div class="modal-content">
	    <div class="modal-header clearfix">
	    	<p class="modal-header__title">Contact our team!</p>
	      <span class="close">&times;</span>
	    </div>
	    <div class="modal-body">
	    	<form class="container form-ajx">
	    		<div class="row">
	    			<!-- <div class="col-50 col">
	    				<label>Title*</label>
			    		<input name="TITLE" value="" class="form__control" required/>
	    			</div> -->
			    	<input name="TITLE" value="Lead from website fancy-nerds.com" type="hidden"/>
	    			
	    			<div class="col-50 col">
	    				<label>Company Name*</label>
			    		<input name="COMPANY_TITLE" value="" class="form__control" required/>
	    			</div>

	    			<div class="col-50 col">
	    				<label>Email*</label>
			    		<input name="EMAIL" value="" class="form__control" required/>
	    			</div>

	    			<div class="col-50 col">
	    				<label>First Name*</label>
			    		<input name="NAME" value="" class="form__control" required/>
	    			</div>
	    			<div class="col-50 col">
	    				<label>Last Name*</label>
			    		<input name="LAST_NAME" value="" class="form__control" required/>
	    			</div>

	    			<div class="col col-100">
	    				Comments: <textarea name="COMMENTS" class="form__control"></textarea><br />
	    				<button class="button button--small button--orange modal-body__btn" >Send</button>
	    				<p class="form-ajx__result"></p>
	    			</div>
	    		</div>
	    	</form>

	    </div>
	  </div>
	</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
