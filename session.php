<?php
    session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'collins' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    }
    else{
        echo 'Incorrect Login';
    }
}
?> 

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name : </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="password">Password : </label>
        <input type="password" name="password">
    </div>

    <input type="submit" value="submit" name="submit">
</form> 

