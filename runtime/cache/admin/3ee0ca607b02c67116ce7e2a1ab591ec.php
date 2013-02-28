<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo ($title); ?></title>
    
    
</head>
<body>
    Main:

    <?php echo ($type); ?>
    <form action="__APP__/admin/User/login" method="post">
        <label for="username"><input type="text" name="username"></label>
        <label for="password"><input type="password" name="password"></label>
        <input type="submit">
    </form>
    
    <?php if(($isLogin)): ?>Has Login
        <?php else: ?>
        No Login Yet<?php endif; ?>
    
    

</body>

</html>