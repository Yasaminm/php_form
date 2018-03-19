<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

function _selected($a,$b){
    return ($a === $b)? 'selected': ' ';
}

$firstname = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$airportStart = filter_input(INPUT_POST, 'airportStart', FILTER_SANITIZE_STRING);
$airports = [];
    
    
    $airports[] = ['TXL' , 'Berlin - Tegel'];
    $airports[] = ['SXF' , 'Berlin - Schonefeld'];
    
    $airportName = [];
    $airportName['TXL']= 'Berlin - Tegel';
    $airportName['SXF']= 'Berlin - Schonefeld';


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
        <div class="container">
            <h1>Formulare</h1>
            <form autocomplete="off" method="post">
                <fieldset >
                    <legend>Persönliche Daten</legend>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <label  class="control-label" for="fn">Vorname:</label>
                <input class="form-control" type="text" id="fn" name="firstName" value="<?php echo $firstname ?>">
                    </div>
                    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <label for="ln">Name:</label>
                <input class="form-control" type="text" id="ln" name="lastName" value="<?php echo $lastname ?>">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-end">
                        <button formaction="index.php" name="btn" class="btn btn-primary" value="update">Update</button>
                        <button formaction="index.php" name="btn" class="btn btn-primary" value="insert">Insert</button>
                        </div>
               </div>
                    
                        
                        
                    
       </fieldset>
               
                <fieldset>
                    <legend>Flughafen Daten Variante 1</legend>
                    <select class="form-control" name="airportStart">
                        <option>Bitte Flughafen auswählen...</option>
                       <?php for ($i = 0; $i < count($airports); $i++): ?>
                        
                        <?php if($airportStart === $airports[$i][0]):?>
                        <option selected value="<?php echo $airports[$i][0] ?>"><?php echo $airports[$i][1] ?></option>
                               <?php else: ?>
                        <option value="<?php echo $airports[$i][0] ?>"><?php echo $airports[$i][1] ?></option>
                        <?php endif; ?>
                        
                         
                        <?php endfor; ?>
                        
                    </select>
                    
                </fieldset>
                <fieldset>
                    <legend>Flughafen Daten Variante 2</legend>
                    <select class="form-control" name="airportStart">
                        <option>Bitte Flughafen auswählen...</option>
                       <?php for ($i = 0; $i < count($airports); $i++): ?>
                        
                        <option <?php echo _selected($airportStart, $airports[$i][0]); ?> value="<?php echo $airports[$i][0] ?>"><?php echo $airports[$i][1] ?></option>
                        
                         
                        <?php endfor; ?>
                        
                    </select>
                    
                </fieldset>
            </form>
            <hr>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Vorname</th>
                        <th>Nachname</th>
                        <th>Flughafen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $firstname ?></td>
                        <td><?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?></td>
                        <td><?php echo $airportName[$airportStart]; ?></td>
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
