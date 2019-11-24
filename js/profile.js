function getProfilePic(){return '"../images/pf/0pf.jpg"'; }
$( document ).ready(function(){
    $('#profilePic').prepend('<img src=' + getProfilePic() + ' class="circle hoverable responsive-img" width="300px" style="margin: 5% 0% 5% 0%;">')
});