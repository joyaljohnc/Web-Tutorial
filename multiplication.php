<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply</title>
</head>
<body>
    <center>
    <form method="POST">
        <p>Number:<input type="text" name="number"></p>
        <p><input type="submit" value="Get Multiplication Table"></p>
    </form>
    <?php
    $num=$_POST["number"];
    echo $num."'s Table";
    echo "<br>";
    for($i=1;$i<=10;$i++)
    {
        $mul=$num*$i;
        echo "<table>
        <tbody>
        <tr>
        <td>$i</td>
        <td>*</td>
        <td>$num</td>
        <td>=</td>
        <td>$mul</td>
        </tr>
        </tbody>
        </table>";
        echo "<br>";
    }
    ?>
    </center>
</body>

</html>