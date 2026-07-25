<?php 
  
require_once __DIR__ . '/src/App/Dominio/Priorizable.php'; 
require_once __DIR__ . '/src/App/Dominio/Item.php'; 
require_once __DIR__ . '/src/App/Dominio/Tarea.php'; 
  
use App\Dominio\Tarea; 
  
$tarea1 = new Tarea('Construir clase Tarea (PHP)', 1); 
$tarea2 = new Tarea('Configurar tablero Kanban', 2); 
  
echo "{$tarea1->titulo()} -> {$tarea1->estado()} (prioridad {$tarea1->prioridad()})" . PHP_EOL; 
echo "{$tarea2->titulo()} -> {$tarea2->estado()} (prioridad {$tarea2->prioridad()})" . PHP_EOL; 
  
$tarea1->mover(1); // 1 = "En progreso" 
echo "Después de mover tarea1: " . $tarea1->estado() . PHP_EOL; 
echo "tarea2 sigue en: " . $tarea2->estado() . " (no se vio afectada)" . PHP_EOL; 