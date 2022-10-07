<!DOCTYPE html>
<html lang="en">

<?php
include "head.php"
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
include "topbar.php"
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <form class="form-inline">
                                            <div class="form-group mb-2">
                                                PEA
                                            </div>
                                            <div class="form-group mx-sm-3 mb-2">
                                                <select class="custom-select my-1 mr-sm-3" id="selectPea">
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page Heading -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                1P2W (Direct)</div>
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Meter Tester</th>
                                                        <th scope="col">Meter Error</th>
                                                        <th scope="col">%Error</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="count1"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countErr1"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countPreErr1">
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../img/meter1.png" class="rounded" width="80" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-secondary text-uppercase mb-1">
                                                3P4W (Direct)</div>
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Meter Tester</th>
                                                        <th scope="col">Meter Error</th>
                                                        <th scope="col">%Error</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="count2"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countErr2"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countPreErr2">
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../img/meter2.png" class="rounded" width="80" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                                1P2W With CT</div>
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Meter Tester</th>
                                                        <th scope="col">Meter Error</th>
                                                        <th scope="col">%Error</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="count3"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countErr3"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countPreErr3">
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../img/meter3.png" class="rounded" width="80" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-danger text-uppercase mb-1">
                                                Smart meter 3P4W with CT</div>
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Meter Tester</th>
                                                        <th scope="col">Meter Error</th>
                                                        <th scope="col">%Error</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="count4"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countErr4"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countPreErr4">
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../img/meter4.png" class="rounded" width="80" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                CT Test</div>
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Meter Tester</th>
                                                        <th scope="col">Meter Error</th>
                                                        <th scope="col">%Error</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="count5"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countErr5"></div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                                id="countPreErr5">
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../img/meter5.png" class="rounded" width="80" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <!-- <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">
                                                6</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="count6"></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../img/meter6.png" class="rounded" width="80" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-danger text-uppercase mb-1">
                                                Meter detail ot found </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="count7"></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../img/meter4.png" class="rounded" width="80" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Meter Error</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area" id="chart1">
                                        <canvas id="myPieChartMeterError1"></canvas>
                                    </div>
                                    <div class="chart-area" id="chart2">
                                        <canvas id="myPieChartMeterError2"></canvas>
                                    </div>
                                    <hr>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> 1P2W (DIRECT)
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-secondary"></i> 3P4W (DIRECT)
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> 1P2W WITH CT
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> SMART METER 3P4W WITH CT
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i> CT TEST
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Use PMAC</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="pmacuseChart"></canvas>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    </div>

    <?php
include "foot.php"
?>

</body>

</html>



<script>
$(document).ready(function() {

    let dropdownPea = $("#selectPea");
    dropdownPea.empty();
    dropdownPea.append(
        '<option value="Select" selected="true">Select</option>'
    );
    dropdownPea.prop("selectedIndex", 0);
    const urlPea = "http://localhost:3001/appMapping/countpeaname";

    $.getJSON(urlPea, function(data) {
        $.each(data, function(key, entry) {

            if (!entry._id.mruname) {

            } else {
                dropdownPea.append(
                    $("<option></option>")
                    .attr("value", entry._id.mruname)
                    .text(entry._id.Peaname)
                );
            }
        });
    });

    var dataPea = $('#selectPea').val();

    $.ajax({
        type: "POST",
        url: "http://localhost:3001/appMapping/count",
        contentType: "application/json",
        dataType: "json",
        data: JSON.stringify({
            mruname: dataPea,
        }),
        success: function(result) {
            // window.location.href = "../../ttt/pages/customer_request_index.php";
            $('#count1').text(result[0].A);
            $('#count2').text(result[0].B);
            $('#count3').text(result[0].C);
            $('#count4').text(result[0].D);
            $('#count5').text(result[0].E);
            $('#count6').text(result[0].F);
            $('#count7').text(result[0].G);
        }
    });

    setTimeout(function() {

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror1",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: dataPea,
            }),
            success: function(result1) {
                // window.location.href = "../../ttt/pages/customer_request_index.php";
                var Err1 = result1[0].A + result1[0].C
                $('#countErr1').text(Err1);
                var ErrPer1 = result1[0].A + result1[0].B + result1[0].C
                var ErrAws = (Err1 / ErrPer1) * 100 || 0;
                $('#countPreErr1').text(parseFloat(ErrAws).toFixed(2));
            }
        })
    }, 1000);


    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror2",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: dataPea,
            }),
            success: function(result2) {
                var Err2 = result2[0].A + result2[0].C
                $('#countErr2').text(Err2);
                var ErrPer2 = result2[0].A + result2[0].B + result2[0].C
                var ErrAws2 = ((Err2 / ErrPer2) * 100) || 0;
                $('#countPreErr2').text(parseFloat(ErrAws2).toFixed(2));
            }
        });

    }, 1000);

    setTimeout(function() {

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror3",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: dataPea,
            }),
            success: function(result) {
                var Err3 = result[0].A + result[0].C
                $('#countErr3').text(Err3);
                var ErrPer3 = result[0].A + result[0].B + result[0].C
                var ErrAws3 = ((Err3 / ErrPer3) * 100) || 0;
                $('#countPreErr3').text(parseFloat(ErrAws3).toFixed(2));
            }
        });
    }, 1000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror4",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: dataPea,
            }),
            success: function(result) {
                var Err4 = result[0].A + result[0].C
                $('#countErr4').text(Err4);
                var ErrPer4 = result[0].A + result[0].B + result[0].C
                var ErrAws4 = ((Err4 / ErrPer4) * 100) || 0;
                $('#countPreErr4').text(parseFloat(ErrAws4).toFixed(2));
            }
        });
    }, 1000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror5",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: dataPea,
            }),
            success: function(result) {
                var Err5 = result[0].A + result[0].C
                $('#countErr5').text(Err5);
                var ErrPer5 = result[0].A + result[0].B + result[0].C
                var ErrAws5 = ((Err5 / ErrPer5) * 100) || 0;
                $('#countPreErr5').text(parseFloat(ErrAws5).toFixed(2));
            }
        });
    }, 1000);

    setTimeout(function() {
        var Error1 = $("#countErr1").text();
        var Error2 = $("#countErr2").text();
        var Error3 = $("#countErr3").text();
        var Error4 = $("#countErr4").text();
        var Error5 = $("#countErr5").text();

        $('#chart2').hide();

        // Set new default font family and font color to mimic Bootstrap's default styling
        (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = "#858796";

        // Pie Chart Example
        var ctx = document.getElementById("myPieChartMeterError1");
        var myPieChart = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: ["1P2W (DIRECT)", "3P4W (DIRECT)", "1P2W WITH CT",
                    "SMART METER 3P4W WITH CT",
                    "CT TEST"
                ],
                datasets: [{
                    data: [Error1, Error2, Error3, Error4, Error5],
                    backgroundColor: ["#4e73df", "#858796", "#1cc88a",
                        "#e74a3b", "#f6c23e"
                    ],
                    hoverBackgroundColor: ["#4e73df", "#858796", "#1cc88a",
                        "#e74a3b",
                        "#f6c23e"
                    ],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }, ],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false,
                },
                cutoutPercentage: 80,
            },
        });
    }, 2000);

    setTimeout(function() {

        $.ajax({
            type: "GET",
            url: "http://localhost:3001/appMapping/countpeause",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: dataPea,
            }),
            success: function(result) {

                var peaname = [];
                var peacount = [];

                $.each(result, function(key, value) {
                    peaname.push(value._id);
                    peacount.push(value.count);
                });
                Chart.defaults.global.defaultFontFamily = 'Nunito',
                    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                Chart.defaults.global.defaultFontColor = '#858796';

                function number_format(number, decimals, dec_point, thousands_sep) {
                    // *     example: number_format(1234.56, 2, ',', ' ');
                    // *     return: '1 234,56'
                    number = (number + '').replace(',', '').replace(' ', '');
                    var n = !isFinite(+number) ? 0 : +number,
                        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                        s = '',
                        toFixedFix = function(n, prec) {
                            var k = Math.pow(10, prec);
                            return '' + Math.round(n * k) / k;
                        };
                    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                    if (s[0].length > 3) {
                        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                    }
                    if ((s[1] || '').length < prec) {
                        s[1] = s[1] || '';
                        s[1] += new Array(prec - s[1].length + 1).join('0');
                    }
                    return s.join(dec);
                }

                // Bar Chart Example
                var ctx = document.getElementById("pmacuseChart");
                var myBarChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: peaname,
                        datasets: [{
                            label: "Use",
                            backgroundColor: "#4e73df",
                            hoverBackgroundColor: "#2e59d9",
                            borderColor: "#4e73df",
                            data: peacount,
                        }],
                    },
                    options: {
                        maintainAspectRatio: false,
                        layout: {
                            padding: {
                                left: 10,
                                right: 25,
                                top: 25,
                                bottom: 0
                            }
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    maxTicksLimit: 6
                                },
                                maxBarThickness: 25,
                            }],
                            yAxes: [{
                                ticks: {
                                    min: 0,
                                    padding: 10,
                                    // Include a dollar sign in the ticks
                                    callback: function(value, index,
                                        values) {
                                        return number_format(value);
                                    }
                                },
                                gridLines: {
                                    color: "rgb(234, 236, 244)",
                                    zeroLineColor: "rgb(234, 236, 244)",
                                    drawBorder: false,
                                    borderDash: [2],
                                    zeroLineBorderDash: [2]
                                }
                            }],
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            titleMarginBottom: 10,
                            titleFontColor: '#6e707e',
                            titleFontSize: 14,
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: '#dddfeb',
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                            callbacks: {
                                label: function(tooltipItem, chart) {
                                    var datasetLabel = chart.datasets[
                                            tooltipItem.datasetIndex]
                                        .label || '';
                                    return datasetLabel + ': ' + number_format(
                                        tooltipItem.yLabel);
                                }
                            }
                        },
                    }
                });
            }
        });


    }, 2000);

    $('#selectPea').on('change', function() {

        var selectPea = $(this).val();

        $('#chart1').hide();
        $('#chart2').show();

        $('myPieChartMeterError1').hide();

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/count",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: selectPea,
            }),
            success: function(result) {
                $('#count1').text(result[0].A);
                $('#count2').text(result[0].B);
                $('#count3').text(result[0].C);
                $('#count4').text(result[0].D);
                $('#count5').text(result[0].E);
                $('#count6').text(result[0].F);
                $('#count7').text(result[0].G);
            }
        });

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror1",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: selectPea,
            }),
            success: function(result1) {
                var Err1 = result1[0].A + result1[0].C
                $('#countErr1').text(Err1);
                var ErrPer1 = result1[0].A + result1[0].B + result1[0].C
                var ErrAws2 = ((Err1 / ErrPer1) * 100) || 0;
                $('#countPreErr1').text(parseFloat(ErrAws2).toFixed(2));
            }
        });

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror2",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: selectPea,
            }),
            success: function(result2) {
                // console.log(result2);
                var Err2 = result2[0].A + result2[0].C
                $('#countErr2').text(Err2);
                var ErrPer2 = result2[0].A + result2[0].B + result2[0].C
                var ErrAws2 = ((Err2 / ErrPer2) * 100) || 0;
                $('#countPreErr2').text(parseFloat(ErrAws2).toFixed(2));
            }
        });

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror3",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: selectPea,
            }),
            success: function(result) {
                var Err3 = result[0].A + result[0].C
                $('#countErr3').text(Err3);
                var ErrPer3 = result[0].A + result[0].B + result[0].C
                var ErrAws3 = ((Err3 / ErrPer3) * 100) || 0;
                $('#countPreErr3').text(parseFloat(ErrAws3).toFixed(2));
            }
        });

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror4",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: selectPea,
            }),
            success: function(result) {
                var Err4 = result[0].A + result[0].C
                $('#countErr4').text(Err4);
                var ErrPer4 = result[0].A + result[0].B + result[0].C
                var ErrAws4 = ((Err4 / ErrPer4) * 100) || 0;
                $('#countPreErr4').text(parseFloat(ErrAws4).toFixed(2));
            }
        });

        $.ajax({
            type: "POST",
            url: "http://localhost:3001/appMapping/countmetererror5",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                mruname: selectPea,
            }),
            success: function(result) {
                var Err5 = result[0].A + result[0].C
                $('#countErr5').text(Err5);
                var ErrPer5 = result[0].A + result[0].B + result[0].C
                var ErrAws5 = ((Err5 / ErrPer5) * 100) || 0;
                $('#countPreErr5').text(parseFloat(ErrAws5).toFixed(2));
            }
        });


        setTimeout(function() {


            var Error1 = $("#countErr1").text();
            var Error2 = $("#countErr2").text();
            var Error3 = $("#countErr3").text();
            var Error4 = $("#countErr4").text();
            var Error5 = $("#countErr5").text();

            // Set new default font family and font color to mimic Bootstrap's default styling
            (Chart.defaults.global.defaultFontFamily = "Nunito"),
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = "#858796";

            // Pie Chart Example
            var ctx = document.getElementById("myPieChartMeterError2");
            var myPieChart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: ["1P2W (DIRECT)", "3P4W (DIRECT)", "1P2W WITH CT",
                        "SMART METER 3P4W WITH CT",
                        "CT TEST"
                    ],
                    datasets: [{
                        data: [Error1, Error2, Error3, Error4, Error5],
                        backgroundColor: ["#4e73df", "#858796", "#1cc88a",
                            "#e74a3b", "#f6c23e"
                        ],
                        hoverBackgroundColor: ["#4e73df", "#858796", "#1cc88a",
                            "#e74a3b",
                            "#f6c23e"
                        ],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }, ],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: "#dddfeb",
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false,
                    },
                    cutoutPercentage: 80,
                },
            });
        }, 2000);
    });
})
</script>