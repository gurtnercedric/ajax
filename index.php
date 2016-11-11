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
	margin: 5%;
	padding: 5%;
	background-color: #74C3FB; 
}




</style>

</head>

<body>

	 <div class="containter">
		<div class="row"
			<div class="col-md-12">
			
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
                          value="#ff0000"
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
                  <button type="submit" id="submitbutton" name="submitbutton" class="btn btn-info"><i class="fa fa-envelope-o"></i> Submit
                  </button>
                  <button onclick="firstFunction()" type="button" name="javabutton" class="btn btn-danger"><i class="fa fa-coffee "></i> Javascript
                  </button>
                </div>
          </form>
			<div class="ergebnis"></div>
			
			</div>
		</div>
	</div>
	
	
	



</body>