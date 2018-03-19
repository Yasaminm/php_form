<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
$airports = [
    'TXL' => 'Tegel',
    'SXF' => 'Schönefeld',
    'FRA' => 'Frankfurt',
    'DUS' => 'Düsseldorf',
    ];
    $departs = filter_input(INPUT_GET, 'departs', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
    
    
    function _selectedMultiple($val,$array){
    if(is_array($array)){
        return (in_array($val, $array))? ' selected '  : ' ';
    } 
}

    function _multiChoice($search, $subject, $attribute = ' '){
        if(is_array($subject)){
        return (in_array($search, $subject))? $attribute  : ' ';
    } else {
        return ($search === $subject)? $attribute  : ' ';
    }}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 SELECTBOX</title>
        
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
                    <legend>Abflug</legend>
                    
                    <select name="departs[]" class="form-control" multiple>
                         <option value="">Bitte auswählen</option>
                         <optgroup label="Europa">
                        <?php foreach ($airports as $key => $value):?>
                         <option <?php echo _multiChoice($key, $departs, 'selected')?> value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php endforeach; ?>
                        </optgroup>
                    </select>
                   
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
var_dump($departs);
?>
        </pre>
        
    </body>
</html>
