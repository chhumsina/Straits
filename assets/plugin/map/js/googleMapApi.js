function initializeMap(lat,lang,desc,showImage,imageTitle,divId) {
     var latlng = new google.maps.LatLng(lat,lang);
     var settings = {
     zoom: 15,
     center: latlng,
     mapTypeControl: true,
     mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},     
     navigationControl: true,
     navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
     mapTypeId: google.maps.MapTypeId.ROADMAP};
     var map = new google.maps.Map(document.getElementById(divId), settings);
     var contentString = desc;
     var infowindow = new google.maps.InfoWindow({
          content: contentString
     });

     var companyImage = new google.maps.MarkerImage(showImage,
          new google.maps.Size(100,50),
          new google.maps.Point(0,0)
     );

     var companyPos = new google.maps.LatLng(lat,lang);

     var companyMarker = new google.maps.Marker({
   	  position: companyPos,
	  map: map,
	  icon: companyImage,
	  title:imageTitle,
	  zIndex: 3});
          google.maps.event.addListener(companyMarker, 'click', function() {
	         infowindow.open(map,companyMarker);
          });
}

showGoogleMap()
function showGoogleMap(){
    var lat='11.5648212';   // Latitude of location
    var lang='104.8895413';  // Longitude  of location
    var desc='<div>'+
        '<h1>91 Web Lessons</h1>'+
        '<div>'+
        '<p>Gudaspur</p>'+
        '</div>'+
        '</div>';
    var showImage='image/logo_small.png';
    var imageTitle='91 Web Lessons';
    var divId='map_canvas';
    initializeMap(lat,lang,desc,showImage,imageTitle,divId);
}