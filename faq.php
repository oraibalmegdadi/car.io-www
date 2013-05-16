<?
include('header.php');
?>
  <script type="text/javascript">
    
    function addRecentActivities(img, id, titel){
      $('#recentActivities').append('<li class="customLi"><img src="'+img+'" style="height: 30px; margin-right: 10px; "/><a href="'+id+'">'+titel+'</a></li>');
    }

    function addFriendActivities(actionImg, friendImg, id, titel){
      $('#friendActivities').append('<li class="customLi"><img src="'+actionImg+'" style="height: 30px; margin-right: 10px; "/><a href="'+id+'">'+titel+'</a><img src="'+friendImg+'" style="height: 30px; margin-right: 10px; float:right; "/></li>');
    }

  </script>

  
  
<div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">

  <div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" show >
       Main Information
      </a>
    </div>
	    <div id="collapseOne" class="accordion-body collapse">
      <div class="offset2">
	  <div class="accordion-inner" >
         <a href="http://giv-cario.uni-muenster.de/working-folder/support"> What is EnviroCar? </a>
		 </a>
      </div></div>
	   <div class="offset2">
	  <div class="accordion-inner">
        		<a href="http://giv-cario.uni-muenster.de/working-folder/howenvirocworks.php"> How EnviroCar works? </a> 

      </div></div>
 
  </div>
  </div>
  
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Mobile Application
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
       <div class="offset2">
	  <div class="accordion-inner">
        <a href="http://giv-cario.uni-muenster.de/working-folder/support_reg.php"> Registration</a>
      </div></div>
	   <div class="offset2">
	  <div class="accordion-inner">
        <a href="http://giv-cario.uni-muenster.de/working-folder/support_down.php"> Downloading</a>
      </div></div>
	   <div class="offset2">
	  <div class="accordion-inner">
        <a href="http://giv-cario.uni-muenster.de/working-folder/support_sync.php"> synchronization</a>
      </div></div>
    </div>
	
	
  </div>

  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
       WebSite
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
	   <div class="offset2">
        <a href="http://giv-cario.uni-muenster.de/working-folder/support_compare.php"> Compare Your Data</a>
      </div></div>
	   <div class="offset2">
	  <div class="accordion-inner">
       <a href="http://giv-cario.uni-muenster.de/working-folder/support_share.php"> Share Your Data </a>
</div>
      </div>
    </div>
 
  </div>
  
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
         <a href="http://giv-cario.uni-muenster.de/working-folder/faq.php"> FAQ </a>
      </a>
    </div>
  </div>
</div>
	</div>
<!--faq-->
	 <div class="span10">
          <div class="hero-unit">

	  <h2>FAQs </h2>
<p> 
</br><strong>Q: How does it work? </strong></br>
A: By using OBD2 adapter, enviroCar is able to receive your cars data by pairing your smartphone via Bluetooth with the adapter. The smartphone app analyzes and parses the data to give you in the app and on the enviroCar these information, which you want to see.

</br></br><strong>Q: How to get started? What are the requirements?</strong></br>
A: Plug your OBD2 adapter into the OnBoard Diagnostic (OBD) port of your car. Download & install the app, pair it with your adapter and you’re ready to be a part of enviroCar.

</br></br><strong>Q: Which OBD2 adapters are compatible with enviroCar?</strong></br>
A: There are quite a lot OBD-2 adapters around the world wide web. But please keep in mind, there are many (for example on ebay) which won’t work. Please have a look on some reviews.
Also one very important fact about OBD-2 use adapters in Germany: It’s only allowed to use CE-certified OBD-2 adpaters. The usage of adapters without a CE-certificate is permitted, if you drive your car.

</br></br><strong>Q: Is my car supported?</strong></br>
A: Mainly there is the following rule. In the USA, all cars from 01.01.1996 have to have the OBD-2 interface.
In Europe, all new cars with an Otto-motor (using benzine) from 01.01.2001 and with the EURO-3 Norm have the OBD-2 interface. For diesel vehicles from 01.01.2003 OBD-2 is supported. For trucks, the OBD-2 support started with 1. January 2005
				
</p>
 </div>
	
	</div>



<!--End of faq-->	
	</div>



  
  
  
  
  
<?
include('footer.php');
?>
