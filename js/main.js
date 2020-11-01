$(document).ready(function () {


    // Data-table
    //$('#myTable').DataTable();

    // CoronaAPIs
    $.ajax({
        url: "https://api.covid19api.com/summary",
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $('#first').append(data.Global.NewConfirmed);
            $('#second').append(data.Global.TotalConfirmed);
            $('#third').append(data.Global.NewDeaths);
            $('#fourth').append(data.Global.TotalDeaths);
            $('#fifth').append(data.Global.NewRecovered);
            $('#sixth').append(data.Global.TotalRecovered);
            var sno = 1;
            $.each(data.Countries, function (key, value) {
                $('#country-data').append("<tr>" +
                    "<td>" + sno + "</td>" +
                    "<td>" + value.Country + "</td>" +
                    "<td>" + value.NewConfirmed + "</td>" +
                    "<td>" + value.TotalConfirmed + "</td>" +
                    "<td>" + value.NewDeaths + "</td>" +
                    "<td>" + value.TotalDeaths + "</td>" +
                    "<td>" + value.NewRecovered + "</td>" +
                    "<td>" + value.TotalRecovered + "</td>" +
                    "</tr>");
                sno++;
            });
        }
    });



});