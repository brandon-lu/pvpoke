<?php require_once 'header.php'; ?>

<div class="section home white">
	<p>Welcome to PvPoke.com! We're an open-source tool for simulating, ranking, and building teams for Pokemon GO PvP (player versus player) battles. Check out the links below to get started.</p>

	<a href="<?php echo $WEB_ROOT; ?>battle/" class="button">
		<h2 class="icon-battle">Battle</h2>
		<p>Simulate a battle between two custom Pokemon.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>train/" class="button">
		<h2 class="icon-train">Train</h2>
		<p>Play real-time battle simulations against a CPU opponent.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>rankings/" class="button">
		<h2 class="icon-rankings">Rankings</h2>
		<p>Explore the rankings, movesets, and counters for the top Pokemon in each league.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>team-builder/" class="button">
		<h2 class="icon-team">Team Builder</h2>
		<p>Build your own team and see their type matchups and potential counters.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>contribute/" class="button">
		<h2 class="icon-contribute">Contribute</h2>
		<p>Check out the source code on Github or lend your support through Patreon.</p>
	</a>

	<!--Update section for updates-->
	<h3>What's New</h3>

	<h4>v1.16.0 (September 1, 2020)</h4>
	<ul>
		<li>Released Mega Evolutions are now listed on the main version of the site. You can view unreleased Mega Evolutions by setting your Gamemaster version on the <a href="<?php echo $WEB_ROOT; ?>settings/">Settings page</a>.</li>
		<li>Please note that Mega Evolution performance in PvP is currently unknown and potentially bugged. Any battle simulations involving Mega Evolutions, breakpoints, etc. should be disregarded until more information is known.</li>
		<li>Mega Evolutions display the CP of their base form.</li>
		<li>When adjusting a Pokemon's IVs, its level will automatically adjust to the CP limit.</li>
	</ul>

	<h3>Latest Article</h3>

	<div class="article-item flex">
		<div class="col-3">
			<a href="<?php echo $WEB_ROOT; ?>articles/ultimate-guide-to-team-building/">
				<img src="<?php echo $WEB_ROOT; ?>assets/articles/team-building-thumb.jpg" />
			</a>
		</div>
		<div class="col-9">
			<h4><a href="<?php echo $WEB_ROOT; ?>articles/ultimate-guide-to-team-building/">Ultimate Team Building Guide by PolymersUp</a></h4>
			<div class="date">August 11, 2020</div>
			<p>Learn the fundamentals of building a good team and how to use the PvPoke Team Builder to its full potential.</p>
		</div>

	</div>

</div>

<?php require_once 'footer.php'; ?>
