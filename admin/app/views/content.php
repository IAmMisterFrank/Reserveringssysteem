<?php
/**
 * Created by PhpStorm.
 * User: franksolleveld
 * Date: 15-11-17
 * Time: 15:23
 */

$values = $_POST;

/**if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')" ;
    $db->query($sql);
}*/

?>

<section class="main-container">
    <div class="main-wrapper">

        <?php
         // Zodra iemand is ingelogd, wordt deze code uitgevoerd.
        if (isset($_SESSION['u_id'])) {

            echo "Je bent ingelogd, " + $_SESSION['u_uid'] + "!";

        }


         ?>
    </div>
</section>
<div id="viewport">


</div>

