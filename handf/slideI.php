<div id="n1">

        <ul>
            <button class="btn" onclick="slide()" id="btn1"><i class="material-icons">close</i></button>
            <li><a class="btn" id="a1" href="instructors_home.php"><i class="fa fa-home"> </i> Home</a></li>
            <li><a class="btn" id="a1" href="course.php"><img src="https://img.icons8.com/wired/21/000000/paper.png"> Add Course</a></li>
            <li><a class="btn" id="a1" href="L_list.php"><img src="https://img.icons8.com/wired/21/000000/add-list.png"> Learner's List</a></li>
            <li><a class="btn" id="a1" href="I_test_list.php"><img src="https://img.icons8.com/carbon-copy/21/000000/task.png"> Manage Tests</a></li>
            <li><a class="btn" id="a1" href="c_list.php"><i class="fa fa-tasks"></i> Manage Courses</a></li>
            <li><a class="btn" id="a1" href="logout.php"><img src="https://img.icons8.com/android/21/000000/logout-rounded-left.png"> Logout</a></li>
        </ul>
    
</div>
<!----------------------------nav bar----------------------------------->
<nav id="nav" class="navbar  navbar-expand-lg bg-light navbar-light sticky-bottom">
    <div class="container-fluid">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#newMenu" aria-controls="newMenu" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">
</span>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <button class="btn nav-link" id="b1" onclick="slide()"><i class="material-icons">menu</i></button>
            </li>
            <div class="collapse navbar-collapse" id="newMenu">
                <div class="navbar-nav">
                <li class="nav-item">
            <a class="nav-link" href="instructors_home.php"><i class="fa fa-home"></i></a>
            </li>
<p> <style>
.vl {
  border-left: 4px solid black;
  height: 40px;
}
</style>

<div class="vl"></div> </p>
            <li class="nav-item">
            <a class="nav-link" href="Logout.php"><i class="fa fa-sign-out"></i>  </a>
            </li>
                </div>
            </div>
        </ul>
    <div class="navbar-header">
        <ul class="nav navbar-nav navbar-right">
            <li><a class="navbar-brand" href="profilel.php"><?php
        /*-----------------------------------------------------------------------*/
        error_reporting(0);
        $sql="select name from learner where l_id='$_SESSION[l_id];'";
        $r=mysqli_query($conn,$sql);
        $rc=mysqli_num_rows($r);
        if($rc>0){
            while($row =mysqli_fetch_assoc($r)){
                $l=$row['name'];
                // echo $l;
            }}

        $sql1="select name from instructor where i_id='$_SESSION[i_id];'";
        $r=mysqli_query($conn,$sql1);
        $rc=mysqli_num_rows($r);
        if($rc>0){
            while($row =mysqli_fetch_assoc($r)){
                $i=$row['name'];
                // echo $i;
            }}

        $sql2="select name from signup where id='$_SESSION[a_id];'";
        $r=mysqli_query($conn,$sql2 );
        $rc=mysqli_num_rows($r);
        if($rc>0){
            while($row =mysqli_fetch_assoc($r)){
                $a=$row['name'];
                // echo $a;
            }}

        
     if($_SESSION['name']==$l){
         $lid=$_SESSION['l_id'];
         $q = mysqli_query($conn,"SELECT image FROM `profilel` where l_id=$lid" );
     }elseif($_SESSION['name']==$i){
         $iid=$_SESSION['i_id'];
         $q = mysqli_query($conn,"SELECT image FROM `profilel` where i_id=$iid" );
     }elseif ($_SESSION['name']==$a) {
        $aid=$_SESSION['a_id'];
        $q = mysqli_query($conn,"SELECT image FROM `profilel` where a_id=$aid" );
     }else {
        echo "<img width='35' height='35' src='profile/default.png' alt='Default Profile Pic'>";
         echo "error";
     }
        /*-----------------------------------------------------------------------*/         
 include_once 'php_connection.php';
    // $q = mysqli_query($conn,"SELECT image FROM `profilel` where l_id=$iid or i_id=$iid or a_id=$iid" );
            while($row = mysqli_fetch_assoc($q)){
                    if($row['image'] == ""){
                            echo "<img width='35' height='35' src='profile/default.png' alt='Default Profile Pic'>";
                    } else {
                            echo "<img width='35' height='35' src='profile/".$row['image']."' alt='Profile Pic'>";
                    }
                }
        ?></a></li>

            <li><a class="navbar-brand" href="profilel.php"><?php echo $_SESSION['name']?></a></li>
        </ul>  
        </div>
    </div>
</nav>