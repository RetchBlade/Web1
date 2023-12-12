<?php
class Fahrzeug{
   protected $aktuelleGeschwindigkeit = 0;
   private $hoechstGeschwindigkeit = 0;

   function __construct($maxV = 180){
      $this ->hoechstGeschwindigkeit = $maxV;
   }

   public function stoppeMotor(){
      $this ->gestartet = false;
   }

   public function starteMotor(){
      $this ->gestartet = true;
   }

   public function beschleunige($betrag){
      if ($this ->gestartet){
         $this ->aktuelleGeschwindigkeit += $betrag;
            if($this ->aktuelleGeschwindigkeit > $this ->hoechstGeschwindigkeit){
               $this ->aktuelleGeschwindigkeit = $this ->hoechstGeschwindigkeit;
            }
         }
      }

       public function bremse($betrag){
         if ($this ->gestartet){
            if($betrag <= $this ->hoechstGeschwindigkeit){
               $this ->aktuelleGeschwindigkeit = $this ->aktuelleGeschwindigkeit - $betrag;
                  }else{
                     $this ->aktuelleGeschwindigkeit = 0;
                  }
            }
         }

      public function getHoechstGeschwindigkeit(){
         return $this ->hoechstGeschwindigkeit;
      }

      public function getAktuelleGeschwindigkeit(){
         return $this ->aktuelleGeschwindigkeit;
         }
   }

   $pkw = new Fahrzeug(200);
   $lkw = new Fahrzeug(100);

   $pkw->starteMotor();
   $lkw->starteMotor();

   echo "<p>Starte Rennen </p>";
   for($i = 0; $i < 5; $i++){
      $pkw->beschleunige($i*15);
      $lkw->beschleunige($i*8);
      echo "<p>";
      echo "PKW: " . $pkw->getAktuelleGeschwindigkeit();
      echo "<br />";
      echo "LKW: " . $lkw->getAktuelleGeschwindigkeit();
      echo "</p>";
   }
   
   echo "<p>Gewonnen: " . ($pkw->getAktuelleGeschwindigkeit() > $lkw->getAktuelleGeschwindigkeit()? "PKW!" : "LKW!");

   $pkw->bremse($pkw->getHoechstGeschwindigkeit());
   $lkw->bremse($lkw->getHoechstGeschwindigkeit());

   $pkw->stoppeMotor();
   $lkw->stoppeMotor();

?>