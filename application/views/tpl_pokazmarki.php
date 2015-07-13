<h1>Marki w bazie</h1>
<a href="<?php echo Url::getUrl( 'cars', 'addNewAuto') ?>"><button type="button">Dodaj samochód</button></a>
<a href="<?php echo Url::getUrl( 'marki', 'formMarki') ?>"><button type="button">Dodaj markę</button></a>
<a href="<?php echo Url::getUrl( 'cars', 'list') ?>"><button type="button">Lista samochodów</button></a>
<a href="<?php echo Url::getUrl( 'index', 'index') ?>"><button type="button">Menu</button></a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nazwa</td>
        <td>Skasuj</td>
    </tr>

    <?php
    foreach( $data as $wiersz ) { ?>
        <tr>
            <td> <?php echo $wiersz[ 'marki_id' ] ?> </td>
            <td> <?php echo $wiersz[ 'marki_nazwa' ] ?> </td>
            <td><a href="<?php echo Url::getUrl( 'marki', 'deleteMarka', array ( 'id' => $wiersz[ 'marki_id' ] ) ) ?>"><button>Usuń</button></a></td>
        </tr>
    <?php } ?>
</table>
<?php $partial->display( 'pager' ); ?>