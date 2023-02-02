
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h3>Add User</h3>

   <form action="users_save.php" method='post'>
   <div>
      <label for="firstname">First Name: </label>
      <input type='text' name='firstname'> 
   </div>

   <div>
      <label for="lastname">Last Name: </label>
      <input type='text' name='lastname'> 
   </div>

   <div>
      <label for="Email">Email: </label>
      <input type='email' name='email'> 
   </div>

   <div>
      <label for="username">Username: </label>
      <input type='text' name='username'> 
   </div>

   <div>
      <label for="password">Password: </label>
      <input type='password' name='password'> 
   </div>

   <div>
      <input type='submit' name='submit' value='Save'> 
   </div>

</form>

</body>
</html>