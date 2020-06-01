<?php
include('../Xconnection.php');
session_start();

if (!isset($_SESSION['id_donor'])AND $_SESSION['email'] == '') { 
 
   // $_SESSION['s_urlRedirectDir'] = $_SERVER['REQUEST_URI'];
   // $_SESSION['id_donor'] = true;
    header("Location:../index.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once 'Yhead.php';
?>
<body>

    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>


        <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
            <!-- COLORLIB-ASIDE -->
            <?php
            $donor = $connection->query("SELECT * FROM donor WHERE id_donor='" . $_SESSION['id_donor'] . "'");
            while ($row = $donor->fetch_array()) {
            ?>

                <h1 id="colorlib-logo">
                    <a href="index.php">
                        <span class="img" style="background-image: url(images/masks.png);"></span>
                    </a> <?php echo $row['name']; ?>
                </h1>

            <?php  } ?>

            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="colorlib-active"><a href="index.php">Profile</a></li>
                    <li><a href="../ffg_donor/Donation.php">Donation</a></li>
                    <li><a href="../ffg_donor/history.php">History</a></li>
                    <li><a href="../ffg_donor/homelessalert.php">Notify Homeless</a></li>
                    <li> <a href="Xlogout.php">Log Out &nbsp<title="info" class="fas fa-power-off" title="Log Out" data-placement="top" data-toggle="tooltip"></i></a></li>
                </ul>
            </nav>


        </aside> <!-- END COLORLIB-ASIDE -->