<?php
$message = [
    'text' => '',
    'type' => 'info'
];

if (isset($_FILES['uploadFiles'])) {
    $imageTypes = ['', '.gif', '.jpeg', '.png'];
    $amountImages = count($_FILES['uploadFiles']['name']);
    
    for ($i = 0; $i < $amountImages; $i++) {
        $src = $_FILES['uploadFiles']['tmp_name'][$i];
        $imgInfo = getimagesize($src);
    $imgType = $imgInfo[2]; //1 (gif), 2 (jpeg), 3 (png).
    
    if($imgType >=1 && $imgType <= 3){
        $dst = './uploads/'.uniqid('634287', true). $imageTypes[$imgType];
        move_uploaded_file($src, $dst);
    }
    
 }
 header("Location:files_multiple.php");
    
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 FILES MULTPLE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Dateien hochladen</legend>
                </fieldset>
                <input class="form-control-file" type="file" multiple name="uploadFiles[]">
                <hr>
                <fieldset>
                    <button class="btn btn-primary">upload</button>
                </fieldset>
                <hr>
                <fieldset>
                    <p class="alert alert-<?php echo $message['type'] ?>"><?php echo $message['text'] ?></p>
                </fieldset>
            </form>

            <hr>

            <?php
            $files = glob('./uploads/*.{gif,jpg,jpeg,png}', GLOB_BRACE);
            ?>
            

            <hr>
            <div class="imgColumns">
                <?php foreach ($files as $file) : ?>
                    <img  src="<?php echo $file; ?>">
                <?php endforeach; ?>
            </div>



        </div>
        <pre>
            <?php
//            var_dump($imgInfo);
            ?>
        </pre>
    </body>
</html>

