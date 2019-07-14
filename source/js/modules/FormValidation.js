class FormValidation {
    constructor() {
        this.form = $("#register-form");
        this.initValidation();
    }

    initValidation() {
        $.validator.setDefaults({
            ignore: [],
            highlight: function(element) {
                $(element).removeClass('is-valid').addClass('is-invalid');
                if ($(element).prop('type') === 'radio' || $(element).prop('type') === 'checkbox') {
                    $(element).parent().addClass('error-border').css('padding', '1rem');
                }
            },
            unhighlight: function(element) {
                $(element)
                .removeClass('is-invalid')
                .addClass('is-valid');
                if ($(element).prop('type') === 'radio' || $(element).prop('type') === 'checkbox') {
                    $(element).parent().removeClass('error-border').css('padding', '0rem');
                }
            },
            errorPlacement: function (error, element) {
                if (element.prop('type') === 'radio') {
                    error.appendTo(element.siblings('.custom-radio__label-container'));
                } else if (element.prop('type') === 'checkbox') {
                    error.appendTo(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });
        $('.form__dropdown').change(function () {
            $(this).valid();
        });
        this.form.validate({
            errorElement: "p",
            rules: {
                email: {
                    required: true,
                    email: true
                },
                firstName: {
                    required: true,
                    nowhitespace: true,
                    lettersonly: true
                },
                secondName: {
                    required: true,
                    nowhitespace: true,
                    lettersonly: true
                },
                state: {
                    required: true
                },
                zipcode: {
                    required: true,
                    zipcodeUS: true
                },
                terms: {
                    required: true
                },
                likesMountains: {
                    required: true
                },
                share: {
                    required: function() {
                        return $('.custom-radio__real-radio--1').is(':checked');
                    }
                }
            },
            messages: {
                email: {
                    required: 'Please enter an email address.',
                    email: 'Please enter a <em>valid</em> email address.'
                }
            }
        });
    }
}

export default FormValidation;