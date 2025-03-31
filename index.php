<!DOCTYPE html>
<html>
<body style="background-color:#E0218A">

<?php $kakan = $_GET['kakan']; $kakan++; ?>

<div style="display: flex; justify-content: center; height: 80%; position: relative">
    <a href="?<?php echo "kakan=$kakan" ?>">
        <img src="<?php echo "img/1.png"; ?>" alt="Girl in a jacket">
    </a>
</div>

<div style="display: flex; justify-content: center; height: 20%; font-size: 100px; position: relative">
    <?php echo --$kakan;?>
</div>

</body>
</html>
