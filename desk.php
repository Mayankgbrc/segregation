<?php
$dir = "C:/Users/mayan/OneDrive/Desktop/";
$count=0;
if(is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		$count = $count+1;
		echo " filename: " . $file . " : ";
		if (!(is_dir($file))){
			$extension = pathinfo($file, PATHINFO_EXTENSION);
			if(in_array(strtolower($extension), array('jpg','jpeg','png','bmp','ico','gif','tif','tiff'))){
				copy($dir.$file,"C:/Users/mayan/OneDrive/Desktop/images/".$file);
				unlink ($dir.$file);
				$folder = "Images";
				echo "copied to images";
			}
			elseif(in_array(strtolower($extension), array('zip','gz','tar.gz','exe','msi','iso'))){
				copy($dir.$file,"C:/Users/mayan/OneDrive/Desktop/zip_setups/".$file);
				unlink ($dir.$file);
				$folder = "zip_setups";
				echo "copied to zip_setups";
			}
			elseif(in_array(strtolower($extension), array('pdf','docx','xls','xlxs','doc','c','java','pptx','csv','xlsx','txt'))){
				copy($dir.$file,"C:/Users/mayan/OneDrive/Desktop/doc/".$file);
				unlink ($dir.$file);
				$folder = "doc";
				echo "copied to doc";
			}
			elseif(in_array(strtolower($extension), array('html','css','js','php','sql'))){
				copy($dir.$file,"C:/Users/mayan/OneDrive/Desktop/web/".$file);
				unlink ($dir.$file);
				$folder = "web";
				echo "copied to webs";
			}
			elseif(in_array(strtolower($extension), array('mp4','mp3','3gp','wav','avi','3gpp'))){
				copy($dir.$file,"C:/Users/mayan/OneDrive/Desktop/songs-video/".$file);
				unlink ($dir.$file);
				$folder = "songs-video";
				echo "copied to songs-video";
			}
			
		}
    }
    closedir($dh);
  }
}
?>
