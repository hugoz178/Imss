<?php
include 'bt.php';
?>


<form method="" id="form" name="form">
		    <div class="form-group">	
			   <div class="md-form">
				    <input type="text" id="nombre" class="form-control validate" name="nombre">
				    <label for="usuario" data-success="right" class="disabled">Nombre de usuario:</label>
			   </div>
		    </div>
		    <div class="form-group">	
			   <div class="md-form">
				    <input type="text" id="paterno" class="form-control validate" name="paterno">
				    <label for="paterno" data-success="right" class="disabled">Nombre de usuario:</label>
			   </div>
		    </div>		    

<input type="submit" name="boton">
</form>

<script type="text/javascript">

$( "#form" ).bootstrapValidator({

 	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok', 
		 invalid: 'glyphicon glyphicon-remove', 
		 validating: 'glyphicon glyphicon-refresh' 
	 }, 
	 fields: {
		 nombre: {
			 validators: {
				 notEmpty: {
					 message: 'Ingresar Su Nombre'
				 },
		regexp: {

                regexp: /[a-zs]/i,

                message: 'El nombre de usuario no permite el uso de dígitos ni caracteres especiales.\n'

          },

         stringLength: {
 
           min: 5,

           max: 15,
 
           message: 'Tu nombre de usuario debe de tener por lo menos 5 caracteres de longitud y 15 como máximo.'
 
         }
			 }
		 },

		paterno: {
			 validators: {
				 notEmpty: {
					 message: 'Ingresar Su Nombre'
				 },
		regexp: {

                regexp: /[a-zs]/i,

                message: 'El nombre de usuario no permite el uso de dígitos ni caracteres especiales.\n'

          },

         stringLength: {
 
           min: 5,

           max: 15,
 
           message: 'Tu nombre de usuario debe de tener por lo menos 5 caracteres de longitud y 15 como máximo.'
 
         }
			 }
		 }			 		 
		}



 });

</script>