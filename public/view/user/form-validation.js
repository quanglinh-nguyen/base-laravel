$("#createUser").validate({
    rules: {
        name: {
            required: true, 
        },
        email: {
            required: true,
            email:true,
        },
        phone_number: {
            required:true,
        },
        role_id: {
            required:true,
        }
    },
});


