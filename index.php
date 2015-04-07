<?php
$title = 'CS Tutoring Hours';
require_once 'header.php';
?>
<?php -l?>
<nav>
    <a href="http://cs.csubak.edu">CS Home</a>
    <a href="http://csub.edu">CSUB</a>
    <!--a href="http://cs.csubak.edu/~jpina/tutorials">Jaime Piña</a--!>
</nav>
<h1>Tutoring Schedule Spring 2015</h1>
<?php
$fd = fopen("data.csv", "r");
?>
<label>
Highlight: 
</label>
<select id="Highlight-Tutor">
    <option>None</option>
    <option>Amy</option>
    <option>Austin</option>
    <option>Gabe</option>
    <option>Inderjit</option>
    <option>Kevin</option>
    <option>Mark</option>
    <option>Sunny</option>
    <option>Zenaida</option>
</select>
<table id="box">
<tr>
    <th>Start - End</th>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
</tr>
    <?php
    $tim = 8.0;
    while ($tim < 19)
    {
        echo '<tr>';
        echo '<td>';
        echo ($tim < 10 ? '0' : '');
        echo (int) $tim;
        if ( ($tim - (int) $tim) != 0)
        {
            echo ':30 - ';
        }
        else
        {
            echo ':00 - ';
        }
        $tim += 0.5;
        echo ($tim < 10 ? '0' : '');
        echo (int) $tim;
        if ( ($tim - (int) $tim) != 0)
        {
            echo ':30';
        }
        else
        {
            echo ':00';
        }
        echo '</td>';
        
        if ($fd  !== FALSE)
        {
            $names = fgetcsv($fd, 512, ";");
        }

        for ($i = 0; $i < 5; $i++)
        {
            echo '<td>';
            echo $names[$i];
            echo '</td>';
        }

        echo '</tr>';
    }
    fclose($fd);
    ?>
<?php

?>
</table>
<?php
    require_once 'footer.php';
?>
