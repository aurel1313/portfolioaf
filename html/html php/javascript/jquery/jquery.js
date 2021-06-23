$(document).ready(function(){
    alert("test");
    
    
});
    
   
    $("#lu").click(function(){
        var check = $("#check1").is(':checked');
        var length = $("#check1").length;         
          
            
    });
    
    
    //var longueur = $("td:nth-child(1)").length;
    //console.log(longueur);
    /*for(var i = 0;i<= longueur;i++){
        if($("#lu:nth-child(2)").click(function(){
            $("td:nth-child(1)").css("font-weight","normal");
        }));
    }*/ //fonction tout lire//
        
    
    $("input[type='checkbox']").change(function(){
        if($(this).is(":checked")){
            $("#tdmsg").css("font-weight","bold");
        }
        else{
            $("#tdmsg").css("font-weight","normal");
        }
    })
   
   
    $("button[type='submit']").prop("disabled",true);
 
    $("input[type='checkbox']").change(function(){
       alert($(this).is(":checked"));
       if($(this).is(":checked")){
           $("button[type='submit']").prop("disabled",false);
       }else{
           $("button[type='submit']").prop("disabled",true);
       }
    });
       
       
  
   
 $("button[type='submit']").click(function(){
    var checkbox = $('#lu').is(':checked');
    var check = $("#lu").val();
    alert("test3");
    
 var confirmer = $("#confirmer");
 console.log(confirmer);
 
 
 location.reload();
 $.ajax({
     url:"messageAdmin.php",
     method:"POST",
     data:{
         check:checkbox
     },
     success:function(){
         alert("data envoyé");
     }
 });
 
 
    
});



 

 
 
    
    
    
