<div class="ui container">
    
    <table  width=" 100%">
            <thead>
                <tr>
                    <th colspan="3">
                        หมวดหมู่สินค้า
                    </th>
                </tr>
            </thead>
            <tr>
                <td width="20%">
                    <div>
                    <span>ลิปสติก</span> <br>
                    <span>ลิปพาเรท</span><br>
                    <span>ลิปกรอส</span><br>
                    <span>ลิปแมท111</span><br>
                    </div>
                    
                </td>
                <td rowspal="2" width="80%">
                             
                    <?php
                        echo('<table>');
                            for($i=1; $i<=6; $i++)
                            {
                                if(($i ==1) || ($i == 4) ) {
                                    echo('<tr>');
                                    
                                }
                                /* แสดงรูปภาพ
                                ------------*/
                                echo('<td>');
                                echo("<center><img src='./src/imgs/pic{$i}.png' width='150' height='200'></center>");
                                echo('<br>');
                                $x = $i*100;
                                echo("<center>ราคา {$x} บาท</center>");
                                echo('</td>');

                            /* 3 แถว จะขึ้นบบรทัดใหม่
                            --------------------*/
                            if($i%3 == 0) {
                                echo('</tr>');
                                echo('<tr>');
                            }
                        }
                        echo('</table>');
                    ?>
                    
                </td>               
                
            </tr>

            
    </table>
    
</div>