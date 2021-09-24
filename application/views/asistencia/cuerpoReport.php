 <style type="text/css">
 
 .vertical{

  /* -webkit-writing-mode:vertical-lr;*/
  writing-mode: vertical-rl;
 }
 .vertical2{

-webkit-writing-mode:vertical-lr;*/

}
 
 </style>


  <div class="content-wrapper">
 
 
    
   

 
       
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            
          

            <div class="card">
              <div class="card-header">
                <h1 >Lista de Asistencia </h1>

              </div>
  
            <div class="card">
              <div class="card-header">
              <a target="_blank" href="<?php echo base_url(); ?>index.php/reportes/pdfSS" >
              
              <button  class="btn btn-primary mb-3">pdf </button>
                               </p>
              </a>

              </div>
         
            
         
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th >#</th>
                  <th   >Nombre </th>
                  <?php 
                  $n=" ";
                
foreach ($Asistencia->result() as $row6) 
{ 
  //if($n!=fechaAsistencia($row6->fechaRegistro)){


  
  ?>

      
 <th class="vertical">  
      <?php  
      
      echo  fechaAsistencia($row6->fechaRegistro)." ";
      
      ?>
        
    </th>  
     
      

 <?php
 
//}

$n=fechaAsistencia($row6->fechaRegistro);

}
?>



<th   >Asistencia</th>
<th   >Fatas</th>
<th   >Licencia</th>
                             
                         

                  
                       

                  </tr>
                  </thead>
                  <tbody>
                 


                  <?php
$indice=1;
$num=0;
$fechaN="f";
$fechaA=" ";
$f=0;
foreach ($tarjeta->result() as $row) 

{
  if($row->idestudiante!=null){
  
  ?> 
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php  
      
      echo $row->nombre  ;
      
      ?>
      </td>
      

    
      
    
      <?php   
      
      
      ?>




<?php 
                  $n=" ";
                  $A=0;
                  $f=0;
                  $l=0;
foreach ($Asistencia->result() as $row6) 
{ 
  //if($n!=fechaAsistencia($row6->fechaRegistro)){


  
  ?>

      
<td><?php  if($row->codigo==$row6->codigo){

  if($row6->temperaturra>36){

    echo "L";
    
  }else{

    echo "A";
  }

 

}   
else{
echo "F";
}                            

?></td>

     
      

 <?php
 
//}

$n=fechaAsistencia($row6->fechaRegistro);

}
?>






<?php 
                  $n=" ";
                 
foreach ($Asistencia->result() as $row6) 
{ 
  //if($n!=fechaAsistencia($row6->fechaRegistro)){


    if($row->codigo==$row6->codigo){

      if($row6->temperaturra>36){

        $l=$l+1;
        
      }else{
    
        $A=$A+1;
      }


     
    }else{

      $f=$f+1;
    }
  ?>

 <?php
    
//}

$n=fechaAsistencia($row6->fechaRegistro);

}
?>




<td><?php  

echo  $A;                          

?></td>

      
<td><?php  

echo $f;                          

?></td>
<td><?php  

echo $l;                          

?></td>

                        
                            




   
   <?php

?>  
     
      
     <?php  
$indice++;

?>
   
  <?php

}

}


?>
                           




</tr>

                  </tbody>
                  <tfoot>
                  <tr>
                        
                         <th class="cell" scope="col">#</th>
                        
                        <th class="cell"scope="col">Nombre </th>


                        <?php 
                  $n=" ";
foreach ($Asistencia->result() as $row6) 
{ 
  //if($n!=fechaAsistencia($row6->fechaRegistro)){


  
  ?>

      
 <th class="vertical2">  
      <?php  
      
      echo  fechaAsistencia($row6->fechaRegistro);
      
      ?>
        
    </th>  
     
      

 <?php
//}
$n=fechaAsistencia($row6->fechaRegistro);
}
?>
<th   >Asistencia</th>
<th   >Fatas</th>
<th   >Licencia</th>
                        
                      </tr>
                  </tfoot>
                </table>
              </div>
            
            </div>
          
          </div>
        
        </div>
      
      </div>
   
    </section>












