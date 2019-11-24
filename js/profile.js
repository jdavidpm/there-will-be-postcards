function getProfilePic(){return '"../images/pf/4DavidPortilla.jpg"'; }
function getEmail(){return 'inrhvice@pta.com'; }
function getGender(){return ' Male'; }
function getBirthday(){return ' Oct 18'; }
function getAge(){return ' 72'; }

$( document ).ready(function()
{
    $('#profilePic').prepend('<img src=' + getProfilePic() + ' class="circle hoverable responsive-img width="300px" style="margin: 5% 0% 5% 0%;">');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">E-mail:</span> ' + getEmail() + '</h5></div></li>');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Gender:</span>' + getGender() + '</h5></div></li>');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Birthday:</span>' + getBirthday() + '</h5></div></li>');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Age:</span>' + getAge() + ' years</h5></div></li>');
});