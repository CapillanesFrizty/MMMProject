var all = document.getElementsByName('itemid[]');
var subbtn = document.getElementsByName('submit');
const button = document.getElementById("sub");

const check = (main) => {
    for (let a = 0; a < all.length; a++) {

        if (all[a].checked = main.checked) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
}

function enablebtn() {
    if ($('input[name="itemid[]"]:checked').length > 0) {
        button.disabled = false;
    } else {
        button.disabled = true;

        // Make the button inactive
    }
}