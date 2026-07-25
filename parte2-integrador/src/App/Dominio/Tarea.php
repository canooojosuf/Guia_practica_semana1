<?php 
  
namespace App\Dominio; 
  
class Tarea extends Item implements Priorizable 
{ 
    private const COLUMNAS = ['Por hacer', 'En progreso', 'En revisión', 'Hecho']; 
  
    private int $columna = 0; 
    private int $prioridad; 
  
    public function __construct(string $titulo, int $prioridad = 3) 
    { 
        parent::__construct($titulo); 
        $this->prioridad = $prioridad; 
    } 
  
    public function mover(int $indice): void 
    { 
        $this->columna = $indice; 
    } 
 public function estado(): string 
    { 
        return self::COLUMNAS[$this->columna]; 
    } 
  
    public function prioridad(): int 
    { 
        return $this->prioridad; 
    } 
} 