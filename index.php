<!DOCTYPE html>
  <form>
                <fieldset>
                    <legend>Früstück V 2</legend>
                    <?php for ($i = 1; $i < count($breakfast); $i++): ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="selection" value="<?php echo $i ?>" id="selection<?php echo $i ?>">
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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

function _selected($a,$b){
    return ($a === $b)? 'selected': ' ';
    
}
//$_post['lastname'];
$firstname = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
$airportStart = filter_input(INPUT_POST, 'airportStart', FILTER_SANITIZE_STRING);
//$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);


$airports = [];
    $airports[] = ['TXL' => 'Berlin - Tegel'];
    $airports[] = ['SXF' => 'Berlin - Schonefeld'];
    
    
//    

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 01 BASIC</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="container" >
            <h1>Formulare</h1>
            <form autocomplete="off" method="post">
                <fieldset >
                    <legend>Persönliche Daten</legend>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <label  class="control-label" for="fn">Vorname:</label>
                <input class="form-control" type="text" id="fn" name="firstName" value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
                    </div>
                    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <label for="ln">Name:</label>
                <input class="form-control" type="text" id="ln" name="lastName" value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-end">
                        <button formaction="index.php" name="btnAction" class="btn btn-primary" value="update">Update</button>
                        <button formaction="index.php" name="btnAction" class="btn btn-primary" value="insert">Insert</button>
                        </div>
               </div>
                    
                        
                        
                    
       </fieldset>
                <fieldset>
                    <legend>Flughafen Daten Variante 1</legend>
                    <select class="form-control" name="airportStart">
                        <option>Bitte Flughafen auswählen...</option>
                       <?php for ($i = 0; $i < count($airports); $i++): ?>
                         <?php foreach($airports[$i] as $code => $name) : ?>
                        <?php if($airportStart === $code):?>
                        <option selected  value="<?php echo $code ?>"><?php echo $name ?></option>
                               <?php else: ?>
                        <option value="<?php echo $code ?>"><?php echo $name ?></option>
                        <?php endif; ?>
                        
                        
                         <?php endforeach; ?>
                        <?php endfor; ?>
                        
                    </select>
                    
                </fieldset>
                <fieldset>
                    <legend>Flughafen Daten Variante 2</legend>
                    <select class="form-control" name="airportStart">
                        <option>Bitte Flughafen auswählen...</option>
                       <?php for ($i = 0; $i < count($airports); $i++): ?>
                         <?php foreach($airports[$i] as $code => $name) : ?>
                        <option <?php echo _selected($airportStart, $code); ?> value="<?php echo $code ?>"><?php echo $name ?></option>
                       <?php endforeach; ?>
                        <?php endfor; ?>
                        
                    </select>
                    
                </fieldset>
                
            </form>
            <hr>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Vor Name</th>
                        <th>Last Name</th>
                        <th>Flughafen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ?></td>
                        <td><?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?></td>
                        <td><?php echo $airportStart; ?></td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        <hr>
        
            
        </div>
        <pre>
<?php
?>
        </pre>
        
    </body>
</html>
