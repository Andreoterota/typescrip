function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
  
  var marker = new google.maps.Marker({
    position: {lat: 4.603548, lng: -74.053169},
    map: map,
    title: 'Cerro de Monserrate'
  });
  
  var marker = new google.maps.Marker({
    position: {lat: 4.683814, lng: -73.816421},
    map: map,
    title: 'Parque Nacional Natural Chingaza'
  });
  
  var marker = new google.maps.Marker({
    position: {lat:4.873458, lng: -74.028347},
    map: map,
    title: 'Quebrada La Vieja'
  });


  var marker = new google.maps.Marker({
    position: {lat: 4.796868, lng:  -74.154366},
    map: map,
    title: 'Cerro La Conejera'
  });

  var marker = new google.maps.Marker({
    position: {lat: 4.507735, lng:-73.925858},
    map: map,
    title: 'Sendero Aguadora'
  });

  var marker = new google.maps.Marker({
    position: {lat:4.4685, lng:74.1207},
    map: map,
    title: 'Quebrada las Delicias'
  });


}
