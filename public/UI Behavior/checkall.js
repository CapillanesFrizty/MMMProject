const check = (main)=> {
    var all = document.getElementsByName('itemid[]');
    for (let a = 0; a < all.length; a++) {
        all[a].checked = main.checked;
    }
}