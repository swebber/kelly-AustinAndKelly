<?php
require_once('util.php');
?>

<?php if (!$isPostBack) { ?>
    <div class="container">
        <h1 class="rsvp-title">RSVP</h1>
        <p class="rsvp-about">Please RSVP by May 25th</p>
        <form id="rsvpForm" method="post" action="/rsvp">
            <div class="row">
                <div class="col-sm-1 col-md-2 hidden-xs"></div>
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="form-group">
                        <label for="guestNames">Guest Name(s)</label>
                        <input type="text" class="form-control" id="guestNames" name="guestNames"></input>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="form-group">
                        <label for="willAttend">Will You Be Attending?</label>
                        <select class="form-control" id="willAttend" name="willAttend">
                            <option value="">Select ...</option>
                            <option value="1">Yes of course!</option>
                            <option value="0">No I am unable to attend.</option>   
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 col-md-2 hidden-xs"></div>
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="form-group">
                        <label for="needTrans">Will You Need Transportation?</label>
                        <select class="form-control" id="needTrans" name="needTrans">
                            <option value="">Select ...</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>   
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="form-group">
                        <label for="dietInfo">Dietary Restrictions</label>
                        <input type="text" class="form-control" id="dietInfo" name="dietInfo"></input>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 col-md-2 hidden-xs"></div>
                <div class="col-xs-12 col-sm-10">
                    <div id="messages"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 col-md-2 hidden-xs"></div>
                <div class="col-xs-12 col-sm-10">
                    <input type="submit" class="btn btn-default" value="Submit">
                </div>
            </div>
        </form>
    </div>
<?php } else { ?>
    <div class="container">
        <h1>Thank you for your RSVP.</h1>
    </div>
<?php } ?>

<?php
Util::addLateLoadScript('/assets/js/rsvp.js');
?>
