<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading a file using PHP</title>
</head>
<body>
    <?php
        // echo readfile("txtFile1.txt");
        $filename = "txtFile4.txt";
        $file_open = fopen($filename, "r");

        if($file_open == false){
            echo "<br>Error in opening file..<br>";
            echo "File not found..!!";
            exit();
        }

        $file_size = filesize($filename);
        $file_read = fread($file_open, $file_size);
        fclose($file_open);

        // echo readfile("txtFile1.txt");
        echo "FileSize = $file_size bytes <br>";
        echo "<pre>$file_read</pre>";
    ?>
</body>
</html>

