<footer id="footer" class="footer bg-dark">
	<div class="container">
		<small>
			<p style="text-align-last: center;">
				<?php echo getTranslation( 'footer-desc' ); ?>
			</p>
		</small>
		<div class="row">
			<div class="col-lg-6 h-100 text-center text-lg-start my-auto">
				<ul class="list-inline mb-2">
					<li class="list-inline-item">
						<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Content_Policy">
							<?php echo getTranslation( 'footer-content-policy' ); ?>
						</a>
					</li>
					<li class="list-inline-item">⋅</li>
					<li class="list-inline-item">
						<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Terms_of_Use">
							<?php echo getTranslation( 'footer-terms' ); ?>
						</a>
					</li>
					<li class="list-inline-item">⋅</li>
					<li class="list-inline-item">
						<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy">
							<?php echo getTranslation( 'footer-privacy-policy' ); ?>
						</a>
					</li>
					<li class="list-inline-item">⋅</li>
					<li class="list-inline-item">
						<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Meta:General_disclaimer">
							<?php echo getTranslation( 'footer-disclaimers' ); ?>
						</a>
					</li>
					<li class="list-inline-item">⋅</li>
					<li class="list-inline-item">
						<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy#4._Cookies">
							<?php echo getTranslation( 'footer-cookie' ); ?>
						</a>
					</li>
				</ul>
				<a class="small mb-4 mb-lg-0" href="https://translatewiki.net/wiki/Special:Translate?group=mwgithub-mirahezelanding">
					<?php echo getTranslation( 'footer-translate' ); ?>
				</a>
			</div>
			<div class="col-lg-6 h-100 text-center text-lg-end my-auto">
				<ul class="list-inline mb-0">
					<li class="list-inline-item me-4">
						<a href="https://www.facebook.com/miraheze"><i class="bi-facebook fs-3"></i></a>
					</li>
					<li class="list-inline-item me-4">
						<a href="https://twitter.com/miraheze"><i class="bi-twitter fs-3"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="https://miraheze.org/discord"><i class="bi-discord fs-3"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div id="scroll-to-top">
	<a class="text-light" href="#">
		<i class="bi bi-chevron-up"></i>
	</a>
</div>

<script>
	scrollbutton = document.getElementById( 'scroll-to-top' );
	window.onscroll = function() {
		scrollFunction()
	};

	function scrollFunction() {
		if ( document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
			scrollbutton.style.display = 'block';
		} else {
			scrollbutton.style.display = 'none';
		}
	}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>