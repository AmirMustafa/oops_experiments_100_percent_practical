<?php include 'index.php' ?>

<form method="POST" action="">
<h2>Login System</h2><br>
<label for="username">Username </label><input type="text" name='username'><br><br>
<label for="username">Username </label><input type="password" name='password'><br><br>
<input type="submit" name='send'>
</form>

<?php
    if(isset($_POST['send'])) {
        $object = new Login();
        $object->insertIntoTb($_POST['username'], $_POST['password']);

        /* echo '<pre>';
        print_r($object->errors);
        echo '</pre>'; */


        foreach ($object->errors as $error) {
            echo $error . "<br>";
        }
    }
?>
