<!DOCTYPE html>
<html>

<head>
    <title>Tarantino | Official Website</title>
    <meta name="description" content="Sito ufficiale di Quentin Tarantino">
    <meta name="keywords" content="Quentin Tarantino, Pulp Fiction, Once Upon in Hollywood, Inglorious Bastards">
    <?php include('heading.php'); ?>
</head>


<body>
    <?php
    $page = 'Pulp';
    include('menu.php');
    ?>


    <div class="container" id="pagina-film">

        <button onClick="history_back()" class="btn btn-primary" id="button-pers4">
            Indietro
            <i class="bi bi-arrow-left-short"></i>
        </button>

        <div class="row g-0 justify-content-end">
            <div class="col-xl-3 col-lg-4 col-md-5 col-12 align-self-end" id="box-titolo" data-aos="fade-left">
                <h1>Pulp Fiction</h1>
                <h2>1994</h2>
            </div>
        </div>

        <div class="row g-0 justify-content-between" id="scheda-row-1" data-aos="fade-right">
            <div class="col-xl-6 col-12 video-js" id="box-video">
                <video
                    id="my-video"
                    controls
                    preload="auto"
                    poster="assets/img/Video/movie-scene-pulp.jpeg"
                    data-setup="{}">
                    <source src="assets/img/Video/2_pulp.mp4" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
            </div>
            <div class="col-xl-3 col-12" id="box-basic">
                <div class="row g-0" style="padding-top:0.5rem" data-aos="fade-left">
                    <div class="col-4">
                        <h3>durata</h3>
                    </div>
                    <div class="col-8">
                        <h4>154 min</h4>
                    </div>
                </div>
                <div class="row g-0" data-aos="fade-left" data-aos-delay="100">
                    <div class="col-4">
                        <h3>diretto da</h3>
                    </div>
                    <div class="col-8">
                        <h4>Quentin Tarantino</h4>
                    </div>
                </div>
                <div class="row g-0" data-aos="fade-left" data-aos-delay="200">
                    <div class="col-4">
                        <h3>prodotto da</h3>
                    </div>
                    <div class="col-8">
                        <h4>Lawrence Bender</h4>
                    </div>
                </div>
                <div class="row g-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="col-4">
                        <h3>starring</h3>
                    </div>
                    <div class="col-8">
                        <h4>
                            John Travolta, Samuel L. Jackson, Uma Thurman, Harvey Keitel, Tim Roth, Amanda Plummer, Maria de Medeiros, Ving Rhames, Eric Stoltz, Rosanna Arquette, Christopher Walken, Bruce Willis
                        </h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row g-0 justify-content-center " id="box-scheda">
            <div class="col-xl-10 col-12" id="box-testo">
                <div class="col" id="paragrafo" data-aos="fade-right">
                    <h2>Le vicende di due sicari della mafia, un pugile, la moglie di un gangster e due banditi di diner si intrecciano in quattro storie di violenza e redenzione.</h2>
                </div>
                <br><br>
                <div class="col-xl-10" id="paragrafo-scheda" data-aos="fade-left">
                    <h2>Regia</h2>
                    Il film è stato diretto da Tarantino e co-scritto insieme a Roger Avary. Samuel L. Jackson definì il lavoro con il regista come «qualcosa di assolutamente straordinario», considerandolo «un'enciclopedia del cinema vivente». Per quel che riguarda lo stile,
                    Tarantino ammise di essersi ispirato a grandi personaggi come Hitchcock, ma anche a registi di spicco del cinema noir come Don Siegel o Jean-Luc Godard. In un'intervista, Tarantino ha dichiarato che secondo lui il motivo del successo di Pulp Fiction è
                    rappresentato dalla scoperta che coglie di sorpresa lo spettatore. Più tardi affermerà infatti che:
                    «Una delle cose che preferisco nel raccontare storie come faccio io, è dare forti emozioni: lasciare che il pubblico si rilassi, si diverta e poi all'improvviso… boom!, voglio trasportarli improvvisamente in un altro film»
                    Oltre a vestire i panni di regista e sceneggiatore, Tarantino si riservò il ruolo di Jimmie Dimmick, nonostante fosse indeciso sino all'ultimo se interpretare Jimmie o Lance: alla fine optò per Jimmie, perché preferiva trovarsi dietro la macchina da presa durante
                    la scena dell'iniezione di adrenalina. Inoltre, Tarantino si divertì a "giocare" con i personaggi: se Steve Buscemi ne Le iene interpretava il Mr. Pink, contrario alle mance, stavolta per contrappasso diviene il cameriere Buddy Holly che serve Vincent e Mia
                    al Jack Rabbit Slim's. Allo stesso modo Tim Roth, che ne Le iene interpretava un poliziotto infiltrato, qui prende il ruolo di un rapinatore.
                    Tarantino ammise che la scena più difficile da girare fu quella della siringa a casa dello spacciatore Lance. Questa venne infatti girata al contrario, con John Travolta che tirava fuori l'ago dal petto di Uma Thurman. Le scene in cui Tarantino è davanti
                    alla macchina da presa vennero girate dall'allora esordiente Robert Rodriguez.
                </div>
                <br><br>

                <div class="col-xl-10" id="paragrafo-scheda" data-aos="fade-right">
                    <h2>Sceneggiatura</h2>
                    Dopo l'uscita di Le iene, Quentin Tarantino decise di prendersi una pausa. Durante questo periodo, egli maturò una nuova sceneggiatura, che doveva partire come un cortometraggio sul mondo del crimine, al quale si sarebbero poi aggiunti altri due episodi:
                    l'intenzione iniziale era quella di creare un'antologia di corti sul mondo del crimine. Per creare qualcosa di assolutamente originale e innovativo, decise di partire da situazioni classiche: un pugile che deve perdere un incontro truccato ma lo vince
                    e lo scagnozzo del boss che deve portare a cena la moglie del boss senza "toccarla"; da qui si doveva generare una serie di errori che avrebbe condotto a situazioni estreme.
                    Come aveva già fatto con Le iene, il regista applicò alla storia la cronologia frammentata, uno dei suoi marchi di fabbrica. Nella sceneggiatura, il regista decise di inserire svariati riferimenti al cinema d'exploitation degli anni settanta e ottanta, asserendo
                    – sulla falsariga dello scrittore Stephen King – che «prima di apprezzare il latte, dovrai bere un sacco di latte rancido». Con questo intendeva che, dopo essersi nutrito di film di serie B e noir degli anni trenta (il "latte rancido") per tutta la sua
                    adolescenza, avrebbe potuto creare qualcosa di meglio (il "latte").
                    Per scrivere la sceneggiatura del film, Tarantino si recò ad Amsterdam, nei Paesi Bassi, dove scrisse i dialoghi iniziali tra Jules e Vincent e si informò sulla cultura olandese ed europea in generale; nel film, infatti, Vince è di ritorno da Amsterdam e
                    discute con Jules su vari aspetti di quella città, come lo status legale delle droghe e il fatto che l'hamburger "Quarto di libbra con formaggio", venga chiamato "Royale con formaggio". Dopo aver iniziato a caratterizzare i personaggi, Tarantino iniziò a
                    pensare che la maniera migliore per descrivere il mondo del crimine, evitando di creare un'antologia, fosse quella di ispirarsi alla struttura del pulp magazine Black Mask (che infatti era il titolo di lavorazione della pellicola).
                    Tarantino scrisse appositamente il ruolo di Wolf per Harvey Keitel, quello di Jules per Samuel L. Jackson e quello di Lance per Eric Stoltz. Anche i personaggi di Zucchino e Coniglietta vennero scritti appositamente per Tim Roth e Amanda Plummer.
                    Furono effettuati diversi cambi di sceneggiatura. Per esempio, secondo il copione originale, durante lo stallo alla messicana all'Hawthorne Grill, Jules doveva sparare tre colpi a Ringo e due a Yolanda, mentre un sesto andava a colpire un cliente all'interno
                    del locale; a questo punto Jules riapriva gli occhi, facendo capire che tutto era stato immaginato.
                </div>
                <br><br>
                <div class="col-xl-10" id="paragrafo-scheda" data-aos="fade-left">
                    <h2>Cast</h2>
                    L'attore John Travolta interpreta il killer Vincent Vega.
                    Degli 8 milioni di dollari messi a disposizione dalla Miramax in fase di pre-produzione, 5 servirono per il cast del film. La pellicola è nota per aver ridato linfa alla carriera di John Travolta, nonché per l'aiuto che diede alle figure di Samuel L. Jackson
                    e Uma Thurman. Bruce Willis, sulla cresta dell'onda per le parti da protagonista in numerosi film di successo, aveva apprezzato tantissimo il film Le iene e voleva recitare in questo nuovo film a tutti i costi. Inizialmente Willis voleva interpretare il
                    ruolo di Vincent Vega, già assegnato a John Travolta, alchè optò per Butch Coolidge dopo aver riletto la sceneggiatura.
                    Molto diverso era il cast scelto prima delle riprese, che vedeva inizialmente Michael Madsen nel ruolo di Vincent Vega. Per puro caso, al posto di Madsen, subentrò Travolta: Madsen aveva scelto di interpretare Virgil Earp nel film Wyatt Earp. In pochi mesi,
                    Travolta ricevette la sua seconda nomination all'Oscar e venne richiesto da registi come Barry Sonnenfeld e John Woo. Considerati per il ruolo di Vincent Vega furono anche Daniel Day-Lewis e James Gandolfini. Nonostante per il ruolo di Vincent Vega
                    fosse stato preso in considerazione dalla Miramax Daniel Day Lewis, al quale la sceneggiatura era molto piaciuta, Tarantino fu irremovibile, arrivando perfino a minacciare che, senza John Travolta, non avrebbe fatto il film.
                    Johnny Depp, Christian Slater e Dave Gahan erano in ballottaggio per quello di Zucchino. Pam Grier, una delle attrici preferite dal regista, doveva avere il ruolo della moglie di Lance, Jody. Pare che Tarantino volesse anche che Kurt Cobain e Courtney
                    Love recitassero nei ruoli rispettivamente di Lance e Jody.
                    Dopo aver provinato e scartato Paul Calderón per il ruolo di Jules, Tarantino riscrisse la parte per Samuel L. Jackson, che aveva fatto provino nel cast di Le iene nel ruolo di Mr. Orange e aveva apprezzato molto l'opera prima di Tarantino.
                    Dopo il primo provino, Jackson rischiò di perdere la parte, ma un tempestivo intervento di Paul Calderon, amico dell'attore, riuscì a convincere Tarantino a dare una seconda possibilità a Jackson. L'attore convinse il regista e partecipò alla
                    pellicola, che gli fruttò una nomination all'Oscar come miglior attore non protagonista.
                    Tarantino esitò circa chi far recitare nel ruolo di Butch Coolidge: indeciso tra Sylvester Stallone, Matt Dillon, Mickey Rourke e Bruce Willis, optò alla fine per quest'ultimo. Nella sceneggiatura originale, Butch è un pugile sulla ventina d'anni,
                    ma per adeguare la storia al fisico dell'attore, il personaggio venne trasformato in un pugile ormai alla fine della sua carriera. Nelle intenzioni iniziali di Tarantino, Coolidge doveva ricordare il personaggio di Ralph Meeker in Un bacio e una pistola
                    di Robert Aldrich, «un duro con gli amici e un melenso romanticone con la sua donna».
                    Uma Thurman interpreta Mia Wallace.
                    Per riuscire a ottenere il ruolo di Mia Wallace, Uma Thurman dovette impegnarsi parecchio, poiché per quella parte erano state considerate numerose attrici affermate tra cui Michelle Pfeiffer, Meg Ryan, Joan Cusack, Isabella Rossellini, Annabella Sciorra,
                    Daryl Hannah, Alfre Woodard, Halle Berry, Julia Louis-Dreyfus e Holly Hunter. Dopo aver ottenuto la parte, il volto di Uma Thurman divenne per certi versi il volto di Pulp Fiction: l'attrice appariva nei manifesti del film su di un letto con una
                    sigaretta in mano, un pulp magazine e una pistola poggiati su di esso. Venne nominata all'Oscar come miglior attrice non protagonista grazie al ruolo della moglie annoiata e cocainomane.
                    Come aveva già fatto con Le iene, Tarantino ritagliò per sé una parte, interpretando Jimmie Dimmick, un ruolo di una certa importanza. Così, anche attraverso l'espediente di entrare a far parte del cast delle pellicole da lui stesso dirette, Tarantino
                    segue le orme di registi come Alfred Hitchcock, famoso per essere apparso in molti suoi film.
                    Per risparmiare poi sugli oggetti di scena, vennero usati molti beni appartenenti realmente agli attori: l'automobile guidata da Vincent Vega nel film, una Chevrolet Chevelle del 1964, apparteneva a Quentin Tarantino, così come il portafogli
                    "Bad Motherfucker" di Jules e i giochi da tavolo "Operation" e "Life" di Lance.
                </div>
                <br><br>
                <div class="col-xl-10" id="paragrafo-scheda" data-aos="fade-right">
                    <h2>Luoghi delle riprese</h2>
                    Tutto il film fu girato a Los Angeles, California.
                    Il quartiere dove ha sede l'organizzazione di Marsellus era Inglewood, non lontano dal centro della città.
                    La casa dove Butch va a recuperare l'orologio dimenticato era il complesso di appartamenti al 11813 di Runnymede Street, North Hollywood.
                    Il Jack Rabbit Slim's, il locale dove Mia e Vincent vincono la gara di twist, non esisteva, ed i suoi interni furono allestiti ai Culver Studios di Los Angeles; la facciata esterna del locale, invece, era in realtà una sala da bowling in disuso
                    al 1435, Flower Street di Glendale.
                    La facciata esterna del palazzo dove Butch tiene l'incontro di boxe era quella del Raymond Theatre a Pasadena (California).
                    Dopo aver recuperato l'orologio, la strada che Butch percorre è Fletcher Drive, all'incrocio con Atwater Avenue, nell'omonimo quartiere. Fu utilizzata da Tarantino in omaggio al film Psyco, dove la stessa strada era stata usata da Hitchcock come
                    sfondo del lunotto posteriore quando Marion fugge in auto, dopo il furto ai danni del principale.
                    Poco distante da Atwater ci sono le case a schiera di La Clede Avenue, dove al numero 3519 era la casa di Lance, lo spacciatore.
                    Hawthorne Grill, il bar all'inizio e alla fine del film, era in realtà l'"Holly's bar", al 13763 di Hawthorne Boulevard angolo 137th west Street di Hawthorne; fu demolito qualche anno dopo il film.
                    L'albergo dove si rifugiano Butch e Fabienne era il River Glen Motel, al 2934 di Riverside Drive; quando Butch scappa con lei in moto, si intravede sullo sfondo il cavalcavia di Hyperion Avenue. Oggi il motel non esiste più.
                    La casa di Jimmie, si trovava a Toluca Lake (dove erano anche gli "studios"), un quartiere a nord della città, verso Burbank, al 4149 di Kraft Avenue. Stessa cosa per lo sfasciacarrozze "Mostro Joe", che non era molto distante; esso era realmente
                    in uno dei ghetti della città, come dice Wolf, trovandosi 5 km circa più a nord, al 12143 di Branford Street. Si trattava veramente di uno sfasciacarrozze, in realtà col nome di Autotruck Recyclers.
                    Le riprese richiesero poco più di due mesi, dal 20 settembre al 30 novembre 1993.
                </div>
                <br><br>
                <div class="col-xl-10" id="paragrafo-scheda" data-aos="fade-left">
                    <h2>Scene eliminate</h2>
                    Visto il successo della pellicola, nel 1996 uscì per il mercato home video, in VHS, una Special Collector's Edition: questa edizione include una scena finale di 11 minuti aggiuntivi in cui il regista presenta due nuovi avvenimenti:
                    il primo incontro tra Mia e Vincent nell'appartamento della donna è più lungo. Prima di andare a cenare al Jack Rabbit Slim's, Mia inscena un'intervista a Vincent con una telecamera a mano, ponendogli alcune domande futili, su un'eventuale parentela
                    con la cantante folk Suzanne Vega, e la sua preferenza su delle vecchie serie televisive, come La famiglia Brady o i Partridge, nonché se sia stato influenzato nel suo stile da Elvis Presley o dai Beatles". Questa scena spiega una battuta successiva
                    («A un Elvis-maniaco dovrebbe piacere») che Mia dice nella versione cinematografica.
                    la corsa in taxi e la conversazione tra Butch ed Esmeralda dura di più ed è presente un dialogo aggiuntivo in cui Butch spiega le sensazioni che si provano a essere un pugile e uccidere il proprio avversario.
                    La versione canadese del DVD include le due scene inedite già menzionate, e uno speciale in cui sono visionabili altre scene non presenti nel montaggio finale. Le aggiunte sono le seguenti:
                    ampliamento della scena in cui Vincent Vega compra l'eroina a casa di Lance e parla delle persone rozze. Lance racconta in questa scena di come una volta egli abbia chiesto delle informazioni mentre era all'estero e queste gli furono date errate.
                    Una scena in cui Wolf e Raquel, la figlia dello sfasciacarrozze, stanno flirtando e decidono di andare a fare colazione.
                </div>
            </div>
        </div>
    </div>


    <?php
    include('footer.php');
    include('scripts.php');
    ?>
</body>





</html>