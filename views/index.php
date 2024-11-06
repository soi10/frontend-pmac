<!DOCTYPE html>
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-4/assets/css/login-4.css">
<html lang="en">

<?php
include "head.php"
?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <!-- Login 4 - Bootstrap Brain Component -->
        <section class="p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="card border-light-subtle shadow-sm">
                    <div class="row g-0">
                        <div class="col-12 col-md-6">
                            <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                                src="../img/pic3.png" alt="BootstrapBrain Logo">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <h3>Power Meter And Current Transformer Tester</h3>
                                        </div>
                                    </div>
                                </div>
                                <form action="#!">
                                    <div class="row gy-3 gy-md-4 overflow-hidden">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <a id="loginButton" class="btn bsb-btn-xl btn-primary m-5"
                                                    type="submit"><i class="fa-solid fa-arrow-right-to-bracket me-2"
                                                        style="font-size: 25px; vertical-align: middle"></i>
                                                    <span style="vertical-align: middle">Login</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

// $("#loadingSpinner").show();
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function setSessionStorage(key, value) {
    sessionStorage.setItem(key, value);
}

function getSessionStorage(key) {
    return sessionStorage.getItem(key);
}

async function fetchToken(code) {
    const url = `${location.protocol}//${location.host}`;
    const response = await fetch(
        url + "/pmac/serviceslogin/proxy2.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: new URLSearchParams({
                code: code,
                client_id: "pea-queuex-softkey",
                client_secret: "ZnO5xEia9YEJdrznI0YeU399ClJWYtVl",
                grant_type: "authorization_code",
                redirect_uri: url + "/pmac/views/index.php",
            }),
        }
    );

    if (response.ok) {
        const data = await response.json();
        return data.access_token;
    } else {
        console.error("Error fetching token:", response.statusText);
        return null;
    }
}

async function fetchUserInfo(token) {
    const url = `${location.protocol}//${location.host}`;
    const response = await fetch(
        `${url}/pmac/serviceslogin/proxy3.php?token=${token}`
    );

    if (response.ok) {
        const data = await response.json();

        // displayValues(data);
        if (data.hr_employee_id) {
            console.log('proxy3:', data);
            setSessionStorage('hr_employee_id', data.hr_employee_id); // Store employee ID in session storage
            setSessionStorage('hr_data', JSON.stringify(data)); // Store employee ID in session storage
        }
    } else {
        console.error("Error fetching user info:", response.statusText);
    }
}

function redirectToIndex(data) {
    console.log(data.hr_fullname_th, " ", data.hr_employee_id);
    window.location.href = "./dashboard.php";
}

document.addEventListener("DOMContentLoaded", function() {
    const params = new URLSearchParams(window.location.search);
    let code = params.get("code");
    console.log('code:', code);

    if (code) {
        // Only fetch token and user info if the code is present
        console.log('in fetchToken');

        fetchToken(code).then(async (token) => { // Change to an async function
            if (token) {
                setCookie('access_token', token, 1); // Store token in a cookie for 1 day
                console.log('Cookie stored.');

                await fetchUserInfo(token); // Await the completion of fetchUserInfo

                const hr_data = JSON.parse(getSessionStorage('hr_data'));
                console.log('hr_data_fetch:', hr_data);
                localStorage.setItem('Username', hr_data.hr_employee_id);
                localStorage.setItem('Fullname', hr_data.hr_fullname_th);
                localStorage.setItem('BaName', hr_data.hr_business_area);
                localStorage.setItem('department', hr_data.hr_department);
                redirectToIndex(hr_data);
            }
        });
    }

    function checkHr() {
        const data = JSON.parse(getSessionStorage('hr_data'));
        console.log('hr_data', data);

        if (data) {
            window.location.href = "./dashboard.php";
        }
    }
    checkHr();

});

function handleButtonClick() {
    const employeeId = getSessionStorage('hr_employee_id'); // Check session storage for employee ID
    console.log('employeeId in ss:', employeeId);


    if (employeeId) {
        // If employee ID exists in session storage, fetch user info directly
        const hr_data = JSON.parse(getSessionStorage('hr_data'));
        console.log('fetch from hr_data:', hr_data);
        code = null;
        redirectToIndex(hr_data);
    } else {
        // Redirect to the login page using the first proxy
        const url = `${location.protocol}//${location.host}`;
        const redirectUrl = url + "/pmac/serviceslogin/proxy1.php";
        const queryParams = new URLSearchParams({
            redirect_uri: url + "/pmac/views/index.php",
            response_type: "code",
            scope: "openid profile",
            client_id: "pea-queuex-softkey",
        });
        window.location.href = `${redirectUrl}?${queryParams.toString()}`;
    }
}

// Add an event listener to your button
document.getElementById('loginButton').addEventListener('click', handleButtonClick);

// $("#myform1").on("submit", function(e) {
// e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax
// $("#loading").show();
// // เตรียมข้อมูล form สำหรับส่งด้วย FormData Object

// if ((!username) || (!password)) {
// alert("กรอกข้อมูลไม่ครบ !!")
// } else {
// $.ajax({
// type: "post",
// url: "https://eitne2.com/nongha/api/login/",
// contentType: "application/json",
// dataType: "json",
// data: JSON.stringify({
// username: $("#username").val(),
// password: $("#password").val(),
// }),
// success: function(response) {
// if (response.statusCode == 200) {
// localStorage.setItem('Peacode', response.user.Peacode);
// localStorage.setItem('Username', response.user.Username);
// localStorage.setItem('FirstName', response.user.FirstName);
// localStorage.setItem('LastName', response.user.LastName);
// localStorage.setItem('BaName', response.user.BaName);
// window.location = "../views/dashboard.php";
// } else {
// alert("เข้าระบบมีปัญหาไม่สามารถเข้าระบบได้")
// }
// },
// error: function(response) {
// console.log(response);
// }
// });
// }
// });
</script>