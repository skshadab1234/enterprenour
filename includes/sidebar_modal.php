<style type="text/css">
		.modal.left .modal-dialog,
	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 320px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}
	
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}
	/*Right*/
	.modal.right.fade .modal-dialog {
		right: -320px;

		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		text-align: left;
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}

	.mendiv:hover{
background-color: rgba(0,0,0, 0.9);
margin-left: 10px;
transition: 0.9s ease all;
		}
		.hoverprofile{
			opacity: 0.5;
		}

		.hoverprofile:hover{
			opacity: 1;
		}

.box-header {
	color:White;
	margin-left:80px;
	margin-top:-10px;
}
	</style>

<!-- user profile modal-dialog -->

<!-- Modal -->
	<div class="modal right fade" id="profile" >
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div style="margin: 20px">
					<button type="button" class="pull-left" data-dismiss="modal" aria-label="Close" style="color: grey;background: transparent;border: none;"><span aria-hidden="true"><i class="fa fa-arrow-circle-left" style="font-size: 20px;opacity: 2;color: white;margin-top: 7px"></i></span></button>
					<span  style="margin-left: 20px;font-size: 25px;font-weight: 700;letter-spacing: 3px;width: 100%;" ><a href="profile.php" style="color: white;text-transform: uppercase;">profile</a></span>
				</div>
				<hr style="color: grey">
				<div class="modal-body">
				
					<div class="profile-card__img pull-left" style="margin-top: 30px;margin-left: 20px;border-radius: 50%;width: 50px;height: 50px">
<img src="<?php echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg'; ?>" width="100%" height="300px">
</div>


<div class="box-header">
<h4  >&nbsp;<b><?php echo $user['firstname'].' '.$user['lastname']; ?></b></h4>
</div>
<hr style="margin-top: -10px;opacity: 0.5">
<div style="margin-bottom: 20px;margin-left: 20px;font-size: 20px"><i class="fa fa-user-o" style="color: orange;font-size: 14px"></i><span style="color: white;font-size: 14px;letter-spacing: 1px;text-transform: uppercase;">&nbsp;&nbsp;User Profile </span>&nbsp;<a href="profile.php" class="hoverprofile"><i class="fa fa-external-link" style="color: white;font-size: 16px"></i></a></div>
<div style="margin-bottom: 20px;margin-left: 20px;font-size: 20px"><i class="fa fa-sign-out" style="color: orange;font-size: 14px"></i><span style="color: white;font-size: 14px;letter-spacing: 1px;text-transform: uppercase;">&nbsp;&nbsp;<a href="logout.php" class="hoverprofile" style="color: white">Logout </span>&nbsp;</a></div>

<a href="#edit"  class="btn btn-success btn-flat btn-sm pull-right" id="quickview" data-toggle="modal"><i class="fa fa-edit" style="font-size: 12px;line-height: 40px"></i> Edit My Profile</a>


				</div>
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
