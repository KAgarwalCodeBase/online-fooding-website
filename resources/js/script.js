$(document).ready(function(){
    /*For this sticky navigation */
    $('.js--section-features').waypoint(function(direction){
    if(direction=="down"){
        $('nav').addClass('sticky');
    }
        else{
            $('nav').removeClass('sticky');
        }
        
    }, {
        offset: '60px'
        
    });

    
});

     //Scroll on buttons


$('.js--scroll-to-plans').click(function(){
    
   $('html,body').animate ({scrollTop:$('.js--section-plans').offset().top},2000);
});



$('.js--scroll-to-start').click(function(){
    
   $('html,body').animate ({scrollTop:$('.js--section-features').offset().top},1000);
});








//Navigation Scroll
$(document).ready(function() {
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });});





/*Animation on scroll*/
$(document).ready(function(){


$('.js--wp-1').waypoint(function(direction){
    $('.js--wp-1').addClass('animated fadein');
    } , {
        offset:'50%'
    });


$('.js--wp-2').waypoint(function(direction){
    $('.js--wp-2').addClass('animated fadeinUp');
    } , {
        offset:'50%'
    });


$('.js--wp-3').waypoint(function(direction){
    $('.js--wp-3').addClass('animated fadein');
    } , {
        offset:'50%'
    });


$('.js--wp-4').waypoint(function(direction){
    $('.js--wp-4').addClass('animated pulse');
    } , {
        offset:'50%'
    });


});




/*Mobile nav*/
$(document).ready(function(){

$('.js--nav-icon').click(function(){
    
var nav = $('.js--main-nav');
    var icon =$('.js--nav-icon i');
nav.slideToggle(200);

if(icon.hasClass('ion-navicon-round')){
    icon.addClass('ion-close-round');
    icon.removeClass('ion-navicon-round');
}else
    {
        icon.addClass('ion-navicon-round');
        icon.removeClass('ion-close-round');
    }



});
    
});




function show1(){
    document.getElementById("formid").style.display="block";
    document.getElementById("showplan").innerHTML="PREMIUM";
    document.getElementById("showplan1").value="PREMIUM";
    document.getElementById("showplan2").value="399";
  
    
}

function show2(){
    document.getElementById("formid").style.display="block";
document.getElementById("showplan").innerHTML="PRO";
    document.getElementById("showplan1").value="PRO";
    document.getElementById("showplan2").value="149";
        

}

function show3(){
    document.getElementById("formid").style.display="block";
document.getElementById("showplan").innerHTML="STARTER";
       document.getElementById("showplan1").value="STARTER";
    document.getElementById("showplan2").value="19";
  
}

function closek(){
    document.getElementById("formid").style.display="none";
}


 function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Error: Username cannot be blank!");
      form.name.focus();
      return false;
    }
    re = /^\w+$/;//^shows that from the beginning 
      // \w this is use for showing any word that is alphnumric and underscore
      //$shows end of string
    if(!re.test(form.name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.name.focus();
      return false;
    }
        
    if((form.pwd1.value != "") && (form.pwd1.value == form.pwd2.value)) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.name.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }
      
       

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }




    
function showlogin1(){

    document.getElementById("showplan1").value="PREMIUM";
    document.getElementById("showplan2").value="399";
   document.getElementById("showplan3").value="http://localhost/omnifood/return.php?plan='PREMIUM'&price='399'";

}

function showlogin2(){
 
    document.getElementById("showplan1").value="PRO";
    document.getElementById("showplan2").value="149";
  document.getElementById("showplan3").value="http://localhost/omnifood/return.php?plan='PRO'&price='149'";
}

function showlogin3(){
    document.getElementById("showplan1").value="STARTER";
    document.getElementById("showplan2").value="19";
   document.getElementById("showplan3").value="http://localhost/omnifood/return.php?plan='STARTER'&price='19'";
   
}

    
