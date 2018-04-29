<?php

  error_reporting(E_ALL);

  /**
  *Purpose is to create a drop down list. Gives the drop down the name of them
  * $str, and creates the options from an array of strings. Will add an option
  * Select One if the users has not specified not to in the third parameter
  * $isSpecified
  */
  function dropdown($selectName, $arrayOptions = String, $isSpecified = True){
    $dropdown = "<select class='selectpicker' name='$selectName'>";
    $optionID = $option . "ID";

    if($isSpecified)
      $dropdown .= "<option value='' id=''>Select one</option>";

    foreach ($arrayOptions as $option)
     $dropdown .= "<option value='$option' id='$optionID'>$option</option>";
     //look back at the id to add ID to the end of $option

   return "$dropdown</select>";
 }

?>
