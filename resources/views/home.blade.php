<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aksén Coffee</title>

    <link rel="stylesheet" href="css/content.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   .title-home {
    color: #283933;
    margin-top: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 60vh;
    flex-direction: column;
    text-align: center;
   }

   .content-home {
    
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    text-align: left;
   }

   .content-home .text {
    flex: 1;
    padding-right: 30px;
    margin-left: 70px;
    margin-top: -150px;
   }

   .content-home .text p{
    margin-bottom: 10px;
   }

   .content-home .image {
    flex: 1;
    text-align: center;

   }

   @font-face {
    font-family: 'MyCustomFont';
    src: url('assets/fonts/MyCustomFont.ttf');
}

.content{
    font-family: 'MyCustomFont';
}

   @media (max-width: 768px) {
      .content-home {
        margin-top: 70px;
         flex-direction: column;
         text-align: center;
      }
      .content-home .text, .content-home .image {
         margin-top: 30px;
         padding-right: 0;
         margin-bottom: 20px;
         margin-left: 0;
      }
   }


   video {
      width: 100%;
      height: auto;
      max-height: 570px; 
      margin-bottom: 20px;
      border-radius: 10px;
      object-fit: cover; 
   }
</style>
<body>

    <header>
        @include('navbar')
    </header>

    <!-- Title Section -->
    <div class="container-fluid title-home">
        <h1 class="fw-bold">Aksén Coffee</h1>
        <video autoplay muted loop>
            <source src="{{ asset('assets/video/aksen-coffee.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung pemutar video.
        </video>
    </div>

    <!-- Content Section -->
    <div class="container-fluid mt-5">
        <div class="row content-home">
            <div class="col-md-6 text">
                <h1 class="display-5 fw-bold">Welcome to Aksén Coffee</h1>
                <p>Enjoy the best coffee experience with us!</p>
                <p class="content">
                    Di Aksén Coffee, kami sangat bersemangat untuk memberikan pengalaman kopi terbaik bagi Anda. 
                    Terletak di jantung kota, kafe kami adalah surga bagi para pecinta kopi, menawarkan suasana 
                    hangat dan mengundang yang sempurna untuk bersantai atau pertemuan santai. Kami memilih biji 
                    kopi dari daerah penghasil kopi terbaik di seluruh dunia, memastikan setiap cangkir kaya, penuh 
                    rasa, dan diseduh dengan sempurna.
                </p>
                <p>

                </p>
            </div>

            <div class="col-md-6 image">
                <img src="{{ asset('assets/img/foto1.jpg') }}" alt="Coffee" class="img-fluid rounded-3" width="50%">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
