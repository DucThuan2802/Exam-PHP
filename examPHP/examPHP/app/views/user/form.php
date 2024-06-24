<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<?php 
    $user = $data["user"] ;
    
?>
<body>
    <form action="http://localhost/examPHP/user/execute" method="POST">
        <input type="hidden" name="id" value='<?php echo ($user)  ? $user->id : "" ?>'>
        <input type="text" name="item_code" value='<?php echo ($user) ? $user->item_code : "" ?>' placeholder="input item_code" required>
        <input type="text" name="item_name" value='<?php echo ($user) ? $user->item_name : "" ?>' placeholder="input item_name" required>
        <input type="text" name="quantity" value='<?php echo ($user) ? $user->quantity : "" ?>' placeholder="input quantity">
        <input type="date" name="expried_date" value='<?php echo ($user) ? $user->expried_date : "" ?>' placeholder="input expried_date">
        <input type="text" name="note" value='<?php echo ($user) ? $user->note : "" ?>' placeholder="input note">
        <input type="submit" name="submit" value="submit">
        <?php ?>
    </form>
    <button><a href="http://localhost/examPHP/user/listData">Go to data table</a></button>
</body>
</html>