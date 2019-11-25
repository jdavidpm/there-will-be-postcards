function getAge(dateString)
{
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }
    return age;
  }
function getProfilePic(){return '"../images/pf/4DavidPortilla.jpg"'; }
function getEmail(){return 'inrhvice@pta.com'; }
function getGender(){return ' Male'; }
function getBirthday(){return '1997-08-31'; }

$( document ).ready(function()
{
    $('#profilePic').prepend('<img src=' + getProfilePic() + ' class="circle hoverable responsive-img width="300px" style="margin: 5% 0% 5% 0%;">');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">E-mail:</span> ' + getEmail() + '</h5></div></li>');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Gender:</span>' + getGender() + '</h5></div></li>');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Birthday:</span> ' + getBirthday().substring(5) + '</h5></div></li>');
    $('#infoProfile').prepend('<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Age:</span> ' + getAge(getBirthday()) + ' years</h5></div></li>');
});