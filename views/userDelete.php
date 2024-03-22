
<div class="container text-bg-light m-3">
    
    <h3>Delete User Form</h3>
    <p class="lead">Select to confirm the removal of an existing user from the database.</p>
    <p><?php echo $data->getUserID()." ".$data->getFirstname()." ".$data->getLastname(); ?></p>

    <form action="start.php?action=userDelete" method="POST">
    <div class="form-group p-2">
        <input type="hidden" name="userID" value="<?php echo $data->getUserID(); ?>">
        <button type="submit" class="btn btn-primary">Confirm Delete</button>
        <button type="submit" class="btn btn-primary">Cancel</button>
    </div>
  </form>
</div>