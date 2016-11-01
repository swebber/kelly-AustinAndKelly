$(document).ready(function () {
    $('#rsvpForm').bootstrapValidator({
        xfeedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            guestNames: {
                validators: {
                    notEmpty: {
                        message: 'Guest names are required'
                    }
                }
            },
            willAttend: {
                validators: {
                    notEmpty: {
                        message: 'Let us know if you will be attending'
                    }
                }
            },
            needTrans: {
                validators: {
                    callback: {
                        message: 'Do you need transportation from the hotel',
                        callback: function(value, validator) {
                            return ($('#willAttend').val() !== '1') || (value !== '');
                        }
                    }
                }
            }
        }
    });
    
    $('#willAttend').change(function () {
        $('#rsvpForm').data('bootstrapValidator').resetField('needTrans');
    });
});
