<!-- 11) Write php script to generate small mcq quiz of 5 questions and four options each. Display 
result as correct answer, chosen answer and score obtained. -->
<form method="post" action="">
    <h3> Q1.How can you make a bulleted list? </h3>
    <input type="radio" name="q1" value="list">(A) < list>
        <input type="radio" name="q1" value="nl">(B) < nl> <br>
            <input type="radio" name="q1" value="ul">(C) < ul>
                <input type="radio" name="q1" value="ol">(D) < ol>

                    <h3> Q2.Choose the correct HTML tag to make a text bold? </h3>
                    <input type="radio" name="q2" value="b">(A) < b>
                        <input type="radio" name="q2" value="bold">(B) < bold><br>
                            <input type="radio" name="q2" value="bb">(C) < bb>
                                <input type="radio" name="q2" value="bld">(D) < bld>

                                    <h3> Q3.All variables in PHP start with which symbol? </h3>
                                    <input type="radio" name="q3" value="!">(A) !
                                    <input type="radio" name="q3" value="$">(B) $<br>
                                    <input type="radio" name="q3" value="&">(C) &
                                    <input type="radio" name="q3" value="All">(D) All of above

                                    <h3> Q4.A webpage displays a picture. What tag was used to display that picture?
                                    </h3>
                                    <input type="radio" name="q4" value="picture">(A) picture
                                    <input type="radio" name="q4" value="image">(B) image<br>
                                    <input type="radio" name="q4" value="img">(C) img
                                    <input type="radio" name="q4" value="src">(D) src

                                    <h3> Q5.Choose the correct HTML tag to make a text italic </h3>
                                    <input type="radio" name="q5" value="ii">(A) < ii>
                                        <input type="radio" name="q5" value="italics">(B) < italics><br>
                                            <input type="radio" name="q5" value="italic">(C) < italic>
                                                <input type="radio" name="q5" value="i">(D) < i>


                                                    <br><br>
                                                    <input type="submit" name="btn">
</form>
<?php
$a = @$_POST['q1'];
$b = @$_POST['q2'];
$c = @$_POST['q3'];
$d = @$_POST['q4'];
$e = @$_POST['q5'];
$count = 0;
if (isset($_POST['btn'])) {
    if ($a == 'ul') {
        $count++;

    }
    if ($b == 'b') {
        $count++;

    }
    if ($c == '$') {
        $count++;

    }
    if ($d == 'img') {
        $count++;

    }
    if ($e == 'i') {
        $count++;

    }
    echo "Q1 correct answer is < ol> <br>";
    echo "Q2 correct answer is < b> <br>";
    echo "Q3 correct answer is $ <br>";
    echo "Q4 correct answer is img <br>";
    echo "Q5 correct answer is < i> <br>";

    echo 'your score is :-' . $count;
}
?>