//search for projects
$(document).ready(function(){
    $("#searchinput").keyup(function(){
        var input = $(this).val();
        if(input != ""){
            $.ajax({
                url:"app\Controller\HomeController.php",
                method:"post",
                data:{query: input},
                success: function(res){
                    console.log('hey');
                    // displayProject(JSON.parse(res))
                }
            });
        }
    })

});