<?php
	class Library{
		function __construct(){}

		function __destruct(){}

		function load_style($names, $clear_cache = false){
			$suffix = $clear_cache? '?v='.time():'';
			$path = '/assets/css/';

			if(is_array($names)){
				foreach($names as $name){ ?>
					<link rel="stylesheet" href="<?php echo $path.$name.'.css'.$suffix; ?>"/>
				<?php }
			}else{
				?>
				<link rel="stylesheet" href="<?php echo $path.$names.'.css'.$suffix; ?>"/>
				<?php
			}
		}

		function load_template($page){
			if($page == '')
				$page = 'index';

			$template = 'templates/'.$page.'.tpl.php';

			if(file_exists($template)){
				include_once($template);
			}else{
				echo '';
			}
			return true;
		}

		function load_script($names, $clear_cache = false, $async = false){
			$suffix = $clear_cache? '?v='.time():'';
			$path = "/assets/js/";

			if(is_array($names)){
				foreach($names as $name){ ?>
					<script type="text/javascript" src="<?php echo $path.$name.'.js'.$suffix; ?>" <?php echo $async==true?'async':''; ?>></script>
				<?php }
			}else{ ?>
				<script type="text/javascript" src="<?php echo $path.$names.'.js'.$suffix; ?>" <?php echo $async==true?'async':''; ?>></script>
			<?php }
		}
	}
?>