
<?php
   $filename = "/opt/lampp/htdocs/vphp/fileHandling/newfile.txt";
   $file_open = fopen($filename, "w");
   if($file_open == false){
       echo "Error in opening the file";
       exit();
   }
   fwrite($file_open, "new line has added..!!");
   fclose($file_open);

//    $file_size = filesize($filename);
//    $file_read = fread($file_open, $file_size);
//    fclose($file_open);

//    // echo readfile("txtFile1.txt");
//    echo "FileSize = $file_size bytes <br>";
//    echo "<pre>$file_read</pre>";
?>