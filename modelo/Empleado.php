

<!DOCTYPE html>
<html>
<head>
  <title>empleado</title>
</head>
<body>

  <?php 
class Empleado{
  private $categoria;
  private $tarifa;
  private $tarifaExtras;
  private $salario;
  private $horasTrabajadas;
  private $horasExtras;
  private $horasNormales;

    function Empleado($cate,$horas){
      $this->categoria=$cate;
      $this->horasTrabajadas=$horas;
    }
    function establecerTarifa(){
      switch ($this->categoria) {
        case 1:

            if ($this->horasTrabajadas>0) {
              $this->tarifa=12000;
              $this->tarifaExtras=($this->tarifa)+(12000*0.25);
            }else{
              echo "numero de horas no permitido";
            }
          
          break;

        case 2:

            if ($this->horasTrabajadas) {
              $this->tarifa=17000;
              $this->tarifaExtras=($this->tarifa)+(17000*0.25);
            }else{
              echo "numero de horas no permitido";
            }
          
          break;
        
        case 3:

            if ($this->horasTrabajadas) {
              $this->tarifa=22000;
              $this->tarifaExtras=($this->tarifa)+(22000*0.25);
            }
          
          break;
        default:
          echo "error de categoria";

          break;


      }
    }
      //------------------------------------------------------------------------------
      function calcularSalario(){
     
        if ($this->horasTrabajadas>0 ) {
    
            if ($this->horasTrabajadas<41) {
               $this->horasNormales=$this->horasTrabajadas;
                $this->salario=$this->horasNormales*$this->tarifa;
        $this->horasExtras=0;
            }
            if($this->horasTrabajadas>40){
              for ($i=40; $i < $this->horasTrabajadas ; $i++) { 
            $this->horasExtras++;
            $this->horasNormales=40;
              }
               $this->salario=($this->horasNormales*$this->tarifa)+($this->horasExtras*$this->tarifaExtras);
            }
  
        }

     /* if ($this->horasTrabajadas>0) {
          if ($this->horasTrabajadas<41) {
        $this->salario=$this->horasNormales*$this->tarifa;
        $this->horasExtras=0;
      }else{
        $this->salario=($this->horasNormales*$this->tarifa)+($this->horasExtras*$this->tarifaExtras);
     }
  
  }*/
}


  function mostrarResultados(){


  echo "<table> <tr><td >Categoria: </td><td colspan='3'>$this->categoria</td></tr>"
  ."            <tr> <td>Tarifa hora normal: <td>$this->tarifa</td> "
  ."             <td>Tarifa hora extra :<td>$this->tarifaExtras</td> </tr>"
  ."            <tr><td>Horas normales trabajadas: </td><td>$this->horasNormales</td>"
  ."                <td>Valor: </td><td>".$this->tarifa*$this->horasNormales."</td><tr>"
  ."            <tr><td>Horas extras trabajadas:   </td><td>$this->horasExtras</td>"
  ."                <td>Valor: </td><td>".$this->tarifaExtras*$this->horasExtras."</td></tr>"
  ."            <tr><td >Total horas trabajadas: </td><td colspan='3'>$this->horasTrabajadas</td></tr>"
  ."            <tr><td >Salario: </td><td colspan='3'>$this->salario</td></tr> </table>";




    
   
  }
  
      
      

}

?>


   

</body>
</html>

