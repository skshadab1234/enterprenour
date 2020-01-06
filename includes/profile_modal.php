
<!-- Edit Profile -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-title" >
              <h4 class="modal-title" style="color: white"><b>Update Account</b></h4>
            </div>
            <div class="modal-body" style="color: white">
              <form class="form-horizontal" method="POST" action="profile_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $user['contact_info']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9" >
                      <input type="file" id="photo" name="photo" style="color: black">
                    </div>
                </div>
                <hr>
                
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" id="quickview" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" id="quickview" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- strength edit -->
<div class="modal fade" id="edit1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-title" >
              <h4 class="modal-title" style="color: white"><b>Update Your Strength</b></h4>
            </div>
            <div class="modal-body" style="color: white">
              <form class="form-horizontal" method="POST" action="strength_edit.php" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="strength" class="col-sm-3 control-label">Strength</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="strength" name="strength" value="<?php echo $user['strength']; ?>">
                    </div>

                    <!-- update strength2 -->
                    <label for="strength2" class="col-sm-3 control-label">Strength2</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="strength2" name="strength2" value="<?php echo $user['strength2']; ?>">
                    </div>

                   <!-- update strength3 -->

                    <label for="strength3" class="col-sm-3 control-label">Strength3</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="strength3" name="strength3" value="<?php echo $user['strength3']; ?>">
                    </div>
                  
                  <!-- update strength4 -->
                    <label for="strength4" class="col-sm-3 control-label">Strength4</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="strength4" name="strength4" value="<?php echo $user['strength4']; ?>">
                    </div>

                    <!-- update strength5 -->
            
                    <label for="strength5" class="col-sm-3 control-label">Strength5</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="strength5" name="strength5" value="<?php echo $user['strength5']; ?>">
                    </div>

                    <!-- update strength6 -->

                    <label for="strength6" class="col-sm-3 control-label">Strength6</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="strength6" name="strength6" value="<?php echo $user['strength6']; ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" id="quickview" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" id="quickview" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>



<!-- weakness edit -->
<div class="modal fade" id="weakness">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-title" >
              <h4 class="modal-title" style="color: white"><b>Update Your Weakness</b></h4>
            </div>
            <div class="modal-body" style="color: white">
              <form class="form-horizontal" method="POST" action="weakness_edit.php" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="weakness" class="col-sm-3 control-label">Weakness</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="weakness" name="weakness" value="<?php echo $user['weakness']; ?>">
                    </div>

                    <!-- update weakness2 -->
                    <label for="weakness" class="col-sm-3 control-label">weakness2</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="weakness2" name="weakness2" value="<?php echo $user['weakness2']; ?>">
                    </div>

                   <!-- update weakness3 -->

                    <label for="weakness" class="col-sm-3 control-label">weakness3</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="weakness3" name="weakness3" value="<?php echo $user['weakness3']; ?>">
                    </div>
                  
                  <!-- update weakness4 -->
                    <label for="weakness" class="col-sm-3 control-label">weakness4</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="weakness4" name="weakness4" value="<?php echo $user['weakness4']; ?>">
                    </div>

                    <!-- update weakness5 -->
            
                    <label for="weakness" class="col-sm-3 control-label">weakness5</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="weakness5" name="weakness5" value="<?php echo $user['weakness5']; ?>">
                    </div>

                    <!-- update weakness6 -->

                    <label for="weakness" class="col-sm-3 control-label">weakness6</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="weakness6" name="weakness6" value="<?php echo $user['weakness6']; ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" id="quickview" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" id="quickview" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>



<!-- opportunity edit -->
<div class="modal fade" id="opportunity">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-title" >
              <h4 class="modal-title" style="color: white"><b>Update Your opportunity</b></h4>
            </div>
            <div class="modal-body" style="color: white">
              <form class="form-horizontal" method="POST" action="opportunity_edit.php" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="opportunity" class="col-sm-3 control-label">opportunity</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="opportunity" name="opportunity" value="<?php echo $user['opportunity']; ?>">
                    </div>

                    <!-- update opportunity2 -->
                    <label for="opportunity" class="col-sm-3 control-label">opportunity2</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="opportunity2" name="opportunity2" value="<?php echo $user['opportunity2']; ?>">
                    </div>

                   <!-- update opportunity3 -->

                    <label for="opportunity" class="col-sm-3 control-label">opportunity3</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="opportunity3" name="opportunity3" value="<?php echo $user['opportunity3']; ?>">
                    </div>
                  
                  <!-- update opportunity4 -->
                    <label for="opportunity" class="col-sm-3 control-label">opportunity4</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="opportunity4" name="opportunity4" value="<?php echo $user['opportunity4']; ?>">
                    </div>

                    <!-- update opportunity5 -->
            
                    <label for="opportunity" class="col-sm-3 control-label">opportunity5</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="opportunity5" name="opportunity5" value="<?php echo $user['opportunity5']; ?>">
                    </div>

                    <!-- update opportunity6 -->

                    <label for="opportunity" class="col-sm-3 control-label">opportunity6</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="opportunity6" name="opportunity6" value="<?php echo $user['opportunity6']; ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" id="quickview" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" id="quickview" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>



<!-- threads edit -->
<div class="modal fade" id="threads">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-title" >
              <h4 class="modal-title" style="color: white"><b>Update Your threads</b></h4>
            </div>
            <div class="modal-body" style="color: white">
              <form class="form-horizontal" method="POST" action="threads_edit.php" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="threads" class="col-sm-3 control-label">threads</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="threads" name="threads" value="<?php echo $user['threads']; ?>">
                    </div>

                    <!-- update threads2 -->
                    <label for="threads" class="col-sm-3 control-label">threads2</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="threads2" name="threads2" value="<?php echo $user['threads2']; ?>">
                    </div>

                   <!-- update threads3 -->

                    <label for="threads" class="col-sm-3 control-label">threads3</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="threads3" name="threads3" value="<?php echo $user['threads3']; ?>">
                    </div>
                  
                  <!-- update threads4 -->
                    <label for="threads" class="col-sm-3 control-label">threads4</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="threads4" name="threads4" value="<?php echo $user['threads4']; ?>">
                    </div>

                    <!-- update threads5 -->
            
                    <label for="threads" class="col-sm-3 control-label">threads5</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="threads5" name="threads5" value="<?php echo $user['threads5']; ?>">
                    </div>

                    <!-- update threads6 -->

                    <label for="threads" class="col-sm-3 control-label">threads6</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="threads6" name="threads6" value="<?php echo $user['threads6']; ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" id="quickview" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" id="quickview" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

