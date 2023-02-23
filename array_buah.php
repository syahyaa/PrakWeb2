<?php
//cara menulis array
//cara lama
$ar_buah = array('pisang','mangga','jeruk');

//cara baru (array indexing)
$buah = ["a" => 'alpukat',"j" => 'jeruk', "m" => 'mangga'];
//cara memanggil array indexing
echo "<ol>";
foreach ($buah as $fruit => $k ){
    echo "<li> $fruit - $k </li>";
}
echo "</ol>";

?>