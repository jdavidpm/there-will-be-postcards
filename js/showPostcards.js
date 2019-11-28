var cateArray = ["christmas", "birthdays", "valentines", "miscellaneous"];
function showPost(titlesPostcards, lastItem)
{
    for (i = 1; i <= lastItem; i++)
    {
        $('#rowItems').append('<div id="itemPostcard' + i + '" class="col s12 m12 l6"><div class="card"><div class="card-image"><div id="pathPostcard' + i + '"></div><div id="namePostcard' + i + '"></div><a href="send.php?postToSend='+i +'" class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a></div><div class="card-content greyish"><div id="catPostcard' + i + '"></div></div></div></div>');
        $('#pathPostcard' + i + '').prepend('<img class="materialboxed" src="../postcards/p' + i + '.jpg">');
        $('#namePostcard' + i + '').prepend('<span class="card-title staat">' + titlesPostcards[i - 1] + '</span>');
        
    }
}
var lastItem = 1;
$( document ).ready(function()
{
    var i;
    $.ajax({
        method:"POST",
        url:"getPostcards.php",
        cache:false,
        success:function(AX){
            var objAX = JSON.parse(AX);
            showPost(objAX.naPost, (objAX.idPost).slice(-1)[0]);
            for (i = 1; i <= (objAX.idPost).slice(-1)[0]; i++)
            {
                for (j = 0; j < objAX.catPost[i].length; j++)
                {
                    $('#catPostcard' + i + '').prepend('<span class="chip">'+ cateArray[objAX.catPost[i][j] - 1] + '</span>');
                }
            }
        },
        error : function(jqXHR, status, error) {
            alert('Sorry');
        },
    });
});