<?php 
$hasil = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;
            
            case '%':
            return $this->a % $this->b;
            break;

            default:
            return "-_-";
        }   
    }
    function gethasil($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $hasil = $cal->gethasil($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
<table >
  
    <tr>
        <td>masukan bilangan pertama</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>masukan bilangan kedua</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>pilih oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="hitung"></td>
    </tr>
      <tr>
        <td><strong><?php echo $hasil; ?><strong></td>
    </tr>
</table>
</form>
</body>
</html>

