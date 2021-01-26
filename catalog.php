<?php
    $pageTitle = "Full Catalog";
    $section = null;

    if (isset($_GET["cat"])) {
        if ($_GET["cat"] == "books"){
            $pageTitle = "books";
            $section = "books";
        } else if ($_GET["cat"] == "movies") {
            $pageTitle = "Movies";
            $section = "books";
        } else if ($_GET["cat"] == "music") {
            $pageTitle = "Music";
            $section = "books";
        }   
    }
    

    include("inc/header.php");
?>

<div class="section page">
    <h1>
        <?php echo $pageTitle; ?>
    </h1>
</div>

<?php include("inc/footer.php"); ?>