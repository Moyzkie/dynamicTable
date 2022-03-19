
<?php
  include_once "myFavoriteSong.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table border = "1" style="text-align: center;">
      <thead>
          <th>Title</th>
          <th>Artis</th>
          <th>Track Duration</th>
          <th>Composer</th>
          <th>Releas Date</th>
          <th>Music Video</th>
      </thead>
      <tbody>
          <?php foreach($myFavoriteSongs as $row){?>
           <tr>
               <td><?=$row->Title?></td>
               <td><?=$row->Artist?></td>
               <td><?=$row->TrackDuration?></td>
               <td><?=$row->Composer?></td>
               <td><?=$row->ReleasDate?></td>
               <td><?=$row->MusicVideo?></td>
           </tr>
          <?php }?>
      </tbody>
  </table>
</body>
</html>