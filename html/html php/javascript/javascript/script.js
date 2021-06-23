var check =document.getElementById('lu');
var td = document.getElementById('tdmsg');
var deselectionner =document.getElementById('deselectionner');
var intervalle1;
var intervalle2;



check.addEventListener('click',function(){
    var content = document.getElementById("tdmsg").textContent;
    td.style.fontWeight="bold";
    
     intervalle1 = setInterval(function(){
        td.style.backgroundColor = "blue";
       
    },2000)
     intervalle2 = setInterval(function(){
        td.style.background ="none";
    },4000)
   
    


})
 



deselectionner.addEventListener('click',function(){
    td.style.background="none";
    clearInterval(intervalle1);
})

   

    
    

   




 var popup = document.getElementById('modal');
 /*popup.onclick = function(){
     window.open("messageAdmin.php","pop1","width=50","height=50");
 }*/
   
 