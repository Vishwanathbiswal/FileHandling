<?php
    // $filename = "/opt/lampp/htdocs/vphp/fileHandling/txtFile4.txt";
    $filename = "/opt/lampp/htdocs/vphp/fileHandling/txtFile8.txt";
    $file_open = fopen($filename, "w");
    if($file_open == false){
        echo "<br>Error in opening the file..<br>";
        exit();
    }
    fwrite($file_open, "This is a new line..");
    fclose($file_open);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing into the File</title>
</head>
<body>
    
    <?php
        $filename = "/opt/lampp/htdocs/vphp/fileHandling/txtFile8.txt";
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