<!-- 9.Write php program that prints circular pattern in given range as shown below given example.  -->
<html>

<body>
    <form action="" method="post">
        Enter number:
        <input type="text" name="num">
        <input type="submit" value="Submit" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $n = $_POST['num'];
        $c1 = 0;
        $c2 = $n - 1;
        $r1 = 0;
        $r2 = $n - 1;
        $k = 1;
        $a = array(array(), array());
        while ($k <= $n * $n) {
            for ($i = $c1; $i <= $c2; $i++) {
                $a[$r1][$i] = $k++;
            }
            for ($j = $r1 + 1; $j <= $r2; $j++) {
                $a[$j][$c2] = $k++;
            }
            for ($d = $c2 - 1; $d >= $c1; $d--) {
                $a[$r2][$d] = $k++;
            }
            for ($m = $r2 - 1; $m >= $r1 + 1; $m--) {

                $a[$m][$c1] = $k++;
            }
            $r1++;
            $r2--;
            $c1++;
            $c2--;
        }
    }
        ?>
        <table border="2" style="border-color: red;">
            <?php
            for ($i = 0; $i < $n; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $n; $j++) {
                    echo "<td>" . $a[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <?php
    ?>
</body>

</html>