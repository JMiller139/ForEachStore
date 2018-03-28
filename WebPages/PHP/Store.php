<?php require_once('Store-Functions.php'); ?>
<?php require_once('ForEachStore_Constants.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Store.css">
    <title>ForEach Store</title>
</head>

</body>
  <!-- BANNER NEEDS TO BE INSERTED -->

  <table id='filterTable'>
    <!-- each dropdown needs to have a defualt value -->
    <tr>
      <form id='filterDropdownMenus'>
        <td><?php echo dropdown("genreDropDown", $GLOBALS['genreDropDownOptions'], false); ?></td>
        <td><?php echo dropdown("ratingDropDown", $GLOBALS['ratingDropDownOptions'], false); ?></td>
        <td><?php echo dropdown("priceDropDown", $GLOBALS['priceDropDownOptions'], false); ?></td>
        <td><?php echo dropdown("platformDropDown", $GLOBALS['platformDropDownOptions'], false); ?></td>
        <td><input type='submit' name='filteSearchButton' id='filterSearchBarButton' value='Search'></td>
      </form>

      <td id='searchBarCell'>
        <form>
          <input type="text" placeholder="Search..">
          <input type='submit' name='searchBarButton' id='searchBarButton' value='Icon'>
        </form>
      </td>
    </tr>
  </table>


  <table id='gamesTable'>
    <!-- php should generate this table according to the amount of games
         returned from the query -->
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>

</body>
</html>
