<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wRITE INTO THE FILE</title>
</head>
<body>
    <?php
        $file_name = "/opt/lampp/htdocs/vphp/fileHandling/1March.txt";
        $file_open = fopen($file_name, "w");
        if($file_open == false){
            echo "\nError in opening the file\n";
        } 
        fwrite($file_open, "\nA new line has added\n");
        fclose($file_open);
        
        // $file_size = filesize($file_name);
        

    ?>
</body>
</html>