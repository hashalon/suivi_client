<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="page-header">
            <h1>Connection</h1>
        </div>
    </div>
</div>

<?php if( isset($_GET['error']) ){ ?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Attention !</h4>
            <p>
            <?php 
                if( $_GET['error'] == "missing" ){
                    echo "Vous avez oublié de remplir les champs.";
                }elseif( $_GET['error'] == "password" ){
                    echo "Le mot de passe n'est pas valide.";
                }elseif( $_GET['error'] == "email" ){
                    echo "L'email que vous avez spécifié ne correspond à aucun compte.";
                }else{
                    echo "Une erreur inconnue est survenue.";
                }
            ?>
            </p>
        </div>
    </div>
</div>
<?php } ?>

<form action="controller/user/connection_post.php" method="post" class="row">
    <div class="col-sm-6 col-sm-offset-3 well">
        <div class="form-horizontal">

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">mot de passe</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="pull-right">
                        <a href="<?php echo $RootURL; ?>" class="btn btn-default">Annuler</a>
                        <button type="submit" class="btn btn-success">Valider</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>