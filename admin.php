<?php 
        session_start();
        if(!isset($_SESSION['email']) ){
            header('location: login.php');
        }
    ?>

<?php
    $conn=mysqli_connect("localhost","root","","login");
    if(!$conn) {
        echo "Không thể kết nối";
        exit();
    }
    $lenh="Select * from  createuser";
    $kq=mysqli_query($conn,$lenh);
    echo "<table width='900' border='5' cellspacing='20' cellpadding='20' bgcolor='pink' bordercolor='green' align='center'>";
     echo "<tr align='center'>
             <td>ID</td>
             <td>Email</td>
             <td>PassWord</td>
             </tr>";
             while ($row = mysqli_fetch_row($kq)) 
    {
           
            echo "<tr>";
            echo "<td> $row[0] </td>";
            echo "<td> $row[1] </td>";
            echo "<td> $row[2] </td>";
            echo "</tr>";
    }
    echo "</table>"
?>


<h1>Tôi là Steven Admin</h1>


<a href="logout.php">
    <button type="submit" name="logout" id="logout"> Đăng Xuất </button>
</a>
<table width='900' border='5' cellspacing='20' cellpadding='20' bgcolor='#E8E0E0' bordercolor='#64A4F1' align='center'>
    <tr>
        <td>
            ID
        </td>
        <td>
            Email
        </td>
        <td>
            Password
        </td>
    </tr>

</table>