<nav class="navbar navbar-light bg-white topbar mb-4 static-top shadow">
    <a class="navbar-brand">Power Meter And Current Transformer Tester</a>
    <span id="department" class="pull-right"></span>
    <form class="form-inline">
        <button class="btn btn-outline-danger my-2 my-sm-0" id="logout">Logout</button>
    </form>
</nav>

<script>
const Fullname = localStorage.getItem('Fullname');
$('#Fullname').text(Fullname);
const department = localStorage.getItem('department');
$('#department').text(Fullname + "|" + department);

function removeSessionStorage(key) {
    sessionStorage.removeItem(key);
}
$("#logout").click(function(event) {
    event.preventDefault();
    alert(this.id);
    // Set the cookie with a past expiration date to delete it
    removeSessionStorage('hr_employee_id');
    removeSessionStorage('hr_data');
    localStorage.clear();
    const url = `${location.protocol}//${location.host}/pmac/views/dashboardguest.php`;
    window.location.href =
        `https://sso2.pea.co.th/realms/pea-users/protocol/openid-connect/logout?redirect_uri=${url}`;
    //document.location.href = './dashboardguest.php'; //one level up
});
</script>