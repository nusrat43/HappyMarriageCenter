<?php
        include 'config.php';
        $id=$_GET['id'];
        $sql="DELETE FROM `register` WHERE id='$id'";
        $conn->query($sql);
        $sql="DELETE FROM `login` WHERE id='$id'";
        $conn->query($sql);
        echo "<script>
                                         alert('Record deleted successfully!'); 
                                         window.location='ViewAllUser.php'; 
                                      </script>";
?>