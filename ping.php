<!DOCTYPE html>
<html lang="ja">

<body style="text-align:center;">
    <h1>Ping</h1>
    <?php
    print "Enter IP address<br>\n";
    ?>
    <form method="post">
        <input type="text" size="30" name="ipaddress" placeholder="127.0.0.1"><br>
        <input type="submit" value="check">
    </form>

    <?php
    if(isset($_POST['ipaddress'])){
        $ipaddress = $_POST["ipaddress"];
        $output = null;
        $retval = null;
        exec("ping -n 1 $ipaddress", $output, $retval); // if you use linux, change -n to -c
        $output = nl2br(mb_convert_encoding(implode("\n", $output), "utf-8", "auto"));
        echo $output;
    }
    ?>

</body>
</html>
