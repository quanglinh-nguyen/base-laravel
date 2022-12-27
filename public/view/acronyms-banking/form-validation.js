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

$("#create-update-acronyme-banking").validate({
    rules: {
        acronym: {
            required: true,
            checkForSpecialChar: true
        },
        full_name: {
            required: true,
            checkForSpecialChar: true
        },
    },
});


