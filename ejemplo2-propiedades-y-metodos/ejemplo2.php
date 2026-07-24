<?php 
class Tarea1 
{ 
    public string $titulo; 
  
    public function __construct(string $titulo) 
    { 
        $this->titulo = $titulo; 
    } 
  
    public function mover(): void 
    { 
        echo "Moviendo: " . $this->titulo . PHP_EOL; 
    } 

    public function comer(): void 
    { 
        echo "Comiendo: " . $this->titulo . PHP_EOL; 
    }
} 
  
$t1 = new Tarea1("Diseñar wireframe"); 
$t2 = new Tarea1("Revisar presupuesto"); 
$t3 = new Tarea1("Tu propia tarea");
$t4 = new Tarea1("Pizza");

$t4->comer();
$t1->mover(); 
$t2->mover();   
$t3->mover(); 