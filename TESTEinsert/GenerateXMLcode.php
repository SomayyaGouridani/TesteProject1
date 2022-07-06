<?php
require 'connect.php';
$res=new connect();
$conn=$res->db();

$TypeVoiture=$_POST['TypeVoiture'];
$JourReservation=$_POST['JourReservation'];
$Opt=$_POST['Opt'];
$Carburant=$_POST['Carburant'];
$DemandeSpecifique=$_POST['DemandeSpecifique'];

if ( isset( $_POST['Envoyer']) ){
   
    
    
            $dom = new DOMDocument('1.0','UTF-8');
            $dom->formatOutput = true;

            $root = $dom->createElement('voiture');
            $dom->appendChild($root);

            $result = $dom->createElement('result');
            $root->appendChild($result);

            //$result->setAttribute('id',$i);
            $result->appendChild( $dom->createElement('TypeVoiture', $TypeVoiture) );
            $result->appendChild( $dom->createElement('JourReservation', $JourReservation) );
            foreach($Opt as $opt1) {
            $result->appendChild( $dom->createElement('Option', $opt1) );
                }
            $result->appendChild( $dom->createElement('Carburant', $Carburant) );
            $result->appendChild( $dom->createElement('DemandeSpecifique', $DemandeSpecifique) );
            echo '<xmp>'. $dom->saveXML() .'</xmp>';
            $dom->save('result.xml') or die('XML Create Error');
          



            $line='';
            foreach($Opt as $Opt1){
                $line=$line."-".$Opt1;
            }
            try{
            
            
            $query =  "INSERT INTO demande_voitures (TypeVoiture,JourReservation,Opt,Carburant,DemandeSpecifique)
             VALUES (?,?,?,?,?)";
            $query_run=$conn->prepare($query);
            $teste=$query_run->execute( [$TypeVoiture,$JourReservation,$line,$Carburant,$DemandeSpecifique]);
            if($teste){
                echo "<script>alert(\"la demande de reservation est bien enregitrée !!\")</script>";
               // header("refresh:1;url=teste1.php");
            }else{
                echo "<script>alert(\"Erreur dans l enregistrement de votre demande!!\")</script>";
                header("refresh:1;url=teste1.php");
            }
            
            
            
            }catch(PDOException $e) {
                echo $query . "<br>" . $e->getMessage();
            }


}
?>
