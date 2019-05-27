<?php
/* for($i=2;$i<=9;$i++){
    for($j=2;$j<=9;$j++){
        echo('<span style="display:inline-block;width: '
                . '85px;margin-bottom:5px;">'."$j*$i=".$i*$j.
                '</span>');
        //方法1.span進行區塊設定:不展示邊框:填充空白/寬85px/下邊界5px
    }
    echo("<br>");  
} */
echo '<table>';  //方法2.table tr-列 td<-行
for($i=2;$i<=9;$i++){
    echo '<tr>';
    for($j=2;$j<=5;$j++){
        echo("<td width=60px>"."$j*$i=".($i*$j)."</td>");}
    echo("</tr>");  
}
echo('<td>'.'<tr>'.'</td>'.'</tr>');   //純跳行
for($i=2;$i<=9;$i++){
    echo '<tr>';
    for($j=6;$j<=9;$j++){
        echo("<td>"."$j*$i=".($i*$j)."</td>");}
    echo("</tr>");  
}
echo'</table>'
?>