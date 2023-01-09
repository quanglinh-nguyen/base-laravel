jQuery.validator.addMethod(
    "checkForSpecialChar",
    function (value, element) {
        let format = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
        if(format.test(value)){
            return false;
        } else {
            return true;
        }
    },
"This field is not contain special characters"
);
$("#create-update-customers").validate({
    rules: {
        industry: {
            required: true,
            checkForSpecialChar: true
        },
        company_email: {
            email: true,
        },
        business_email: {
            email: true,
        },
        personal_email: {
            email: true,
        },
        outdate_business_email: {
            email: true,
        },
        outdate_personal_email: {
            email: true,
        }
    },
});


