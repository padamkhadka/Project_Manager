// Get Page Activity
$(document).ready(function(){
    var date = NepaliFunctions.GetCurrentBsDate();
    var today = date.year+'-'+date.month+'-'+date.day;
    $(".activity_start_date, .activity_end_date").val(today);

    $("#search-btn-button").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

         var startDate = $(".activity_start_date").val();
         var endtDate = $(".activity_end_date").val();

         var orderBy = $("#select-spend-button").val();
         var visitorName = $("#visitor-name-button").val();
         var select_school = $("#select-school-button").val();

          $.ajax({
              url: select_school,
              method: "GET",
              data: {
                startDate:startDate,
                endDate:endtDate,
                orderBy:orderBy,
                visitorName:visitorName,
              },
              success: function (response) {
      
                  console.log(response);

                  $(".button-report-table").html('');
                  var index = 1;
                  response.data.forEach(function(data){
                   var sn = index++;

                    // Calculate ago time using moment.js
                    var lastVisitTime = moment(data.last_time, 'h:mm:ss A');
                    var ago = lastVisitTime.fromNow();
 
                   $(".button-report-table").append(`
                        <tr>
                            <th>`+sn+`</th>
                            <td>`+data.name+`</td>
                            <td>`+data.button+`</td>
                            <td>`+data.clicking+`</td>
                            <td>`+data.page+`</td>
                            <td>`+data.last_time+`</td>
                            <td>`+ago+`</td>
                            <td>`+data.date+`</td>
                            <td>`+data.device+`</td>
                            <td>`+data.browser+`</td>
                            <td>`+data.address+`</td>
                        </tr>
                   `);

                  });

                //   $("#visitor-name-button").html(`<option>A-Z</option>`);
                if ($("#visitor-name-button option").length === 1) {
                    response.VisitorName.forEach(function(data, index){
                        $("#visitor-name-button").append(`
                            <option>`+ response.VisitorName[index]+`</option>
                        `);
                    });
                }

              },
              error: function (xhr, status, error) 
              {
                  console.log(xhr.responseText);
              },
      
          });

    });   
});

// Onchange Click 
$(document).ready(function(){
    $("#search-btn-button").click();
    $("#select-spend-button, #visitor-name-button, #select-school-button").on("change", function(){
        $("#search-btn-button").click();
    });

    $("#select-school-button").on("change", function(){
        $("#visitor-name-button").html(`
          <option>A-Z</option>
        `);
    });
});
 

