<?
	include_once "functions.inc.php";
	
	$verbose 	= "true";
	$os			= getVersion();


	//Get system vars
	$workpath	= getenv('PWD');
	$ee			= "$workpath/Extensions";
	$strip		= str_replace("/", "", "$workpath");		
	$rootpath	= str_replace("Extra", "", "$workpath");
	$slepath	= "".$rootpath."System/Library/Extensions";
	$cachepath	= "".$rootpath."System/Library/Caches/com.apple.kext.caches/Startup";

    $localrev	= exec("cd $workpath; svn info --username edp --password edp --non-interactive | grep -i \"Last Changed Rev\"");
    $localrev	= str_replace("Last Changed Rev: ", "", $localrev);
 
  	
	$verbose 	= "1";


	$version 	= "Rev. $localrev";
	$header 	= "-- E.D.P $version -------------------------------------------------------------------------------------------";
	$footer		= "---------------------------------------------------------------------------- O S X L A T I T U D E . C O M --";
	


	
	if ($os == "") { echo "Unable to detect operating system, edptool has exited"; exit; }
?>
