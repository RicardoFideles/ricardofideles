<p>Mensagem enviado do Contato do site.</p>
<p>Enviado por : <?php echo $nome; ?></p>
<p>Email : <?php echo $email; ?></p>
<p>Mensagem : <br/>
  <?php echo str_replace('This email was sent using the CakePHP Framework' , ' ' , $msg ); ?>   
</p>