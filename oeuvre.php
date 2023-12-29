<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>


<?php include('header.php'); ?>
<?php include('oeuvres.php'); ?>

<?php $id = $_GET['id'];?>

<main>


    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <?php echo $oeuvres[$id]['image']; ?>
        </div>
        
        <div id="contenu-oeuvre">
            <h1><?php echo$oeuvres[$id]['titre']; ?></h1>
            <p class="description"><?php echo $oeuvres[$id]['description']; ?></p>
            <p class="description-complete"><?php echo $oeuvres[$id]['description_complete']; ?> </p>
        </div>
        
    </article>

</main>

<?php include('footer.php');?>

</body>
</html>
