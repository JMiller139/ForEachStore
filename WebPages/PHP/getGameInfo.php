<?php
  function stringifyDate($release_date) {
    $fmtDate = "";
    $whiteSpaceCnt = 0;
    
    for($i=0; $i < strlen($release_date); $i++){
      $ch = $release_date[$i];
      if(($ch >= 'a' && $ch <= 'z') || ($ch >= 'A' && $ch <= 'Z') || ($ch >='0' && $ch <= '9')){
        $fmtDate .= $ch;
      }
      else if($ch === ' ') {
        $whiteSpaceCnt++;
        if($whiteSpaceCnt > 1) {$fmtDate .= ',' . $ch;}
        else {$fmtDate .= $ch;}
      }
    }
    return $fmtDate;
  }

?>

<?php

    $output = '';
    $connect = mysqli_connect('localhost', 'proj1', 'foreach', 'proj1');
    if(mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }
    $query = "SELECT * FROM (Games INNER JOIN Game_Publishers ON Games.Game_ID = Game_Publishers.Game_ID 
                                    INNER JOIN Game_Developers ON Games.Game_ID = Game_Developers.Game_ID
                                    INNER JOIN Game_Genres ON Games.Game_ID = Game_Genres.Game_ID)
                            WHERE Games.Game_ID = '".$_POST['game_id']."'";
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_array($result)){
        $title = $row['Title'];
        $src = $row['Icon'];
        $genre = $row['Genre'];
        $developer = $row['Developer'];
        $release_date = $row['Release_Date'];
        $rating = $row['ESRB_Rating'];
        $price = $row['Price'];
    }
    $query = "SELECT * FROM Game_Platforms WHERE Game_ID = '".$_POST['game_id']."'";
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_array($result)){
        $platforms .= $row[1]." ";
    }
    $output .= '<div class="row">
                    <div class="col-lg-6 col-md-6" id="game-pic">
                        <div class="col-lg-12" id="game-image">
                        <p id="gImage">
                        <img src="'.$src.'" alt="'.$title.'" height="405px" width="325px">
                        </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" id="game-info">
                        <div class="modal-labels col-lg-12" id="genre-contanier">
                            <span class="game-info-label gInfoTop gInfo fe-blue fe-bold">Genre: </span>
                            <span class="game-info" id="genre">'.$genre.'</span>
                        </div>
                        <div class="modal-labels col-lg-12" id="platforms-contanier">
                            <span class="game-info-label  gInfo fe-blue fe-bold">Platforms: </span>
                            <span class="game-info" id="platforms">'.$platforms.'</span>
                        </div>
                        <div class="modal-labels col-lg-12" id="publisher-contanier">
                            <span class="game-info-label  gInfo fe-blue fe-bold">Developer: </span>
                            <span class="game-info" id="developer">'.$developer.'</span>
                        </div>
                        <div class="modal-labels col-lg-12" id="release-contanier">
                        <span class="game-info-label gInfo fe-blue fe-bold">Release Date: </span>
                        <span class="game-info" id="release-date">'.stringifyDate($release_date).'</span>
                    </div>
                        <div class="modal-labels col-lg-12" id="rating-contanier">
                            <span class="game-info-label  gInfo fe-blue fe-bold">Rating: </span>
                            <span class="game-info" id="rating">'.$rating.'</span>
                        </div>
                        <div class="modal-labels col-lg-12" id="price-contanier">
                            <span class="game-info-label  gInfo fe-blue fe-bold">Price: </span>
                            <span class="game-info" id="price">$'.$price.'</span>
                        </div>
                    </div>
                </div>';
    echo $output;

    mysqli_close($connect);


?>