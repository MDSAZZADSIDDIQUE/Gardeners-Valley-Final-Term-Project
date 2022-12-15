const name = document.getElementById('name');
const price = document.getElementById('price');
const description = document.getElementById('description');
const plant_image = document.getElementById('plant_image');
const shop_name = document.getElementById('shop_name');
function validateForm()
{
    let fileName = plant_image.value;
    let invalidInput = false;
    if (name.value.trim() === "" ) {
        document.getElementById('invalid_name_error_message').innerText = "Empty Name";
        invalidInput = true;
    } else {
        document.getElementById('invalid_name_error_message').innerText = null;
    }
    if (price.value.trim() === "" ) {
        document.getElementById('invalid_price_error_message').innerText = "Empty Price";
        invalidInput = true;
    } else {
        document.getElementById('invalid_price_error_message').innerText = null;
    }
    if (description.value.trim() === "" ) {
        document.getElementById('invalid_description_error_message').innerText = "Empty Description";
        invalidInput = true;
    } else {
        document.getElementById('invalid_description_error_message').innerText = null;
    }
    if (plant_image.value === "" ) {
        document.getElementById('invalid_plant_image_error_message').innerText = "Empty Tree Image";
        invalidInput = true;
    } else if (fileName.slice(-3) != "jpg" && fileName.slice(-3) != "png") {
        document.getElementById('invalid_plant_image_error_message').innerText = "Please select only supported files .jpg|.png";
        invalidInput = true;
    } else {
        document.getElementById('invalid_plant_image_error_message').innerText = null;
    }
    if (shop_name.value.trim() === "" ) {
        document.getElementById('invalid_shop_name_error_message').innerText = "Empty Shop Name";
        invalidInput = true;
    } else {
        document.getElementById('invalid_shop_name_error_message').innerText = null;
    }
    return invalidInput === false;
}
