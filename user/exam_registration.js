
$(function(){
    $("#reset").click(function(){
        $(".subjects").show();
        $(".button").hide();
                 $(".sucess").hide();
        $(".register").hide();


    
    });
    $(".subj").click(function(){
        $(".register").show();
        $(".subjects").hide();
        $(".button").hide();
        $(".sucess").hide();

    
    });
    $(".register").click(function(){
        $(".register").hide();
        $(".subjects").hide();
        $(".button").hide();
         $(".succes").show();

    
    });

});
