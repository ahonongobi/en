<meta charset="utf-8">
<?php 
$etat="";

 if(isset($_POST['contact']))
                  {
                    require 'phpmailer/PHPMailerAutoload.php';
                    $name = $_POST['nom'];
                    $tel = $_POST['tel'];
         
                    $email = $_POST['email'];
                    $messages = $_POST['message']." <hr> E-mail :".$email." <br> Téléphone : ".$tel ;
                    $subject = 'Contacs ';

                   $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = "portables9494@gmail.com";

                    $mail->Password = "JE@dois@94@94";


                    $mail->setFrom($email, $name);

                    $mail->addReplyTo($email, $name);

                    $mail->addAddress("lkredit8@gmail.com");

                    $mail->Subject = $subject;

                    $mail->msgHTML($messages);

                    if (!$mail->send()) {
                       $error = "Erreur : " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Vyour loan request has been taken into account! We will get back to you soon.!");</script>';
                    $mail->clearAddresses();
                     $mail->addAddress("lkredit8@gmail.com");
                     $mail->send();


                    }
               }



                    if(isset($_POST['demande']))
                  {
                    require 'phpmailer/PHPMailerAutoload.php';
                    $name = $_POST['nom'];
                    $to_from = $_POST['email'];
                    $demande =  "<br> Nom & Prénoms :".$_POST['nom']."  <br> Adresse ".$_POST['adresse']."  <br> E-mail :".$_POST['email']." <br> Téléphone :".$_POST['tel']."  <br> Raison : ".$_POST['raison']." <br> Montant :".$_POST['montant']." <br> Durrée de remboursement : ".$_POST['duree']." mois ";

                    $subject = "Demande de pret de ".$name .' en ';

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                   $mail->Username = "portables9494@gmail.com";
                  $mail->Password="JE@dois@94@94";
                   $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                   $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;
                    $mail->setFrom($to_from, $name);

                    $mail->addReplyTo($to_from, $name);
                    //$mail->addAddress("cjinese@gmail.com"); 
              $mail->addAddress("lkredit8@gmail.com");

              

                    $mail->Subject = $subject;

                    $mail->msgHTML($demande);

                    if (!$mail->send()) {
                       $error = "Erreur : " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("your loan request has been taken into account! We will get back to you soon");</script>';
                      //header('Location: index.php');
                      
               $mail->clearAddresses();
                   $mail->addAddress("lkredit8@gmail.com");
               $mail->send();

                    }
               }






                    if(isset($_POST['infos']))
                  {
                    require 'phpmailer/PHPMailerAutoload.php';
                    $name = $_POST['firstname'];
                    $to_from = $_POST['email'];
                    $demande =  "<br> Nom & Prénoms :".$_POST['firstname']." ".$_POST['lastname']." 
                    <br> Date de naissance ".$_POST['date']." 
                    <br> Sexe :".$_POST['sexe']." 
                    <br> Statut :".$_POST['statut']." 
                    <br> Adresse /Nationalité :".$_POST['adresse']."
                    <br> Pays  :".$_POST['pays']."
                    <br> Numero Carte ID ou passport  :".$_POST['numcarte']." 
                    <br> Date d'expiration  :".$_POST['dateexpire']." 
                    <br> Profession :".$_POST['profession']." 
                    <br> Salaire :".$_POST['salaire']."
                    <br> Employer :".$_POST['employer']."
                    <br> Téléphone :".$_POST['mobile']." 
                    <br> E-mail :".$_POST['email_confirme']." 
                    <br> Montant demandé :".$_POST['montant']." 
                    
                    <br> Raison : ".$_POST['raison']." 
                     
                    <br> Durrée de remboursement : ".$_POST['duree']." mois
                    <br> <hr> Informations bancaire <hr> 
                    <br> Nom de la banque : ".$_POST['bank']."
                    <br> Nom du titulaire : ".$_POST['titulaire']."
                    <br> Numero du compte : ".$_POST['num_compte']."
                    <br> Adrese de la banque : ".$_POST['adresse_bank']."
                    <br> Swift code : ".$_POST['swift']."
                     "
                    ;

                    $subject = "Informations";

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                   $mail->Username = "portables9494@gmail.com";
                  $mail->Password="JE@dois@94@94";
                   $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                   $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;
                    $mail->setFrom($to_from, $name);

                    $mail->addReplyTo($to_from, $name);

                    $mail->addAddress("lkredit8@gmail.com");

                    $mail->Subject = $subject;

                    $mail->msgHTML($demande);

                    if (!$mail->send()) {
                       $error = "Erreur : " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Votre demande de prêt a bien été prise en compte! nous vous contacterons sous peu. !");</script>';
                      //header('Location: index.php');
                    }
               }  

 ?>