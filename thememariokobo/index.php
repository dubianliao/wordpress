



        


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARIO KOBO[まりお工房] | 溝の口のクリエイター集団</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">

    <!-- フ ォ ン ト フ ァ ミ リ ー こ こ か ら -->

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">

    <!-- フ ォ ン ト フ ァ ミ リー こ こ ま で-->

    <!-- j Q U e r y 本 体 こ こ か ら　-->

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- j Q U e r y 本 体 こ こ ま で　-->
    <script type="text/javascript" src="./jquery.arctext.js">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">

    <?php wp_head(); ?>
</head>
<body>
    <div id="header"></div>

    <div id="content">
        <div class="top">
            <div class="container">
                <div class="title">
                    MARIO
                    <br>
                    <span>&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;KO-BO-</span>
                </div>
            </div>

            <p id="sent">SINCE 2016 MIZONOKUCHI</p>
            <div class="circle-wrap">
                <div class="circle">
                    <p>DYEING<br>
                    JAPAN<br>
                    TRADITIONAL<br>
                    INDIGO</p>
                </div>
                <div class="circle">
                    <p>MAKE<br>
                    WEB SERVICE<br>
                    AND<br>
                    WEB SITE</p>
                </div>
                <div class="circle">
                    <P class="third-circle">MAKE<br>
                    ORIGINAL<br>
                    POTTERY</P>                
                </div>
            </div>
            <P>CREATERS PROJECT IN MIZONOKUCHI</P>
            <P class="contact-link">
                CONTACT US 
                <span class="righticon">
                    &thinsp;&thinsp;>  
                </span>
            </P>

            <div class="works">
                <h2>WORKS</h2>
                <div class="select">
                    <div class="btn prev">
                        <div class="circle"><</div>
                    </div>
                    <div class="btn next">
                        <div class="circle">></div>
                    </div>
                </div>
            </div>
        </div>
    
        <!----------ここからswiper---------->
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                <div class="swiper-slide">
                    <div class="img-cover"></div>
                    <img src ="public/yukipc.jpg">
                    <p class="subject">YUKI YOSHIDA</p>
                </div>

                <div class="swiper-slide">
                    <div class="img-cover"></div>
                    <img src ="public/kuromatsuyapc.jpg">
                    <p class="subject">KUROMATSUYA PC</p>
                </div>

                <div class="swiper-slide">
                    <div class="img-cover"></div>
                    <img src ="public/kuromatsuyasp.jpg">
                    <p class="subject">KUROMATSUYA SP</p>
                </div>

                <div class="swiper-slide">
                    <div class="img-cover"></div>
                    <img src ="public/isarapc.jpg">
                    <p class="subject">ISARA PC (Replica)</p>
                </div>

                <div class="swiper-slide">
                    <div class="img-cover"></div>
                    <img src ="public/isarasp.jpg">
                    <p class="subject">ISARA SP (Replica)</p>
                </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!----------ここまでswiper---------->


    </div>
    <div id="content-second">
        <h2>MIZONOKUCHI</h2>
        <p>
            私たちは川崎市の<span class="br">溝の口を拠点として活動する、</span><br>フリーランスの<span class="br">クリエイターグループです。</span><br>お互いに影響し合い、<span class="br">ネットワークを活かしながら</span><br>伝統的且つ新しい<span class="br">価値を創り上げます。</span>
        </p>
        <div class="link-box">
            <div class="link-wrap">
                <div class="link fab fa-instagram"></div>
                <div class="link fab fa-twitter"></div>
                <div class="link fab fa-facebook-f"></div>
                <div class="link fab fa-line"></div>
            </div>
        </div>
    </div>

    <div id="footer"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>

    <script src="script.js"></script>

    <script type="text/javascript">

      $('#sent').arctext({radius:100});
      $('.subject').arctext({radius:120,dir: -1});
    </script>
    <?php wp_footer(); ?>
</body>

</html>
