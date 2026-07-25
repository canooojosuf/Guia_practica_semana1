<?php 
  
require_once __DIR__ . '/src/App/Dominio/Priorizable.php'; 
require_once __DIR__ . '/src/App/Dominio/Item.php'; 
require_once __DIR__ . '/src/App/Dominio/Tarea.php'; 
  
use App\Dominio\Tarea; 
  
$tarea1 = new Tarea('Construir clase Tarea (PHP)', 1, new \DateTimeImmutable()); 
$tarea2 = new Tarea('Configurar tablero Kanban', 2, new \DateTimeImmutable()); 
$tarea3 = new Tarea('Tarea del pasado vencida', 3, new \DateTimeImmutable()->modify('-5 day')) ;    
$tarea4 = new Tarea('Tarea del futuro vencida', 4, new \DateTimeImmutable()->modify('+5 day')) ; 


echo "{$tarea1->titulo()} -> {$tarea1->estado()} (prioridad {$tarea1->prioridad()})" . PHP_EOL; 
echo "{$tarea2->titulo()} -> {$tarea2->estado()} (prioridad {$tarea2->prioridad()})" . PHP_EOL; 

echo "Después de mover tarea1: " . $tarea1->estado() . PHP_EOL; 
echo "tarea2 sigue en: " . $tarea2->estado() . " (no se vio afectada)" . PHP_EOL; 
echo "tarea del pasado vencida: " . ($tarea3->esVencida(new \DateTimeImmutable()) ? "Sí" : "No") . PHP_EOL;
echo "tarea del futuro vencida: " . ($tarea4->esVencida(new \DateTimeImmutable()) ? "Sí" : "No") . PHP_EOL;