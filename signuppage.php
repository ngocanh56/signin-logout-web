<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title> Log in </title>
</head>

<body>
    <form action="signup.php" method="post">
        <h2> SIGN UP </h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>

        <label> Your Name </label>
        <input type="text" name="name" placeholder="Ex: Nguyen Van A">

        <label> Email </label>
        <input type="text" name="email" placeholder="abcxyz@gmail.com">

        <label> Phone Number </label>
        <input type="text" name="phonenumber" placeholder="Your phone number">

        <label> User Name </label>
        <input type="text" name="uname" placeholder="User name">

        <label> Password </label>
        <input type="password" name="password" placeholder="Password">

        <label> Confirm Password </label>
        <input type="password" name="password2" placeholder="Type your password again">

        <button type="submit" name="register"> Register </button>
        <button type="submit" name="login"> Login </button>
    </form>
</body>
</html>