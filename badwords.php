<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>il testo originale è: '<?php echo $_GET['text']?>' ed è lungo <?php echo strlen($_GET['text'])?> caratteri</p>
    <p>il testo censurato è: '<?php echo str_ireplace($_GET['censura'], "***", $_GET['text'])?>' ed è lungo <?php echo strlen(str_ireplace($_GET['censura'], "***", $_GET['text']))?> caratteri</p>
</body>
</html>