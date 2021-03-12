<?php
    // creating a new file for writing , which doesn't exists
    $filename = "/opt/lampp/htdocs/vphp/fileHandling/newfile.txt"; 
    // if we call an existing file, then it will return false and along with the error i.e. w created a new file.
    $file_open = fopen($filename, "x");
    if($file_open == false){
        echo "<br>Error in opening the file..<br>";
        exit();
    }
    fwrite($file_open, "\nA new line has added..\n");
    fclose($file_open);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a new File</title>
</head>
<body>
    
    <?php
        $filename = "/opt/lampp/htdocs/vphp/fileHandling/newfile.txt";
        $file_open = fopen($filename, "r");
        if($file_open == false){
            echo "<br>Error in opening the file..<br>";
        }
        $file_size = filesize($filename);
        $file_read = fread($file_open, $file_size);
        fclose($file_open);

        echo "File Size = $file_size bytes"; echo "<br><br>";
        echo "<pre>$file_read</pre><br><br>";
        echo "File Name : $filename";
    ?>
</body>
</html>