function ff(e) {
  val = e.value;
  child = e.parentNode.parentNode.childNodes;
  $.ajax({
    type: "POST",
    url: "getusername.php",
    data: {
      userid: val
    },
    success: function (data) {
      // console.log(typeof data)
      mstring = "user not found";
      if (data.trim() == mstring.trim()&&data.trim()!="") {
        e.style = "border:2px solid red";
        e.setAttribute("data-valied", "false");
      } else {
        e.style = "border:2px solid green";
        e.setAttribute("data-valied", "true");
      }
      child[5].innerHTML = data;
    },
    error: function (jqXhr, textStatus, errorThrown) {
      console.log(errorThrown);
    }
  });
}
///
function paymentsubmitform(id){
  $("#payment-details").show();
  $(".paperidforpayment").val(id)
$(".successmsgforpayment").hide();
}
// upload document
function documentupload(e) {
  // console.log(e);
  return false;
}

/////
$(document).ready(function () {
  updatepaperid();
  viewpaperlist();
  toggleval = 0;
  $(".editprofilebtn").click(function () {
    if (toggleval == 0) {
      $(".profileinfo").hide();
      $(".editprofileform").show();
      $(this).text("view");
      toggleval = 1;
    } else {
      $(".profileinfo").show();
      $(".editprofileform").hide();
      $(this).text("edit");

      toggleval = 0;
    }
  });

  $(".sub-author").blur(function (e) {
    val = $(this).val();
    $.ajax({
      type: "POST",
      url: "getusername.php",
      data: {
        userid: val
      },
      success: function (data) {
        mstring = "user not found";
        if (data.trim() == mstring.trim()&&data!="") {
          $(".sub-author").css("border", "2px solid red");
          $(".sub-author").attr("data-valied", "false");
        } else {
          $(".sub-author").css("border", "2px solid green");
          $(".sub-author").attr("data-valied", "true");
        }
        $(".sub-authorname").html(data);
      },
      error: function (jqXhr, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
  });
  $(".author").blur(function (e) {
    val = $(this).val();
    $.ajax({
      type: "POST",
      url: "getusername.php",
      data: {
        userid: val
      },
      success: function (data) {
        mstring = "user not found";
        if (data.trim() == mstring.trim()) {
          $(".author").css("border", "2px solid red");
          $(".author").attr("data-valied", "false");
        } else {
          $(".author").css("border", "2px solid green");
          $(".author").attr("data-valied", "true");
        }
        $(".authorname").html(data);
      },
      error: function (jqXhr, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
  });
  sub_auth_field = 1;
  $(".add-input-subauthor").click(function () {
    if (sub_auth_field <= 5 && sub_auth_field >= 0) {
      $(".subauthor-sec").append(`<div class="col-sm-4 col-md-4 col-xs-12">
<label for="subauthor"> Sub-Author  Id</label>
<div class="form-group input-group " id="subauth${sub_auth_field}">
  <input type="text" name="subauth${sub_auth_field}" onfocusout="ff(this)" data-valied="false" class="form-control sub-author" id="subauthor${sub_auth_field++}" placeholder="sub author id" required>
  <div class="input-group-append minus-input-subauthor " style="cursor:pointer">
        <span class="input-group-text"> <i class="fa fa-minus-circle text-danger" aria-hidden="true"></i> </span>
       </div>   
</div>
<div class="text-success text-center text-danger   sub-author-name "></div></div>
`);
    }
  });
  $("div").on("click", ".minus-input-subauthor", function (e) {
    e.preventDefault();
    $(this)
      .prev()
      .attr("disabled", "");
    $(this)
      .parent()
      .parent()
      .remove();
    sub_auth_field--;
  });
  $("[name='documentform']").submit(function () {
    ptitle = $("#paper_title").val();
    cataogry = $("#catagory").val();
    author = $("#author").val();
    file = $("#document")[0].files[0];

    a = new Set([]);
    validatesubauthor = new Set([]);
    validatesubauthor.add($("#author").attr("data-valied"));
    dublicatecount = 0;
    for (i = 0; i < $(".sub-author").length; i++) {
      valu = $(".sub-author")
        .eq(i)
        .val();
      validatesubauthor.add(
        $(".sub-author")
        .eq(i)
        .attr("data-valied")
      );
      if (a.size == a.add(valu).size) dublicatecount++;
    }
    validate = [...validatesubauthor];
    subauthordata = [...a];
    errorhandlermsg = "";
    var file_extension;
    var filesize;
    if (file != undefined) {
      file_extension = file.name.split(".").pop();
      filesize = (file.size / 1024 / 1024).toFixed(4);
    } else {
      errorhandlermsg += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
 please chose file</h6>`;
    }
    if (dublicatecount > 0 || subauthordata.indexOf(author) != -1) {
      errorhandlermsg += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
 Duplicate Id in Author Or Sub Author Field</h6>`;
    } else if (validate[0] && validate[1]) {
      errorhandlermsg += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
  invalid Id in Author Or Sub Author Field</h6>`;
    } else if (
      file_extension != "docx" &&
      file_extension != "doc" &&
      file_extension != "pdf"
    ) {
      errorhandlermsg += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
  ${file_extension}  file formate is not allowed </h6>`;
    } else if (filesize > 10) {
      errorhandlermsg += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
  file sizr is ${filesize}mb which is not allowed </h6>`;
    } else {
      formdata = new FormData();
      formdata.append("ptitle", ptitle);
      formdata.append("catagory", cataogry);
      formdata.append("author", author);
      formdata.append("subauthor", subauthordata);
      formdata.append("file", file);
      // for(let [name, value] of formdata) {
      //   console.log(`${name} = ${value}`);
      // }
      $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "uploadpaper.php",
        data: formdata,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        success: function (data) {
          onsuccesspaper(data);
        },
        error: function (e) {
          $(".errormsgviewer")
            .html(` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
    error in upload </h6>`);
          console.log("ERROR : ", e);
        }
      });
    }
    $(".errormsgviewer").html(errorhandlermsg);
  });

  function onsuccesspaper(pid) {
    updatepaperid();
    viewpaperlist();
    $("[name=documentform").hide();
    $(".payoption").show();
    $(".payoption").html(
      `                  <h2>successfully submited. <br>your paperid is:${pid}</h2> <button type="button" class="btn btn-info paymentbtn" data-toggle="modal" data-target="#paymentmodal">pay now</button>
      `
    );

  }
  //////////////
  $("[name='updateform']").submit(function () {
    
    var errorhandlermsgup = "";
    var counter = 0;
    var version="";
    var pid="";
    var file_extensionup;
    var filesizeup;
    paperidup = $(".peperidupdate").val();
    
    fileup = $(".upstedfile")[0].files[0];
    if (fileup != undefined) {
      file_extensionup = fileup.name.split(".").pop();
      filesizeup = (fileup.size / 1024 / 1024).toFixed(4);
      if (
        file_extensionup != "docx" &&
        file_extensionup != "doc" &&
        file_extensionup != "pdf"
      ) {
        errorhandlermsgup += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
 ${file_extensionup} is not allowed</h6>`;
        counter++;
      }
      if (filesizeup > 10) {
        errorhandlermsgup += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
    fie size ${filesizeup}mb excide limit</h6>`;
        counter++;
      }
    } else {
      errorhandlermsgup += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
 choose file first</h6>`;
      counter++;
    }
    if (paperidup != "" && paperidup!=undefined) {
      pid = paperidup;
    } else {
      errorhandlermsgup += ` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
  chose paperid first</h6>`;
      counter++;
    }
    if(counter==0){
      formdata = new FormData();
      formdata.append("pid", pid);
      formdata.append("file", fileup);
      $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "uplodeupdateddoc.php",
        data: formdata,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        success: function (data) {
          $(".errormsgviewerup")
          .html(data);
          updatepaperid();
    viewpaperlist();
        },
        error: function (e) {
          $(".errormsgviewerup")
            .html(` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
    error in upload </h6>`);
          console.log("ERROR : ", e);
        }
      }); 
    }
    $(".errormsgviewerup").html(errorhandlermsgup);  
  });

  function updatepaperid() {
    $(".paperidselectmenu").html("<h3>hiii</h3>");
    $.get("paperidbyuser.php", function (data) {
      $(".paperidselectmenu").html(data);
      $(".paperidforpay").html(data);
    });
  }
  function viewpaperlist(){
   $(".paperidforpay")
    $.get("viewdoc.php", function (data) {
      $(".paperlistview").html(data);
    });
  }

  ///////// payment submit//////////////////////////
  $("#paymentsub").submit(function(){
p_id=$(".paperidforpayment").val();
p_mode=$("#payment_mode").val();
amount=$("#amount").val();
payment_no=$("#payment_number").val();
bankname=$("#bank_name").val();
transition_date=$("#trans-date").val();
formdata=new FormData();
formdata.append("p_id",p_id);
formdata.append("p_mode",p_mode)
formdata.append("amount",amount);
formdata.append("payment_no",payment_no)
formdata.append("bankname",bankname);
formdata.append("transition_date",transition_date)

$.ajax({
  type: "POST",
  enctype: "multipart/form-data",
  url: "payment_submit.php",
  data: formdata,
  processData: false,
  contentType: false,
  cache: false,
  timeout: 800000,
  success: function (data) {
    console.log(data);
    if(data=="success"){
      $("#payment-details").hide();
      
      $(".successmsgforpayment").html(`<h4 class="text-success">Your Payment information is recorded and forwarded to organising team for paper id: ${p_id} <br>
      for any Query please mail us @ <a href="mailto:ngctnd2020@its.edu.in">ngctnd2020@its.edu.in</a> <br>or
      contact us <a href="tel:991055457">991055457</a>
      </h4>`)
      $(".successmsgforpayment").show();
      $("#errormsgforpayment").html("").hide();
    }
    else{
      console.log(data)
      $("#errormsgforpayment").html(` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
      payment recoreded unsuccessfull may be due to DD/NEFT-No already found.please contact<br><a href="mailto:ngctnd2020@its.edu.in">ngctnd2020@its.edu.in</a> <br>or
      contact us <a href="tel:991055457">991055457</a> </h6>`)
    }
    viewpaperlist()
  },
  error: function (e) {
    $(".errormsgviewer")
      .html(` <h6 class=" small font-weight-bold" style="color:red"><i class="fa fa-exclamation-triangle fa-1x text-danger"></i>
error in upload </h6>`);
    console.log("ERROR : ", e);
  }
});
  });

  /////////////payment submit end/////////
  $(".paymentbtn").click(function(){
    $("#payment-details").show();
      alert("hello")
    $(".successmsgforpayment").hide();
  });


});