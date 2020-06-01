<html>

<body>

    <p>When you submit the form, a function is triggered which alerts some text.</p>

    <form action="/action_page.php" onsubmit="myFunction()">
        Enter name: <input type="text" name="fname">
        <input type="submit" value="Submit">
    </form>

    <script>
        function myFunction() {
            alert("The form was submitted");
        }
    </script>





    <?php include_once 'ModalRegister_Homeless.php'; ?>
</body>





</html>