<?php
    $pageTitle = "Full Catalog";
    $section = null;

    if (isset($_GET["cat"])) {
        if ($_GET["cat"] == "books"){
            $pageTitle = "books";
            $section = "books";
        } else if ($_GET["cat"] == "movies") {
            $pageTitle = "Movies";
            $section = "movies";
        } else if ($_GET["cat"] == "music") {
            $pageTitle = "Music";
            $section = "music";
        }   
    }
    

    include("inc/header.php");
?>

<div class="section page catalog">

    <div class="wrapper">
        <h1><?php echo $pageTitle; ?></h1>

        <ul>
            <?php
                foreach($catalog as $item){
                    echo "<li>" . $item . "</li>";
                }
            ?>
        </ul>
    </div>
    
</div>

<?php include("inc/footer.php"); ?>