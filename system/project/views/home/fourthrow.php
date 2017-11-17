<div class="container-fluid fourthrow" id="fourthrow">
	<div class="row">
		<div class="col-lg-5 col-md-5 col-sm-4 col-xs-6 col-lg-offset-1 col-md-offset-1 niet-alles-zelf-doen" id="niet-alles-zelf-doen">
			<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12">
				<h2>Niet alles zelf doen?</h2> 
				<p>neem deel aan één van onze workshops en wordt in 8 uur klaargestoomd 
				voor jouw crypto-avontuur. Tijdens de workshop worden alle aspecten en
				procedures uit het e-Book 2.0 behandeld.</p>			
			</div>
			<div class="col-lg-5 col-md-5 cold-sm-12 col-xs-12"><button class="inschrijven-workshop-maastricht-button inschrijven-knop" id="inschrijven-workshop-maastricht-button">Maastricht</button></div>
			<div class="col-lg-5 col-md-5 cold-sm-12 col-xs-12"><button class="inschrijven-workshop-amsterdam-button inschrijven-knop" id="inschrijven-workshop-amsterdam-button">Amsterdam</button></div>
		</div>
	</div>
</div>



<!-- The Modal MAASTRICHT -->
<div id="modal-button-maastricht" class="modal-button-maastricht">

  <!-- Modal content -->
  <div class="modal-content">
      <span class="sluiten-maastricht" id="sluiten-maastricht">Pop-up sluiten</span>
      <h1 class="modal-locatie-header" id="modal-locatie-header">Locatie Maastricht</h1>
    <table>
      <tr>
        <th><strong>Datum</strong></th>
        <th><strong>Dag</strong></th>
        <th><strong>Topic</strong></th>
        <th><strong>Starttijd</strong></th>
        <th><strong>Eindtijd</strong></th>
        <th><strong>Inschrijven</strong></th>
        <th><strong>Vrije plekken</strong></th>

      </tr>

      <tr>
        <td>4 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-danger inschrijven-knop-modal-vol" disabled>vol</button></td>
        <td>0/10</td>
      </tr>

      <tr>
        <td>11 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-danger inschrijven-knop-modal-vol" disabled>vol</button></td>
        <td>0/10</td>
      </tr>

      <tr>
        <td>18 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-info inschrijven-knop-modal-vrij">inschrijven</button></td>
        <td>4/10</td>
      </tr>

      <tr>
        <td>25 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-info inschrijven-knop-modal-vrij">inschrijven</button></td>
        <td>8/10</td>
      </tr>

    </table>
  </div>

</div>


<!-- The Modal Amsterdam -->
<div id="modal-button-amsterdam" class="modal-button-amsterdam">

  <!-- Modal content -->
  <div class="modal-content">
      <span class="sluiten-amsterdam" id="sluiten-amsterdam">Pop-up sluiten</span>
      <h1 class="modal-locatie-header" id="modal-locatie-header">Locatie Amsterdam</h1>
    <table>
      <tr>
        <th><strong>Datum</strong></th>
        <th><strong>Dag</strong></th>
        <th><strong>Topic</strong></th>
        <th><strong>Starttijd</strong></th>
        <th><strong>Eindtijd</strong></th>
        <th><strong>Inschrijven</strong></th>
        <th><strong>Vrije plekken</strong></th>

      </tr>

      <tr>
        <td>4 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-danger inschrijven-knop-modal-vol" disabled>vol</button></td>
        <td>0/10</td>
      </tr>

      <tr>
        <td>11 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-danger inschrijven-knop-modal-vol" disabled>vol</button></td>
        <td>0/10</td>
      </tr>

      <tr>
        <td>18 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-info inschrijven-knop-modal-vrij">inschrijven</button></td>
        <td>4/10</td>
      </tr>

      <tr>
        <td>25 NOV</td>
        <td>ZAT</td>
        <td>Cryptovaluta begrijpen, handelen en investeren.</td>
        <td>9:00 uur</td>
        <td>17:00 uur</td>
        <td><button class="btn-info inschrijven-knop-modal-vrij">inschrijven</button></td>
        <td>8/10</td>
      </tr>

    </table>
  </div>

</div>

<script type="text/javascript">


  //JAVASCRIPT MAASTRICHT
  
  var modalMaastricht = document.getElementById('modal-button-maastricht');
  var btnMaastricht = document.getElementById("inschrijven-workshop-maastricht-button");
  console.log(btnMaastricht);
  var sluiten = document.getElementById("sluiten-maastricht");

  btnMaastricht.onclick = function() {
    modalMaastricht.style.display = "block";
  }

  sluiten.onclick = function() {
    modalMaastricht.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
        modalMaastricht.style.display = "none";
      }
  }


   //JAVASCRIPT AMSTERDAM

  var modalAmsterdam = document.getElementById('modal-button-amsterdam');
  var btnAmsterdam = document.getElementById("inschrijven-workshop-amsterdam-button");
  console.log(btnAmsterdam);
  var sluiten = document.getElementById("sluiten-amsterdam");

  btnAmsterdam.onclick = function() {
    modalAmsterdam.style.display = "block";
  }

  sluiten.onclick = function() {
    modalAmsterdam.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
        modalAmsterdam.style.display = "none";
      }
  }

</script>

<style type="text/css">

#fourthrow {
	padding-top: 15%;
	padding-bottom: 20%;
}

.inschrijven-knop {
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #c6a700;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  border: none;
  width: 100%;
  margin-top: 10%;
}

.inschrijven-knop:hover {
  background: #052453;  
  text-decoration: none;
  border: none;
}

/* The Modal (background) */
.modal-button-maastricht {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* The Modal (background) */
.modal-button-amsterdam {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.sluiten-maastricht {
    color: #aaa;
    float: right;
    font-size: 12px;
    font-weight: bold;
}

/* The Close Button */
.sluiten-amsterdam {
    color: #aaa;
    float: right;
    font-size: 12px;
    font-weight: bold;
}

.sluiten-maastricht:hover,
.sluiten-maastricht:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.sluiten-amsterdam:hover,
.sluiten-amsterdam:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.inschrijven-knop-modal-vrij {
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  background: #c6a700;  
  border: none;
  width: 100%;  
}

.inschrijven-knop-modal-vrij:hover {
  background: #052453;    
}

.inschrijven-knop-modal-vol {
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  background: #052453;
  text-decoration: none;
  border: none;
  width: 100%;  
}

th {
    background-color: #052453;
    color: white;
}

th, td {
    padding: 25px 15px;
    text-align: left;
}



</style>