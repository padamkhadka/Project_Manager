schoolReload();
function schoolReload() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    // AJAX request
    $.ajax({
        url: "/admin/school-get",
        method: 'GET',
        success: function (response) {

            console.log(response);
            $(".activity-report-table").html('');
            response.schoolDetails.forEach(element => {
                $(".activity-report-table").append(`
                     <tr>
                     <td class='school_id'>${element.id}</td>
                     <td class='school_name'>${element.school_name}</td>
                     <td class='contact_number'>${element.contact_number}</td>
                     <td class='address'>${element.Address}</td>
                     <td class='url'><a href='${element.url}'>${element.school_name}</a></td>
                     <td >
                     <span school_id='${element.id}' class="material-symbols-outlined deleteSchool p-2" style='cursor:pointer;' >delete</span>
                     <span school_id='${element.id}' class="material-symbols-outlined updateSchool p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style='cursor:pointer;' >edit</span>


                     </td>
                  </tr>

                    `);
            });
        },
        error: function (xhr, status, error) {
            console.error('AJAX error:', error);
        }
    });
}

// school name delete
$(document).ready(function () {
    $(".deleteSchool").click(function () {
        var schoolid = $(this).attr('school_id');

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        $.ajax({
            url: "/admin/school-delete",
            method: 'POST',
            data: {
                id: schoolid,

            },

            success: function (response) {
                if (response == 'delete') {
                    Swal.fire({
                        title: 'delete success',
                        text: "Thank you",
                        icon: "success"
                    });
                    $(".close-btn").click();

                    schoolReload();
                } else {
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


// school name edit
$(document).ready(function () {
    $(".updateSchool").click(function () {
        var schoolEdit = $(this).attr('school_id');
        //alert(schoolEdit);
        var school_id = $(this).parents().find('.school_id').html();
        console.log(school_id);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        // console.log(schoolEdit);
        // return false
        $.ajax({
            url: "/admin/school-update",
            method: 'GET',
            data: {
                id: schoolEdit
            },
            success: function (response) {
                if (response === 'update') {
                    console.log(response);
                    schoolReload();
                } else {
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
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="#">Why do I have this issue?</a>'
                });
            }
        });





    });

});
