<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
//$_post['lastname'];
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
        <script type="text/javascript">
//  document.getElementById('airportStart').value = "<?php echo $_GET['airportStart'];?>";
</script>
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
                    <legend>Flughafen Daten</legend>
                    <select class="form-control" name="airportStart">
                        <option>Bitte Flughafen auswählen...</option>
                       <?php for ($i = 0; $i < count($airports); $i++): ?>
                         <?php foreach($airports[$i] as $code => $name) : ?>
                        <option value="" <?php if($_POST['airportStart'] == '') echo 'selected="selected"'; ?>><?php echo $code ?><?php echo $name ?></option>
                        
                         <?php endforeach; ?>
                        <?php endfor; ?>
                        
                    </select>
                    
                </fieldset>
                
            </form>
            <hr>
            <table class="table-striped">
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
                        <td><?php if($_GET['airportStart'] == '') echo 'selected="selected"'; ?></td>
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
