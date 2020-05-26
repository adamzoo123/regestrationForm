<?php 
require_once('config.php');

?>


<link rel="stylesheet" href="style.css">


<form name="frmRegistration" method="post" action="hello.php">
<div class="demo-table">
        <div class="form-head">Registration</div>
    <div>
        <?php
$exp = "/[a-zA-Z]+[^A-Z]/";
$exp2="/[A-Za-z0-9][A-Za-z0-9]+[@][A-Za-z][A-Za-z]+[.][A-Za-z][A-Za-z]+/";
if(isset($_POST['register'])){
    if(preg_match ($exp,$_POST['vorname'])){
        if(preg_match ($exp,$_POST['nachname'])){
            if(preg_match ($exp2,$_POST['email'])){
                $geschlecht = $_POST['geschlecht'];
                $vorname    = $_POST['vorname'];
                $nachname   = $_POST['nachname'];
                $email      = $_POST['email'];
                $tieranzahl = $_POST['tieranzahl'];
                $tiertype   = $_POST['tiertype'];
                


                $query = "INSERT INTO regester (geschlecht, vorname, nachname, email, tieranzahl, tiertype) VALUES('$geschlecht', '$vorname', '$nachname', '$email', '$tieranzahl', '$tiertype')";
                $result = mysqli_query($db, $query);
                

                
            }else {
                echo '<script type="text/javascript">';
                echo ' alert("email falsch")';  
                echo '</script>';
            };
        }else {
            echo '<script type="text/javascript">';
            echo ' alert("nachname: please insert alphabet character")';  
            echo '</script>';
        };
    
    }else {
        echo '<script type="text/javascript">';
        echo ' alert("vorname: please insert aplphabet character")';  
        echo '</script>';
    };
}
    

mysqli_close($db);
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
                <div><input type="text" class="demo-input-box vorname"
                    name="vorname" value="" required></div>
            </div>
            <div class="field-column">
                <label for="nachname">Nachname</label>
                <div>
                    <input type="text" class="demo-input-box nachname"
                        name="nachname" value="" required>
                </div>
            </div>
           
            <div class="field-column">
                <label for="email">Email</label>
                <div>
                    <input type="email" class="demo-input-box email"
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
                    name="register" value="register"
                    class="btnRegister">
                   
              
                <div class="field-column">
               
                                <a href="benutzer.php">Benutzer</a>
                </div>


                </div>
              
            </div>
        </div>
    </form>


<script src="script.js"></script>