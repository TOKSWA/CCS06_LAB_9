<?php

require "config.php";

use App\Pets;


try {
	Pets::register('Jondi', 'Male', '2008-10-05', ' James Anino', 'a.james@auf.edu.ph', 'Gutad Floridablaca Pampanga', '09107018398');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'pet_name' => 'Bugoy',
			'pet_gender' => 'Male',
			'pet_birthdate' => '2010-07-15',
			'pet_owner' => 'James Anino',
			'email' => 'anino.jamesharold@auf.edu.ph',
			'address' => 'Gutad Floridablanca Pampanga',
			'contact_number' => '09166687708',
			
		],
		[
			'pet_name' => 'Dorbek',
			'pet_gender' => 'Male',
			'pet_birthdate' => '2011-09-09',
			'pet_owner' => 'Shaina Villanueva',
			'email' => 'villanueva.shaina@auf.edu.ph',
			'address' => 'San Nicolas Floridablanca Pampanga',
			'contact_number' => '09463301184',
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}