
<div class="modal fade" id="mymodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
            
            <form  method="post" action="login_script.php" >
             <?php
                   if(isset($_SESSION['mes'])){
                  
                       ?>
                        <div class="alert alert-warning alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>warning!</strong>
                     <?php
                       echo  $_SESSION['mes'];                    
                   ?>  </div><?php  } ?>
             
                
             
             <div class="form-group">
                        <input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                               name='lemail' class='form-control' required="require"> 
             </div>
             <div class="form-group">
                 <input type="password" placeholder="Password" required="true"
                                pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                               name='lpassword' class='form-control'> 
             </div>
            
                  
             <div class='form-group'>
                 <button type='submit' name="submit" class='btn btn-primary' >Submit</button>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not have account? <a href="signup.php"  style="color:blueviolet;">Sign Up</a></p>

        </div>
      </div>
    </div>
  </div>
   