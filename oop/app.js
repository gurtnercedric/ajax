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
    if(!bauart){
      var checkbauart = true;

    }
  }

  if(check) {
    var html = '<div class="autoausgabe">\
                <h4>Javascript Information</h4>\
                <ul>\
                <li>Name      : '+name+'</li>\
                <li>Farbe     : '+farbe+'</li>\
                <li>Bauart    : '+bauart+'</li>\
                <li>Kraftstoff: '+kraftstoff+'</li>\
                </ul></div>';
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
        $('#ergebnis').html('').addClass('hidden');
        $('#submitbutton').attr('disabled', true).addClass('hidden');
        //$('button[name=submitbutton]')
      },
      success: function(response){
        console.log('success: ' + response);
        $('#ergebnis').html(html).removeClass('hidden');
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
