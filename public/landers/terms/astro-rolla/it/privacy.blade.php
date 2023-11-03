<style>
    table{
        border: 1px solid;
        border-radius: 15px;
        border-color: black !important;
    }
    th{
        border: 1px solid;
        border-radius: 15px;
        border-color: black !important;
    }
    td{
        border: 1px solid;
        border-radius: 15px;
        border-color: black !important;
    }
    td span{
        border-bottom: 1px solid;
        border-color: black !important;
    }
</style>
<table class="table table-bordered mb-5 responsive">
    <thead>
        <tr>
            <th class="text-center" colspan="3">INFORMAZIONI DI BASE CONCERNENTI IL TRATTAMENTO DEI TUOI DATI PERSONALI</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="align-middle"><span>Titolare del Trattamento</span></td>
            <td>
                Il Titolare del Trattamento dei tuoi Dati Personali è l'azienda designata come <b>AstroVeo B.V.</b> (<b>“AstroVeo”</b>, <b>“NOI”</b> o <b>“Nostro”</b>) con sede all'indirizzo {{ print_dynamic_variable('address') }} e con il numero di identificazione KvK 86478672.
            </td>
        </tr>
        <tr>
            <td class="align-middle"><span>Finalità</span></td>
            <td>
                AstroVeo raccoglie i tuoi Dati Personali per le seguenti concrete finalità:<br><br>

                1. Al fine di poter <b>fornire i nostri servizi</b> e/o <b>vendere i nostri prodotti</b> che hai <b>richiesto</b>;
                <br><br>
                2. Quando hai una <b>domanda</b> e hai fornito direttamente i tuoi Dati Personali nella sezione "Contattaci";
                <br><br>
                3. Se <b>decidi</b> di voler ricevere le nostre <b>newsletter e/o e-mail promozionali relative a prodotti, eventi, notizie e servizi</b> offerti da AstroVeo.
                <br><br>
                Le informazioni che AstroVeo raccoglie e come queste informazioni vengono utilizzate e elaborate dipendono da come utilizzi la nostra pagina web, i servizi e i prodotti.
                <br>
            </td>
        </tr>
        <tr>
            <td class="align-middle"><span>Dati Personali</span></td>
            <td>
                I Dati Personali che raccogliamo sono il tuo nome completo, cognome, data di nascita, indirizzo email, paese di residenza, genere, segno zodiacale e interesse per ottenere una lettura dell'oroscopo. Inoltre, e solo quando desideri acquistare alcuni prodotti e/o servizi specifici, i tuoi dati bancari.
            </td>
        </tr>
        <tr>
            <td class="align-middle"><span>Destinatari</span></td>
            <td>
                -  Fornitori di servizi e partner commerciali. Ad esempio, al fine di fornire i nostri servizi, i chiromanti professionisti, i lettori di tarocchi e gli esperti di oroscopi che collaborano con AstroVeo e che rispettano tutti gli obblighi di protezione dei dati e di riservatezza riceveranno i tuoi Dati Personali.<br><br>

                -  Forze di sicurezza, giudici e tribunali, enti di regolamentazione, autorità governative o altre terze parti competenti.<br><br>

            -  Terze parti solo se strettamente necessario a causa di un requisito legale e/o a terze parti quando hai acconsentito a inviare loro i tuoi Dati Personali al fine di ricevere offerte da fornitori terzi tramite e-mail e sms dai seguenti fornitori: Top Selections. A chiarezza di dubbi, AstroVeo ti informa che ha adottato tutte le misure legali necessarie nei confronti di queste terze parti al fine di rispettare le pertinenti normative sulla protezione dei dati, come ad esempio la firma di accordi pertinenti sulla protezione dei dati.</td>
        </tr>
        <tr>
            <td class="align-middle"><span>Base Legale</span></td>
            <td>
                1. Quando acquisti uno dei nostri prodotti o utilizzi uno dei nostri servizi, AstroVeo potrà trattare i tuoi Dati Personali poiché esisterà una relazione commerciale di acquisto o servizio tra te e AstroVeo. A titolo informativo, questa relazione commerciale sarà disciplinata dai nostri Termini e Condizioni. Pertanto, AstroVeo ti consiglia di leggere attentamente la nostra Politica sulla Privacy Estesa, nonché i nostri Termini e Condizioni al fine di comprendere appieno questa Base Legale.
                <br><br>

            2. Se decidi di ricevere le nostre newsletter e/o e-mail promozionali relative a prodotti, eventi, notizie e servizi e/o di poter fornire le tue informazioni a terze parti, AstroVeo tratterà i tuoi Dati Personali sulla base del consenso che ci hai liberamente fornito.</td>
        </tr>
        <tr>
            <td class="align-middle"><span>Diritti</span></td>
            <td>
                In qualsiasi momento, puoi esercitare i seguenti diritti relativi al trattamento dei tuoi Dati Personali, tra gli altri: <br><br>
                -   D

                iritto di accesso.<br>
                -   Diritto di rettifica.<br>
                -   Diritto all'oblio (o diritto all'oblio).<br>
                -   Diritto di opposizione.<br>
                -   Diritto alla limitazione del trattamento<br><br>

                Per esercitare i diritti sopra citati, puoi contattare AstroVeo all'indirizzo email <a class="montserrat fw-bold text-black text-decoration-none" href="mailto:dpo@mg.astro-rolla.com">dpo@mg.astro-rolla.com</a>.
            </td>
        </tr>
        <tr>
            <td class="align-middle"><span>Ulteriori Informazioni</span></td>
            <td>AstroVeo ti consiglia vivamente di visitare questo link <a href="javascript:void(0);" class="montserrat fw-bold text-decoration-none" id="privacy-2">Privacy Policy Secondo Livello</a> per verificare la nostra Politica sulla Privacy Estesa. </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    $('#privacy-2').on('click',function(){
        $('.privacy-1').modal('hide');
        $('.privacy-2').modal('show');
    });
</script>
