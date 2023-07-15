<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body id="dbbg">
        
            <center>
            
            <div id="headerSection">
            
            <a href="logout.php"><button id="logout-button">Logout</button></a>
             
            </div>
            </center>
            

            <div id="mainSection">
                <div id="profileSection">
                  
                    <center><img src="../image/profile.png" height="100" width="100"></center><br>
                  
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                            <div id="eachgrp">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" >
                              <div id="grpsec">
                                <b>Artist Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                            
                                <?php
                            
                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 10px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px; width: 15%;  border:none;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 10px; font-size: 15px; background-color: #13a796; color: white; border-radius: 5px; width: 15%; border:none;" type="submit">Vote</button>
                              </div>
                                    <?php
                                }
                                ?>
                                </form>
                            </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 2px solid #bdc3c7; margin-bottom: 10px">
                                <b>No Artist available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
        
    </body>
</html>