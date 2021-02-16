<?php require_once 'conf.php'; ?>
<!doctype HTML>
<html  xmlns="http://www.w3.org/1999/xhtml"
xmlns:og="http://ogp.me/ns#"
xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<title>Dior Photo</title>

<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<meta charset="UTF-8">

<meta name="description" content="Tomate la mejor foto con nuestros filtros!">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="apple-mobile-web-app-capable" content="yes">

<link href="https://fonts.googleapis.com/css?family=Rubik:100,200,400,900" rel="stylesheet">
<script src="https://kit.fontawesome.com/c3dc277a66.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<!-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"> -->

<script>
var share_number='0';
var site_url='<?php echo $site_url; ?>';
</script>

</head>

<body>
    <div class="wrapper row">
    <div id="first-move" class="inner">
    <main id="main">
    <div class="demo-wrapper">
    <div class="row">
        <div class="col-12 col-sm-4 ">
            <div class="logo"><img src="img/dior-logo.svg"></div>
    </div>
    <div class="col-12 col-sm-4 ">
       <div class="top--text">Inside Dior’s world of perfume</div>
       <div class="nose-logo"><img class="nose-logo" src="img/nose-logo.svg"></div>
    </div>
    </div>
    <div class="row booth">

        <div class="col-12 col-sm-4 "></div>
        <div class="col-12 col-sm-4 ">
           <div id="preview-img" class="preview-img"><img width="100%" src="frame-ex.jpg">
            <div class="aditional-text">
                A SMELL GOOD MOVIE BY <br><span> Clément Beauvais & Arthur de Kersauson</span>
            </div>
        </div>
           <div id="preview-video" class="preview-video"><video  autoplay loop muted playsinline  id="video" autoplay></video>
            <img class="img-oculta" src="frame.png">
             </div>
             <div  id="adt1" class="aditional-text" style="display: none;">
                A SMELL GOOD MOVIE BY <br><span> Clément Beauvais & Arthur de Kersauson</span>
            </div>
           
        </div>
        <div class="col-12 col-sm-4 ">
            <div id="start">
                <button class="start">START</button>
             </div>
             <div id="snap">
                <button class="start">TAKE A PHOTO</button>
              </div>
        </div>
 
    </div>
    <div id="contenido" class="row">
        <div class="col-12 col-sm-4 "></div>
        <div class="col-12 col-sm-4 ">
            <div style="width:100%; margin: auto;">
                <canvas class="copyable" id="canvas"  width="320px" height="600px"></canvas>
                <div id="primary-slider" height="auto">
                    <img width="100%" src="frame.png">
                </div>
                <div id="adt2" class="aditional-text" style="display: none;">
                    A SMELL GOOD MOVIE BY <br><span> Clément Beauvais & Arthur de Kersauson</span>
                </div>
            </div>
         </div>
        <div class="col-12 col-sm-4 ">
            <div id='share' style="display: none;">
                <div id="download" class="btn-share">
                    <button class="btn-down">DOWNLOAD</button>
                </div>

                <div  class="aditional-text"> And Share with everyone</div>
                <div class="social-container">
                    <div id="fb" class="btn-share social-share">
                    <img src="img/simple-facebook.svg" alt="">
                    </div>
                    <div id="twitter" class="btn-share social-share">
                    <img src="img/awesome-twitter.svg" alt="">
                    </div>
                    <div id="mail" class="btn-share social-share">
                        <img id="mail2" src="img/awesome-email.svg" alt="">
                    </div>
                 </div>
          </div>
        </div>
    </div>
 </body>
 
 
  <!-- <link href="css/animate.css"  rel='stylesheet' type='text/css'> -->
  <!-- <script src="js/jquery-1.10.2.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!-- <script src="js/wow.min.js"></script> -->
  <script>
            
        var primarySlider, first, canvasF;

        (function() {
            var a = {};
            var f = /iPhone/i,
                h = /iPod/i,
                i = /iPad/i,
                r = /\biOS-universal(?:.+)Mac\b/i,
                g = /\bAndroid(?:.+)Mobile\b/i,
                j = /Android/i,
                c = /(?:SD4930UR|\bSilk(?:.+)Mobile\b)/i,
                d = /Silk/i,
                b = /Windows Phone/i,
                k = /\bWindows(?:.+)ARM\b/i,
                m = /BlackBerry/i,
                n = /BB10/i,
                o = /Opera Mini/i,
                p = /\b(CriOS|Chrome)(?:.+)Mobile/i,
                q = /Mobile(?:.+)Firefox\b/i;

            function s(l) {
                return function($) {
                    return $.test(l)
                }
            }

            function e(l) {
                var $ = (l = l || ("undefined" != typeof navigator ? navigator.userAgent : "")).split("[FBAN");
                void 0 !== $[1] && (l = $[0]), void 0 !== ($ = l.split("Twitter"))[1] && (l = $[0]);
                var a = s(l),
                    e = {
                        apple: {
                            phone: a(f) && !a(b),
                            ipod: a(h),
                            tablet: !a(f) && a(i) && !a(b),
                            universal: a(r),
                            device: (a(f) || a(h) || a(i)) && !a(b)
                        },
                        amazon: {
                            phone: a(c),
                            tablet: !a(c) && a(d),
                            device: a(c) || a(d)
                        },
                        android: {
                            phone: !a(b) && a(c) || !a(b) && a(g),
                            tablet: !a(b) && !a(c) && !a(g) && (a(d) || a(j)),
                            device: !a(b) && (a(c) || a(d) || a(g) || a(j)) || a(/\bokhttp\b/i)
                        },
                        windows: {
                            phone: a(b),
                            tablet: a(k),
                            device: a(b) || a(k)
                        },
                        other: {
                            blackberry: a(m),
                            blackberry10: a(n),
                            opera: a(o),
                            firefox: a(q),
                            chrome: a(p),
                            device: a(m) || a(n) || a(o) || a(q) || a(p)
                        },
                        any: !1,
                        phone: !1,
                        tablet: !1
                    };
                return e.any = e.apple.universal || e.apple.device || e.android.device || e.windows.device || e.other.device, e.phone = e.apple.phone || e.android.phone || e.windows.phone, e.tablet = e.apple.tablet || e.android.tablet || e.windows.tablet, e
            }
            a = e();
            if (typeof exports === "object" && typeof module !== "undefined") {
                module.exports = a
            } else if (typeof define === "function" && define.amd) {
                define(function() {
                    return a
                })
            } else {
                this["isMobile"] = a
            }
        })();

        $('#primary-slider').hide();
        $('#start').on('click', function() {
            // Grab elements, create settings, etc.
            canvas = document.getElementById('canvas');
            context = canvas.getContext('2d');
            video = document.getElementById('video');
            mediaConfig = {
                video: {
					width: { min: 852, ideal: 1280, max: 1920 },
					height: { min: 480, ideal: 720, max: 1080 },
                    facingMode: 'user'
				}
            };
            errBack = function(e) {
                console.log('An error has occurred!', e)
            };
            navigator.mediaDevices.getUserMedia({
				video: {
					width: { min: 852, ideal: 1920, max: 1920 },
					height: { min: 480, ideal: 1080, max: 1080 },
                    facingMode: 'user'
				}
            }).then(
                stream => (video.srcObject = stream),
                err => console.log(err)
            );
            // Put video listeners into place
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia(mediaConfig).then(function(stream) {
                    video.srcObject = stream;
                    video.play();
                });
            }

            /* Legacy code below! */
            else if (navigator.getUserMedia) { // Standard
                navigator.getUserMedia(mediaConfig, function(stream) {
                    video.src = stream;
                    video.play();
                }, errBack);
            } else if (navigator.webkitGetUserMedia) { // WebKit-prefixed
                navigator.webkitGetUserMedia(mediaConfig, function(stream) {
                    video.src = window.webkitURL.createObjectURL(stream);
                    video.play();
                }, errBack);
            } else if (navigator.mozGetUserMedia) { // Mozilla-prefixed
                navigator.mozGetUserMedia(mediaConfig, function(stream) {
                    video.src = window.URL.createObjectURL(stream);
                    video.play();
                }, errBack);
            }

            $('#start').hide();
            $('#preview-img').hide();
            $('#preview-video').show();
            $('.img-oculta').show();
            $('#snap').css('display', 'flex');
            $('#adt1').show();
            
        });
        $('#snap').hide();
        canvas = document.getElementById('canvas');
        context = canvas.getContext('2d');
        video = document.getElementById('video');
        mediaConfig = {
            video: {
                facingMode: 'user'
            }
        };
        errBack = function(e) {
            console.log('An error has occurred!', e)
        };

        // Put event listeners into place
        window.addEventListener("DOMContentLoaded", function() {
            $('#share').hide();
            // Grab elements, create settings, etc.
            canvas = document.getElementById('canvas');
            context = canvas.getContext('2d');
            video = document.getElementById('video');
            mediaConfig = {
                video: {
                    facingMode: 'user'
                }
            };
            errBack = function(e) {
                console.log('An error has occurred!', e)
            };

            var frames = [];
            for (var i = 1; i <= 1; i++) {
                var frameImage = new Image();
                var file = isMobile.any ? 'frame-m' : 'frame';
                frameImage.src = file + '-0' + i + '.png';
                frames.push(frameImage);
            }

            // Trigger photo take
            document.getElementById('snap').addEventListener('click', function() {
                var context;
                var width, height;
                
                if (isMobile.any) {
                    width = video.offsetWidth * 3;
                    height = video.offsetHeight * 3;
                    
                    canvas = canvas || document.createElement('canvas');
                    canvas.width = width;
                    canvas.height = height;

                    context = canvas.getContext('2d');
                    context.drawImage(video, 0, 0, width, height);
                } else {

                    const outputImageAspectRatio =  0.6666;
                    width = video.videoWidth;
                    height = video.videoHeight ;
                    const inputImageAspectRatio = width / height;

                    let outputWidth = width;
                    let outputHeight = height;
                    if (inputImageAspectRatio > outputImageAspectRatio) {
                        outputWidth = height * outputImageAspectRatio;
                    } else if (inputImageAspectRatio < outputImageAspectRatio) {
                        outputHeight = width / outputImageAspectRatio;
                    }

                    canvas = canvas || document.createElement('canvas');
                    canvas.width = outputWidth;
                    canvas.height = outputHeight;

                    width = outputWidth;
                    height = outputHeight;

                    context = canvas.getContext('2d');
                    context.drawImage(video, width/1.2,0, width, height, 0, 0, width, height);
                }

                // Transform to black and white - start
                // transformToSepia(canvas, context);
                // Transform to black and white - end
                
                window.photo = canvas.toDataURL();

                first = $('#primary-slider img');
                frames.map(function(frame, i) {

                    var canvasP = document.createElement('canvas');

                    canvasP.width = width;
                    canvasP.height = height;

                    ctx = canvasP.getContext('2d');
                    ctx.drawImage(video, width/1.2 ,0, width, height, 0, 0, width , height);

                    if (isMobile.any) {
                        ctx.drawImage(video, 0, 0, width, height);
                        ctx.translate(video.videoWidth * 2 + 5, 0);
                        ctx.scale(-1, 1);
                        ctx.drawImage(video, 0, 0, width, height);
                        ctx.translate(video.videoWidth * 2 + 5, 0);
                        ctx.scale(-1, 1);
                        flipImage(video, ctx, 1, 0, width, height);
                    } else {
                        var ua = navigator.userAgent.toLowerCase();
                        if (ua.indexOf('safari') != -1) {
                            if (ua.indexOf('chrome') > -1) {
                                // Do nothing
                            }
                        } else {
                            // ctx.drawImage(video, width/1.2, width, height, 0, 0, width, height);
                            
                        }
                    }

                    // Transform to black and white - start
                    //  transformToSepia(canvasP, ctx);
                     transformToSat(canvasP, ctx);
                    // Transform to black and white - end
                    ctx.drawImage(frame, 0, 0, width, height);

                    photo = canvasP.toDataURL();
                    first[i].src = photo;
                    canvasF=canvasP;
					vidup();
                })

                $('.booth').hide();
                $('canvas').hide();
                $('#primary-slider').show();
                $('#share').show();
                $('#adt2').show();
                $('#contenido').show();

                document.getElementById('download').addEventListener('click', function() {
                    var link = document.createElement('a');
                    link.download = 'photo-dior.png';
                    link.href = first[0].src;
                    link.click();
                });



                document.getElementById('img')

                first.show();

            });
        }, false);

        function transformToSepia(canva, ctx) {
            var imageData = ctx.getImageData(0, 0, canva.width, canva.height);
            var dataArray = imageData.data;

            for(var i = 0; i < dataArray.length; i += 4)
            {
                var red = dataArray[i];
                var green = dataArray[i + 1];
                var blue = dataArray[i + 2];
                var alpha = dataArray[i + 3];

                var outRed = (red * .393) + (green *.769) + (blue * .189); // calculate value for red channel in pixel
                var outGreen = (red * .349) + (green *.686) + (blue * .168);
                var outBlue = (red * .272) + (green *.534) + (blue * .131);

                dataArray[i] = outRed < 255 ? outRed : 255; // check if the value is less than 255, if more set it to 255
                dataArray[i + 1] = outGreen < 255 ? outGreen : 255;
                dataArray[i + 2] = outBlue < 255 ? outBlue : 255
                dataArray[i + 3] = alpha;
            }
                    
            ctx.putImageData(imageData, 0, 0);
        }

        function transformToPurple(canva, ctx) {
            var imageData = ctx.getImageData(0, 0, canva.width, canva.height);
            var dataArray = imageData.data;


            for(var i = 0; i < dataArray.length; i += 4)
            {
                var red = dataArray[i];
                var green = dataArray[i + 1];
                var blue = dataArray[i + 2];
                var alpha = dataArray[i + 3];

                var outRed = (red * .693) + (green *.269) + (blue * .189); // calculate value for red channel in pixel
                var outGreen = (red * .449) + (green *.286) + (blue * .168);
                var outBlue = (red * .472) + (green *.234) + (blue * .131);

                dataArray[i] = outRed < 255 ? outRed : 255; // check if the value is less than 255, if more set it to 255
                dataArray[i + 1] = outGreen < 255 ? outGreen : 255;
                dataArray[i + 2] = outBlue < 255 ? outBlue : 255
                dataArray[i + 3] = alpha;
            }
                    
            ctx.putImageData(imageData, 0, 0);
        }


        function transformToSat(canva, ctx) {
            var imageData = ctx.getImageData(0, 0, canva.width, canva.height);
            var dataArray = imageData.data;


            for(var i = 0; i < dataArray.length; i += 8)
            {
                var red = dataArray[i];
                var green = dataArray[i + 1];
                var blue = dataArray[i + 2];
                var alpha = dataArray[i + 3];

                var outRed = (red * .500) + (green *.269) + (blue * .189); // calculate value for red channel in pixel
                var outGreen = (red * .449) + (green *.286) + (blue * .168);
                var outBlue = (red * .472) + (green *.234) + (blue * .131);

                dataArray[i] = outRed < 255 ? outRed : 255; // check if the value is less than 255, if more set it to 255
                dataArray[i + 1] = outGreen < 255 ? outGreen : 255;
                dataArray[i + 2] = outBlue < 255 ? outBlue : 255
                dataArray[i + 3] = alpha;
            }
                    
            ctx.putImageData(imageData, 0, 0);
        }


        function transformToGrayScale(canva, ctx) {
            var imgData = context.getImageData(0, 0, canva.width, canva.height);
            var data = imgData.data;

            for (k = 0; k < data.length; k += 4) {

              var brightness = 0.34 * data[k] + 0.5 * data[k + 1] + 0.16 * data[k + 2];
              // red
              data[k] = brightness;
              // green
              data[k + 1] = brightness;
              // blue
              data[k + 2] = brightness;
            }

            // overwrite original image
            ctx.putImageData(imgData, 0, 0);
        }

        function flipImage(img, ctx, flipH, flipV, width, height) {
            var scaleH = flipH ? -1 : 1, // Set horizontal scale to -1 if flip horizontal
                scaleV = flipV ? -1 : 1, // Set verical scale to -1 if flip vertical
                posX = flipH ? width * -1 : 0, // Set x position to -100% if flip horizontal 
                posY = flipV ? height * -1 : 0; // Set y position to -100% if flip vertical
            
            ctx.save(); // Save the current state
            ctx.scale(scaleH, scaleV); // Set scale to flip the image
            ctx.drawImage(img, posX, posY, width, height); // draw the image
            ctx.restore(); // Restore the last saved state
        };

         function vidup () {
             // aniscartujo 02/2021 - convert final to blob and upload
             canvasF.toBlob(function(blob){
                 // form data, field upimage
                 var data = new FormData();
                 data.append('upimage', blob);
              
                 // async ajax upload
                 var xhr = new XMLHttpRequest();
                 xhr.open('POST', "upload.min.php");
                 xhr.onload = function(){ 
					 share_number=this.response; //todo: if not fail do next
					 share_url=site_url + 's.php?n=' + share_number;
					 //add share buttons on click functions
					document.getElementById('fb').addEventListener('click', function() {window.open('https://www.facebook.com/sharer/sharer.php?u=' + share_url)});
					document.getElementById('twitter').addEventListener('click', function() {
						window_twitter=window.open('https://twitter.com/intent/tweet?url=' + share_url);
						});
					$("#mail2").wrap($('<a>',{href: 'mailto:info@example.com?&subject=&body= Hey I want to share this page with you '+ share_url}));
					 
                 };
                 xhr.send(data);
             });
         }
  </script>
</html> 