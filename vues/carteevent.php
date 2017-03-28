<?php

//Hongrie, RFA , Egypte, Birmanie, France




print("

<script>



$(function(){
  var plants = [
    {name: 'EG', coords: [26.78, 29.20], status: 'closed', offsets: [0, 2]},
    {name: 'FR', coords: [47.84, 1.54], status: 'closed', offsets: [0, 2]},
    {name: 'HG', coords: [47.27, 18.78], status: 'closed'},
    {name: 'MM', coords: [21.01, 95.65], status: 'closed'},
    {name: 'RF', coords: [52.34, 8.34], status: 'activeUntil2018'},
    {name: 'VN', coords: [13.05, 106.44], status: 'actionurss'}
  ];

  new jvm.Map({
    container: $('#world-map'),
    map: 'world_mill',
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
      markers: [{
        attribute: 'image',
        scale: {
          'closed': 'images/info25.png',
          'activeUntil2018': 'images/info25.png',
          'activeUntil2022': 'images/info25.png',
          'actionurss': 'images/iconurss25.png'
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