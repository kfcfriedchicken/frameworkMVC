
<div class="container text-bg-light m-3">
    <h3>Update User Form</h3>
    <p class="lead">Use the following form to modify information for an existing user in the database.</p>

  <form action="start.php?action=userAdd" method="POST">
    <div class="form-group p-2">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group p-2">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group p-2">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group p-2">
      <label for="passwd">Password:</label>
      <input type="password" class="form-control" id="passwd" name="passwd" required>
    </div>
    <div class="form-group p-2">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group p-2">
      <label for="urole">Role:</label>
      <input type="text" class="form-control" id="urole" name="urole">
    </div>
    <div class="form-group p-2">
        <button type="submit" class="btn btn-primary">Update User</button>
        <button type="submit" class="btn btn-primary">Cancel</button>
    </div>
  </form>
</div>