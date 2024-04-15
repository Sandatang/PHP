<?php

include('../middleware/validation.php');

?>

<div>
    <?php include('../utils/message.php');?>
    <form action="" method="POST">
        <label >Username</label>
        <input type="text" name="username">
        <label >Password</label>
        <input type="password" name="password">
        <label >Confirm Password</label>
        <input type="password" name="confirmpass">
        <label >Role</label>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="athlete">Athlete</option>
            <option value="coach">Coach</option>
            <option value="dean">Dean</option>
            <option value="tourManager">Tournament Manager</option>
        </select>

        <button type="submit" name="register-user">Register</button>
    </form>
</div>