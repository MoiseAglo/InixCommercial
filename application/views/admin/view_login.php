<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <title>Comptable/Connexion</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/style.css">
        <!-- Theme style -->
		  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/AdminLTE.min.css">
		  <!-- AdminLTE Skins. Choose a skin from the css/skins
			   folder instead of downloading all of them to reduce the load. -->
		  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/skins/_all-skins.min.css">
		  <!-- iCheck -->
		  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/iCheck/flat/blue.css">
		  
		<script src="<?php echo base_url() ?>bootstrap/js/jquery.min.js" type="text/javascript"></script>     
        <style>
            body{overflow-x: hidden}
        </style>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons/font-awesome/css/font-awesome.min.css">

        <!-- Latest compiled and minified JavaScript -->

    </head>
    <body hold-transition style="background-color:#ecf0f5;" >
        <!--<div class="" tyle="margin-top: 62px;">
            <div class="content-wrapper">
			  <div class="content">-->
                    <!--<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php //echo base_url() ?>">LyCoP</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav pull-right">
                                <li class="active">
                                    <a href="<?php //echo base_url() ?>"><i class="glyphicon glyphicon-th"></i>&nbsp;&nbsp;App</a>
                                </li>
                            </ul>
                        </div>
                    </nav>-->

        <div class="container" style="margin-top: 62px;">
	<div class="row clearfix">
		<div class="col-md-3 column">
		</div>
        <div class="col-md-6 column">
         <!-- Horizontal Form -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Connexion</h3>
			  <p style="margin-top:5px; align:center;" id="ret">
                        
              </p>
            </div>
			
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="form_login" method="POST" class="form-horizontal" action="<?php echo base_url() ?>admin/login">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Username</label>

                  <div class="col-sm-8">
                    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Nom d'utilisateur">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Mot de passe</label>

                  <div class="col-sm-8">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Mot de passe">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!--<button type="cancel" class="btn btn-default">Annuler</button>-->
                <button type="submit" class="btn btn-success pull-right " name="submit_login">Se connecter</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>   
		  </div>
		<div class="col-md-3">
		</div>
	</div>
    </div>
     <!--</div>
        </div>
         </div>-->		
        <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
    <script>
        
    $(function(){
			//alert('ata'+<?php  //echo $this->session->userdata('role')?>);
        $("#form_login" ).submit(function( event ) {
            $("#ret").html('<img src="<?php echo base_url() ?>bootstrap/images/loader.GIF"/>');
            var self = $(this);
            var url = self.attr('action');
            //alert('ata'+<?php  echo $this->session->userdata('role')?>);
            $.ajax({
                url: url,
                data: self.serialize(),
                type: self.attr('method')
              }).done(function(data) {
				  //alert('ff');
                  if(data !=='')
                      {
						  $("#ret").html(data);
							$('#form_login')[0].reset();
            }
            else
            {
							
							 window.location.href='<?php echo base_url() ?>home/';
						}
              });
            event.preventDefault();
        });
    });
        
	</script>
	<!-- FastClick -->
	<script src="<?php echo base_url() ?>plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>dist/js/app.min.js"></script>
    </body>
</html>
