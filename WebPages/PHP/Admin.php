<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Admin.css">
    <title>ForEach Admin</title>
</head>

</body>
  <!-- BANNER NEEDS TO BE INSERTED -->
  <h1 id='adminHeader'>Admin</h1>

  <br>

  <form>

    <p id='adminRadio'>
      <input type="radio" name='action' id='add' value='add' checked='checked'>Add Game
      <input type="radio" name='action' id='delete' value='delete'>Delete Game
      <input type="radio" name='action' id='edit' value='edit'>Edit Game
    </p>

    <br>

    <textarea name='adminText' id='adminText' rows="15" cols="100"></textarea>

    <br>

    <input type='submit' name='adminSubmit' id='adminSubmit' value='Confirm Action'>

  </form>
</body>
</html>
