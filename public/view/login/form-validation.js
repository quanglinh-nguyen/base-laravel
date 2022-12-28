jQuery.validator.addMethod(
    "password",
    function (value, element) {
        let format = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,20}$/gm;
        console.log(value);
        if(format.test(value)){
            return true;
        } else {
            return false;
        }
    },
"Your password must be between 8 - 20 characters long, should contain at least 1 Uppercase, 1 Lowercase, 1 Numeric!"
);
$("#login").validate({
    rules: {
        email: {
            required: true,
            email:true,
        },
        password: {
            required: true,
            password: true
        },
    },
});


