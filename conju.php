<?php
$verbe = $_POST['verbe'];

$l=strlen($verbe);

$er= substr($verbe,$l-2,2);
if ($verbe!="aller") {

 if ($er !="er") {
    echo "votre verbe n'est pas du 1er groupe";
 } else{

  $int=substr($verbe,0,$l-2);
  
  $suffixes= array("e", "es" ,"e" , "ons" , "ez","ent");

  
    $vir= substr($verbe,0,1);


      if($vir == "a"){
        for ($i=0; $i <6 ; $i++) {

        $pronoms= array("j'", "tu" ,"il/elle" , "nous" , "vous","ils/elles");
        if ($i!=3) {

          echo $pronoms[$i]." ". $int .$suffixes[$i]."<br>";
             
         }else{
           $Expe1= substr($verbe,-3,1);
           if ($Expe1!= "g") {
   
             echo $pronoms[$i]." ". $int .$suffixes[$i]."<br>";
             
           }else{
              echo $pronoms[$i]." ". $int ."e".$suffixes[$i]."<br>";
           }
         }  
     
        }
      }  else{
        for ($i=0; $i <6 ; $i++) {
        $pronom= array("je", "tu" ,"il/elle" , "nous" , "vous","ils/elles");
            if ($i!=3) {

       echo $pronom[$i]." ". $int .$suffixes[$i]."<br>";
          
      }else{
        $Expe1= substr($verbe,-3,1);
        if ($Expe1!= "g") {

          echo $pronom[$i]." ". $int .$suffixes[$i]."<br>";
          
        }else{
           echo $pronom[$i]." ". $int ."e".$suffixes[$i]."<br>";
        }
      }        
    }
  
     }
  }
  }else {
  echo "changer de verbe";
}

?>