<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Airmail</h3> 
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo SITE_URL?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo SITE_URL ?>/index.php/Mail">Airmail</a></li>
            <li class="breadcrumb-item active">Reply</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-content">
                        <!-- Left sidebar -->
                        <div class="inbox-leftbar">
                            <a class="btn btn-danger btn-block waves-effect waves-light" href="<?php echo SITE_URL ?>/index.php/Mail">Inbox</a>

                            <?php Template::Show('mail/mail_menu.php'); ?>
                        </div>
                        <!-- End Left sidebar -->
                        
                        <div class="inbox-rightbar">
                            <div class="mt-4">
                                <?php foreach($mail as $data) ?>
                                <form action="<?php echo url('/Mail');?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="who_from" value="<?php echo Auth::$userinfo->pilotid ?>" />
                                    <input type="hidden" name="who_to" value="<?php echo $data->who_from; ?>" />
                                    <input type="hidden" name="oldmessage" value="<?php echo ' '.$data->thread_id.'<br /><br />'; ?>" />
                                    
                                    <?php $user = PilotData::GetPilotData($data->who_from); $pilot = PilotData::GetPilotCode($user->code, $data->who_from); ?>
                                    
                                    <div class="form-group">
                                        <label class="control-label">You are replying to</label>
                                        <input type="text" class="form-control" value="<?php echo $pilot; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" value="RE: <?php echo $data->subject;?>" disabled>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Message</label>
                                        <textarea name="message" rows="8" cols="80" class="form-control" style="height:100px" disabled><?php echo $data->message; ?></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Reply</label>
                                        <textarea name="message" rows="8" cols="80" class="form-control" style="height:300px"></textarea>
                                    </div>

                                    <div class="form-group m-b-0">
                                        <div class="text-right">
                                            <input type="hidden" name="who_from" value="<?php echo Auth::$userinfo->pilotid ?>" />
                                            <input type="hidden" name="action" value="send" />
                                            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Send">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->