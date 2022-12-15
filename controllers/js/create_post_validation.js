const title = document.getElementById('title');
const postImage = document.getElementById('post_image');
const content = document.getElementById('content');

function validateForm() {
    let fileName = postImage.value;
    let invalidInput = false;
    if (title.value.trim() === "") {
        document.getElementById('invalid_title_error_message').innerText = "Empty Name";
        invalidInput = true;
    } else {
        document.getElementById('invalid_title_error_message').innerText = null;
    }
    if (postImage.value === "") {
        document.getElementById('invalid_image_error_message').innerText = "Empty image";
        invalidInput = true;
    } else if (fileName.slice(-3) != "jpg" && fileName.slice(-3) != "png") {
        document.getElementById('invalid_image_error_message').innerText = "Please select only supported files .jpg|.png";
        invalidInput = true;
    } else {
        document.getElementById('invalid_image_error_message').innerText = null;
    }
    if (content.value.trim() === "") {
        document.getElementById('invalid_content_error_message').innerText = "Empty content";
        invalidInput = true;
    } else {
        document.getElementById('invalid_content_error_message').innerText = null;
    }
    return invalidInput === false;
}