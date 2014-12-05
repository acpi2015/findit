<?php
	include "class.Person.php";


	$person = new class Person("Aurore", "Laco", "/img/pict", 1, "small", "normal", "black", 0, 1);

	$person = new Person($value["Aurore"],$value["Laco"],$value["photoPerson"],
						$value["sexPerson"],$value["sizePerson"],$value["corpulencePerson"],$value["hairColorPerson"],
						$value["tatooPerson"],$value["idOrganizationPerson"]);


	echo $person.getFirstname();

?>