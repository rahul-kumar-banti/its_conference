$(document).ready(function(){
    completepayment();
    
$("#paymentfilter").change(function(){
filterpayment($(this).val());
})

})

async function completepayment(){
   
    let f= await fetch("./admin/paymentservice.php",{
        method:'GET',
    })
    .then(function(data){
        return data.text();
    })
    .then((data)=>{
        $(".payment-details-show").html(data)

    }).catch((err)=>{
console.log("error",err);
    })
}

///
async function filterpayment(filtertype){
    let formdata=new FormData();
    formdata.append("filtertype",filtertype)
    let f= await fetch("./admin/paymentservice.php",{
        method:'post',
        body:formdata
    })
    .then(function(data){
        return data.text();
    })
    .then((data)=>{
        $(".payment-details-show").html(data)

    }).catch((err)=>{
console.log("error",err);
    })
    
}