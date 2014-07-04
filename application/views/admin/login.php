  

    <!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>.:. CITOBIOLAB .:. </title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
  </head>
  <?php $data = array('name' => 'button','id' => 'button','type' => 'submit','class' => 'login-button','content' => 'Reset'); ?>
  <body>
  <header>
      <h5>hola mundo</h5>
  </header>
    <div class="container login">
      <?php 

      $attributes = array('class' => 'login');
     echo form_open('admin/login/validate_credentials', $attributes);
         ?>
      <p>
      <label for="login">Usuario:</label>
      <?php
      echo form_input('user_name', '', 'placeholder="Usuario"');

      ?>
      </p>
      <p>
      <label for="password">Contraseña:</label>
      <?php
      echo form_password('password', '', 'placeholder="Contraseña"');
      if(isset($message_error) && $message_error){
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Error!</strong> Ingrese Los Datos Correctos Y Vuelva a Intentarlo.';
          echo '</div>';             
      }
         echo anchor('admin/signup', 'Recuperar Contraseña!');
      ?>
      </p>
      <p class="login-submit">
      <?php
            echo form_button($data);
            echo form_close();
      ?>      
    </p>    
    </div><!--container-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>    
    