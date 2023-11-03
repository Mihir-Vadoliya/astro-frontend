<!-- pushnami script -->
<link rel="manifest" href="{{ $asset_path }}manifest.json">
<script type="text/javascript">
    (function(document, window){
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/628e169b792d285d2a28d0a4";
        script.onload = function() {
            Pushnami
                .update()
                .prompt();
        };
        document.getElementsByTagName("head")[0].appendChild(script);
    })(document, window);
</script>