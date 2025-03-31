<!DOCTYPE html>
<html>
<body style="background-color:#E0218A">

<?php $kakan_url = base64_decode($_GET['kakan']); $kakan_url++; ?>

<div style="display: flex; justify-content: center; height: 80%; position: relative">
    <a href="?<?php echo "kakan=" . base64_encode($kakan_url) ?>">
        <img src="<?php echo "img/1.png"; ?>" alt="Girl in a jacket">
    </a>
</div>

<div style="display: flex; justify-content: center; height: 20%; font-size: 100px; position: relative">
    <?php echo --$kakan_url;?>
</div>

</body>
</html>
