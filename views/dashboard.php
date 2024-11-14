<!DOCTYPE html>
<html lang="en">

<?php
include "head.php"
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
include "sidebar.php"
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
include "topbarlogout.php"
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
                                                PEA : &nbsp;
                                            </div>
                                            <div class="form-group mb-2" id="BaName">
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
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="click_show btn btn-primary" value="1">Show
                                                data</button>
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
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="click_show btn btn-secondary" value="2">Show
                                                data</button>
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
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="click_show btn btn-success" value="3">Show
                                                data</button>
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
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="click_show btn btn-danger" value="4">Show
                                                data</button>
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
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="click_show btn btn-warning" value="5">Show
                                                data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <input type="hidden" id="currentBaName">
                <input type="hidden" id="mruname">
            </div>
            <!-- End of Main Content -->
            <div class="modal fade bd-example-modal-lg" id="modelshow" tabindex="-1" role="dialog"
                aria-labelledby="modelshow" aria-hidden="true">
                <div class="modal-dialog" style="max-width: 1350px!important;" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <table id="dataTable" class="table table-bordered mt-5" style="width:95%">
                                    <thead>
                                        <tr id="trtable">
                                            <!-- <th class="text-center">CA</th>
                                            <th class="text-center">PEA NO.</th>
                                            <th class="text-center">NAME</th>
                                            <th class="text-center">PER_ERR</th>
                                            <th class="text-center">RESULT_MT</th>
                                            <th class="text-center">PIC_MT</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Action</th> -->
                                        </tr>
                                    </thead>
                                </table>
                                <table id="dataTable2" class="table table-bordered mt-5" style="width:95%">
                                    <thead>
                                        <tr id="trtable2">
                                            <!-- <th class="text-center">CA</th>
                                            <th class="text-center">PEA NO.</th>
                                            <th class="text-center">NAME</th>
                                            <th class="text-center">PER_ERR</th>
                                            <th class="text-center">RESULT_MT</th>
                                            <th class="text-center">PIC_MT</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Action</th> -->
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

    const currentBaName = localStorage.getItem('BaName');

    $('#BaName').text(currentBaName);

    $('#currentBaName').val(currentBaName);

    if (!currentBaName) {
        document.location.href = './dashboardguest.php';
    } else {
        $.ajax({
            type: "POST",
            url: "http://103.253.73.187:8080/peatomruname/",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                peaname: currentBaName,
            }),
            success: function(result) {
                const mruname = result.data;
                $('#mruname').val(mruname);
                $.ajax({
                    type: "POST",
                    url: "http://103.253.73.187:8080/appMapping/count",
                    contentType: "application/json",
                    dataType: "json",
                    data: JSON.stringify({
                        mruname: mruname,
                    }),
                    success: function(result) {

                        $('#count1').text(result[0].A);
                        $('#count2').text(result[0].B);
                        $('#count3').text(result[0].C);
                        $('#count4').text(result[0].D);
                        $('#count5').text(result[0].E);
                        // $('#count6').text(result[0].F);
                        // $('#count7').text(result[0].G);
                    }
                });

                setTimeout(function() {

                    $.ajax({
                        type: "POST",
                        url: "http://103.253.73.187:8080/appMapping/countmetererror1",
                        contentType: "application/json",
                        dataType: "json",
                        data: JSON.stringify({
                            mruname: mruname,
                        }),
                        success: function(result1) {

                            var Err1 = result1[0].A + result1[0].C
                            $('#countErr1').text(Err1);
                            var ErrPer1 = result1[0].A + result1[0].B + result1[
                                0].C
                            var ErrAws = (Err1 / ErrPer1) * 100 || 0;
                            $('#countPreErr1').text(parseFloat(ErrAws).toFixed(
                                2));
                        }
                    })
                }, 1000);

                setTimeout(function() {
                    $.ajax({
                        type: "POST",
                        url: "http://103.253.73.187:8080/appMapping/countmetererror2",
                        contentType: "application/json",
                        dataType: "json",
                        data: JSON.stringify({
                            mruname: mruname,
                        }),
                        success: function(result2) {
                            var Err2 = result2[0].A + result2[0].C
                            $('#countErr2').text(Err2);
                            var ErrPer2 = result2[0].A + result2[0].B + result2[
                                0].C
                            var ErrAws2 = ((Err2 / ErrPer2) * 100) || 0;
                            $('#countPreErr2').text(parseFloat(ErrAws2).toFixed(
                                2));
                        }
                    });

                }, 1000);

                setTimeout(function() {

                    $.ajax({
                        type: "POST",
                        url: "http://103.253.73.187:8080/appMapping/countmetererror3",
                        contentType: "application/json",
                        dataType: "json",
                        data: JSON.stringify({
                            mruname: mruname,
                        }),
                        success: function(result) {
                            var Err3 = result[0].A + result[0].C
                            $('#countErr3').text(Err3);
                            var ErrPer3 = result[0].A + result[0].B + result[0]
                                .C
                            var ErrAws3 = ((Err3 / ErrPer3) * 100) || 0;
                            $('#countPreErr3').text(parseFloat(ErrAws3).toFixed(
                                2));
                        }
                    });
                }, 1000);

                setTimeout(function() {
                    $.ajax({
                        type: "POST",
                        url: "http://103.253.73.187:8080/appMapping/countmetererror4",
                        contentType: "application/json",
                        dataType: "json",
                        data: JSON.stringify({
                            mruname: mruname,
                        }),
                        success: function(result) {
                            var Err4 = result[0].A + result[0].C
                            $('#countErr4').text(Err4);
                            var ErrPer4 = result[0].A + result[0].B + result[0]
                                .C
                            var ErrAws4 = ((Err4 / ErrPer4) * 100) || 0;
                            $('#countPreErr4').text(parseFloat(ErrAws4).toFixed(
                                2));
                        }
                    });
                }, 1000);


                setTimeout(function() {
                    $.ajax({
                        type: "POST",
                        url: "http://103.253.73.187:8080/appMapping/countmetererror5",
                        contentType: "application/json",
                        dataType: "json",
                        data: JSON.stringify({
                            mruname: mruname,
                        }),
                        success: function(result) {
                            var Err5 = result[0].A + result[0].C
                            $('#countErr5').text(Err5);
                            var ErrPer5 = result[0].A + result[0].B + result[0]
                                .C
                            var ErrAws5 = ((Err5 / ErrPer5) * 100) || 0;
                            $('#countPreErr5').text(parseFloat(ErrAws5).toFixed(
                                2));
                        }
                    });
                }, 1000);
            }
        });
    }
});
</script>
<script>
$(".click_show").click(function(event) {
    event.preventDefault();

    var dataClick = $(this).val();

    if ($(this).val() === "5") {


        $('#modelshow').modal('toggle');

        // $("#trtable").load(window.location.href + " #trtable");

        $('#dataTable_wrapper').show();
        $('#dataTable2_wrapper').hide();



        $("#trtable").append(
            '<th class="text-center">CA</th><th class="text-center">PEA NO.</th><th class="text-center">NAME</th><th class="text-center">Phase</th><th class="text-center">CT_SIZE</th><th class="text-center">Ratio</th><th class="text-center">Ip</th><th class="text-center">IP/Ratio</th><th class="text-center">Is</th><th class="text-center">%Error</th><th class="text-center">RESULT</th><th class="text-center">PIC</th><th class="text-center">Date</th>'
        );

        var table1 = $('#dataTable').DataTable().columns.adjust();
        table1.destroy();

        // $('#dataTable').DataTable().ajax.reload();

        var table = $('#dataTable').DataTable({
            "responsive": true,
            "order": [
                [12, "desc"]
            ],
            dom: 'Bfrtip',
            buttons: [
                'excel',
            ],
            "ajax": {
                "url": "http://103.253.73.187:8080/appMapping/finddatamappingdetail",
                "type": "POST",
                "data": {
                    mruname: $('#mruname').val(),
                    apptype: dataClick,
                },
                "dataSrc": ''
            },
            "columns": [{
                    "data": "ca",
                    "className": "text-center",
                },
                {
                    "data": "peano",
                    "className": "text-center",
                },
                {
                    "data": "name",
                    "className": "text-center",
                },
                {
                    "data": "MONITOR_CT1",
                    "className": "text-center",
                },
                {
                    "data": "CT_SIZE",
                    "className": "text-center",
                },
                {
                    "data": "CT_RATIO",
                    "className": "text-center",
                },
                {
                    "data": "I_B",
                    "className": "text-center",
                },
                {
                    "data": "MONITOR_CT2",
                    "className": "text-center",
                },
                {
                    "data": "I_A",
                    "className": "text-center",
                },
                {
                    "data": "ERR_MT_A",
                    "className": "text-center",
                },
                {
                    "data": "RESULT_MT",
                    "data": null,
                    "render": function(data) {
                        switch (data.RESULT_MT) {
                            case "NORMAL":
                                return '<span class="badge badge-success">NORMAL</span>'
                                break;
                            case "SLOW":
                                // code block
                                return '<span class="badge badge-danger">SLOW</span>'
                                break;
                            case "FAST":
                                // code block
                                return '<span class="badge badge-danger">FAST</span>'
                                break;
                            default:
                                return '<span class="badge badge-danger">Unknown</span>'
                        }
                    },
                    "className": "text-center",
                },
                {
                    "data": null,
                    'render': function(data) {
                        return '<a href="http://103.253.73.187:8080/uploads/' + data
                            .img_meter +
                            '" target="_blank"><i class="fas fa-fw fa-tachometer-alt">ddd</i></a>'
                    },
                    "className": "text-center",
                },
                {
                    "data": null,
                    'render': function(data) {
                        var time_s = new Date(data.createdAt).toLocaleDateString(
                            'th-TH', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                                // weekday: 'long',
                            });

                        return time_s;

                    },
                    "className": "text-center",
                },
            ]
        }).columns.adjust();

        $(document).on('click', '.pdfButton', function(e) {
            // your function here
            // e.preventDefault();
            var btval = $(this).val();
            var btid = $(this).attr('id');

            switch (btid) {
                case "1":
                    window.open('../genpdf-pmac/singlephase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "2":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "3":
                    // code block
                    window.open('../genpdf-pmac/singlephase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "4":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "5":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "6":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
            }
        });


    } else {


        $('#modelshow').modal('toggle');

        // $("#trtable").load(window.location.href + " #trtable");

        $('#dataTable_wrapper').hide();
        $('#dataTable2_wrapper').show();

        $("#trtable2").append(
            '<th class="text-center">CA</th><th class="text-center">PEA NO.</th><th class="text-center">NAME</th><th class="text-center">PER_ERR</th><th class="text-center">RESULT_MT</th><th class="text-center">PIC_MT</th><th class="text-center">Date</th><th class="text-center">Action</th>'
        );


        var table2 = $('#dataTable2').DataTable().columns.adjust();
        table2.destroy();

        var table = $('#dataTable2').DataTable({
            "responsive": true,
            "scrollX": true,
            "order": [
                [6, "desc"]
            ],
            dom: 'Bfrtip',
            buttons: [
                'excel',
            ],
            "ajax": {
                "url": "http://103.253.73.187:8080/appMapping/finddatamappingdetail",
                "type": "POST",
                "data": {
                    mruname: $('#mruname').val(),
                    apptype: dataClick,
                },
                "dataSrc": ''
            },
            "columns": [{
                    "data": "ca",
                    "className": "text-center",
                },
                {
                    "data": "peano",
                    "className": "text-center",
                },
                {
                    "data": "name",
                    "className": "text-center",
                },
                {
                    "data": "ERR_MT_A",
                    "className": "text-center",
                },
                {
                    "data": "RESULT_MT",
                    "data": null,
                    "render": function(data) {
                        switch (data.RESULT_MT) {
                            case "NORMAL":
                                return '<span class="badge badge-success">NORMAL</span>'
                                break;
                            case "SLOW":
                                // code block
                                return '<span class="badge badge-danger">SLOW</span>'
                                break;
                            case "FAST":
                                // code block
                                return '<span class="badge badge-danger">FAST</span>'
                                break;
                            default:
                                return '<span class="badge badge-danger">Unknown</span>'
                        }
                    },
                    "className": "text-center",
                },
                {
                    "data": null,
                    'render': function(data) {
                        return '<a href="http://103.253.73.187:8080/uploads/' + data
                            .img_meter +
                            '" target="_blank"><i class="fas fa-fw fa-tachometer-alt"></i></a>'
                    },
                    "className": "text-center",
                },
                {
                    "data": null,
                    'render': function(data) {
                        var time_s = new Date(data.createdAt).toLocaleDateString(
                            'th-TH', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                                hour: 'numeric',
                                minute: 'numeric',
                                second: 'numeric',
                                // weekday: 'long',
                            });

                        return time_s;

                    },
                    "className": "text-center",
                },
                {
                    "data": null,
                    'render': function(data) {
                        return '<button id="' + data.apptype +
                            '" class="pdfButton btn btn-danger" value="' +
                            data.id +
                            '"><i class="fa fa-file"> PDF </i></button>'
                    },
                    "className": "text-center",
                },
            ]
        }).columns.adjust();


        $(document).on('click', '.pdfButton', function(e) {
            // your function here
            // e.preventDefault();
            var btval = $(this).val();
            var btid = $(this).attr('id');

            switch (btid) {
                case "1":
                    window.open('../genpdf-pmac/singlephase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "2":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "3":
                    // code block
                    window.open('../genpdf-pmac/singlephase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "4":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "5":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
                case "6":
                    // code block
                    window.open('../genpdf-pmac/3phase.php?id=' + btval);
                    if (win) {
                        //Browser has allowed it to be opened
                        win.focus();
                    } else {
                        //Browser has blocked it
                        alert('Please allow popups for this website');
                    }
                    break;
            }
        });
    }

});
</script>