<br />

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<form action="" method="POST" enctype="multipart/form-data">
    <label for="userfile">Image à uploader:</label>
    <input type="file" name="userfile" />
    <label for="userfile">Nom de l'image (optionel):</label>
    <input type="text" name="image_name" placeholder=" nom de l'image ... " />

    <!--Generation de la liste des categories par php-->
    <label for="category">Catégories: </label>
    <input list="category" name="category" placeholder="Double click pour afficher les categories">
    <datalist id="category">
        <?= dataList(false) ?>
    </datalist>

<!--Idem-->
    <label for="evenement">Nom de l'évenement:</label>
    <input list="evenement" name="evenement" placeholder="Double click pour afficher les evenements">
    <datalist id="evenement">
         <?= dataList(true) ?>
    </datalist>

    <input type="submit" value="Envoyer" />
</form>