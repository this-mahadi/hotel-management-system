const ADMIN_USERNAME = 'mahadi';
const ADMIN_PASSWORD = '6242';

const userName = document.getElementById("login_username");
const password = document.getElementById("login_password");

function submitClick() {

    if (userName.value === ADMIN_USERNAME && password.value === ADMIN_PASSWORD) {
        window.location = '../php/admin.php';
    }
    return false;
}

userName.addEventListener("click",()=>{
    userName.value = null;
})
password.addEventListener(("click"),()=>{
    password.value = null;
})

