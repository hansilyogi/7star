$(document).ready(function () {
  var COMPANY;
  var SUBCOMPANY;
  var URL = 'http://15.206.236.83/api/';
  var x;

  loadcompany();

  function loadcompany() {
    $.ajax({
      type: "POST",
      url: URL + "company",
      data: { type: "getdata", token: $("#website-token").attr("value") },
      dataType: "json",
      cache: false,
      success: function (data) {
        if (data.isSuccess == true) {
          $("#company").html("");
          COMPANY = data.Data[0]._id;
          for (i = 0; i < data.Data.length; i++) {
            $("#company").append(
              "<option value=" +
                data.Data[i]._id +
                ">" +
                data.Data[i].Name +
                "</option>"
            );
          }
          subcompany();
        }
      },
    });
  }

  function subcompany() {
    var id = COMPANY;
    console.log(id);
    $.ajax({
      type: "POST",
      url: URL + "subcompany",
      data: {
        type: "getsinglecompany",
        CompanyId: id,
        token: $("#website-token").attr("value"),
      },
      dataType: "json",
      cache: false,
      success: function (data) {
        if (data.isSuccess == true) {
          $("#subcompany").html("");
          SUBCOMPANY = data.Data[0]._id;
          $("#subcompany").append(
            "<option value=0>All</option>"
          );
          SUBCOMPANY = $("#subcompany").val();
          for (i = 0; i < data.Data.length; i++) {
            $("#subcompany").append(
              "<option value=" +
                data.Data[i]._id +
                ">" +
                data.Data[i].Name +
                "</option>"
            );
          }
          employee();
        }
      },
    });
  }
  var SUBCOMPANY = '5ef77fc62160c400240c4fac';
  employee();

  function employee() {
    $.ajax({
      type: "POST",
      url: URL + "employee",
      data: {
        type: "getsubcompanyemployee",
        SubCompany: SUBCOMPANY,
        token: $("#website-token").attr("value"),
      },
      dataType: "json",
      cache: false,
      beforeSend: function () {
        $("#displaydata").html(
          '<tr><td colspan="5" class="text-center font-weight-bold">Loading...</td></tr></center>'
        );
      },
      success: function (data) {
          if (data.isSuccess == true) {
            $("#employ").html("");
            SUBCOMPANY = data.Data[0]._id;
            $("#employ").append(
              "<option value=0>All</option>"
            );
            // SUBCOMPANY = $("#subcompany").val();
            for (i = 0; i < data.Data.length; i++) {
              $("#employ").append(
                "<option value=" +
                  data.Data[i]._id +
                  ">" +
                  data.Data[i].Name +
                  "</option>"
              );
            }
          }
         else {
          $("#displaydata").html(
            '<tr><td colspan="4" class="text-center font-weight-bold">No Records Found.</td></tr></center>'
          );
        }
      },
    });
  }

  $('#txt_searchemployee').keyup(function(){
    var search = $(this).val();
    $('table tbody tr').hide();
    var len = $('table tbody tr:not(.notfound) td:contains("'+search.charAt(0)+'")').length;
    if(len > 0){
      $('table tbody tr:not(.notfound) td:contains("'+search.charAt(0) + search.slice(1)+'")').each(function(){
        $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
    }
  });

  $(document).on("change", "#company", function () {
    COMPANY = $("#company").val();
    subcompany();
  });
  $(document).on("change", "#subcompany", function () {
    SUBCOMPANY = $("#subcompany").val();
    employee();
  });
});
