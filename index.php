<?php
/**
 * Prime Numbers
 */
    $primes = array();
    $count = 1;
    for ($i = 1; $count <= 50; $i++) {

        $d = 0;

        for ($j = $i; $j >= 1; $j--) {
            if (($i % $j) == 0) {
                $d++;
            }
        }
        if ($d == 2) {
            $primes[] = $i;
            $count++;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Prime Numbers</title>
        <style>

            table {
                width: 50%;
                border-collapse: collapse;
            }


            th {
                background-color:#CCC;
                font-size: 12px;
                color:#484848;
                padding-left:4px;
                padding-right:4px;
                border-bottom:solid 1px #CCC;
                height:26px;
                padding-right:5px;
            }

            tr:nth-child(odd) {
                background-color:#F3F3F3;
            }

            tr:nth-child(even) {
                background-color:#FFF;
            }

            tr, td {
                height:26px;
                padding-left:4px;
                padding-right:2px;
                font-family:Verdana, Geneva, sans-serif;
                font-size:12px;
                white-space:nowrap;
                border-bottom:solid 1px #E1E1E1;
                text-align: center;
                border: solid 1px #CCC;
            }

            tr:hover {
                background-color:#00D8CC;
                cursor:pointer; color:#FFF;
            }

        </style>
    </head>
    <body>
        <div class='container'>
            <table>
                <thead>
                <tr>
                    <th>Primes</th>
                    <th>Sum of Primes</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $total = 0;
                    foreach ($primes as $key => $value) {
                        $total = $total + $value;
                        echo "<tr><td>$value</td><td>$total</td></tr>";
                        if (($key+1) % 10 == 0) {
                            echo "<tr><td></td><td></td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
