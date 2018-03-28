<?php require_once('Store-Functions.php'); ?>
<?php require_once('ForEachStore_Constants.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Store.css">
    <title>ForEach Store</title>
</head>

<body>
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
      <td><img src="https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTc1FhCVDaoswL6bmTkmdwXXVGD6yxKE8umhRvOrmVN0xbkzXrlP.4vwk9ff_1PFWsPIkRF021Is.9NoMYqy230P7wL6hYZStpGgfe.yhZLY8Y71cJgI6s._21pXd9N_mrL4lryj8rWOkO5tlBR2fUvtThsMXmdMQrp5WHy0AvaCaE-&w=800&h=800&format=jpg" alt="Fortnite" height="175px" width="225px"></td>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/81LXUOTmcGL.jpg" alt="Rocket League" height="175px" width="225px"></td>
      <td><img src="https://cdn.gamer-network.net/2017/articles/2017-10-23-15-36/GTA_5_Online_LEAK_Duke_O_Death_DLC_update_coming_soon_605675.jpg/EG11/resize/300x-1/quality/75/format/jpg" alt="GTA5" height="175" width="225>"</td>
      <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/70/Fallout_4_cover_art.jpg/220px-Fallout_4_cover_art.jpg" alt="Fallout4" height="175" width="225>"</td></td>
      <td><img src="https://vignette.wikia.nocookie.net/lotr/images/2/2b/Middle-earth_Shadow_of_War.jpg/revision/latest?cb=20170302153716" alt="Shadow of War" height="175" width="225>"</td></td>
    </tr>
    <tr>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdTaXVL-hk0eEDHXvfBJv2uqJ6msPE0irZqtA9i5OnNTQ-IclG" alt="Forza Horizon 3" height="175" width="225>"</td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdVD6yBci8ko-txo0sFioPFeV9kie3LQPZo7frQO5MMX2I8vyI" alt="Borderlands 2" height="175" width="225>"</td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvXoarPvljhJn28MKOTGkXo1_zt0-5AT0thG-SXGDqahjvAG2t8g" alt="Overwatch" height="175" width="225>"</td></td>
      <td><img src="https://bioshockinfinite.ghoststorygames.com/site/uploads/sites/3/synopsis_graphic01-323x254.jpg" alt="Bioshock Infinite" height="175" width="225>"</td></td>
      <td><img src="https://static.gamespot.com/uploads/scale_tiny/1197/11970954/3246063-aco_pack_agnostic_bxsht2d_e3_170611_330pm_us.jpg" alt="Assassins Creed Origins" height="175" width="225>"</td></td>
    </tr>
    <tr>
      <td><img src="" alt="" height="" width=""></td>
      <td><img src="" alt="" height="" width=""></td>
      <td><img src="" alt="" height="" width=""></td>
      <td><img src="" alt="" height="" width=""></td>
      <td><img src="" alt="" height="" width=""></td>
    </tr>
    <!-- <img src="" alt="" height="" width=""> -->
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
