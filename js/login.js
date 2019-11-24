$(document).ready(function(){
    $("#formLogin").validetta({
        bubblePosition: 'bottom',
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid:function(e){
            e.preventDefault();
            $.ajax({
                method:"POST",
                url:"confirmLogin.php",
                data:$("#formLogin").serialize(),
                cache:false,
                success:function(AX){
                    var tipoAlerts = new Array("red","green");
                    var objAX = JSON.parse(AX);
                    $.alert({
                        title:"<h3 class=\"center-align josefin\">TWBP! - Info</h3>",
                        content:objAX.msj,
                        icon:"fas fa-info fa-2x",
                        type:tipoAlerts[objAX.val],
                        onDestroy:function(){
                            if(objAX.val == 1){
                                window.location.replace("profile.php");
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