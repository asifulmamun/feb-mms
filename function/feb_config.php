<?php 
/*
  This configuration file for this February Member Management system.
*/

/*
	Where installed this feb-mms global apps decalre this directory.
	Example = "root directory/installation path or other under path - root/sub folder/installation path" then need to declare this in locatoin or path or directory as a variable. like as "sub-folder/installationfolder/feb-mms" etc.

	@ Change Path $install_path
*/
function feb_install_dir(){
	function check_ssl() {
	if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
		return true; 
  	}
} // check_ssl

if (check_ssl()) {
	$protocol = "https://"; // decalre protocl as SSL
} else {
	$protocol = "http://"; // decalre protocl as !SSL
} // else
/**
 * Declare here installed directory and folder
 */
$install_path= "nrbrms/feb-mms"; // installed folder name
$install_dir = $protocol.$_SERVER['SERVER_NAME']."/".$install_path; // !don't toch here use it as installation directory
return $install_dir;
} // print_install_dir()
$feb_install_di = feb_install_dir();

// Class for print any where this directory path
class feb_install_directory{
	public function path(){
		global $feb_install_di;
		echo $feb_install_di;
	} // path()
} // class feb_install_directory
$feb_install_dir = new feb_install_directory; // create object for path directory installd



 ?>