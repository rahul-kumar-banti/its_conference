 async function profileviewer(e){
     subprofileviewer(e)
}
async function subprofileviewer(e){
    let formdata=new FormData();
    formdata.append("profileid",e)
    let f= await fetch("./admin/viewprofileinfo.php",{
        method:'post',
        body:formdata
    })
    .then(function(data){
        return data.text();
    })
    .then((data)=>{
        $(".userprofileviwermodal").html(data)

    }).catch((err)=>{
console.log("error",err);
    })
    $("#userinfomodal").modal('show');
}
async function paperviewer(e){
    let formdata=new FormData();
    formdata.append("paperid",e)
    let f= await fetch("./admin/viewbypaperid.php",{
        method:'post',
        body:formdata,
        
    })
    .then(function(data){
        return data.text();
    })
    .then((data)=>{
        $(".userprofileviwermodal").html(data)

    }).catch((err)=>{
console.log("error",err);
    })
    $("#userinfomodal").modal('show');
}
$(document).ready(function(){
    reaseachpaperupdater();
    let researchpaperrunner=setInterval(reaseachpaperupdater,100000);


})

async function reaseachpaperupdater(){
    
    let f= await fetch("./admin/researchpaperupdater.php",{
        method:"get",
    })
    .then(function(data){return data.text()})
    .then(function(data){
$("#researchpaper").html(data)
    })


}