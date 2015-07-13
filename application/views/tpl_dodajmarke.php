<h1>Dodaj markę</h1>

<a href="<?php echo Url::getUrl( 'marki', 'list') ?>"><button type="button">Lista marek</button></a>
<a href="<?php echo Url::getUrl( 'cars', 'list') ?>"><button type="button">Lista samochodów</button></a>
<a href="<?php echo Url::getUrl( 'cars', 'addNewAuto') ?>"><button type="button">Dodaj samochód</button></a>
<a href="<?php echo Url::getUrl( 'index', 'index') ?>"><button type="button">Menu</button></a>

<form enctype="multipart/form-data" action="<?php echo Url::getUrl( 'marki', 'addMarki') ?>" method="post">

    <input type="text" name="marka" placeholder="Nazwa marki"/>
    <br />
    <input type="submit" value="zapisz">
    <br />
</form>

