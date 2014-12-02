<?php //index.php
include_once('header.php'); ?>

		<div class="logo left" >
			<a href="./"><img class="pages-logo" src="imagery/addroid_logo.png" /></a>
		</div>
		<div class="right" style="text-align: right;">
			<h1 style="padding-top:13px;">Approved Publishers</h1>
			<h2 style="margin-top:-2px; padding-top:0px; font-weight: normal; font-size:18px;">Websites, apps, ad networks, and exchanges. </h2>
		</div>
		<br class="clear" />
	</div><!-- .wrapper -->
</div><!-- .top -->
<div style="margin-top:20px; padding-bottom: 40px;" class="alt_bg">
	<div class="wrapper">
		<div class="left" id="websites_apps">	
			<h1 style="margin:0; padding:0; border-bottom:1px solid #dedcda; padding-top:44px; padding-bottom:25px;">Websites & Apps</h1>
		
				<ul id="pub_list-1a" class="publisher_list ">
					
				</ul>
				<ul id="pub_list-1p" class="publisher_list ">
					
				</ul>
				<ul id="pub_list-1i" class="publisher_list ">
					
				</ul>

		</div>
		<div class="left" style="margin-left:40px;width:470px;">
			<h1 style="margin:0; padding:0; border-bottom:1px solid #dedcda; padding-top:44px; padding-bottom:25px;">Networks & Exchanges</h1>
		
				<ul id="pub_list-2a" class="publisher_list">
					
				</ul>
				<ul id="pub_list-2p" class="publisher_list">
					
				</ul>
				<ul id="pub_list-2i" class="publisher_list">
					
				</ul>
		</div>
		<br class="clear" />
	</div><!--.wrapper-->
</div><!-- alt_bg -->
<script>
showResults();


function showResults(){
	$.getJSON("functions/get_pub.php", function(data){
		
		data.sort(function(a,b){
			var nameA = a.publisher.toLowerCase(),  nameB = b.publisher.toLowerCase();
			if (nameA < nameB) //sort string ascending
				return -1; 
			if (nameA > nameB)
				return 1;
			return 0; //default return value (no sorting)
		});

		/*
var publishers = new Array();
		for (var k=0; k<data.length; k++){publishers.push(data[k].publisher);}
		publishers.sort(); //alpha sort the publishers
*/
		
		for(var i=0; i<data.length; i++){
			var status = data[i].status;
			if(status == "inprogress"){
				status = "in Progress";
			}
			status = status.charAt(0).toUpperCase()+status.slice(1);

			
			if(data[i].pubcat == "websites"){
				if(data[i].status == "active"){
								$("#pub_list-1a").append("<li><div id=\"plus-0\"><div class=\"publisher_label\"><p>"+data[i].publisher+"</p></div><div class=\""+data[i].status+" status_box\">"+status+"</div><div class=\"plus\" ><input class=\"toggle_button plus_button\" type=\"button\"></div><br class=\"clear\" /><div class=\"dropdown-menu\"><div class=\"publisher_text_2\">"+data[i].pubinfo+"</div></div></div></li>");					
				}else if(data[i].status == "inprogress"){
								$("#pub_list-1p").append("<li><div id=\"plus-0\"><div class=\"publisher_label\"><p>"+data[i].publisher+"</p></div><div class=\""+data[i].status+" status_box\">"+status+"</div><div class=\"plus\" ><input class=\"toggle_button plus_button\" type=\"button\"></div><br class=\"clear\" /><div class=\"dropdown-menu\"><div class=\"publisher_text_2\">"+data[i].pubinfo+"</div></div></div></li>");
				}else {
								$("#pub_list-1i").append("<li><div id=\"plus-0\"><div class=\"publisher_label\"><p>"+data[i].publisher+"</p></div><div class=\""+data[i].status+" status_box\">"+status+"</div><div class=\"plus\" ><input class=\"toggle_button plus_button\" type=\"button\"></div><br class=\"clear\" /><div class=\"dropdown-menu\"><div class=\"publisher_text_2\">"+data[i].pubinfo+"</div></div></div></li>");
				}
				

		}else{
		if(data[i].status == "active"){
			$("#pub_list-2a").append("<li><div id=\"plus-0\"><div class=\"publisher_label\"><p>"+data[i].publisher+"</p></div><div class=\""+data[i].status+" status_box\">"+status+"</div><div class=\"plus\" ><input class=\"toggle_button plus_button\" type=\"button\"></div><br class=\"clear\" /><div class=\"dropdown-menu\"><div class=\"publisher_text_2\">"+data[i].pubinfo+"</div></div></div></li>");
			}else if(data[i].status == "inprogress"){
				$("#pub_list-2p").append("<li><div id=\"plus-0\"><div class=\"publisher_label\"><p>"+data[i].publisher+"</p></div><div class=\""+data[i].status+" status_box\">"+status+"</div><div class=\"plus\" ><input class=\"toggle_button plus_button\" type=\"button\"></div><br class=\"clear\" /><div class=\"dropdown-menu\"><div class=\"publisher_text_2\">"+data[i].pubinfo+"</div></div></div></li>");

				
			} else {
				$("#pub_list-2i").append("<li><div id=\"plus-0\"><div class=\"publisher_label\"><p>"+data[i].publisher+"</p></div><div class=\""+data[i].status+" status_box\">"+status+"</div><div class=\"plus\" ><input class=\"toggle_button plus_button\" type=\"button\"></div><br class=\"clear\" /><div class=\"dropdown-menu\"><div class=\"publisher_text_2\">"+data[i].pubinfo+"</div></div></div></li>");

			}
		}
			
		}
		$(".toggle_button").click(function(){
				var idx = $(".toggle_button").index(this);
				console.log(idx);
				$(this).parent().parent().find('.dropdown-menu').toggle(function(){
					if($(this).is(':visible')){
					
						$(".toggle_button").eq(idx).removeClass("plus_button");
						$(".toggle_button").eq(idx).addClass("minus_button");					
						
					}else{
						$(".toggle_button").eq(idx).removeClass("minus_button");
						$(".toggle_button").eq(idx).addClass("plus_button");					
											
					}
				});
				
				
	
				
		});
	});
	
}




</script>
<?php include_once('footer.php'); ?>
