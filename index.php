<head>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="app.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
	margin: 0%;
	padding: 5%;
	background-color: #B7E1FF; 
}
.formclass {
	background-color: #ffffff;
	padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 30px;
	border-radius: 18px; 
	border:5px solid #1A1A1B;
}

#ergebnis {
	border-radius: 18px; 
	border:2px solid #1A1A1B;
}




</style>

</head>

<body>

	 <div class="containter">
		<div class="row"
			<div class="col-md-12">
			<center><strong><h1>Autobestellungen</h1><strong></center>
			<br><br>
			<div class="formclass">
			<form method="post">
            <form class="form-inline">
              <div class="form-group">
                <label for="name">Fahrzeugname</label>
                <input  class="form-control"
                        type="text"
                        name="name"
                        value=""
                        placeholder="Fahrzeugname"
                        id="name"

                ></div>
                <div class="form-group">
                  <label for="color">Autofarbe</label>
                  <input  class="form-control"
                          type="color"
                          name="farbe"
                          value="#BFC1C2"
                          placeholder=""
                          id="color"

                ></div>
                <label for="bauart">Bauart</label>
                <div class="form-group">
                  <select name="bauart" id="bauart" class="form-control">
                    <option value="Kombi">Kombi</option>
                    <option value="Cabrio">Cabrio</option>
                    <option value="Limousine">Limousine</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input disabled class="form-control"
                          type="number"
                          name="age"
                          value=""
                          placeholder="Alter"
                          id="age"
                  ></div>
                <label for="email">Kraftstoff</label>
                <div class="form-group">
                  <input  class="form-control"
                          type="kraftstoff"
                          name="kraftstoff"
                          value=""
                          placeholder="Kraftstoff"
                          id="kraftstoff"

                ></div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Ich akzeptiere die allgemeinen Geschäftsbedingungen</label>
                </div>
                <div class="radio">
                  <label class="radio-inline"><input type="radio" value="">Ich möchte jetzt eine Mail erhalten</label>
                </div>
                <div class="radio">
                  <label class="radio-inline"><input type="radio" value="">Ich möchte später eine Mail erhalten</label>
                </div>
                <div class="radio">
                  <label class="radio-inline"><input disabled type="radio" value="">Ich möchte keine Mail erhalten</label>
                </div>

                <div class="form-group">
                  
                  <button onclick="firstFunction()" type="button" name="javabutton" class="btn btn-danger"><i class="fa fa-coffee "></i> Javascript
                  </button>
                </div>
          </form>
		  <br>
		  
		  
		  
			<table id="ergebnis" class="table">
			<thead>
			<td class="formhead"><h3>Name</h3></td>
			<td class="formhead"><h3>Farbe</h3></td>
			<td class="formhead"><h3>Bauart</h3></td>
			<td class="formhead"><h3>Kraftstoff</h3></td>
			<td class="formhead"><h3>Betankungen</h3></td>
			</thead>
			
			<tbody>
			
			
			</tbody>
			
			</table>
			
			
			</div>
			</div>
		</div>
	</div>
	
	
	



</body>