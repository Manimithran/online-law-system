<?php

    #getting the assignement path from the querystring
    $filename=$_REQUEST['filename'];
    
    #retrieving the content from the file using fopen in read mode
    $cont=  fopen($filename,"r");
    
    #setting the file to download using header function
    header("content-disposition:attachment;filename=$filename");
    fpassthru($cont);
	?>