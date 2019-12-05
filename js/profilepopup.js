$(document).ready(function(){

    profile=[{
        "spkname":"abc",
        "spkimg":"dummyperson.jpg",
        "spkdis":"he is good speaker",
        "speakerline":"bsifsdfhdfhds"
    },
    {
        "spkname":"xyz",
        "spkimg":"dummyperson.jpg",
        "spkdis":"he is good speaker",
        "speakerline":"bsifsdfhdfhds"
    },
    {
        "spkname":"hjk",
        "spkimg":"dummyperson.jpg",
        "spkdis":"he is good speaker",
        "speakerline":"bsifsdfhdfhds"
    }
,{
    "spkname":"opo",
    "spkimg":"dummyperson.jpg",
    "spkdis":"he is good speaker",
    "speakerline":"bsifsdfhdfhds"
}]
    $(".speaker-profile").click(function(){
        id=$(this).attr("id")
        $(".popfirst").show();
        profilefidder(parseInt(id)-1)
    })
    $(".closepopup").click(function(){
        $(".popfirst").hide();  
    })
    $(document).dblclick(function(){
        $(".popfirst").hide();  
    })


    function profilefidder(id){
prof=profile[id];
$(".profile-img").attr("src","./assets/images/"+prof.spkimg);
$(".profile-name").text(prof.spkname);
$(".profile-disc").text(prof.spkdis);
$(".profile-line").text(prof.speakerline);
    }
    $(".btnmodal").click(function(){
      
        $("#msgshowhome").modal();
    })
})