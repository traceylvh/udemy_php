<?php
// echo 'hello this is loops<br /><br />';
//
// for($i = 0; $i <= 10; $i++){
//   echo 'Number '.$i.'<br />';
// };
//
// echo '--------<br />';
//
// $i = 0;
// while($i <=10){
//   echo 'Number '.$i.'<br />';
//   $i++;
// };
//
// echo '--------<br />';

$jsondata = file_get_contents("vpoint.json");
$json = json_decode($jsondata, true);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      h1 {
        text-align: center;
      }
      h4 {
        margin: 0;
        padding: 5px;
        background: #f4f4f4;
      }
      li {
        list-style: none;
        padding-left: 5px;
      }
      #container {
        width: 600px;
        margin: auto;
        overflow: hidden;
      }

    </style>
    <title>trying loops</title>
  </head>
  <body>
    <div id="container">
      <h1>Vanishing Point</h1>
      <ul>
        <?php
          foreach ($json['files'] as $key => $value) {
            echo '<h4>'.$value['title'].'</h4>';
            echo '<li>Artist: '.$value['artist'].'</li>';
            echo '<li>URL: '.$value['url'].'</li>';
          }
        ?>
      </ul>
    </div>
  </body>
</html>
