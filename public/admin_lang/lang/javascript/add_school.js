$(document).ready(function () {
    $("#AddSchoolForm").submit(function (event) {

        event.preventDefault();

        // Retrieve form data
        var school_name = $("#SchoolName").val();
        var school_contact = $("#SchoolContact").val();
        var school_address = $("#SchoolAddress").val();
        var school_url = $("#SchoolUrl").val();
        

        // AJAX setup
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        // AJAX request
        $.ajax({
            url: "/admin/school-name",
            method: 'POST',
            data: {
                school_name: school_name,
                school_contact: school_contact,
                school_address: school_address,
                school_url: school_url
            },

            success: function (response) {
                
                if(response=='save'){
                    Swal.fire({
                        title: school_name,
                        text: "Thank you",
                        icon: "success"
                    });
                    $(".close-btn").click();
                    schoolReload();
                }else{
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer: '<a href="#">Why do I have this issue?</a>'
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', error);
            }
        });
    });
});