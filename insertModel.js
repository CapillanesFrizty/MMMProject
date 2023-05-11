$(document).ready(function () {
  $.getJSON("../retrive_data.php", function (data) {
    $("#model_Tbody").empty();
    $.each(data, function () {
      $("#model_Tbody").append(`
            <tr>
            <td>  </td>
            <td> ${this["model_img"]} </td>
            <td> ${this["id"]} </td>
            <td> ${this["model_name"]} </td>
            <td> ${this["model_description"]} </td>
            <td> ${this["model_SRP"]} </td>
            <td> <a href="../Delete.php?">Delete</a> </td>
            <td> <a id="btnupdate" href="../Updateit.php?model-Num=${this["id"]}">Update</a> </td>
            </tr>
            `);

          });
          
  });
});