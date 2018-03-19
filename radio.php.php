<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
function _checked($a,$b){
    return ($a === $b)? ' checked ' : ' ' ;
    
}
$menus = ['', 'keine', 'Frühstück', 'Halbpension', 'Vollpension'];
$menuChecked = filter_input(INPUT_GET, 'menu', FILTER_VALIDATE_INT);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 MULTIPLE</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <form>
                <fieldset>
                    <legend>Verpflegung V 1</legend>
                    <?php for ($i = 1; $i < count($menus); $i++): ?>
                <div class="form-check form-check-inline">
                    <input <?php if ($menuChecked === $i ) { echo 'checked="checked"'; } ?> class="form-check-input" type="radio" name="menu" value="<?php echo $i ?>" id="menu<?php echo $i ?>">
                <label class="form-check-label" for="menu<?php echo $i ?>"><?php echo $menus[$i] ?></label>
                </div>
                    <?php endfor; 
//                    
                    ?>
                    
                   
                </fieldset>
                
                <hr>
                
                <fieldset>
                    <button class="btn btn-primary">Send</button>
                </fieldset>
                
            </form>
            <form>
                <fieldset>
                    <legend>Verpflegung V 2</legend>
                    <?php for ($i = 1; $i < count($menus); $i++): ?>
                <div class="form-check form-check-inline">
                    <input <?php echo _checked($menuChecked, $i); ?> class="form-check-input" type="radio" name="menu" value="<?php echo $i ?>" id="<?php echo $i ?>">
                <label class="form-check-label" for="<?php echo $i ?>"><?php echo $menus[$i] ?></label>
                </div>
                    <?php endfor; 
//                    
                    ?>
                    
                   
                </fieldset>
                
                <hr>
                
                <fieldset>
                    <button class="btn btn-primary">Send</button>
                </fieldset>
                
            </form>
        </div>
        <hr>
        
            
        </div>
        <pre>
<?php
var_dump($menuChecked);
?>
        </pre>
        
    </body>
</html>
