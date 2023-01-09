$("#createUser").validate({
    rules: {
        name: {
            required: true, 
        },
        email: {
            required: true,
            email:true,
        },
        phone: {
            required:true,
        },
        role_id: {
            required:true,
        }
    },
});
$("#editUser").validate({
    rules: {
        name: {
            required: true, 
        },
        email: {
            required: true,
            email:true,
        },
        phone: {
            required:true,
        },
        role_id: {
            required:true,
        }
    },
});



