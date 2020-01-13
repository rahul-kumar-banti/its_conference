$(document).ready(function(){

  
$(".regtologin").click(function(){
    $("#registration").modal('hide');
    $("#login").modal('show'); 
})
$(".lgtoreg").click(function(){
    $("#login").modal('hide');
    $("#registration").modal('show');
})



$("#fullname").focusout(function()
{ //    var $regexname=/^([a-zA-Z]{3,16})$/;
  rg=new RegExp("^([a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)){5,50}$");
    // value= $(this).val();
    if(!$(this).val().match(rg)){
        $(this).addClass('errorbox');
        $(this).next().show();

    }
    else
    {
        $(this).removeClass('errorbox');
        $(".emsg").hide();
        
    }

    
}
);
$("#reg-email").blur(function(){
    value=$("#reg-email").val();
    formdata=new FormData();
    formdata.append("uid",value);
    fetch("./userinfocheck.php",{
        method:"post",
        body:formdata     
    }).then(function(data){ return data.text() }).then(function(data){
        // console.log(data)
        // $(".emailerror").text(data).show();
        
     if(data=="false"){
        $("#reg-email").removeClass('errorbox');
        $(".emailerror").hide();
       
     } 
     else{
        $("#reg-email").addClass('errorbox');
        $(".emailerror").show();
        $(".emailerror").text("already registered try another");
       
     }
    })

})

$("#catagory1").focusout(function()
{    
    // value= $(this).val();
    if($('#catagory1').val()=='default'){
            $(this).addClass('errorbox');
            $(this).next().show();
        }
    else
    {
        $(this).removeClass('errorbox');
        $(".emsg").hide();
        
    }

    
}
);
$("#catagory2").focusout(function()
{    
    // value= $(this).val();
    if($('#catagory1').val()=='default'){
            $(this).addClass('errorbox');
            $(this).next().show();
        }
    else
    {
        $(this).removeClass('errorbox');
        $(".emsg").hide();
        
    }

    
}
);

$("#countryname").focusout(function()
{     var $regexname=/^([a-zA-Z]{3,16})$/;
    // value= $(this).val();
    if(!$(this).val().match($regexname)){
        $(this).addClass('errorbox');
        $(this).next().show();


    }
    else
    {
        $(this).removeClass('errorbox');
        $(".emsg").hide();
         
    }

    
}
)


$("#password123").blur(function()
{     //var regexname=new RegExp("^[a-zA-Z0-9_.-]*$");
    // value= $(this).val();
    if(!$(this).val().match(/^[A-Za-z]\w{7,14}$/)){
        $(this).addClass('errorbox');
        $(this).next().show();
        $(this).next().text("password doesn't follow pattern");


    }
    else
    {
        $(this).removeClass('errorbox');
        $(".emsg").hide();
       
    }

    
}
)
$("#repassword123").keyup(function(){
    if ($("#password123").val() != $("#repassword123").val()) {
        $(this).addClass('errorbox');
        $(this).next().show();
    }else{
        $(this).removeClass('errorbox');
        $(".emsg").hide();
   }
});


$("#mobilenum1").blur(function()
{     var $regexname=/^(\+?\d{1,4}[\s-])?(?!0+\s+,?$)\d{10}\s*,?$/;
    // value= $(this).val();
    if(!$(this).val().match($regexname)){
        $(this).addClass('errorbox');
        $(this).next().show();

    }
    else
    {
        $(this).removeClass('errorbox');
        $(".emsg").hide();
       
    }

    
}
)

})