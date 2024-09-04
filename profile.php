<?php
include_once "header.php";
?>
<?php 
    if(isset($_SESSION["id"])){
        require_once "includes/dbh.inc.php";
        $ID = $_SESSION["id"];
        $sql = "SELECT * FROM users WHERE id='$ID';";

        $stmt = mysqli_stmt_init($conn);
            
            if(!mysqli_stmt_prepare($stmt,$sql)){
                exit();
            }else{
                mysqli_stmt_execute($stmt);
                $result =  mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                mysqli_stmt_close($stmt);
            }
        }else{
            header("Location: login.php");
            exit(); 
        }

?> 

<h1 class="heading">My <span>profile</span></h1>
    <section class="profile" id="profile">
        <div class="userdata" id ="Ud">
            <div class="profileimgcontainer">
                <img src="pf.jpg"  class="pimg"></img>
            </div>
           <h1> <span><?php echo $row["full_name"] ?></span></h1>
            <div class="colcontainer">
           <div class="col1">
            <h3>E-mail</h3>
            <h3>current address</h3>      
            <h3>mobile </h3>
           </div>
            <div class="col2">
                <h3><?php echo $row["email"] ?></h3> 
                <h3><?php echo $row["Address"] ?></h3>
               <h3><?php echo $row["mobile"] ?></h3>
            </div>
        </div>
        </div>



        <div class="c2">
        <div class="orderhistory" id = "OH">
            <h2>Order History</h2>
            <div class="order-history-container">
                
                <table>

                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Date</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12345</td>
                            <td>2024-06-20</td>
                            <td>Product A</td>
                            <td>2</td>
                            <td>$50.00</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>12346</td>
                            <td>2024-06-18</td>
                            <td>Product B</td>
                            <td>1</td>
                            <td>$30.00</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>12347</td>
                            <td>2024-06-15</td>
                            <td>Product C</td>
                            <td>3</td>
                            <td>$75.00</td>
                            <td><span class="status cancelled">Cancelled</span></td>
                        </tr>
                        <tr>
                            <td>12347</td>
                            <td>2024-06-15</td>
                            <td>Product C</td>
                            <td>3</td>
                            <td>$75.00</td>
                            <td><span class="status cancelled">Cancelled</span></td>
                        </tr>
                        <tr>
                            <td>12347</td>
                            <td>2024-06-15</td>
                            <td>Product C</td>
                            <td>3</td>
                            <td>$75.00</td>
                            <td><span class="status cancelled">Cancelled</span></td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
        


        </div>
        <div class="restsectin" id="RS"></div>

        <div class="colcontainer2">
            <div class="col1">
                <h2>Reset password</h2>
                             
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyfields"){
                            echo "<p class ='alert_warning'>All fields shoulf fill !</p>";
                        }elseif($_GET["error"] == "pwdlenth"){
                            echo "<p class ='alert_warning'>Passwords should contin at least 8 characters !</p>";
                        } elseif($_GET["error"] == "passwordsmismatch"){
                            echo "<p class ='alert_warning'>Passwords mismatch !</p>";
                        } elseif($_GET["error"] == "wrongpassword"){
                            echo "<p class ='alert_warning'>Wrong password !</p>";
                        }
                    }
                ?>
                <form action="includes/profile.inc.php" method="post">
                    <input type="password" id="oldpassword" name="oldpassword" required class="box" placeholder ="old password">
                    <input type="password" id="newpassword" name="newpassword" required class="box" placeholder ="new password">
                    <input type="password" id="newpasswordcon" name="newpasswordcon" required class="box" placeholder ="new password conform">
            
                    <input type="submit" value="Reset password" name="pwreset">
             
                </form>
                
            </div>
             <div class="col2">
                <h2>Reset Shiping Address</h2>
                <form action="includes/profile.inc.php" method="post">
                    <input type="text" id="line1" name="addresline1" required class="box" placeholder ="line 1..">
                    <input type="text" id="line2" name="addresline2" required class="box" placeholder ="line 2..">
                    <input type="text" id="city" name="city" required class="box" placeholder ="city">
                    
            
                    <input type="submit" value="Reset Shiping address" name="Addressreset">
                </form>
             </div>
         </div>

       
        </form>

    </div>
    
    </section>


    <?php
include_once "footer.php";
?>
