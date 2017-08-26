<?php 
/**
* 
*/
class Controller 
{
	
	function __construct()
	{
		
	}



		public function redirect($url = false)
    {
        if($url){
            header('location:' .  URL . $url);
            exit;
        }
        else{
            header('location:' . URL );
            exit;
        }
    }



    public function renderView($vista,$array = false)
    {

          if (file_exists(VIEWS.$vista))
          {

             extract($array);
             require VIEWS.$vista;
                                          
          }else{
            
            header('location:' . URL );
            exit;

          }

    }

}

?>