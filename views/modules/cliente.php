<?php

if( empty(session_id()) && !headers_sent()){
	session_start();
}


if(!$_SESSION["validar"]){

	echo '<script>window.location="index.php?action=ingresar"</script>';

	exit();

}
if($_SESSION["roles_id"] != 2){
  echo '<script>window.location="index.php?action=ingresar"</script>';



}


  ?>


<h1>CLIENTE</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, laboriosam ad earum sunt, harum ab, quam iste dolorum<br> excepturi a vitae recusandae fugiat in. Esse nulla alias voluptatibus doloribus? Ab!</p>

    	

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambio"){

		echo "Cambio Exitoso";

	}
}

  ?>