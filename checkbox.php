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
function _checkedMultiple($val,$array){
    if(is_array($array)){
        return (in_array($val, $array))? ' checked '  : ' ';
    }
    
}
$breakfast = ['', 'Ei', 'Bratwurst', 'Cornflakes', 'Kaviar'];
$selection = filter_input(INPUT_GET, 'selection', FILTER_VALIDATE_INT,
                                                 FILTER_REQUIRE_ARRAY);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 CHECKBOX</title>
        
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
                    <legend>Früstück V 1</legend>
                    <?php for ($i = 1; $i < count($breakfast); $i++): ?>
                <div class="form-check form-check-inline">
                    <input <?php echo _checkedMultiple($i, $selection) ?> class="form-check-input" type="checkbox" name="selection[]" value="<?php echo $i ?>" id="selection<?php echo $i ?>">
                <label class="form-check-label" for="selection<?php echo $i ?>"><?php echo $breakfast[$i] ?></label>
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
            <hr>
          
        </div>
        <hr>
        
            
        </div>
        <pre>
<?php
var_dump($selection);
?>
        </pre>
        
    </body>
</html>
