<div class="container">
    <h1 class="rsvp-title">RSVP</h1>
    <p class="rsvp-about">Please RSVP by May 25th</p>
    <form method="post" action="/rsvp">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="guestNames">Guest Name(s)</label>
                    <input type="text" class="form-control" id="guestNames"></input>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="willAttend">Will You Be Attending?</label>
                    <select class="form-control" id="willAttend">
                        <option value="">Select ...</option>
                        <option value="1">Yes of course!</option>
                        <option value="0">No I am unable to attend.</option>   
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="needTrans">Will You Need Transportation?</label>
                    <select class="form-control" id="needTrans">
                        <option value="">Select ...</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>   
                    </select>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="dietInfo">Dietary Restrictions</label>
                    <input type="text" class="form-control" id="dietInfo"></input>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-default" value="Submit">
    </form>
</div>
