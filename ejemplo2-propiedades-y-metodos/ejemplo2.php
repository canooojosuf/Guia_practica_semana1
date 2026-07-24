<?php 
class Tarea 
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
  
$t1 = new Tarea("Diseñar wireframe"); 
$t2 = new Tarea("Revisar presupuesto"); 
$t3 = new Tarea("Tu propia tarea");
$t4 = new Tarea("Pizza");

$t4->comer();
$t1->mover(); 
$t2->mover();   
$t3->mover(); 