<?php
//  File json yang akan dibaca
$file = "movie.json";

//  Mendapatkan file json
$movie = file_get_contents($file);

//  Mendecode anggota.json
$data = json_decode($movie, true);

//  Membaca/menampilkan data array menggunakan foreach
echo "<center>Data Film</center>";
echo "<center><b>The Graduate</b></center>";
echo  "<center><img src='https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg ' width='400' height='500'></center>";
echo "<table>";
foreach ($data as $key => $d) {
  echo "<tr>";
  echo "<td>Instructions</td>";
  echo "<td>:" .$d['Instructions'] ."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Title</td>";
  echo "<td>:". $d['Title']. "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Year</td>";
  echo "<td>:" . $d['Year']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Rated</td>";
  echo "<td>:" . $d['Rated']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Released</td>";
  echo "<td>:". $d['Released']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Runtime</td>";
  echo "<td>:" . $d['Runtime']."</td>";
  echo "</tr>";
  echo "<tr>";


      echo "<tr>";
      echo "<td>Genre </td>";
      echo "<ul> <td>";
      foreach  ($d['Genre'] as $d2) {
      echo "<li>" . $d2."</li>";
      }
      echo "</td> </ul>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>Director</td>";
      echo "<td>:". $d['Director']."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>Writers </td>";
      echo "<ul> <td>";
      foreach  ($d['Writers'] as $d3) {
      echo "<li>" . $d3."</li>";
      }
     echo "</td> </ul>";
     echo "</tr>";

  echo "<tr>";
  echo "<td>Actors </td>";
  echo "<ul> <td>";
  foreach  ($d['Actors'] as $d4) {
  echo "<li>" . $d4."</li>";
  }
  echo "</td> </ul>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Plot</td>";
  echo "<td>:". $d['Plot']. "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Language </td>";
  echo "<td>:". $d['Language']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Country</td>";
  echo "<td>:". $d['Country']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Awards</td>";
  echo "<td>:". $d['Awards']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Poster</td>";
  echo "<td>:". $d['Poster']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>imdbRating</td>";
  echo "<td>:". $d['imdbRating']. "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>imdbVotes</td>";
  echo "<td>:". $d['imdbVotes']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>imdbID</td>";
  echo "<td>:". $d['imdbID']."</td>";
  echo "</tr>";
    
    
    
}
echo "</table>";

?>