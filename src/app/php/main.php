<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
<form method="post">
     <div id="fname">
        <div>First Name</div>
        <div><input type="text" name="fname" placeholder="First Name"></div>
     </div>
     <div id="lname">
        <div>Last Name</div>
        <div><input type="text" name="lname" placeholder="Last Name"></div>
     </div>
     <div id="email">
        <div>Email</div>
        <div><input type="text" name="email" placeholder="eMail"></div>
    </div>

    <div class="errors">
        <?php if (!empty($errors)){foreach ($errors as $error):  ?>
            <div><?php echo $error ?></div>
        <?php  endforeach; }?>
    </div>
    <div>
        <button type="submit" name="submit" class="buttons">Save</button>
    </div>
</form>

</body>
</html>
