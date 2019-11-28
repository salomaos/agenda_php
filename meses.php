<?php 
    require_once "classes/contatos.php";
    $contatos = new contatos();

    function aniversariantes($qual_mes){
        $contatos = new contatos();
        $saida = "";
        foreach ($contatos->findContatos($_SESSION["idUsuario"]) as $key => $value){
            if (substr($value->dtnasc, 5, 2) == $qual_mes) {
                $saida .= "<tr>";
                $saida .= "<td>" . $value->apelido . "</td>";
                $saida .= "<td>" . substr($value->dtnasc, 8, 2) . "</td>";
                $saida .= "</tr>";
            }
        }
        return $saida;
    }
?>

<?php if (!aniversariantes("01") == "") : ?>
<h2>Janeiro</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("01"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("02") == "") : ?>
<h2>Fevereiro</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("02"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("03") == "") : ?>
<h2>Março</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("03"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("04") == "") : ?>
<h2>Abril</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("04"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("05") == "") : ?>
<h2>Maio</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("05"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("06") == "") : ?>
<h2>Junho</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("06"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("07") == "") : ?>
<h2>Julho</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("07"); ?>

</table>
<?php endif; ?>

<?php if (!aniversariantes("08") == "") : ?>
<h2>Agosto</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("08"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("09") == "") : ?>
<h2>Setembro</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("09"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("10") == "") : ?>
<h2>Outubro</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("10"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("11") == "") : ?>
<h2>Novembro</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("11"); ?>
</table>
<?php endif; ?>

<?php if (!aniversariantes("12") == "") : ?>
<h2>Dezembro</h2>
<table id="customers">
    <tr>
        <th>Apelido</th>
        <th>Dia</th>
    </tr>
    <?php echo aniversariantes("12"); ?>
</table>
<?php endif; ?>
