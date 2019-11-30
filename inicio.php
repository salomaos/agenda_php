<?php
require_once "classes/contatos.php";
$contatos = new contatos();
include_once "header.php";
?>
<div id="fh5co-contact">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>Meus Contatos</h2>
                <p>Lista de contatos cadastrados</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-50">
            <div class="animate-box">
                <div>
                    <?php foreach ($contatos->findContatos($_SESSION["idUsuario"]) as $key => $value) : ?>
                    <table class="table table-hover">
                        <tr>
                            <td><p><?php echo $value->apelido; ?></p></td>
                            <td><button class="btn btn-primary logout" style="float: right;" onclick="myFunction('<?php echo $value->id; ?>')">Exibir/Ocultar</button></td>
                        </tr>
                    </table>			
                    <div id="<?php echo $value->id; ?>" style="display:none">
                        <table class="table table-hover">
                            <tr><td><?php echo $value->nome; ?></td></tr>
                            <tr><td><?php echo $value->email; ?></td></tr>
                            <tr><td><?php echo $value->whatsapp; ?></td></tr>
                            <tr><td><?php echo $value->dtnasc; ?></td></tr>
                            <tr><td>
                                <table>
                                <tr><td>Telefones</td></tr>                                
                                <?php foreach ($contatos->findTelefones($value->id) as $chave => $valor) : ?>
                                    <tr><td><?php echo $valor->telefone . "<br>"; ?></td></tr>
                                <?php endforeach; ?>
                                </table>
                            </td></tr>
                            <tr><td>
                            <form action="deleteedit.php" method="post" style="float: left;">
                                <button name="edit" class="icone btn" value="<?php echo $value->email; ?>"><i class="fas fa-edit"></i></button>
                                <button name="delete" class="icone btn" value="<?php echo $value->id; ?>"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            </td></tr>
                        </table><br>                        
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script type="text/javascript" src="js/main.js"></script>

<script>
    function myFunction(p) {
        var x = document.getElementById(p);
        if (x.style.display == 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
</script>

</body>

</html>