<!DOCTYPE html>
<html lang="en">

<?php
include "head.php"
?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Power Meter And Current Transformer Tester
                                        </h1>
                                    </div>
                                    <form class="user" id="myform1">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username"
                                                aria-describedby="emailHelp" placeholder="รหัสพนักงาน" name="username"
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                placeholder="รหัสผ่านเข้าเครื่องคอมพิวเตอร์" name="password"
                                                value="">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <div class="mt-3" id="loading">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-secondary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-success" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-danger" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-warning" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-info" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-light" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-dark" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

<?php
include "foot.php"
?>

</html>

<script>
$(document).ready(function() {
    $("#loading").hide();
});

$("#myform1").on("submit", function(e) {
    e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax
    $("#loading").show();
    // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object

    if ((!username) || (!password)) {
        alert("กรอกข้อมูลไม่ครบ !!")
    } else {
        $.ajax({
            type: "post",
            url: "https://eitne2.com/nongha/api/login/",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                username: $("#username").val(),
                password: $("#password").val(),
            }),
            success: function(response) {
                if (response.statusCode == 200) {
                    localStorage.setItem('Peacode', response.user.Peacode);
                    localStorage.setItem('Username', response.user.Username);
                    localStorage.setItem('FirstName', response.user.FirstName);
                    localStorage.setItem('LastName', response.user.LastName);
                    localStorage.setItem('BaName', response.user.BaName);
                    window.location = "../views/dashboard.php";
                } else {
                    alert("เข้าระบบมีปัญหาไม่สามารถเข้าระบบได้")
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
    }
});
</script>