			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
                    All rights reserved. <a target="_blank" href="http://crosshatchcreative.com">Website by Crosshatch Creative</a>.

				</p>
				<!-- /copyright -->
                <div class="moblie-hic"> <span class="hic">HIC # MA 149737</span></div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
        <script>
             jQuery(function($){
                   $('nav li a').each(function(){
                       $(this).wrapInner('<span class="mc-link"></span> ');
                   });
                   $('.sub-menu').wrap('<div class="sub-menu-div"></div>');
                   $('.sub-menu-div').wrap('<div class="sub-wrapper"></div>');
                   $(".menu-item-has-children, .sub-wrapper").mouseenter(function(){
                       $('.sub-wrapper').show();
                   }).mouseleave(function(){
                       $('.sub-wrapper').hide();
                   });


             });
        </script>

	</body>
</html>
