
 $(document).ready(function() {
 
	var previewURL = ["blue.html", "red.html", "green.html"];
     
      $('.shadowbox').hover(
     
         function () {
					 if(!$(this).hasClass('inited')){
            $(this).find(".ad_name").stop(true,false).animate({marginTop:"-50px"});
           }
           
         }, 
         function () {
					 if(!$(this).hasClass('inited')){
            $(this).find(".ad_name").stop(true,false).animate({marginTop:"0px"});
           }
         }
     );

 
		
/*

     $('.300x250').hover(
     
         function () {
					 if(!$(this).hasClass('inited')){
            $(this).find(".ad_name").stop(true,false).animate({top:"200px"});
           }
           
         }, 
         function () {
					 if(!$(this).hasClass('inited')){
            $(this).find(".ad_name").stop(true,false).animate({top:"250px"});
           }
         }
     );
     
     
       $('.728x90').hover(
     
         function () {
         	
            $(this).find(".ad_name").stop(true,false).animate({top:"40px"});
           
         }, 
         function () {
   
            $(this).find(".ad_name").stop(true,false).animate({top:"90px"});
            
         }
     );
     
     
      $('.960x150').hover(
     
         function () {
         	
            $(this).find(".ad_name").stop(true,false).animate({top:"100px"});
           
         }, 
         function () {
   
            $(this).find(".ad_name").stop(true,false).animate({top:"150px"});
            
         }
     );
     
     
       $('.320x100').hover(
     
         function () {
         	
            $(this).find(".ad_name").stop(true,false).animate({top:"50px"});
           
         }, 
         function () {
   
            $(this).find(".ad_name").stop(true,false).animate({top:"100px"});
            
         }
     );
     
     
      $('.160x600').hover(
     
         function () {
         	
            $(this).find(".ad_name").stop(true,false).animate({top:"550px"});
           
         }, 
         function () {
   
            $(this).find(".ad_name").stop(true,false).animate({top:"600px"});
            
         }
     );
     
         $('.960x250').hover(
     
         function () {
         	
            $(this).find(".ad_name").stop(true,false).animate({top:"200px"});
           
         }, 
         function () {
   
            $(this).find(".ad_name").stop(true,false).animate({top:"250px"});
            
         }
     );
     
*/
     
     
     
     
     
   $( ".shadowbox" ).click(function(e) {
  		e.preventDefault();

   		if(!$(this).hasClass('inited')){
   			$(this).addClass('inited');
        $(this).find(".ad_name").stop(true,false).animate({marginTop:"0px"});
   			
   			$me = $(this);
	  		$me.find('.portfolio_image').remove();	  		
//	  		$me.find(".adcon").show();	

		  	$me.find(".adcon").show();	
	  		var id = $(this).attr("data-adname");
	  		var iframe = $(this).find("iframe").get(0);
	  		iframe.src = id;
	  		//$(this).find("iframe").attr('src',id);
	  	}
 
  	
	});
	
	

	






});
   