<?php

include 'header.php';
include 'footer.php';
include 'logisenseConnect.php';

// variables (to be replaced with real ones from Digiweb server)
$accountNumber = "23452345234";
$accountName = "Declan Rennick";
$userBalance = getUserBalance($xmlDataBalance);


// display page content
function displayContent($_accountNumber,$_accountName,$_userBalance)
{
    echo '<!-- Start #page -->
  <div id="page">
    	<div id="pageleft">
        
			<div class="content_box_first2">
        	<div class="content_box_title2">MY BILL</div>
            <div class="content_box_icon2"><img src="images/icon_account.jpg" width="51" height="36"></div>
            <div class="content_box_account2">
            <div class="content_box_account_name2">' . $_accountName . '</div>
            <div class="content_box_account_number2">Acc. No. ' . $_accountNumber . '</div>
            </div>
            
            <div class="content_box_info2">
            	<div class="content_box_info_main2">
                	<div class="content_box_info_main3">
                	<div class="content_box_userinfo_h1">Current Bill</div>
                    <p>&nbsp;</p>
                	<div class="content_box_userinfo_h2">.....................................................</div>
                	<div class="content_box_userinfo_h2_amount">' . $_userBalance . '</div>
                	<p>&nbsp;</p>
                	<p>&nbsp;</p>
          			<div class="content_box_userinfo_h1">Last Bill</div>
                    <p>&nbsp;</p>
                    <div class="content_box_userinfo_h2">.....................................................</div>
              		<div class="content_box_userinfo_h2_amount">€50.00</div>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
           	      	<div class="content_box_userinfo_h1">Next Bill Date</div>
               	  	<p>&nbsp;</p>                    
                  	<div class="content_box_userinfo_h2">...............................................</div>  
                	<div class="content_box_userinfo_h2_amount">31/09/2012</div>
                  	<p>&nbsp;</p>
                    
                    
                  	<div class="content_box_info_buttons_bluearea">
                  	<div class="content_box_info_buttons_image"><a href="billing_payments_2.html"><img src="images/buttons_payments.jpg" width="102" height="32"></a></div>
                  	<div class="content_box_info_buttons_image"><a href="billing_manage_login_manage.html"><img src="images/buttons_bill_manage.jpg" width="120" height="32"></a></div>
                  </div>
                  <p>&nbsp;</p>
                    </div>
           	   </div>
            </div>
            
            
            <div class="content_box_info2">
			  <div class="content_box_info_main2">
              <div class="content_box_info_main3">
               	<div class="content_box_userinfo_h1">Monthly Bill (Itemized)</div>
                <p>&nbsp;</p>
                <div class="content_box_userinfo_row_area">
                	<div class="content_box_userinfo_row">
                		<div class="content_box_userinfo_icons"><img src="images/icon_user_phonecall.jpg" width="34" height="25"></div>
                		<div class="content_box_userinfo_phone_no">+3531234567............ </div>
                		<div class="content_box_userinfo_amount"><span class="content_box_userinfo_h2">€0.56</span> </div>                	
                	</div>
                    <div class="content_box_userinfo_row">
                		<div class="content_box_userinfo_icons"><img src="images/icon_user_phonecall.jpg" width="34" height="25"> </div>

                		<div class="content_box_userinfo_phone_no">+3531234567............ </div>
                		<div class="content_box_userinfo_amount"><span class="content_box_userinfo_h2">€3.35</span> </div>                	
                  	</div>
                    <div class="content_box_userinfo_row">
                		<div class="content_box_userinfo_icons"><img src="images/icon_user_internet.jpg" width="34" height="25"> </div>
                		<div class="content_box_userinfo_phone_no">Internet Charges....... </div>
                		<div class="content_box_userinfo_amount"><span class="content_box_userinfo_h2">€20.00</span> </div>                	
                 	 </div>
                     <div class="content_box_userinfo_row">
                		<div class="content_box_userinfo_icons"><img src="images/icon_user_phonecall.jpg" width="34" height="25"> </div>
                		<div class="content_box_userinfo_phone_no">+3531234567............ </div>
                		<div class="content_box_userinfo_amount"><span class="content_box_userinfo_h2">€6.22</span> </div>                	
               		 </div>
                     <div class="content_box_userinfo_row">
                		<div class="content_box_userinfo_icons"><img src="images/icon_user_security.jpg" width="34" height="25"> </div>
                		<div class="content_box_userinfo_phone_no">Internet Security........ </div>
                		<div class="content_box_userinfo_amount"><span class="content_box_userinfo_h2">€39.99</span> </div>                	
                  	 </div>   
                </div>
                
                
                <div class="content_box_info_buttons_bluearea">
                	<div class="content_box_info_buttons_dates">? March ?</div>
                    <div class="content_box_info_buttons_image"><a href="billing_download.html"><img src="images/buttons_bill_download.jpg" width="120" height="32"></a></div>
                </div>
                
			  </div>
                </div>
            </div>
      <div class="content_box_bottom2">
            	<div class="content_box_bottomtext2"><a href="billing.html">BILLING</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="account.html">ACCOUNT</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="usage.html">USAGE </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="products.html">PRODUCTS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="promotions.html">PROMOTIONS </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html">HOME</a></div>
                <div class="content_box_button"><a href="index.html"><img src="images/icon_expand.jpg" width="30" height="30"></a></div>            
                        
       	  </div>
		</div>       
            
        
        </div> 
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
                	<div class="content_box_info_h3">1. What is myDigiweb?</div>
                    <p>&nbsp;</p>
                	<div class="content_box_info_h3">2. How can i check mt bill?</div>
                    <p>&nbsp;</p>
                	<div class="content_box_info_h3">3. How can I update my details?</div>
              </div>
          <div class="content_box_info_faq_bottem">
            <p><a href="http://support.digiweb.ie"><img src="images/buttons_support_grey.jpg" width="132" height="33"></a></p>
            <a href="http://www.digiweb.ie/contact-us/"><img src="images/buttons_contact_grey.jpg" width="102" height="32"></a></div>
    		<p>&nbsp;</p>
           </div>   
                              
        </div>
    </div> ';
}



echo returnHeader(). displayContent($accountNumber,$accountName,$userBalance) . returnFooter();



?>