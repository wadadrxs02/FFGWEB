<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script type='text/javascript'>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            text: "<?php echo $_SESSION['status_text']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
        });
    </script>
<?php
    unset($_SESSION['status']);
}
?>