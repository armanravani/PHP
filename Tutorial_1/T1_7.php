<!-- 7) Write php script to design a calendar using3 dropdown list for day, month and year. -->
<html>
    <body>
        <form action="" method="post">
        Year :
        <select name="y" id="y">
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
        Month :
        <select name="m" id="m" onblur="check()">
            <option value="january">january</option>
            <option value="february">february</option>
            <option value="march">march</option>
            <option value="april">april</option>
            <option value="may">may</option>
            <option value="june">june</option>
            <option value="july">july</option>
            <option value="august">august</option>
            <option value="september">september</option>
            <option value="october">october</option>
            <option value="november">november</option>
            <option value="december">december</option>
        </select>
        <p id="p1"></p>
        <input type="submit" name="btn">
        </form>
    </body>
    <script>
        function check(){
            var y=document.getElementById('y').value;
            var m=document.getElementById('m').value;
            var i=1;
            var a="<select name='d'>";
            for(i=1;i<=28;i++)
            {
                a+="<option value="+i+">"+i+"</option>";
            }    
            if(y%4==0)
            {
                if(m=='february')
                {
                    a+="<option value='29'>29</option>"
                }
            }
            else
            {
                if(m=='january'||m=="march"||m=='may'||m=='july'||m=='august'||m=="october"||m=="december")
                {
                    a+="<option value='29'>29</option>";
                    a+="<option value='30'>30</option>";
                    a+="<option value='31'>31</option>";
                }
                else if(m=='february')
                {

                }
                else
                {
                    a+="<option value='29'>29</option>";
                    a+="<option value='30'>30</option>";
                }
            }
            a+="</select>";
            document.getElementById('p1').innerHTML="Day :"+a;
        }
    </script>
</html> 
<?php

if(isset($_POST['btn']))
{
    $y=@$_POST['y'];
    $m=@$_POST['m'];
    $d=@$_POST['d'];

    // echo $d."-".$m."-".$y;
    echo "<h1 style='color:green;'>$d-$m-$y</h1>";
}
?>