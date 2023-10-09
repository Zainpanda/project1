<?php
$conn=mysqli_connect("localhost","root","","lokh");
//$tab="CREATE TABLE cr(id int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,cname VARCHAR(25))";
//$tab="ALTER TABLE cr add column che varchar(24)";
//$res=mysqli_query($conn,$tab);
if($conn)
{
    echo "connect";
}
?>
<html>
    <body>
        <center>
        <style>
            body{
                background-color: blueviolet;
                color: antiquewhite;
            }
            input{
                box-sizing: border-box;
            }
        </style>
        
        <form method="post">
            <select name="coursename">
                <option value="">select Course</option>
                <option value="web">web</option>
                <option value="web devlo">web devlo</option>
                <option value="app devlo">aap devlo</option>
                <option value="game devlo">game devlo</option>
                <option value="digital devlo">digital devlo</option>
            </select>
            <table border="1">
                <tr>
                    <td colspan="2">Select Technology:</td>
                </tr>
                <tr>
        </td>PHP</td>
        <td><input type="checkbox" name="tech[]" value="php">php</td>
                </tr>
                <tr>
                </td>.NET</td>
        <td><input type="checkbox" name="tech[]" value=".NET">.net</td>
                </tr>
                <tr>
                </td>java</td>
        <td><input type="checkbox" name="tech[]" value="java">java</td>
                </tr>
                <tr>
                </td>javascript</td>
        <td><input type="checkbox" name="tech[]" value="javascript">javascript</td>
                </tr>
            </table><br>
        
            <input type="submit" value="submit" name="sub">
        </form></center>
    </body>
</html>
<?php
if(isset($_POST['sub']))
{
    $conn=mysqli_connect("localhost","root","","lokh");
    $cname=$_POST['coursename'];
    $checkbox=$_POST['tech'];
    $chk="";
    foreach($checkbox as $chk1)
    {
        $chk.=$chk1.",";
    }
    if(!empty($cname))
    {
        $q="insert into cr (cname,che) values ('$cname','$chk')";
        $ress=mysqli_query($conn,$q);
    if($ress)
    {
        echo "<script> alert('inserted')</script>";
    }
    else
    {
        echo "<script> alert('inserted not')</script>";
    }
    
    }
}
?>