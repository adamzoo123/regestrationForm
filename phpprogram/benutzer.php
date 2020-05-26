<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php 
    require_once('config.php');
    echo '<h1 class="text-center">Benutzer</h1><br>';
   

    
    $sql = "SELECT * FROM regester";
    $db_erg = mysqli_query( $db, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
 
echo '<table class="table table-striped">';
echo'<thead>
<tr>
  <th>Geschlecht</th>
  <th>Vorname</th>
  <th>Nachname</th>
  <th>Email</th>
  <th>Tieranzahl</th>
  <th>Tiertype</th>
</tr>
</thead>';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
  
  echo "<tr>";
  echo "<td>". $zeile['geschlecht'] . "</td>";
  echo "<td>". $zeile['vorname'] . "</td>";
  echo "<td>". $zeile['nachname'] . "</td>";
  echo "<td>". $zeile['email'] . "</td>";
  echo "<td>". $zeile['tieranzahl'] . "</td>";
  echo "<td>". $zeile['tiertype'] . "</td>";
  echo "</tr>";
}
echo "</table>";


?> 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 