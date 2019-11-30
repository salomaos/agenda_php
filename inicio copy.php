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
                        <div class="col-md-4" style="margin-bottom: 20px;">
                            <button id="<?php echo $value->id; ?>" class="btn2 btn-primary" onclick="myFunction('<?php echo $value->apelido; ?>', '<?php echo $value->id; ?>', '<?php echo $value->apelido . "phones"; ?>', 'contact')"><?php echo $value->apelido; ?></button>
                            <div class="contato-card" id="<?php echo $value->apelido; ?>" style="display: none;">
                                <b>Nome: </b><?php echo $value->nome; ?><br>
                                <b>Apelido: </b><?php echo $value->apelido; ?><br>
                                <b>E-mail: </b><?php echo $value->email; ?><br>
                                <b>WhatsApp: </b><?php echo $value->whatsapp; ?><br>
                                <b>Nascimento: </b><?php echo $value->dtnasc; ?><br>
                                <form action="deleteedit.php" method="post" style="float: left;">
                                    <button name="edit" class="icone btn" value="<?php echo $value->email; ?>"><i class="fas fa-edit"></i></button>
                                    <button name="delete" class="icone btn" value="<?php echo $value->id; ?>"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                <button class="icone btn" onclick="myFunction('<?php echo $value->apelido; ?>', '<?php echo $value->id; ?>', '<?php echo $value->apelido . "phones"; ?>', 'phones')"><i class="fas fa-phone-alt"></i></button>
                                <button id="<?php echo $value->id; ?>" class="icone btn" onclick="myFunction('<?php echo $value->apelido; ?>', '<?php echo $value->id; ?>', '<?php echo $value->apelido . "phones"; ?>', 'close')"><i class="fas fa-times"></i></button>


                            </div>
                            <div class="contato-card" id="<?php echo $value->apelido . 'phones'; ?>" style="display: none;">
                                <b>Telefones</b><br>
                                <?php foreach ($contatos->findTelefones($value->id) as $chave => $valor) : ?>
                                    <?php echo $valor->telefone . "<br>"; ?>
                                <?php endforeach; ?>
                                <button id="<?php echo $value->id; ?>" class="icone btn" onclick="myFunction('<?php echo $value->apelido; ?>', '<?php echo $value->id; ?>', '<?php echo $value->apelido . "phones"; ?>', 'contact')"><i class="fas fa-address-book"></i></button>
                                <button id="<?php echo $value->id; ?>" class="icone btn" onclick="myFunction('<?php echo $value->apelido; ?>', '<?php echo $value->id; ?>', '<?php echo $value->apelido . "phones"; ?>', 'close')"><i class="fas fa-times"></i></button>
                            </div>
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

<script type="text/javascript">
    function myFunction(p, q, r, option) {
        var x = document.getElementById(p);
        var btnContato = document.getElementById(q);
        var phones = document.getElementById(r);

        if (option == 'contact') {
            x.style.display = 'block';
            btnContato.style.display = 'none';
            phones.style.display = 'none';
        } else if (option == 'phones') {
            x.style.display = 'none';
            btnContato.style.display = 'none';
            phones.style.display = 'block';
        } else if (option == 'close') {
            x.style.display = 'none';
            btnContato.style.display = 'block';
            phones.style.display = 'none';
        }
    }
</script>

</body>

</html>