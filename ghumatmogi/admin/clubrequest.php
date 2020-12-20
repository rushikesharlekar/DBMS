<?php include_once '../web_services/checkadminlogin.php'?>

<?php include_once 'templates/header.php'?>

<?php  
    require_once '../config/connect.php';
    $user_sql = mysqli_query($connect,"select * from user where role = 'club' and approved = 'no' ");

?>

<!-- navigation -->
<?php include_once 'templates/menu.php' ?>

<div class="container">
    <div class="container">
        
            <?php 
            while($user_data = mysqli_fetch_array($user_sql)):; ?>

                <div>
                    <ul>
                        
                        <h5>
                            <div id="username<?php echo $user_data['id']; ?>" name="username<?php echo $user_data['id']; ?>" value="<?php echo $user_data['id']; ?>">
                                <?php 
                                echo $user_data['firstname'].' '.$user_data['lastname'];
                                
                                ?>
                            </div>
                        </h5>
                        <?php 
                        $club = $user_data['club'];
                        $club_sql = mysqli_query($connect,"select * from club where club_id = '$club'");
                        $club_data = mysqli_fetch_array($club_sql);
                        ?>
                        <h6>
                            <?php echo $club_data['club_name']; ?>
                        </h6>
                        <a href="approveuser.php?id=<?php echo $user_data['id']; ?>" ><button class="btn custom_button mt-1 btn-block container">Approve</button></a>
                    </ul>
                </div>
                <div class="dropdown-divider"></div>
                
            <?php  endwhile; ?>          
        
    </div>
</div>

<?php include_once 'templates/footer.php'?>