<?php
/*
*Template Name: Template Contact 
*/ 
?>
<style type="text/css">
	.button-submit
	{
		background: #2F619A;
		    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  
    color: #ffffff;
	}
</style>
<?php get_header(); ?>
 <!-- ****** Inner Page Banner Start ******-->
<section class="inner-banner-block-section">
 <div class="container">
	<div class="row">
	   <div class="col span_12">
		  <div class="map-container">			 
			 <!--div id="map-canvas" style="width: 100%; height: 400px;"></div-->
			 <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.3932839320332!2d77.309403749956!3d28.58797619276232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce4f51299269d%3A0x3c86e1e1f758350f!2sLNJ%20Denim!5e0!3m2!1sen!2sin!4v1579158630864!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		  </div>
		  <div class="map-head-text">
			 <h1>Contact Us</h1>
		  </div>
	   </div>
	</div>
 </div>
</section>
<!-- ****** Inner Page Banner End ******-->
<!-- ****** Contact Content Start ******-->
<section class="address-block-section">
 <div class="container">
	<div class="row">
	<?php $options = get_option( 'lnj_theme_options' ); ?>
	   <div class="col span_6">
		  <div class="contact-content contact-left-content wow fadeIn">
			 <?php echo trim($options['corporate_marketing_office']); ?>
		  </div>
	   </div>
	   <div class="col span_6">
		  <div class="contact-content contact-right-content wow fadeIn">
			 <?php echo trim($options['plant_address']); ?>
		  </div>
	   </div>
	</div>
 </div>
</section>

<section class="address-block-section" id="contact-us">

 <div class="container">

	<div class="row">
		<div class="col-xs-12">
 <?php if( function_exists("wd_form_maker") ) { wd_form_maker(1, "embedded"); } ?>
</div>
</div>
</div>
</section>
<!-- ******  Contact Content End ******-->
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<!--script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7IZt-36CgqSGDFK8pChUdQXFyKIhpMBY&sensor=true" type="text/javascript"></script>
<script type="text/javascript">

	var map;
	var geocoder;
	var marker;
	var people = new Array();
	var latlng;
	var infowindow;

	$(document).ready(function() {
		ViewCustInGoogleMap();
	});

	function ViewCustInGoogleMap() {

		var mapOptions = {
			center: new google.maps.LatLng(28.5879656,77.3094014),  
			zoom: 4,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		// Get data from database. It should be like below format or you can alter it.

		var data = '[{ "DisplayText": "LNJ DENIM, A-12, Bhilwara Towers | Sector-1, Noida - 201301", "ADDRESS": "LNJ DENIM, A-12, Bhilwara Towers | Sector-1, Noida - 201301", "LatitudeLongitude": "28.5879656,77.3094014", "MarkerId": "Customer" },{ "DisplayText": "LNJ DENIM, LNJ Nagar Village Mordi | PB No. 28, Distt- Banswara(Rajsthan) - 327001", "ADDRESS": "LNJ DENIM,<br> LNJ Nagar Village Mordi | PB No. 28, Distt- Banswara(Rajsthan) - 327001", "LatitudeLongitude": "23.5465303,74.4505397", "MarkerId": "Customer"}]';

		people = JSON.parse(data); 

		for (var i = 0; i < people.length; i++) {
			setMarker(people[i]);
		}

	}

	function setMarker(people) {
		geocoder = new google.maps.Geocoder();
		infowindow = new google.maps.InfoWindow();
		if ((people["LatitudeLongitude"] == null) || (people["LatitudeLongitude"] == 'null') || (people["LatitudeLongitude"] == '')) {
			geocoder.geocode({ 'address': people["Address"] }, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					latlng = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
					marker = new google.maps.Marker({
						position: latlng,
						map: map,
						draggable: false,
						html: people["DisplayText"],
						icon: "images/marker/" + people["MarkerId"] + ".png"
					});
				   
					google.maps.event.addListener(marker, 'click', function(event) {
						infowindow.setContent(this.html);
						infowindow.setPosition(event.latLng);
						infowindow.open(map, this);
					});
				}
				else {
					alert(people["DisplayText"] + " -- " + people["Address"] + ". This address couldn't be found");
				}
			});
		}
		else {
			var latlngStr = people["LatitudeLongitude"].split(",");
			var lat = parseFloat(latlngStr[0]);
			var lng = parseFloat(latlngStr[1]);
			latlng = new google.maps.LatLng(lat, lng);
			marker = new google.maps.Marker({
				position: latlng,
				map: map,
				draggable: false,               // cant drag it
				html: people["DisplayText"]    // Content display on marker click
				//icon: "images/marker.png"       // Give ur own image
			});
		
			google.maps.event.addListener(marker, 'click', function(event) {
				infowindow.setContent(this.html);
				infowindow.setPosition(event.latLng);
				infowindow.open(map, this);
			});
		}
	}

</script-->
<?php get_footer(); ?>
