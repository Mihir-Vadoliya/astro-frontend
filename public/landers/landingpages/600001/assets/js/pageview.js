$(window).load(function () {
    setTimeout(function () {
        var urlp1 = 'curl.php?fcblid=';
        var urlp2 = '<?php echo $fbclid;?>';
        console.log("na 4 seconds" + 'fbview.php?fbclid=' + urlp1.concat(urlp2));
        $.ajax({
            type: "GET",
            url: 'fbview.php?fbclid=' + "<?php echo $fbclid; ?>",
            cache: false,
            processData: false,
            dataType: 'json',
            // timeout: 6000,
            success: function () {
                console.log('fired view');
            },
        });

    }, 2000);
});