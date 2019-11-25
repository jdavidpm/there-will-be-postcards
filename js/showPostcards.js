function showPost(titlesPostcards, lastItem)
{
    for (i = 1; i <= lastItem; i++)
    {
        $('#rowItems').append('<div id="itemPostcard' + i + '" class="col s12 m12 l6"><div class="card"><div class="card-image"><div id="pathPostcard' + i + '"></div><div id="namePostcard' + i + '"></div><a href="send.php?postToSend='+i +'" class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a></div><div class="card-content greyish"><div id="catPostcard' + i + '"></div></div></div></div>');
        $('#pathPostcard' + i + '').prepend('<img class="materialboxed" src="../postcards/p' + i + '.jpg">');
        $('#namePostcard' + i + '').prepend('<span class="card-title staat">' + titlesPostcards[i - 1] + '</span>');
        $('#catPostcard' + i + '').prepend('<a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a>');
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
            var tipoAlerts = new Array("red", "green");
            var iconos = new Array("fas fa-times fa-2x","fas fa-check fa-2x");
            var titleArr = new Array("<h3 class=\"center-align staat\">Error</h3>", "<h3 class=\"center-align staat\">Identity Confirmed</h3>");
            var objAX = JSON.parse(AX);
            showPost(objAX.naPost, (objAX.idPost).slice(-1)[0]);
        },
        error : function(jqXHR, status, error) {
            alert('Sorry');
        },
    });
});