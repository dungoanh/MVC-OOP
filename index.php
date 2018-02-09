<?php 
$files = glob("Controller/*.php");
foreach($files as $file) {
  include_once(	$file);
}
if (isset($_GET['query'])) {
	switch ($_GET['query']) {
		
		case 'about':
			$aboutController = new AboutController;
			$aboutController->index();
			break;
		
		default:
			include_once('View/404.php');
			break;
	}

}
