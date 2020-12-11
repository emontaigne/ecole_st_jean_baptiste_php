
	<div class = "form">
		<h2>Connexion</h2>
	
	<form action="#" method="post">
		<div>
		<label for="login">Login :</label>
    	<input type="text" name="login" id="login" value="<?= $login; ?>">
			<span style='color:green;' hidden>&#10004;</span>
			<span style='color:red;' hidden>&#10008;</span>
		   	
		</div>
	    <div>
	    	<label for="mdp">Mot de passe :</label>
		    <input type="Password" name="mdp" id="mdp" value="<?= $mdp; ?>">
		    
		<!--	<select class="form-control" name ="role">
        <option value="" selected="selected"> - Selectionner un rôle - </option>
        <option value="admin">Admin</option>
        <option value="user">Parent</option>
    </select>-->

		</div>
		<div class = "connexion">
		<button  type="submit" name="submit" value="Connexion" id='btnSubmit'>Connexion</button>
</div>
	</form>
</div>
<script>
	/*function checkInput(){
		let regex = new RegExp('^[a-z]{2,}$', 'i');
		console.log(login.value);
		console.log(mdp.value);
		if(regex.test(login.value) && regex.test(mdp.value))
		{
			btnSubmit.disabled=false;
			btnSubmit.style.color="white";
			btnSubmit.style.backgroundColor="green";
			
			
		}
		else {
			btnSubmit.disabled=true;
			btnSubmit.style.color="white";
			btnSubmit.style.backgroundColor="red";
			
		}
	}

	login.addEventListener("input", function(){
		console.log(login);
		let regex = new RegExp('^[a-z]{2,}$', 'i');
		if(regex.test(login.value))
		{
			// ok
			login.style.border="1px solid green";
			// afficher v
			login.nextElementSibling.style.display = "inline-block";
			// cache x
			login.nextElementSibling.nextElementSibling.style.display = "none";
			
		}
		else {
			// ko
			login.style.border = "1px solid red";
			// cacher v
			login.nextElementSibling.style.display = "none";
			// afficher x
			login.nextElementSibling.nextElementSibling.style.display = "inline-block";
		}
		checkInput();
	});

	mdp.addEventListener("input", function(){
		if(mdp.value === "jeromedb")
		{
			mdp.style.border="1px solid green";
		}
		else {
			mdp.style.border = "1px solid red";
		}
		checkInput();
	});*/





</script>

