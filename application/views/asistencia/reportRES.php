 <style type="text/css">
 
 .vertical{

  /* -webkit-writing-mode:vertical-lr;*/
  writing-mode: vertical-rl;
 }
 
 </style>


  <div class="content-wrapper">
 
 
    
   

 
       
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            
          

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Asistencia</h3>

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
  if($n!=fechaAsistencia($row6->fechaRegistro)){


  
  ?>

      
 <th class="vertical">  
      <?php  
      
      echo  fechaAsistencia($row6->fechaRegistro)." ";
      
      ?>
        
    </th>  
     
      

 <?php
 
}
else{


}
$n=fechaAsistencia($row6->fechaRegistro);

}
?>
<th   >fin </th>



                             
                         

                  
                       

                  </tr>
                  </thead>
                  <tbody>
                 


                  <?php
$indice=1;
$num=0;

foreach ($tarjeta->result() as $row) 

{
  if($row->idestudiante!=null){
  
  ?> 
    <tr>
      <th scope="row"><?php echo $indice; ?></th>

      

    
  

      <td><?php  
      
      echo $row->nombre 
      
      ;
      
      ?></td>
                        <?php 
                  $n=" ";
                $n2=" ";
                $fechaN=0;
                $f=0;        
foreach ($Asistencia->result() as $row6) 
{ 
      $n2=$row6->codigo;
     // $fechaN=$row6->fechaRegistro;

      






   
if($n2==$row->codigo  ){
  $fechaN=1;
  

}
else{

  $f=$f+1;
  $fechaN=0;
}




  if($n!=fechaAsistencia($row6->fechaRegistro)){


  
  ?>

<td><?php  
      
      echo $fechaN."".$f ;

      
      
      ?></td>
 
 <?php
    
    
}
else{


}
$n=fechaAsistencia($row6->fechaRegistro);

}
?>



    

   
   <?php

?>  
     
      
     <?php  
$indice++;


foreach ($tarjeta->result() as $row2) 

{
  
} 

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
  if($n!=fechaAsistencia($row6->fechaRegistro)){


  
  ?>

      
 <th class="vertical">  
      <?php  
      
      echo  fechaAsistencia($row6->fechaRegistro);
      
      ?>
        
    </th>  
     
      

 <?php
}
$n=fechaAsistencia($row6->fechaRegistro);
}
?>
<th   >fin </th>
                        
                      </tr>
                  </tfoot>
                </table>
              </div>
            
            </div>
          
          </div>
        
        </div>
      
      </div>
   
    </section>












