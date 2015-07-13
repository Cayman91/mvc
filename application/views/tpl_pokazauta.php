<h1>Auta w bazie</h1>

<a href="<?php echo Url::getUrl( 'cars', 'addNewAuto') ?>"><button type="button">Dodaj samochód</button></a>
<a href="<?php echo Url::getUrl( 'marki', 'formMarki') ?>"><button type="button">Dodaj markę</button></a>
<a href="<?php echo Url::getUrl( 'marki', 'list') ?>"><button type="button">Lista marek</button></a>
<a href="<?php echo Url::getUrl( 'index', 'index') ?>"><button type="button">Menu</button></a>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Nazwa</td>
        <td>Opis</td>
        <td>Zdjecie</td>
        <td>Skasuj</td>
        <td>Edytuj</td>
    </tr>

<?php
    foreach( $data as $wiersz ) { ?>
    <tr>
        <td> <?php echo $wiersz[ 'samochody_id' ] ?> </td>
        <td> <?php echo $wiersz[ 'samochody_nazwa' ] ?> </td>
        <td> <?php echo $wiersz[ 'samochody_opis' ] ?> </td>
        <td> <img src="http://mvc.pl/images/small_<?php echo $wiersz['samochody_zdjecie'] ?>"> </td>
        <td> <a href="<?php echo Url::getUrl( 'cars', 'deleteAuto', array ( 'id' => $wiersz[ 'samochody_id' ] ) ) ?> "><button>Usuń</button></a></td>
        <td> <a href="<?php echo Url::getUrl( 'cars', 'editAuto', array ( 'id' => $wiersz[ 'samochody_id' ] ) ) ?> "><button>Edytuj</button></a></td>
    </tr>
        <?php } ?>
</table>
<?php $partial->display( 'pager' ); ?>