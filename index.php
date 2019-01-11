<!--sristisahu02-->
<!--//ion icons  //this is used for the ions-->
<!--//0to255 for choosing color variant-->
<!---->
  
  <?php include"includes/db.php"?>
  <?php include"includes/header.php"?>
  <?php include"includes/function.php"?>
  <?php
   session_start();
  unset($_SESSION['email']);
   session_destroy();

  ?>
  <?php   addUser();   ?>
   
   
   <header>
      <nav>                //navigation
          <div class="row">
              <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo">
              <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black">
              <ul class="main-nav  js--main-nav">
                  
                  <li><a href
                  ="#features">Food delivery</a></li>
                  <li><a href="#works">How it works</a></li>
                  <li><a href="#cities">Our cities</a></li>
                  <li><a href="#plans">Sign up</a></li>
                  <li>
                  <a href="loggin.php">Login</a>
                  
                  
                  
                  </li>
                  
                  
                  
              </ul>
              <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
          </div>
          
      </nav>
      
       <div class="hero-text-box" >
   <h1>Goodbye junk food.</br>Hello super healthy meals.</h1>
      <a href="#" class="btn btn-full js--scroll-to-plans">I am hungry.</a>
      <a href="#" class="btn btn-ghost js--scroll-to-start">Show me more.</a>       
       </div>
       
       
   </header>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
     
   <section class="section-features js--section-features" id="features">

        
        <div class="row ">
        <h2>Get fast food &mdash; not fast food</h2>    
        <p class="long-copy">
        Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take           care of that, we’re really good at it, we promise!               
        </p>
        </div>


        <div class="row js--wp-1">

        <div class="col span-1-of-4 box" >
        <i class="ion-ios-infinite-outline icon-big"></i>
        <h3>Up to 365 days/year</h3>
        <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to                order more flexibly if that's your style.
        </p>
        </div>

        <div class="col span-1-of-4 box">
        <i class="ion-ios-stopwatch-outline icon-big"></i>
        <h3>Ready in 20 minutes</h3>
        <p>
        You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best           chefs in each town to ensure that you're 100% happy.
        </p>
        </div>
        
        
        <div class="col span-1-of-4 box">
        <i class="ion-ios-nutrition-outline icon-big"></i>
        <h3>100% organic</h3>
        <p>
        All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health,         the environment, and it also tastes better!
        </p>
        </div>



        <div class="col span-1-of-4 box">
        <i class="ion-ios-cart-outline icon-big"></i>
        <h3>Order anything</h3>
        <p>
        We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
        </p>
        </div>
        

        </div>
</section>












<section class="section-meals">
<ul class="meals-showcase clearfix">
    <li><figure class="meal-photo" ><img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables"></figure></li>
    <li><figure class="meal-photo" ><img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes"></figure></li>
    <li><figure class="meal-photo" ><img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables"></figure></li>
    <li><figure class="meal-photo" ><img src="resources/img/4.jpg" alt="Autumn pumpkin soup"></figure></li>
    
    
</ul>    
    <ul class="meals-showcase clearfix">
    <li><figure class="meal-photo" ><img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables"></figure></li>
    <li><figure class="meal-photo" ><img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables"></figure></li>
    <li><figure class="meal-photo" ><img src="resources/img/7.jpg" alt="Burger with cheddar and bacon"></figure></li>
    <li><figure class="meal-photo" ><img src="resources/img/8.jpg" alt="Granola with cherries and strawberries"></figure></li>
    
    
</ul>    
</section>












<section class="section-steps" id="works">
   <div class="row">
    <h2>How it works &mdash; Simple as 1, 2, 3</h2>
       </div>
       <div class="row">
        <div class="col span-1-of-2 steps-box">
            <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
        </div>
        <div class="col span-1-of-2 steps-box">
            <div class="works-step">
                <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
            </div>
        <div class="works-step">
                <div>2</div>
                    <p>	Order your delicious meal using our mobile app or website. Or you can even call us!</p>
            </div>
        <div class="works-step">
                <div>3</div>
                    <p>	Enjoy your meal after less than 20 minutes. See you the next time!</p>
            </div>
            <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App store button"></a>
            <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play store button"></a>
        
        </div>
    </div>
</section>

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
           <section class="section-cities" id="cities">
               
               <div class="row">
                <h2>We're currently in these cities
</h2>   
               </div>
               <div class="row js--wp-3">
                   <div class="col span-1-of-4 box">
                       <img src="resources/img/prayag.jpg" alt="Prayagraj">
                       <h3>Prayagraj</h3>
                   <div class="city-feature">
                       <i class="ion-ios-person  icon-small"></i>1600+ happy eaters
                   </div>
                   <div class="city-feature">
                       <i class="ion-ios-star  icon-small"></i>60+ toatl cheif
                   </div>
                   <div class="city-feature">
                       <i class="ion-social-twitter  icon-small"></i>
                            <a href="#">@omnifood_pr</a>

                   </div>
                   
                   </div>
                   <div class="col span-1-of-4 box">
                       <img src="resources/img/lucknow.jpg" alt="Lucknow">
                       <h3>Lucknow</h3>
                   <div class="city-feature">
                       <i class="ion-ios-person  icon-small"></i>3700+ happy eaters
                   </div>
                   <div class="city-feature">
                       <i class="ion-ios-star  icon-small"></i>160+ toatl cheif
                   </div>
                   <div class="city-feature">
                       <i class="ion-social-twitter  icon-small"></i><a href="#">@omnifood_lk</a>

                   </div>
                   
                   </div>
                   <div class="col span-1-of-4 box">
                       <img src="resources/img/banaras.jpg" alt="Varanasi">
                       <h3>Varanasi</h3>
                   <div class="city-feature">
                       <i class="ion-ios-person  icon-small"></i>2300+ happy eaters
                   </div>
                   <div class="city-feature">
                       <i class="ion-ios-star  icon-small"></i>110+ toatl cheif
                   </div>
                   <div class="city-feature">
                       <i class="ion-social-twitter  icon-small"></i><a href="#">@omnifood_vr</a>

                   </div>
                   
                   </div>
                   <div class="col span-1-of-4 box">
                       <img src="resources/img/kanpur.jpg" alt="Kanpur">
                       <h3>Kanpur</h3>
                   <div class="city-feature">
                       <i class="ion-ios-person  icon-small"></i>1200+ happy eaters
                   </div>
                   <div class="city-feature">
                       <i class="ion-ios-star  icon-small"></i>50+ toatl cheif
                   </div>
                   <div class="city-feature">
                       <i class="ion-social-twitter icon-small"></i><a href="#">@omnifood_kanpur</a>

                   </div>
                   
                   </div>
               </div>
           </section>
          
           
            
             
              
               
                
                 
                  
                   
                    
                     
                      
                        
           <section class="section-testimonials">
               <div class="row">
                   <h2>Our customers can't live without us</h2>
               </div>
               <div class="row">
                  <div class="col span-1-of-3">
                     <blockquote>

Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                    <cite><img src="resources/img/ritesh1.png"  alt="Customer 1 photo">Ritesh Panday</cite>
                     </blockquote>
                  </div>
                  <div class="col span-1-of-3">
                     <blockquote>

Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Allahabad, but no one comes even close to Omifood. Me and my family are so in love!

             <cite><img src="resources/img/nishant1.png"  alt="Customer 2 photo">Nishant Chaddha</cite>
                 
                     </blockquote>
                  </div>
                  <div class="col span-1-of-3">
                     <blockquote>

I was looking for a quick and easy food delivery service in Allahabad. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
   <cite><img src="resources/img/abid.png"  alt="Customer 3 photo">Abid Ali</cite>
                 
                     </blockquote>
                  </div>
               </div>
               
           </section>

















<section class="section-plans js--section-plans" id="plans">
<div class="row">
<h2>Start eating healthy today</h2>
</div>
<div class="row">
<div class="col span-1-of-3">
    <div class="plan-box js--wp-4">
    <div><h3>Premium</h3>
        <p class="plan-price">$399 <span>/ month</span></p>
        <p class="plan-price-meal">That's only 13.30$ per meal</p>
    </div>
    <div>
        <ul>
        <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>        
        <li><i class="ion-ios-checkmark-empty icon-small"></i>  Order 24/7</li>        
        <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest acreations</li>        
        <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>   
        </ul>    
    </div>

    <div>
        
        <button class="Signup"  onclick="show1();" >Sign up now</button>     
             
    </div>
    </div>   
</div>

<div class="col span-1-of-3">
<div class="plan-box">
    <div><h3>Pro</h3>
        <p class="plan-price">149$ <span> / month</span></p>
        <p class="plan-price-meal">That’s only 14.90$ per meal</p>
    </div>
    <div>
        <ul>
        <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>        
        <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>        
        <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>       
        <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>   
        </ul>
    </div>

    <div>
        <button class="Signup"  onclick="show2();">Sign up now</button>     
         
    </div>
</div>   
</div>

<div class="col span-1-of-3">
    <div class="plan-box">
    <div><h3>Starter</h3>
        <p class="plan-price">19$ <span>per meal</span></p>
        <p class="plan-price-meal">&nbsp;</p>
    </div>
    <div>
        <ul>
        <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
        <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
        <li><i class="ion-ios-close-empty icon-small"></i></li>
        <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>   
        </ul>
    </div>

    <div>

        
        <button class="Signup"  onclick="show3();">Sign up now</button>     
        

    </div>


    </div>   
</div>

</div>
</section>           




<section class="section-form" id="formid">
         
 
    <div class="row">
        
        <p class="close">
        <button onclick="closek();" style="background-color:white;border:0px;"><i class="ion-ios-close-outline icon-med  " ></i>
        </button>
        </p>
       
        
        <h2>We're happy to hear from you</h2>
    </div>
    <h3 style="text-align:center;"  id="showplan"></h3>
    
   <div class="row">
      
<!--      https://ww/w.sandbox.paypal.com/cgi-bin/webscr-->
<!--      target="_blank"-->
      
      
      
      
      
      
<!--      https://www.sandbox.paypal.com/cgi-bin/webscr-->
      
<!--      target="_blank"-->
      
       <form action="#"  method="post"  class="contact-form"  onsubmit="return checkForm(this);">
           <div class="row">
               <div class="col span-1-of-3">
                   <label for="name">NAME</label>
               </div>
               <div class="col span-2-of-3">
                   <input type="text" name="name" id="name" placeholder="Your Name" >
               </div>
           </div>
           <div class="row">
               <div class="col span-1-of-3">
                   <label for="email">Email</label>
               </div>
               <div class="col span-2-of-3">
                   <input type="email" name="email" id="email" placeholder="Your Email" required >
               </div>
           </div>
           
           
           <div class="row">
               <div class="col span-1-of-3">
                   <label for="pwd1">Password</label>
               </div>
               <div class="col span-2-of-3">
                   <input type="text" name="pwd1" id="pwd1" placeholder="Your Password" >
               </div>
           </div>
           
           <div class="row">
               <div class="col span-1-of-3">
                   <label for="pwd2">Confirm Password</label>
               </div>
               <div class="col span-2-of-3">
                   <input type="password" name="pwd2" id="pwd2" placeholder="Confirm Password" >
               </div>
           </div>
           
           
           
           
           
           <div class="row">
               <div class="col span-1-of-3">
                   <label for="find-us">How did you find us?</label>
               </div>
               <div class="col span-2-of-3">
                   <select name="source" id="find-us" required>
                <option value="">select</option>
                 <option value="friends">Friends</option>                                
                   <option value="search">Search Engine</option>
                 <option value="ad">Advertisment</option>
                 <option value="other">Other</option>

                   </select>
               </div>
           </div>
           <div class="row">
               <div class="col span-1-of-3">
                   <label for="">Newsletter</label>
               </div>
               <div class="col span-2-of-3">
                   <input type="checkbox" name="news" id="news" checked>Yes, please
               </div>
           </div>
             <div class="row">
               <div class="col span-1-of-3">
                   <label for="">Drop us a line</label>
               </div>
               <div class="col span-2-of-3">
                   <textarea name="comment" id="message" cols="" rows=""></textarea>
               </div>
           </div>
         
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="fakebusiness1997@gmail.com">
<input type="hidden" name="item_name_1" value="" id="showplan1">
<input type="hidden" name="amount_1" value="" id="showplan2">
<input type="hidden" name="return" value="http://localhost/omnifood/index.php" >
<input type="hidden" name="cancel_return" value="http://localhost/omnifood/index.php" >


 <div class="row">
               <div class="col span-1-of-3">
                   <label for="">&nbsp;</label>
               </div>
               <div class="col span-2-of-3">
                   <input type="submit" name="submit" value="Send it!">
               </div>
           </div>
         
       </form>
   </div> 
    

</section>
 <?php include"includes/footer.php"?>
