
<?php if (isset($_SESSION['errors'])) {
    ?>
    <div class="alert alert-danger">
        <?php foreach ($_SESSION['errors'] as $errorMessage) : ?>
            <p><?= $errorMessage ?></p>
        <?php endforeach; unset($_SESSION['errors'])?>
    </div> 
    <?php 
}    
?>
    