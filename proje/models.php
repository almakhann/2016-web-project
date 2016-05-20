<style>
	 .asd {
		margin: 0;
		padding-left: 10px;
		float: right;	
	}
	.asd img{
		padding-right: 45px;
		margin-right: 25px;
		padding-top: 25px;
		width: 660px;
	}
</style>

<div class="body">
    <div class="models">			
	    <div class="chiron"><hr><p>CHIRON</p></div>
	    <div class="chiron1">
	      	<hr><a onclick="v5()">Chiron »</a><hr>
	    </div>

	    <div class="veyron"><p>VEYRON</p></div>
	    <div class="veyron1">	      		
	      	<a onclick="v1()" >Veyron 16.4 »<hr></a> 	      	
	      	<a onclick="v2()" >Veyron 16.4 Grand Sport »<hr></a>
	      	<a onclick="v3()" >Veyron 16.4 Super Sport »<hr></a>
	      	<a onclick="v4()" >Veyron 16.4 Grand Sport Vitesse »</a><hr>	      		
	    </div>
    </div>

    <div class="asd"><img src="section/img/97.jpg" id='v10'/></div>



    <script>
    	function v1(){
    		document.getElementById("v10").src = "section/img/98.jpg"; 
    	}function v2(){
    		document.getElementById("v10").src = "section/img/95.jpg"; 
    	}function v3(){
    		document.getElementById("v10").src = "section/img/94.jpg"; 
    	}function v4(){
    		document.getElementById("v10").src = "section/img/93.jpg"; 
    	}function v5(){
    		document.getElementById("v10").src = "section/img/99.jpg"; 
    	}
    </script>


</div>



