<!DOCTYPE html>
<html lang="en">
<body>

<h1>php</h1>

<p>
    <?php
        echo "my first php script"."<hr />";
    ?>
</p>

<p>
    <?php
        $x = 1;
        $y = 2;
        $z = $x + $y;
        echo $z."<hr />";
    ?>
</p>

<p>
    <?php
        $array = array(1, 2, 3);
        echo $array[0];
        echo $array[2]."<hr />";
    ?>
</p>

<p>
    <?php
        $array = array(
            "a" => "zou",
            "b" => "run",
            "c" => "dong"
        );
        $array["a"] = "zzz";
        echo $array["a"]."<br />"."<br />";
        echo json_encode($array)."<hr />";
    ?>
</p>

<p>
    <?php
        class Person {
            function __construct($name) {
                $this->name = $name;
            }
            function show() {
                echo $this->name."<br />"."<br />";
            }
        }
        $p = new Person("zou");
        $p->show();
        echo "$p->name <br />";
        echo $p->name."<hr />";

    ?>
</p>

</body>
</html>
























