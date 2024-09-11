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
    $page = 'Jackie';
    include('menu.php');
    ?>


    <div class="container" id="pagina-film">

        <button onClick="history_back()" class="btn btn-primary" id="button-pers4">
            Indietro
            <i class="bi bi-arrow-left-short"></i>
        </button>

        <div class="row g-0 justify-content-end">
            <div class="col-xl-3 col-lg-4 col-md-5 col-12 align-self-end" id="box-titolo" data-aos="fade-left">
                <h1>Jackie Brown</h1>
                <h2>1997</h2>
            </div>
        </div>

        <div class="row g-0 justify-content-between" id="scheda-row-1" data-aos="fade-right">
            <div class="col-xl-6 col-12 video-js" id="box-video">
                <video
                    id="my-video"
                    controls
                    preload="auto"
                    poster="assets/img/Video/movie-scene-jackie.jpeg"
                    data-setup="{}">
                    <source src="assets/img/Video/3_jackie.mp4" type="video/mp4" />
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
                            Pam Grier, Samuel L. Jackson, Robert Forster, Bridget Fonda, Michael Keaton, Robert De Niro
                        </h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row g-0 justify-content-center" id="box-scheda">
            <div class="col-xl-10 col-12" id="box-testo">
                <div class="col" id="paragrafo" data-aos="fade-right">
                    <h2>Una hostess di mezza età si trova al centro di un complicato intrigo criminale che può renderla ricca o costarle la vita.</h2>
                </div>
                <br><br>
                <div class="col-xl-10" id="paragrafo-scheda" data-aos="fade-left">
                    <h2>Produzione</h2>
                    Nel film sono riscontrabili diversi marchi di fabbrica del regista: la visuale dal bagagliaio dell'auto, usata in tutti i suoi film sino ad ora (quando Ordell cerca di convincere
                    Beaumont a entrarci dentro), la visuale dagli occhi della vittima (usata anche in Pulp Fiction e poi in Kill Bill) e il feticismo per i piedi di Tarantino: in diverse scene, specialmente
                    all'inizio ma anche più avanti, vengono infatti inquadrati i piedi di Melanie.
                    Si tratta dell'unico film non originale diretto da Tarantino, essendo tratto dal romanzo di Leonard.
                </div>
                <br><br>
                <div class="col-xl-10" id="paragrafo-scheda" data-aos="fade-right">
                    <h2>Cast</h2>
                    Sylvester Stallone era stato scelto originariamente per il ruolo di Louis, mentre John Travolta per quello di Ray Nicolette ma entrambi rifiutarono. Robert De Niro avrebbe voluto
                    interpretare Max Cherry ma Tarantino aveva già assegnato la parte a Robert Forster. Pur di lavorare con Tarantino, De Niro ha accettato il ruolo di Louis. Michael Keaton interpreta
                    il ruolo del poliziotto Ray Nicolette anche in un altro film tratto da un romanzo di Elmore Leonard, Out of Sight.
                    Robert De Niro e Samuel L. Jackson erano già stati insieme nel cast di un film (pur non apparendo nelle stesse scene), sette anni prima in Quei bravi ragazzi di Martin Scorsese.
                    Sid Haig, che interpreta il giudice del caso di Jackie, è noto per essere apparso in diversi altri film di exploitation con Pam Grier. Inoltre, tra i nomi scritti sul citofono
                    dell'appartamento di Melanie, figura S. Haig, chiaro riferimento all'attore.
                    La lista di Tarantino per i papabili interpreti di Max Cherry includeva anche i nomi di Gene Hackman, John Saxon e Paul Newman.
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