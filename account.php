<?php

include header.php;
include footer.php;

// variables
$accountNumber = "23452345234";
$accountName = "Declan Rennick";
$panelName = "Declan Rennick";




function displayContent()
{
    echo '<!-- Start #page -->
  <div id="page">
    	<div id="pageleft">
        
			<div class="content_box_first2">
        	<div class="content_box_title2">MY ACCOUNT</div>
            <div class="content_box_icon2"><img src="images/icon_account.jpg" width="51" height="36"></div>
            <div class="content_box_account2">
            <div class="content_box_account_name2">' . $accountName . '</div>
            <div class="content_box_account_number2">Acc. No. ' . $accountNumber . '</div>
            </div>
            <div class="content_box_info2">
            	<div class="content_box_info_main2">
                
                <div class="content_box_info_main3">
                	<div class="content_box_userinfo_h1">Name:</div>
                    <p>&nbsp;</p>
                  	<div class="content_box_userinfo_h2">' . $panelName . '</div>
                    <p>&nbsp;</p>
                    <div class="content_box_userinfo_h1">Contact Numbers:</div>
                    <p>&nbsp;</p>
                    <div class="content_box_userinfo_h2">087 6875123</div>
                    <p>&nbsp;</p>
                    <div class="content_box_userinfo_h2">087 6875123</div>
                	<p>&nbsp;</p>
                    <div class="content_box_userinfo_h1">Email:</div>
                	<p>&nbsp;</p>                    
                    <div class="content_box_userinfo_h2">mrmagoo@heaven.com</div>
                    <p>&nbsp;</p>
                    <div class="content_box_userinfo_h1">Password:</div>
                	<p>&nbsp;</p>                    
                    <div class="content_box_userinfo_h2">xxxxxxxxxxx</div>
                    <p>&nbsp;</p>
                    <div class="content_box_info_buttons_press"><a href="account_send.html">Edit</a></div>
           	   </div>
               
               </div>
            </div>
            <div class="content_box_info2">
			  <div class="content_box_info_main2">
              
              	<div class="content_box_info_main3">
               		<div class="content_box_userinfo_h1">Notifications</div>
                	<div class="content_box_icon3"></div>
          	  	</div>          
          	</div>
            </div>
            
            
      <div class="content_box_bottom2">
            	<div class="content_box_bottomtext2"><a href="billing.html">BILLING</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="account.html">ACCOUNT</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="usage.html">USAGE </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="products.html">PRODUCTS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="promotions.html">PROMOTIONS </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html">HOME</a></div>
                <div class="content_box_button2"></div>  
                        
       	  </div>
		</div>       
        </div>
        
        <!-- video and faq area -->
         
        <div id="pageright">
              
        	<div class="content_box">
        		<div class="content_box_title">VIDEO</div>
        		<div class="content_box_icon"><img src="images/icon_video.jpg" width="51" height="36"></div>
            	<div class="content_box_infovideo"><img src="images/graphic_demo.jpg" width="205" height="125">
                
                </div>
            	<div class="content_box_bottom"><img src="images/graphic_demo_play.jpg" width="215" height="30"></div>
        	</div>
                
               
        
       	  <div class="content_box">
        		<div class="content_box_title">FAQ</div>
        		<div class="content_box_icon"><img src="images/icon_faq.jpg" width="51" height="36"></div>
            	<div class="content_box_info_faq">
                	<div class="content_box_info_h3">1. What is mywebcom?</div>
                    <p>&nbsp;</p>
                	<div class="content_box_info_h3">2. How can i check mt bill?</div>
                    <p>&nbsp;</p>
                	<div class="content_box_info_h3">3. How can I update my details?</div>
              </div>
          <div class="content_box_info_faq_bottem">
            <p><a href="http://support.webcom.ie"><img src="images/buttons_support_grey.jpg" width="132" height="33"></a></p>
            <a href="http://www.webcom.ie/contact-us/"><img src="images/buttons_contact_grey.jpg" width="102" height="32"></a></div>
    		<p>&nbsp;</p>
           </div>   
                              
        </div>
    </div>      ';
}



echo returnHeader(). displayContent() . returnFooter();


?>