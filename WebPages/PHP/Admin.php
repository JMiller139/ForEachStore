
<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="../CSS/Admin.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <title>ForEach Admin</title>

    <script>

      function initDropdowns() {
        var months = ['January','February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        for (var i = 0; i < months.length; i++)
          $('#month-drop').append("<option value='" + months[i] + "'>" + months[i] + "</option>");

        for (var day = 1; day <= 31; day++)
          $('#day-drop').append("<option value='" + day + "'>" + day + "</option>");

        for(var year = 2018; year >= 1960; year--)
          $('#year-drop').append("<option value='" + year + "'>" + year + "</option>");
      }

      $(document).ready(function(){

        initDropdowns();

        $('#month-drop').change(function() {

          var month = $('#month-drop').val();

          if(month === 'January') {
            $('#day-drop').empty();
            for(var day = 1 ; day <= 36; day++)
              $('#day-drop').append("<option value='" + day + "'>" + day + "</option>");
          }
        });
      });

      function addGame() {
        var title = $('#gameTitle').val();
        var releaseDate = $('#month-drop').val() + " " +$('#day-drop').val() + " " + $('#year-drop').val();
        var esrbRating = $('#ratingDropdown').val();
        var price = $('#priceText').val();
        var icon = $('#filePathText').val();
        var developer = $('#developerText').val();
        var publisher = $('#publisherText').val();
        var platformPC = "";
        var platformXbox = "";
        var platformPlay = "";
        if($('#pcCheckbox:checked').val() != undefined){
          platformPC = $('#pcCheckbox').val();
        }
        if($('#xboxCheckbox:checked').val() != undefined){
           platformXbox = $('#xboxCheckbox').val();
        }
        if($('#playstationCheckbox:checked').val() != undefined){
           platformPlay = $('#playstationCheckbox').val();
        }
        var genre = $('#genreText').val();

        if(document.getElementById('add').checked) {
          $.ajax({
            type: 'post',
            data: {gtitle:title,rdate:releaseDate,esrbrate:esrbRating,price:price,icon:icon,developer:developer,publisher:publisher,platformPC:platformPC,platformXbox:platformXbox,platformPlay:platformPlay,genre:genre},
            url: "addGame.php",
            dataType: "JSON"
          });

          alert("Game Added to Store");
          document.forms['myForm'].reset();
          window.location.reload();
        }
        else if(document.getElementById('delete').checked) {
          $.ajax({
            type: 'post',
            data: {gtitle:title},
            url: "deleteGame.php",
            dataType: "JSON"
          });

          alert("Game Deleted From Store");
          document.forms['myForm'].reset();
          window.location.reload();
        }
        else if(document.getElementById('edit').checked) {
          $.ajax({
            type: 'post',
            data: {gtitle:title,rdate:releaseDate,esrbrate:esrbRating,price:price,icon:icon,developer:developer,publisher:publisher,platformPC:platformPC,platformXbox:platformXbox,platformPlay:platformPlay,genre:genre},
            url: "updateGame.php",
            dataType: "JSON"
          });

          alert("Game Has Been Updated in the Store");
          document.forms['myForm'].reset();
          window.location.reload();
        }

    }
    </script>

</head>

</body>


<div class="container">
  <h1 class="page-header">Admin</h1>
</div>

<form>
<div class="container">
  <label><input type="radio" name='action' id='add' checked='checked'>Add Game</label>
  <label><input type="radio" name='action' id='delete'>Delete Game</label>
  <label><input type="radio" name='action' id='edit'>Edit Game</label>
</div>

<div class="container">
  <div class="form-group">
    <table>
      <tr>
        <td><label>Game Title</label></td>
        <td><input type="text" class="form-control" id='gameTitle'></input></td>
      </tr>
      <tr>
        <td><label>Release Date</label></td>
        <td>
          <div class="inlineBlockDiv">
            <select class='dropdown' id='month-drop' name="month-drop"></select>
            <select class='dropdown' id='day-drop' name="day-drop"></select>
            <select class='dropdown' id='year-drop' name="year-drop"></select>
          </div>
        </td>
      </tr>

      <tr>
        <td><label>ESRB Rating</label></td>
        <td>
          <select class="selectpicker" id="ratingDropdown" name="ratingDropdown">
            <option value="">Select Option</option>
            <option value="eC">eC</option>
            <option value="E">E</option>
            <option value="E+10">E+10</option>
            <option value="T">T</option>
            <option value="M">M</option>
            <option value="A">A</option>
            <option value="RP">RP</option>
          </select>
        </td>
      </tr>

      <tr>
        <td><label>Price</labek></td>
        <td>
          <div class="inlineBlockDiv">$</div>
          <div class="inlineBlockDiv">
            <input type="number" class="form-control" id="priceText" name="priceText" min="0.00" max="60.00" maxlength="4" pattern="\d+(\.\d{2})?"></input>
          </div>
        </td>
      </tr>

      <tr>
        <td><label>File Path of the Image</label></td>
        <td><input type="text" class="form-control" id="filePathText" name="filePathText"></input></td>
      </tr>

      <tr>
        <td><label>Developer</label></td>
        <td><input type="text" class="form-control" id="developerText" name="developerText"></input></td>
      </tr>

      <tr>
        <td><label>Publisher</label></td>
        <td><input type="text" class="form-control" id="publisherText" name="publisherText"></input></td>
      </tr>

      <tr>
        <td><label>Platforms</label></td>
        <td>
          <label class="checkbox-inline"><input type="checkbox" value="PC" id="pcCheckbox" name="pcCheckbox">PC</label>
          <label class="checkbox-inline"><input type="checkbox" value="XBOX" id="xboxCheckbox" name="xboxCheckbox">XBOX</label>
          <label class="checkbox-inline"><input type="checkbox" value="PLAYSTATION" id="playstationCheckbox" name="playstationCheckbox">PLAYSTATION</label>
        </td>
      </tr>

      <tr>
        <td><label>Genre</label></td>
        <td>
            <div class="inlineBlockDiv">
              <input type="text" class="form-control" id="genreText" name="genreText" placeholder="Genre"></input>
            </div>
            </form>
            <div class="inlineBlockDiv">
              <button class="btn btn-default" id="addGenreButton">Add More</button>
            </div>
        </td>
      </tr>

    </table>
  </div>
</div>


<div class="container">
  <button type="button" class="btn btn-default" id="confim" onclick="addGame();">Confirm Action</button>
</div>


<br/>

</body>
</html>
