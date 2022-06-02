<?php
session_start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($conn,"update `userdata` set votes='$totalvotes' where id='$gid'");
$updatestatus=mysqli_query($conn,"update `userdata` set status=1 where id='$uid'");

if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($conn,"select username,photo,votes,id  from `userdata` where standard='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;
    echo'<script>
    alert("VOting Successful !");
    window.location="../partials/dashboard.php";
</script>';
}
else{
    echo'<script>
    alert("technical error !! Vote after sometime");
    window.location="../partials/dashboard.php";
</script>';
}
?>