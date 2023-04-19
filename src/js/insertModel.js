$(document).ready(function () {
    $.getJSON("../src/php/retrive_data.php", function (data) {
        $("#model_Tbody").empty();
        $.each(data, function () {
            $("#model_Tbody").append(`
            <tr>
            <td> ${this['id']} </td>
            <td> ${this['model_name']} </td>
            <td> ${this['model_description']} </td>
            <td> ${this['model_SRP']} </td>
            </tr>
            `)
        })
    })
})