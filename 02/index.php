<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $word = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
$color = array("orange", "indigo", "mistyrose", "cyan","pink","brown");
$rand_col = array_rand($color, 5);
$rand_wrd = array_rand($word, 5);
echo '<b style="color:'.$color[$rand_col[0]].'">'.$word[$rand_wrd[0]].'  </b>';
echo '<b style="color:'.$color[$rand_col[1]].'">'.$word[$rand_wrd[1]].'  </b>';
echo '<b style="color:'.$color[$rand_col[2]].'">'.$word[$rand_wrd[2]].'  </b>';
echo '<b style="color:'.$color[$rand_col[3]].'">'.$word[$rand_wrd[3]].'  </b>';
echo '<b style="color:'.$color[$rand_col[4]].'">'.$word[$rand_wrd[4]].'  </b>';
echo '<br/>';
//
$word2 = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
$color2 = array("orange", "indigo", "mistyrose", "cyan","pink","brown");
$rand_col2 = array_rand($color2, 5);
$rand_wrd2 = array_rand($word2, 5);
echo '<b style="color:'.$color2[$rand_col2[0]].'">'.$word2[$rand_wrd2[0]].'  </b>';
echo '<b style="color:'.$color2[$rand_col2[1]].'">'.$word2[$rand_wrd2[1]].'  </b>';
echo '<b style="color:'.$color2[$rand_col2[2]].'">'.$word2[$rand_wrd2[2]].'  </b>';
echo '<b style="color:'.$color2[$rand_col2[3]].'">'.$word2[$rand_wrd2[3]].'  </b>';
echo '<b style="color:'.$color2[$rand_col2[4]].'">'.$word2[$rand_wrd2[4]].'  </b>';
echo '<br/>';
//
$word3 = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
$color3 = array("orange", "indigo", "mistyrose", "cyan","pink","brown");
$rand_col3 = array_rand($color3, 5);
$rand_wrd3 = array_rand($word3, 5);
echo '<b style="color:'.$color3[$rand_col3[0]].'">'.$word3[$rand_wrd3[0]].'  </b>';
echo '<b style="color:'.$color3[$rand_col3[1]].'">'.$word3[$rand_wrd3[1]].'  </b>';
echo '<b style="color:'.$color3[$rand_col3[2]].'">'.$word3[$rand_wrd3[2]].'  </b>';
echo '<b style="color:'.$color3[$rand_col3[3]].'">'.$word3[$rand_wrd3[3]].'  </b>';
echo '<b style="color:'.$color3[$rand_col3[4]].'">'.$word3[$rand_wrd3[4]].'  </b>';
echo '<br/>';
//
$word4 = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
$color4 = array("orange", "indigo", "mistyrose", "cyan","pink","brown");
$rand_col4 = array_rand($color4, 5);
$rand_wrd4 = array_rand($word4, 5);
echo '<b style="color:'.$color4[$rand_col4[0]].'">'.$word4[$rand_wrd4[0]].'  </b>';
echo '<b style="color:'.$color4[$rand_col4[1]].'">'.$word4[$rand_wrd4[1]].'  </b>';
echo '<b style="color:'.$color4[$rand_col4[2]].'">'.$word4[$rand_wrd4[2]].'  </b>';
echo '<b style="color:'.$color4[$rand_col4[3]].'">'.$word4[$rand_wrd4[3]].'  </b>';
echo '<b style="color:'.$color4[$rand_col4[4]].'">'.$word4[$rand_wrd4[4]].'  </b>';
echo '<br/>';
//
$word5 = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
$color5 = array("orange", "indigo", "mistyrose", "cyan","pink","brown");
$rand_col5 = array_rand($color5, 5);
$rand_wrd5 = array_rand($word5, 5);
echo '<b style="color:'.$color5[$rand_col5[0]].'">'.$word5[$rand_wrd5[0]].'  </b>';
echo '<b style="color:'.$color5[$rand_col5[1]].'">'.$word5[$rand_wrd5[1]].'  </b>';
echo '<b style="color:'.$color5[$rand_col5[2]].'">'.$word5[$rand_wrd5[2]].'  </b>';
echo '<b style="color:'.$color5[$rand_col5[3]].'">'.$word5[$rand_wrd5[3]].'  </b>';
echo '<b style="color:'.$color5[$rand_col5[4]].'">'.$word5[$rand_wrd5[4]].'  </b>';
    ?>
</body>
</html>