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
    $('#department').text(Fullname+"|"+department);
$("#logout").click(function(event) {
    event.preventDefault();
    alert(this.id);

    localStorage.clear();

    document.location.href = './dashboardguest.php'; //one level up
});
</script>