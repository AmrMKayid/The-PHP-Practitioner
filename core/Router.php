<?php 

/**
 * 
 */
class Router
{

	protected $routes = [];


	public static function load($file) {

		$router = new static;

		require $file;

		return $router;
	}
	
	function define($routes)
	{
		$this->routes = $routes;
	}

	public function direct($uri) {

		if(array_key_exists($uri, $this->routes )) {
			return $this->routes[$uri];
		}


		throw new Exception("Route is not found!", 1);
		
	}
}


 ?>