<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];

  if(!empty($name)){
    $check = checkdnsrr($name);

  if($check){
    $taken_design = "<div class='text-center mt-5'><h3>Sorry! <span class='text-warning'>".$name."</span> is not available.</h3></div>";
    echo $taken_design;
  }else{
    $available_design = "<div class='text-center mt-5'><h3>Congratulations! <span class='text-warning'>".$name."</span> is available.</h3></div>";
    echo $available_design;
  }
  }else{
    echo "<div class='text-center text-danger mt-4'>Sorry! input field can be empty.</div>";
  }
 
}