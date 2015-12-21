var changeFormToOrg = function(){
	document.getElementById('php-form').innerHTML = '<?php include("form-org.php"); ?>';
};

var buttonOrg = document.getElementById('org-button');
alert(buttonOrg);

if (buttonOrg) {
	buttonOrg.addEventListener('click', changeFormToOrg, false);
	alert("bou");
};