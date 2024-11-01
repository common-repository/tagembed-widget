<?php
include_once TAGEMBED_PLUGIN_DIR_PATH . 'views/includes/headView.php';
include_once TAGEMBED_PLUGIN_DIR_PATH . 'views/includes/headerView.php';
wp_enqueue_script('__script-theme-js', TAGEMBED_PLUGIN_URL . '/assets/js/theme/tagembed.theme.script.js', ['jquery'], TAGEMBED_PLUGIN_VERSION, true);
/* Lazy Loader Script */
wp_enqueue_script('__script-lazy-loading-js', TAGEMBED_PLUGIN_URL . '/assets/js/lazyload.js', ['jquery'], TAGEMBED_PLUGIN_VERSION, true);
if (!empty($__tagembed__widgets)) :
	?>
	<div id="__tagembed__choosetheme" class="__tagembed__tabcontent">
		<div class="__tagembed__sourcerow">
			<div class="__tagembed__tabheading">
				<h3>Select Any Layout</h3>
				<span>Note: Select any layout of your choice.</span>
			</div>
		</div>
		<div class="__tagembed__sourcerow">
			<div class="__tagembed__layoutarea">
				<ul id="__tagembed__theme"></ul>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php include_once TAGEMBED_PLUGIN_DIR_PATH . 'views/includes/footerView.php'; ?>