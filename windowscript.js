
//functions de management de la fenêtre modale
      function openModal(page, canBeClosed, datapost) //exemple page = "events/payday/paydayEvent.php"
      { 
      
        var modal = document.getElementById("eventModal");
      
        //remplir la modale
        $.post(page,{datapost:datapost},
          function(data){         
            $("#eventContent").html(data);  
            modal.style.display = "block";
          });

        if(canBeClosed)
        {
          // Fermer la fenêtre modale en cliquant à l'extérieur
          window.onclick = function(event) 
          {
              if (event.target == modal) 
              {
                 modal.style.display = "none";
                 
              }
          }
        }
      }

      function closemodal(){
        var modal = document.getElementById("eventModal");
        modal.style.display = "none";
        
      }
  
      // Créer la carte dans la div carte du monde
      $(function(){
        $('#world-map').vectorMap({
        	map: 'world_mill',
        	backgroundColor: '#030019',
          regionStyle: {initial:{fill: '#BDBFBD'}},
          
    		 onRegionClick:function(e,code) 
    		 {
    		 	openModal('vues/pays.php', true,code);
    		 }



        });
		 
         
         
      });

      //Afficher le budget

    $('#money').click(function(){		
		
		  openModal('vues/budget.php', true,"budget");
		  $('#money').html('le Flouz quoi !');
		});

      //USSRpts

      $('#USSRpts').click(function(){		
		
		openModal('vues/budget.php', false,"scoreurss");
		
		});


    // Boutons d'Affichages de carte

    $('.btnA').click(function(){      
   
      document.getElementById('world-map').innerHTML = "";
      
      $.getJSON('vues/cartediplomatie.php', function(data){

        $('#world-map').vectorMap({
        map: 'world_mill',
        backgroundColor: '#030019',
        regionStyle: {initial:{fill: '#BDBFBD'}},
        onRegionClick:function(e,code) 
         {
          openModal('vues/pays.php', true,code);
         },
        container: $('#world-map'),
        series: {
          regions: [{
            scale: {
              '1': '#32FF2B',
              '2': '#B22222'
            },
            attribute: 'fill',
            values: data['world']
          }]

        }


        });

      
      });

      
  });

  $('.btnB').click(function(){      
   
      document.getElementById('world-map').innerHTML = "";
      
      $.getJSON('vues/cartehotspot.php', function(data){

        $('#world-map').vectorMap({
        map: 'world_mill',
        //backgroundColor: 'grey',
        backgroundColor: '#030019',
        regionStyle: {initial:{fill: '#BDBFBD'}},
        
        

        onRegionClick:function(e,code) 
         {
          openModal('vues/pays.php', true,code);
         },
        container: $('#world-map'),
        series: {
          regions: [{
            scale: {
              '1': '#FF8114',
              '2': '#FF8114'
            },
            attribute: 'fill',
            values: data['world']
          }]

        }


        });

      
      });

      
  });
