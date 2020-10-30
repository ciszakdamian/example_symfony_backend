<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function hello(): Response
    {

	$bla=array("info"=>"Hello from space4pet backend! :)");
 	
	return new Response(
		json_encode($bla)
	);
    }
}
