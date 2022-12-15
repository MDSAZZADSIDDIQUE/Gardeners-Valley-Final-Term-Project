const emailAddress = document.getElementById('email_address');
const password = document.getElementById('password');
const form = document.getElementById('login_form');
function verifyLogin() {
        let invalidLogin = false;
        if (emailAddress.value.trim() === "") {
            document.getElementById('invalid_email_address_error_message').innerText = 'Empty email address';
            invalidLogin = true;
        } else if (emailAddress.value.trim().length < 5 && emailAddress.value.trim().indexOf('@') < 0) {
            document.getElementById('invalid_email_address_error_message').innerText = 'Invalid email address';
            invalidLogin = true;
        } else {
            document.getElementById('invalid_email_address_error_message').innerText = '';
        }
        if (password.value.trim() === "") {
            document.getElementById('invalid_password_error_message').innerText = 'Empty password';
            invalidLogin = true;
        } else if (password.value.trim().length < 6) {
            document.getElementById('invalid_password_error_message').innerText = 'Password must be at least 6 characters';
            invalidLogin = true;
        } else {
            document.getElementById('invalid_password_error_message').innerText = '';
        }
        if (!invalidLogin) {
            return true;
        } else {
            return false;
        }
}
