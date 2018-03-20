<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
$message = [
    'text' => ' ',
    'type' => 'info'
];
if (isset($_FILES['uploadFile'])){
    
    $imageTypes = ['', '.gif', '.jpeg', '.png'];
    $src = $_FILES['uploadFile']['tmp_name'];
    
    $imgInfo = getimagesize($src);
    $imgType = $imgInfo[2]; //1 (gif), 2 (jpeg), 3 (png).
    if($imgType >=1 && $imgType <= 3){
        $dst = './uploads/'.uniqid('634287', true). $imageTypes[$imgType];
        
        $message['text'] = 'Upload ';
        if(move_uploaded_file($src, $dst)){
            $message['text'] .= 'erfolgreich ';
            $message['type'] = 'success ';
        }else{
            $message['text'] .= 'fehlerhaft ';
            $message['type'] = 'danger ';
        }
//        $message .= (move_uploaded_file($src, $dst))? 'erfolgreich.' : 'fehlerhaft.' ;
    }else {
        $message['text'] = 'Falscher Dateityp'; 
        $message['type'] = 'danger ';
    };
   
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 UPLOAD</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
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
                <input class="form-control-file" type="file" name="uploadFile">
                <hr>
                <fieldset>
                <button class="btn btn-primary">Upload</button>
                </fieldset>
                <hr>
                <fieldset>
                <p class="alert alert-<?php echo $message['type'] ?>"><?php echo $message['text'] ?></p>
                </fieldset>
                
                
            </form>
        
        <hr>
        <?php 
        
//        $files = glob('./uploads/*'.gif);
        $files = glob('./uploads/*.{gif,jpg,jpeg,png}',GLOB_BRACE);
        
        ?>
        <div class="row ">
            
                    
                    <?php foreach ($files as $file): ?>
                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                    <image class="img-fluid img-thumbnail" src="<?php echo $file ?>">
                    </div>
                    <?php endforeach; ?>
                    
               
        <!--
                 <fieldset>
                    //<?php for ($i = 0; $i < count($files); $i++): ?>
                    <image src="<?php echo $files[$i] ?>">
                    //<?php endfor; ?>
                </fieldset>
        -->
        </div>
        </div>
        <pre>
<?php
//var_dump($_FILES);
//
//echo mime_content_type($dst);
//
//$f = getimagesize($dst);
//var_dump($f);
//print_r($files);

//echo sha1(test@test.de);

?>
        </pre>
        
    </body>
</html>
