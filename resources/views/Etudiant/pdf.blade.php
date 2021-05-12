<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<style>
.header{
    border-bottom: 3px solid black;
    font-size:90%;
    text-align:center;
    font-weight:bold;
    font-weight:bold;


}


#H{
    text-align: center;
    font-size: 130%;
    font-weight: bold;
}
#container_body{
    width: 90%;
    text-align: justify;
    margin-left: 20%;

    font-size: 130%;
}
span{
    margin-left: 20%;
}
#H1{
  text-align:right;
    font-size: 130%;

}

.footer p{
    text-align: center;
    font-size: 60%;
    mergin-right:10%;

}

.footer{
    border-top: 5px double rgb(122, 52, 52); line-height: 0.2;
}
.header1,.header3{

}

</style>
<div backtop="10mm" backleft="10mm" backright="15mm" backbottom="10mm" >



          <div class="header" style="position:relative;height:14%">
            <div id="header1" style="position:absolute;top:0%;left:0%;">
                <p class="head">
                    REPUBLIQUE DU CAMEROUN
               <br/>
                    Paix-Travail-Patrie
               <br/>
                    ------
              <br/>
                    MINISTERE DE L'ENSEIGNEMENT
                    <br/> SUPERIEUR
              <br/>
                    ------
              <br/>
                    INSTITUT SUPERIEUR DES PROFESSIONS
                    <br/> DE SANTE
               <br/>
                    ------
                </p>
            </div>
            <div id="header2" style="position:absolute;left:28%">
       <img src="logo.png" style="width:50%"/>

            </div>
            <div id="header3" style="position:absolute ; top:0%;right:0%;">
                <p class="head">
                    REPUBLIC OF CAMEROON
               <br/>
                    Peace-Work-Fatherland
                <br/>
                    ------
               <br/>
                    MINISTRY OF HIGHER EDUCATION
              <br/>

                    ------
               <br/>
                   THE HIGHER INSTITUTE OF HEALTH
                   <br/> PROFESSIONS
             <br/>
                    ------
                </p>
            </div>
           </div>


           <div class="section" style="position:relative;left:6%">
            <p id="H"> FICHE DE RETRAIT D'ATTESTATION <br/> N°<strong>________</strong> /ISPS/P</p><br/>
            <div id="container_body">
            <p><em><span>Je</span> soussigné ,<strong>Dr Jean OTELE MBEDE</strong>, Promoteur de l'institut Supérieur des Professions de Santé atteste que: </em> <br/>
            <br/>
                Mr,Mme,Mlle :   <strong> NESF  </strong> <br/>
         <br/>
                Né(e) : le  <strong>  NESF </strong>  <span>  à</span>  <strong> <?php echo $place  ?>  </strong>  <br/>
       <br/>
                <span> Est</span> ou a été regulièrement inscrit à l'institut Supérieur des Professions de santé pour le compte de l'année academique:  DATE<br/>
           <br/>
                Specialité :  TEST </strong> <br/>
           <br/>
                Matricule : <strong> TEST  </strong> <br/>

                <br/>
            <span>En</span> foi de quoi,la présente fiche de retraite de releve de notes lui est délivrée pour servir et valoir ce que de droit./-</p>
        </div><br/>
            <div id="H1" ><p > Fait à Yaoundé , le </p></div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
             <br/>
            <br/>
            <br/>
            <br/>
            <br/>
             <br/>
            <br/>
            <br/>
            <br/>




        </div >
        <div>
        <div class="footer">

            <p>Autorisation d'Ouverture du MINESUP <strong>N°10/04293/L/MINESUP/IGA/ebm du 31/08/2010</strong></p>
            <p>Arrêté de creation <strong>N°11/0524/MINESUP/SG/DDES du 05/10/2011 ; Arrêté d'ouverture N°13/0056/MINESUP du 09/01/2013</strong></p>
            <p>Sous la tutelle académique des Universités de Douala et de Ngaoundéré;</p>
            <p>Tél:(+237) 6 77 86 76 95 / 6 94 79 94 18/ 6 94 83 88 90, B.P :<strong>15251 Yaoundé,Cameroun;</strong></p>
            <p><strong>WWW.isps-institut.cm;</strong>Email:<strong>isp_sante@yahoo.fr/info@isps-institut.cm</strong></p>
        </div class="footer">

       </div>
</page>
<?php
		$content = ob_get_clean();
		try {
			    $pdf = new HTML2PDF("P","A4","fr");
			    $pdf->pdf->SetAuthor('ISPS');
			    $pdf->pdf->SetTitle('attesttation');
			    $pdf->pdf->SetSubject('Etudiant');
			    $pdf->pdf->SetKeywords('HTML2PDF, ISPS, PHP');
			    $pdf->writeHTML($content);
			    $pdf->Output('attestation.pdf');

			} catch (HTML2PDF_exception $e) {
		    	die($e); }
?>








</body>
</html>
