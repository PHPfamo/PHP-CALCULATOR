

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>


<div id="wrapper">
<header>
<?php 



include 'classes/class_main_calculator.php';

if (isset($_POST['calc_it'])) {
	$prvo_polje= $_POST['first_number'];
	$drugo_polje= $_POST['second_number'];
	$operation=$_POST['operation'];	


				switch ($operation) {
					case '+':
					$racunaj_me= new Calculator($prvo_polje, $drugo_polje);
					$racunaj_me->sabiranje();
						break;
					case '-':
					$racunaj_me= new Calculator($prvo_polje, $drugo_polje);
					$racunaj_me->oduzimanje();
						break;
					case '/':
					$racunaj_me= new Calculator($prvo_polje, $drugo_polje);
					$racunaj_me->dijeljenje();
						break;
					case '*':
					$racunaj_me= new Calculator($prvo_polje, $drugo_polje);
					$racunaj_me->mnozenje();
						break;			
						
					default:
						echo "Use two input fields for basic math operations.";
						break;
				}

}



 ?>	
</header>

<section>

<form action="index.php" method="POST" accept-charset="utf-8">
 	

			<input type="text" name="first_number" class="polje" 
            placeholder="Molimo unesite prvu cifru..."
            
            value="<?php if(isset($prvo_polje)){echo $prvo_polje;} ?>">
			<p><select name="operation" id="oprt">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
				
			</select></p>
			<p><input type="text" name="second_number"  class="polje" 
            placeholder="Molimo unesite drugu cifru..."
            
            
            value="<?php if(isset($drugo_polje)){echo $drugo_polje;} ?>"></p>			
            <p><input type="submit" name="calc_it"  id="dugme" value="IZRAČUNAJ"></p>




 	</form>


</section>
<footer>
Developed by Muris Mulahalilović
</footer>
</div>

	

 

</body>
</html>





