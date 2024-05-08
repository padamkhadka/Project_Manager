
$(document).ready(function () {



    var date = NepaliFunctions.GetCurrentBsDate();
    var today = date.year + '-' + date.month + '-' + date.day;
    $(".activity_start_date, .activity_end_date").val(today);

 


    $("#search-btn").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var startDate = $(".activity_start_date").val();
        var endDate = $(".activity_end_date").val();
        var orderBy = $("#select-spend").val();
        var visitorName = $("#visitor-name").val();
        var select_school = $("#select-school").val();

        $.ajax({
            url: select_school,
            method: "GET",
            data: {
                startDate: startDate,
                endDate: endDate,
                orderBy: orderBy,
                visitorName: visitorName,
            },
            success: function (response) {
                console.log(response);

                $(".activity-report-table").html('');
                response.data.forEach(function (data, index) {
                    var sn = index + 1;

                    // Calculate ago time using moment.js
                    var lastVisitTime = moment(data.last_time, 'h:mm:ss A');
                    var ago = lastVisitTime.fromNow();

                    // Format the waiting time duration
                    var formattedDuration = moment.utc(moment.duration(data.wating_second * 1000).asMilliseconds()).format("HH:mm:ss");

                    $(".activity-report-table").append(`
                        <tr>
                            <th>${sn}</th>
                            <td>${data.name}</td>
                            <td>${data.page}</td>
                            <td>${data.load_count}</td>
                            <td>${formattedDuration}</td>
                            <td>${data.date}</td>
                            <td>${data.device}</td>
                            <td>${data.browser}</td>
                            <td>${data.last_time}</td>
                            <td>${ago}</td>
                            <td>${data.address}</td>
                        </tr>
                    `);
                });

                // Populate visitor names if not already populated
                if ($("#visitor-name option").length === 1) 
                {
                    response.VisitorName.forEach(function (data, index) {
                        $("#visitor-name").append(`
                            <option>${response.VisitorName[index]}</option>
                        `);
                    });
                }

            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            },

        });

    });
});


// Onchange Click 
$(document).ready(function(){
    $("#search-btn").click();
    $("#select-spend, #visitor-name, #select-school").on("change", function(){
        $("#search-btn").click();
    });

    $("#select-school").on("change", function(){
        $("#visitor-name").html(`
          <option>A-Z</option>
        `);
    });
});
 

