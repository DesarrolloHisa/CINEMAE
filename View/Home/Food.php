<!DOCTYPE html>
<html>
<head>
  <title>Cinemae - Menú de Comida</title>
  <style>
    body {
      background-color: #f5f5f5;
      color: #333;
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    .carousel-container {
      width: 400px;
      margin: 0 auto;
      overflow: hidden;
    }

    .carousel-wrapper {
      width: calc(100% * 4);
      display: flex;
      transition: transform 0.5s ease-in-out;
      margin-left: 0;
    }

    .carousel-item {
      flex: 0 0 25%;
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
    }

    header {
    background-color: #333;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}



    .carousel-item img {
      max-width: 100%;
    }

    .carousel-item figcaption {
      margin-top: 5px;
    }

    .carousel-controls {
      text-align: center;
      margin-top: 10px;
    }

    #food {
      background-color: #f0f0f0;
      padding: 20px;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <ul>
      <a href="../../index.php" class="button">Página principal</a>
      </ul>
    </nav>
  </header>

  <section id="food">
  <h1 style="font-size: 36px;">Menú de Comida</h1>

    <div class="carousel-container">
      <div class="carousel-wrapper">
        <div class="carousel-item">
          <figure>
          <label><strong style="font-size: 25px;">Combo crispetas</strong></label>
            <img src="https://archivos-cms.cinecolombia.com/images/_aliases/medium/5/4/5/3/13545-7-esl-CO/borrar.png" alt="" width="300" height="300">
            <figcaption>1 Crispeta de sal 150 g + 2 Gaseosas 640 ml</figcaption>
          </figure>
        </div>
        <div class="carousel-item">
          <figure>
            <label><strong style="font-size: 25px;">Combo para dos</strong></label>
            <img src="https://archivos-cms.cinecolombia.com/images/_aliases/medium/4/3/5/3/13534-15-esl-CO/PARA DOS.png" alt="" width="300" height="300">
            <figcaption>1 Crispeta de sal 120 g + 2 perros calientes + 2 Gaseosas hasta 640 ml + 1 Kit Kat 41 g + 1 chocolatina Jet 30 g</figcaption>
          </figure>
        </div>
        <div class="carousel-item">
          <figure>
            <label><strong style="font-size: 25px;">Combo personal</strong></label>
            <img src="https://archivos-cms.cinecolombia.com/images/_aliases/medium/6/5/5/3/13556-23-esl-CO/PERSONAL.png" alt="" width="300" height="300">
            <figcaption>1 Crispeta de sal 120 g + 1 perro caliente + 1 Gaseosa 640 ml + 1 Kit Kat 41 g</figcaption>
          </figure>
        </div>
        <div class="carousel-item">
          <figure>
            <label><strong style="font-size: 25px;">Cine Combito</strong></label>
            <img src="https://archivos-cms.cinecolombia.com/images/_aliases/medium/8/7/5/3/13578-13-esl-CO/COMBITO.png" alt="" width="300" height="300">
            <figcaption>1 Caja crispetas de sal 55 g + 1 Gaseosa 640 ml + 1 chocolatina Jet 30g</figcaption>
          </figure>
        </div>
      </div>
    </div>

    <div class="carousel-controls">
      <button id="prevButton">←</button>
      <button id="nextButton">→</button>
    </div>

    <script>
      var carouselWrapper = document.querySelector('.carousel-wrapper');
      var prevButton = document.getElementById('prevButton');
      var nextButton = document.getElementById('nextButton');

      var currentSlide = 0;

      function moveToNextSlide() {
        currentSlide = (currentSlide + 1) % carouselWrapper.children.length;
        carouselWrapper.style.transform = 'translateX(-' + (currentSlide * 25) + '%)';
      }

      prevButton.addEventListener('click', function() {
        currentSlide = (currentSlide - 1 + carouselWrapper.children.length) % carouselWrapper.children.length;
        carouselWrapper.style.transform = 'translateX(-' + (currentSlide * 25) + '%)';
      });

      nextButton.addEventListener('click', function() {
        moveToNextSlide();
      });

      setInterval(moveToNextSlide, 8000);
    </script>
  </section>
</body>
</html>
