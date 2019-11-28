$(document).ready(function(){
    $("#postcardForm").validetta({
        bubblePosition: 'bottom',
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid:function(e){
            e.preventDefault();
            $.ajax({
                method:"POST",
                url:"newPostcard.php",
                data:new FormData($("#postcardForm")[0]),
                contentType: false,
                processData:false,
                cache:false,
                success:function(AX){
                    alert(AX);
                    var tipoAlerts = new Array("red","green");
                    var iconos = new Array("fas fa-times fa-2x","fas fa-check fa-2x");
                    var titleArr = new Array("<h3 class=\"center-align staat\">Error</h3>", "<h3 class=\"center-align staat\">Registration Completed</h3>");
                    var objAX = JSON.parse(AX);
                    $.alert({
                        title: titleArr[objAX.val],
                        content: objAX.msj,
                        icon: iconos[objAX.val],
                        type:tipoAlerts[objAX.val],
                        onDestroy:function(){
                            if(objAX.val == 1){
                                window.location.replace("login.php");
                            }
                        }
                    });
                },
                error : function(jqXHR, status, error) {
                    alert('Sorry');
                },
            });
        }
    });
});