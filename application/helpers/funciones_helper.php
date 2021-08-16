        <?php

  function informacion($temperatura)

  {
  	if ($temperatura>36) 
  	{
  		
  		$estado="TEmperatura Elevada Tomar en cuenta";
  	}
  	else
  	 {
  		$estado="Temperatura Normal";
  	}
  	return $estado;



  }

    function fechaAgregar($anio,$mes,$dia,$hora)
    /*2012-06-18 19:10:56*/
/*2021-08-21 13:29:39*/
  {
  
  
   $anio=substr($fecha,0,4);
   $mes=substr($fecha,5,2);
   $dia=substr($fecha,8,2);
   $hora=substr($fecha,11,5);
   $fech=$anio."-".$mes."-".$dia." ".$hora.":00:00";


  }

   function fechaHora($fecha,$hora)
    /*2012-06-18 19:10:56*/
/*2021-08-21 13:29:39*/
  {
  
  
 
   $fech=$fecha." ".$hora.":00:00";


  }



    function fechacambiar($fecha,$hora)
 
/*17-08-2021*/
  {
  
   $dia=substr($fecha,0,2);
    $mes=substr($fecha,3,2);
   $anio=substr($fecha,6,4);

  
  
  
   $fech=$anio."-".$mes."-".$dia." ".$hora.":00:00";

    return $fech;
  }



 function agendaNobre($id)

  {
    
 $intancia =& get_instance();

    return $aula;



  }

 
function id($dato)
 
/*17-08-2021*/
  {
  
   $cadena=substr($dato,0,1);
    
  $cadena=$dato;
  
  

    return $cadena;
  }

















  function login($nombre,$ci)
 

    {
    
     $n=substr($nombre,0,2);
      
     
  
     $login=$n.$ci;
    
    
     
  
      return $login;
    }
    
  function limiteCovid($cantidad,$limteCovid)
  {
  
   $n=($cantidad*$limteCovid)/100;
    
   

 
  
  
   

    return $n;
  }
  
  ?>
