<!DOCTYPE html>
<html>
<head>
    <title>Kakan-klickare</title>
</head>
<body style="background-color:#E0218A">

    <?php 
        $kakan_url = base64_decode($_GET['kakan']);
        if (filter_var($kakan_url, FILTER_VALIDATE_INT) === false) {
            $kakan_url = 0;
          }
        $_SERVER['HTTP_USER_AGENT']??null;
        $kakan_clicks = $kakan_url;
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
        {           // Chromium
            $kakan_url--;
        } else {    // Not chromium
            $kakan_url++;
        }
    ?>

    <div style="display: flex; justify-content: center; flex-direction: column; position: fixed; align-content: center; width: 100%; height: 100%;">

        <div style="height: 80%; position: relative; margin: auto;">
            <a href="?kakan=<?php echo base64_encode($kakan_url) ?>" style="display: block; height: 100%;">
                <img src="<?php echo "img/1.png"; ?>" alt="Girl in a jacket" style="height: 100%;">
            </a>
        </div>

        <div style="height: 20%; font-size: 8em; position: relative; margin: auto;">
            <?php echo $kakan_clicks;?>
        </div>
    </div>

</body>
</html>
