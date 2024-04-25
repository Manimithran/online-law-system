<?php

    $fname=$_GET['fn'];
	$fpath=$_GET['fp'];
	#getting the assignement path from the querystring
    //$filename=$_REQUEST['filename'];
    
    #retrieving the content from the file using fopen in read mode
    $cont=  fopen($fpath,"r");
    
    #setting the file to download using header function
    header("content-disposition:attachment;filename=$fname");
    fpassthru($cont);
	?>