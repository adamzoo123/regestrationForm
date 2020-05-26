<?php 
require_once('config.php');
?>


<link rel="stylesheet" href="style.css">


<form name="frmRegistration" method="post" action="hello.php">
<div class="demo-table">
        <div class="form-head">Regestration</div>
    <div>
        <?php
        
if(isset($_POST['register'])){
    $geschlecht = $_POST['geschlecht'];
    $vorname    = $_POST['vorname'];
    $nachname   = $_POST['nachname'];
    $email      = $_POST['email'];
    $tieranzahl = $_POST['tieranzahl'];
    $tiertype   = $_POST['tiertype'];
  

$sql = "INSERT INTO regester (geschlecht, vorname, nachname, email, tieranzahl, tiertype) VALUES(?, ?, ?, ?, ?, ?)";

$stmtinsert = $db->prepare($sql);
$result = $stmtinsert->execute([$geschlecht, $vorname, $nachname, $email, $tieranzahl, $tiertype]);
if($result){
    echo "Succesflly saved";
}
else{
    echo "There is problem while saving";
}


// $query = "SELECT * FROM `regester`";
// mysqli_query($db, $query) or die('Error quering database');

// $result = mysqli_query($db, $query);
// $row = mysqli_fetch_array($result);

// while($row = mysqli_fetch_array($result)){
//  echo $row['geschlecht'] . ' ' . $row['vorname']. ': ' . $row['nachname']. ' ' . $row['email']. ' ' . $row['tieranzahl'] . ' ' . $row['tiertype'] . '<br/>';
// }
}





// mysqli_close($db);
 
            ?> 
             
             </div>
<div class="field-column">
    <h2>Eigene Daten</h2>
                <label for="geschlecht">Geschlecht</label>
                <div>
                    <select name="geschlecht" id="geschlecht" class="demo-input-box" required>
                        <option name="geschlecht" value="Herr">Herr</option>
                        <option name="geschlecht" value="Frau">Frau</option>
                    </select>
                </div>
            </div>
            
            <div class="field-column">
                <label for="vorname">Vorname</label>
                <div><input type="text" class="demo-input-box"
                    name="vorname" value="" required></div>
            </div>
            <div class="field-column">
                <label for="nachname">Nachname</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="nachname" value="" required>
                </div>
            </div>
           
            <div class="field-column">
                <label for="email">Email</label>
                <div>
                    <input type="email" class="demo-input-box"
                        name="email"
                         required>
                </div>
            </div>
           
            <div class="field-column">
                <h2>Haustier</h2>
                
                 <div>
                    <select name="tieranzahl" id="tieranzahl" class="demo-input-box" required>
                        <option name="tieranzahl" value="x">X</option>
                        <option name="tieranzahl" value="ein">Ein</option>
                        <option name="tieranzahl" value="mehrere">Mehrere</option>
                    </select>
                </div>
                <br>
                
                <div>
                    <select name="tiertype" id="tiertype" class="demo-input-box" required>
                        <option name="tiertype" value="hund">Hund</option>
                        <option name="tiertype" value="katze">Katze</option>
                        <option name="tiertype" value="maus">Maus</option>
                        <option name="tiertype" value="x">X</option>
                    </select>
                </div>
                
            </div>

                    <input type="submit"
                        name="register" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
