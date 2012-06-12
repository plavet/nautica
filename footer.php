<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<div class="brands">
	<ul class="brand-list">
		<li><a href="http://www.nautica.rs/" id="" rel="external" title="Goga" class="ir goga">
			goga
		</a></li>
		<li>
			<ul class="group1">
			<li><a href="http://montereyboats.com/" id="" rel="external" title="Monterey" class="ir monterey" target="_blank">
			monterey boats
			</a></li>
			<li><a href="http://www.glastron.com/" id="" rel="external" title="Glastron" class="ir glastron" target="_blank">
				glastron
			</a></li>
		</ul></li>
				<li>
			<ul class="group2">
			<li><a href="http://www.chriscraft.com/" id="" rel="external" title="Chris Craft" class="ir chris_craft" target="_blank">
				chris craft
			</a></li>
			<li><a href="http://www.suntrackerboats.com/" id="" rel="external" title="Sun Tracker" class="ir sun_tracker" target="_blank">
				sun tracker
			</a></li>
			<li><a href="http://www.jobesports.com/" id="" rel="external" title="Jobe" class="ir jobe" target="_blank">
				jobe
			</a></li>
		</ul></li>
				<li>
			<ul class="group3">
			<li><a href="http://marquisyachts.com/" id="" rel="external" title="Marquis" class="ir marquis" target="_blank">
				marquis
			</a></li>
			<li><a href="http://carveryachts.com/" id="" rel="external" title="Carver Yachts" class="ir carver" target="_blank">
				carver yachts
			</a></li>
			</ul></li>
	</ul><!--/brand-list-->
</div><!-- /brands -->

<footer class="clearfix">
<?php
	get_sidebar( 'footer' );
?>

<p>Copyright &copy; 2012 GOGA D.O.O. All Rights Reserved. Developed and Designed by <a href="http://www.kilmulis.com" title="Kilmulis Design" target="_blank">KILMULIS design</a></p>

<?php
	wp_footer();
?>
</footer>
</div> <!-- /container -->
</div> <!-- /wrap -->
</body>
</html>