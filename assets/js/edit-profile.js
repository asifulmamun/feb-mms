// edit profile - form validation
function validateForm() {
    /* for user name */
    var mainAdminUserName = document.forms["install"]["mainAdminUserName"].value;
    if (mainAdminUserName == "") {
        document.getElementById('mainAdminUserName_alert').innerHTML = "Please Inser Your User Name.";
        var mainAdminUserName_alert_brdr = document.getElementById('mainAdminUserName_alert_brdr');
        mainAdminUserName_alert_brdr.classList.add('red_brdr');
        return false;
    }
    else if (mainAdminUserName !== "") {
        document.getElementById('mainAdminUserName_alert').innerHTML = "";
        var mainAdminUserName_alert_brdr = document.getElementById('mainAdminUserName_alert_brdr');
        mainAdminUserName_alert_brdr.classList.add('green_brdr');
    }

} /* validateForm */
