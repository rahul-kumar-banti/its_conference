$(document).ready(function(){
reaseachpaperupdater();
})

function reaseachpaperupdater(){
    
    let f=fetch("./admin/researchpaperupdater.php",{
        method:"get",
    })
    .then(function(data){return data.text()})
    .then(function(data){
$("#researchpaper").html(data)
    })
}