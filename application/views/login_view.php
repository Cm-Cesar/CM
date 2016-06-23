<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div id="alerta"></div>
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<img src="<?php echo base_url();?>application/img/Cm-Logo.png" class="logo_login">
					</div>
					<div class="form-group">
						<label class="control-label">Usuario</label>
						<input id="usuario" type="text" class="form-control" name="username" required />
					</div>
					<div class="form-group">
						<label class="control-label">Contraseña</label>
						<input id="contra" type="password" class="form-control" name="password" required />
					</div>
					<div class="text-center">
						<a onclick="validar();" class="btn btn-primary">Entrar</a>
					</div>
					<div class="text-right">
						<a href="#" class="control-label">Nesecitas una cuenta?</a>
			      	</div>
			      	<div class="text-right">
						<a href="#" class="control-label">Olvidaste tu contraseña?</a>
			      	</div>
				</div>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function validar () {
		if($("#usuario").val()==""){
			$("#alerta").html(''+
						'<div id="danger" class="alert alert-danger fade in">'+
    						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
    						'<strong>Errror!</strong> Favor de introducir el usuario'+
  						'</div>');
			$("#usuario").focus();
			return false;
		}
		if($("#contra").val()==""){
			$("#alerta").html(''+
						'<div id="danger" class="alert alert-danger fade in">'+
    						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
    						'<strong>Errror!</strong> Favor de introducir la contraseña'+
  						'</div>');
			$("#contra").focus();
			return false;
		}
		$.ajax({
			url:'<?php echo base_url();?>index.php/login/validausuario',
			type:'POST',
			data:'usuario='+$("#usuario").val()+'&contra='+$("#contra").val(),
			success : function(data){
				if(data=="no"){
					$("#alerta").html(''+
						'<div id="danger" class="alert alert-danger fade in">'+
    						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
    						'<strong>Errror!</strong> Usuario y/o Contraseña equivocada.'+
  						'</div>');
				}if(data=="si"){
					window.location.assign('<?php echo base_url();?>index.php/menu');
				}
			}
		});
	}
</script>