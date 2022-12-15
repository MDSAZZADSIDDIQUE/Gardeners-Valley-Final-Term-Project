const shopName = document.getElementById('shop_name');
const shopAddress = document.getElementById('shop_address');
const shopOwner = document.getElementById('shop_owner');
const shopImage = document.getElementById('shop_image');
function validateForm() {
    let fileName = shopImage.value;
    let invalidInput = false;
    if (shopName.value.trim() === "") {
        document.getElementById('invalid_shop_name_error_message').innerText = "Empty Name";
        invalidInput = true;
    } else {
        document.getElementById('invalid_shop_name_error_message').innerText = null;
    }
    if (shopAddress.value.trim() === "") {
        document.getElementById('invalid_shop_address_error_message').innerText = "Empty Name";
        invalidInput = true;
    } else {
        document.getElementById('invalid_shop_address_error_message').innerText = null;
    }
    if (shopOwner.value.trim() === "") {
        document.getElementById('invalid_shop_owner_error_message').innerText = "Empty Name";
        invalidInput = true;
    } else {
        document.getElementById('invalid_shop_owner_error_message').innerText = null;
    }
    if (fileName.value.trim() === "") {
        document.getElementById('invalid_shop_image_error_message').innerText = "Empty Name";
        invalidInput = true;
    } else if ("jpg" !== fileName.slice(-3) && fileName.slice(-3) !== "png") {
        document.getElementById('invalid_shop_image_error_message').innerText = "Please select only supported files .jpg|.png";
        invalidInput = true;
    } else {
        document.getElementById('invalid_shop_image_error_message').innerText = null;
    }
    return invalidInput === false;
}