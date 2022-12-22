$().ready(function() {
    $("#create-update-acronyme-banking").validate({
        rules: {
            acronym: {
                required: true,
            },
            full_name: {
                required: true,
            },
        },
    });
})

