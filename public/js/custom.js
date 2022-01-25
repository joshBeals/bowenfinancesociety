function tooglePassword() {
    let password = document.getElementById("password");
    let icon = document.getElementById("password-icon");
    if (password.type === "password") {
        password.type = "text";
        icon.src = "img/eye-off.svg";
    } else {
        password.type = "password";
        icon.src = "img/eye.svg";
    }
}

function tooglePassword1() {
    let password_confirmation = document.getElementById("password_confirmation");
    let icon = document.getElementById("password-icon1");
    if (password_confirmation.type === "password") {
        password_confirmation.type = "text";
        icon.src = "img/eye-off.svg";
    } else {
        password_confirmation.type = "password";
        icon.src = "img/eye.svg";
    }
}