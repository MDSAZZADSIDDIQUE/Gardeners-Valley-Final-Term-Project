const firstName = document.getElementById('first_name');
const lastName = document.getElementById('last_name');
const dateOfBirth = document.getElementById('date_of_birth');
const emailAddress = document.getElementById('email_address');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirm_password');

function checkIfStringContainsNumber(input) {
    let inputString = String(input);
    for (let i = 0; i < inputString.length; i++) {
        if (!isNaN(inputString.charAt(i)) && !(inputString.charAt(i) === ' ')) {
            return true;
        }
    }
    return false;
}

function checkEmailAddress(input) {
    let emailAddress = input.trim();
    return emailAddress.length < 6 || !emailAddress.includes('@') || !emailAddress.includes('.') || emailAddress.indexOf('@') < 1 || emailAddress.indexOf('.') < 3 || (emailAddress.indexOf('.') - emailAddress.indexOf('@')) < 2;
}

function validateForm() {
    let invalidInput = false;

    if (firstName.value.trim() === "") {
        document.getElementById('invalid_first_name_error_message').innerText = 'Empty first name';
        invalidInput = true;
    } else if (checkIfStringContainsNumber(firstName.value.trim())) {
        document.getElementById('invalid_first_name_error_message').innerText = 'Invalid first name';
        invalidInput = true;
    } else {
        document.getElementById('invalid_first_name_error_message').innerText = null;
    }

    if (lastName.value.trim() === "") {
        document.getElementById('invalid_last_name_error_message').innerText = 'Empty last name';
        invalidInput = true;
    } else if (checkIfStringContainsNumber(lastName.value.trim())) {
        document.getElementById('invalid_last_name_error_message').innerText = 'Invalid last name';
        invalidInput = true;
    } else {
        document.getElementById('invalid_last_name_error_message').innerText = null;
    }

    if (!document.getElementById('male').checked && !document.getElementById('female').checked) {
        document.getElementById('invalid_gender_error_message').innerText = 'Empty Gender';
        invalidInput = true;
    } else {
        document.getElementById('invalid_gender_error_message').innerText = null;
    }

    if (dateOfBirth.value === "") {
        document.getElementById('invalid_date_of_birth_error_message').innerText = 'Empty date of birth';
        invalidInput = true;
    } else {
        document.getElementById('invalid_date_of_birth_error_message').innerText = null;
    }

    if (emailAddress.value.trim() === "") {
        document.getElementById('invalid_email_address_error_message').innerText = 'Empty email address';
        invalidInput = true;
    } else if (checkEmailAddress(emailAddress.value)) {
        document.getElementById('invalid_email_address_error_message').innerText = 'Invalid email address';
        invalidInput = true;
    } else {
        document.getElementById('invalid_email_address_error_message').innerText = null;
    }

    if (password.value.trim() === "") {
        document.getElementById('invalid_password_error_message').innerText = 'Empty password';
        invalidInput = true;
    } else if (password.value.trim().length < 6) {
        document.getElementById('invalid_password_error_message').innerText = 'Password must be at least 6 characters';
        invalidInput = true;
    } else {
        document.getElementById('invalid_password_error_message').innerText = null;
    }

    if (confirmPassword.value.trim() === "") {
        document.getElementById('invalid_confirm_password_error_message').innerText = 'Empty confirm password';
        invalidInput = true;
    } else if (password.value.trim() !== confirmPassword.value.trim()) {
        document.getElementById('invalid_confirm_password_error_message').innerText = 'Password does not match';
        invalidInput = true;
    } else {
        document.getElementById('invalid_confirm_password_error_message').innerText = null;
    }

    return invalidInput === false;
}