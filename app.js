function firstFunction(){
  console.log('Applikation initialisiert....');
//  var check = false;
  var name = $('#name').val();
  var kraftstoff = $('#kraftstoff').val();
  var farbe = $('#color').val();
  var bauart = $('#bauart').val();

  if(name && kraftstoff && bauart) {
    check = true;
  }else{
    if(!name){
      var checkname = true;
    }
    if(!kraftstoff){
      var checkks = true;
    }
  }

  if(check) {

    var warnung = '<div class="fehler">\
                <h4>Es wurden falsche Daten erkannt!</h4>\
                </div>';

    /*console.log(name);
    console.log(kraftstoff);
    console.log(color);
    console.log(bauart);*/
    $('#name').val(name);

    //console.error('ACHTUNG!');
    //console.warn('WARNUNG!');
    //if(!name && !kraftstoff && !bauart){

    $.ajax({
      type:"POST",
      url:"ajax.php",
      data: { name: name, kraftstoff: kraftstoff, farbe: farbe, bauart: bauart },
      dataType: "JSON",
      beforeSend: function(){
        console.log('Daten werden abgerufen...');
        $('#ergebnis').addClass('hidden');
        $('#submitbutton').attr('disabled', true).addClass('hidden');
        //$('button[name=submitbutton]')
      },
      success: function(daten){
        console.log('success: ' + daten);
		if (daten.status) {	
			var html = '<tr>\
						<td class="capitalize">'+daten.name+'</td>\
						<td class="uppercase" style="color:'+ daten.farbe+'">\
							'+daten.farbe+'\
						</td>\
						<td class="capitalize">'+daten.bauart+'</td>\
						<td class="capitalize">'+daten.kraftstoff+'</td>\
						<td class="capitalize"></td>\
					</tr>';
							
			
        $('#ergebnis').append(html).removeClass('hidden');
		}
		
      },
      error: function(error){
        console.log('fehler: ' + error);
        $('#ergebnis').html(warnung).removeClass('hidden');
      },
      complete: function(){

      },
    });
  }
//  }

}
