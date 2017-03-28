<?php

/*$hotspot='{"world":{"CA":1,"US":1,"RU":1}}';


print($hotspot);
*/



print("
<script>
$(function(){
  var plants = [
    {name: 'EG', coords: [26.78, 29.20], status: '1', offsets: [0, 2]},
    {name: 'FR', coords: [47.84, 1.54], status: '1', offsets: [0, 2]},
    {name: 'RF', coords: [52.34, 8.34], status: '2'},
    {name: 'VN', coords: [13.05, 106.44], status: '1'}
  ];

  
  new jvm.Map({
    container: $('#world-map'),
    map: 'world_mill',
    backgroundColor: '#030019',
    markers: plants.map(function(h){ return {name: h.name, latLng: h.coords} }),
    onRegionClick:function(e,code) 
      {
          openModal('vues/pays.php', true,code);
      },  
      onMarkerClick:function(e,code) 
      {
          openModal('vues/pays.php', true,code);
      },   
    series: {
      
      regions: [{
            attribute: 'fill',
            scale: {
              1: '#FF8114',
              2: '#FF8114'
            },
            values: {
            	'EG':'1',
            	'FR':'1',
            	'RF':'2',
            	'VN':'2',
            }
      }],

      markers: [{
        attribute: 'image',
        scale: {
          1: 'images/fist25.png',
          2: 'images/bomb25.png',
          
        },
        values: plants.reduce(function(p, c, i){ p[i] = c.status; return p }, {}),
        markersSelectable: true,
        
      }]
    }
  });
});



</script>
	");





?>