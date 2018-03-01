<footer id="footer" class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div id="logo" class="footer-single">
					<a href="/index.php"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_anditrip.png"></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-single footer-space">
					<h3><?php echo $about; ?></h3>
					<p class="text-justify"><?php echo $description_about; ?><!-- Company specialized in travel in Latin America for the Chinese traveler. The name was chosen taking into account that it was global, easy to pronounce for Chinese people, easy to remember, that will start with A, that it was immediately understood that they are trips to America -->.</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-single quick footer-space footer-contac">
					<h3><?php echo $quick_contact; ?></h3>
					<ul>
						<li><i class="fa fa-envelope"></i> info@anditrip.com</li>
						<li><i class="fa fa-phone"></i> Phone:+0000000</li>


						<li><a href=""><i class="fa fa-mobile fa-2x s2"></i> </a>  <a href=""><i class=" fa fa-wechat fa-2x i s2 "></i></a> </li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-single footer-space footer-why">
					<h3><?php echo $colombia_footer; ?></h3>
					
		
					<ul>
						<li><a href="<?php echo get_site_url().'/index.php/terms';?>">- Geographic position</a></li>
						<li><a href="<?php echo get_site_url().'/index.php/terms';?>">- How to echo get?</a></li>
						<li><a href="<?php echo get_site_url().'/index.php/terms';?>">- Weather</a></li>
						<li><a href="<?php echo get_site_url().'/index.php/terms';?>">- Culture</a></li>
						<li><a href="<?php echo get_site_url().'/index.php/terms';?>">- Currency</a></li>
						<li><a href="<?php echo get_site_url().'/index.php/terms';?>">- Language</a></li>
						<li><a href="<?php echo get_site_url().'/index.php/terms';?>">- Security</a></li>

					</ul>
				</div>
			</div>
		</div>
		<div class="derechos">
			<div class="row separacion-top">
				<a class="text-left col-md-6"> © Reserved Rights. Developed by Slice Group</a>
				<div class="text-rigth col-md-6">
					<a href="#">Privacy policy</a> <a href="#">booking terms</a> <a href="#">Websites terms</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->
</body>
</html>