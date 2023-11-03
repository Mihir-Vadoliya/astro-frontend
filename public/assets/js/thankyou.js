(() => {
    const setUpThankyouPage = () => {
        const urlParams = new URLSearchParams(window.location.search);
        const buyid = urlParams.get("buyid");
        $(".configName").html("John Doe");

        if (buyid === null) {
            $("#defaultThankYouPage").removeClass("d-none");
            $("#dynamicThankYouPage").hide();

            $(".brandName").html("Christin");
            $(".brandImg").attr("src", "/landers/sets/brandface/Christin.png");
            $(".configProductName").html("");
            return;
        }

        $("#defaultThankYouPage").hide();
        $("#dynamicThankYouPage").removeClass("d-none");

        $.ajax({
            method: "GET",
            url: `/buyers/config/${buyid}`,
            dataType: "json",
        }).done((response) => {
            const language = $("input[name='language']").val().toLowerCase();

            if (response.picture == "Celeste" && language == "fr") {
                var brandImg =
                    "/landers/sets/brandface/" +
                    (response.picture ?? "Celeste") +
                    "_fr.png";
            } else {
                var brandImg =
                    "/landers/sets/brandface/" +
                    (response.picture ?? "blank") +
                    ".png";
            }
            
            const productName = response.product?.[language] ?? "";
            var brandName = response.name ?? "Christin";

            if(language == 'es' && brandName == 'Marie & Christian'){
                brandName = "Maria & Christian";
            }
            else if(language == 'fr' && brandName == 'Marie & Christian'){
                brandName = "Marie & Christian";
            }else if(language == 'en' && brandName == 'Marie & Christian'){
                brandName = "Mary & Christian";                
            }else if(language == 'de' && brandName == 'Marie & Christian'){
                brandName = "Mary & Christian";                
            }else if(language == 'pt' && brandName == 'Marie & Christian'){
                brandName = "Mary & Christian";                
            }else{
               brandName = response.name ?? "Christin"; 
            }


            $(".brandName").html(brandName);
            $(".brandImg").attr("src", brandImg);
            $(".configProductName").html(productName);

            var availableLogo = ["Celeste", "Magellan", "MC", "Viktoria", "SM"];
            
            if(language == "fr" || language == "es"){
                if (availableLogo.includes(response.picture)) {
                    var ShowTempId = "#"+response.picture;
                    $(ShowTempId).removeClass('d-none');
                }else{
                    $("#Celeste").removeClass('d-none');
                }

            }else{
                var multi_lang = ["MC", "SM"];

                var pronounce = {
                    en: [
                        { multi_lang: " our " },
                        { multi_me: " us " },
                        { multi_i: "We " },
                        { multi_iam: " We're " },
                        { multi_ive: " we've " },
                    ]
                };

                if (multi_lang.includes(response.picture) && language =='en') {
                    $(".multi_lang").html(pronounce?.[language][0].multi_lang);
                    $(".multi_me").html(pronounce?.[language][1].multi_me);
                    $(".multi_i").html(pronounce?.[language][2].multi_i);
                    $(".multi_iam").html(pronounce?.[language][3].multi_iam);
                    $(".multi_ive").html(pronounce?.[language][4].multi_ive);
                }

            }
            
            if (availableLogo.includes(response.picture)) {
                var brandLogo =
                    "/landers/sets/brandlogo/" +
                    language +
                    "/" +
                    response.picture +
                    ".png";

                $.ajax({
                    type: "HEAD",
                    async: true,
                    url: brandLogo,
                })

                    .done(function () {
                        $(".brandLogo").attr("src", brandLogo);
                    })
                    .fail(function () {
                        $(".brandLogo").addClass("d-none");
                    });
            } else {
                $(".brandLogo").addClass("d-none");
            }
        });
    };

    setUpThankyouPage();
})();
