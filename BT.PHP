<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<STYLE type="text/css">
    .form{
        height: 500px; width: 530px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;v
    }
    .form input {
        margin: 5px;
        padding: 5px;
    }
</STYLE>
<body>
<form method="POST" action="display_result.php" >
    <div class="form">
        <h2> Future Value Calculator</h2><br>
        Investment Amount:  <input type="text" name="investmen_Amount" ><br><br>
        Yearly Interest Rate: <input type="text" name="Yearly_Interest_Rate"><br><br>
        Number of Years: <input type="text" name="Number_of_Year" ><br><br>
        <input type="submit" value="Caculate">
    </div>

</form>
</body>
</html>