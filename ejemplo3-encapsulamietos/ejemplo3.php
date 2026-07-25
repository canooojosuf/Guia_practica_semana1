<?php 
class Tarea3 

{ 
    public int $columna = 0; 
  
    public function mover(int $indice): void 
    { 
        $this->columna = $indice; 
    } 
  
    public function columnaActual(): int 
    { 
        return $this->columna; 
    } 
} 
  
$t = new Tarea3(); 
$t->mover(2); 
echo "Columna actual (vía método público): " . $t->columnaActual() . PHP_EOL; 
  
// Intentamos leer la propiedad privada directamente, sin pasar por el método: 
//try { 
    echo $t->columna; 
//} catch (\Error $e) { 
    //echo "Error controlado: " . $e->getMessage() . PHP_EOL; 
//} 