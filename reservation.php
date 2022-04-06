<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    BagAway - Main Page
  </title>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/tailwind.css" />
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  <!-- ==== WOW JS ==== -->
  <script src="assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</head>

<body class="bg-primary">
  <?php include 'headerConnected.php'?>
  <div id="home" class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-primary ">
    <div class="flex flex-wrap items-center -mx-4 ">
      <div class="w-full   px-4">
        <div class="
                hero-content
                text-center
                mx-auto
                h-max
                wow
                max-w-full
                fadeInUp" data-wow-delay=".2s">
          <form action="reservation-1.php" method="post">
            <h2 class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-8
                ">
              Réserver mon casier
            </h2>
            <div>
              <label for="nombre de bagage">Nombre de bagages : </label>
              <select class="inline-block
                    text-base
                    font-medium
                    text-white
                    bg-transparent
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-primary hover:border-primary
                    transition
                    duration-300
                    mb-8
                    ease-in-out" name="nbrbag">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class=" rounded-full
                    text-center
                    font-medium
                    py-4
                    px-11
                    ">
              <input name="type" type="radio" value="livraison">En Livraison</input>
              <input name="type" type="radio" value="surplace">Sur Place </input>
            </div>
            <label>Heure estimée pour récupérer mon bagage</label>
            <div class="inline-block
                    text-base
                    font-medium
                    text-primary
                    bg-white
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-4
                    hover:text-primary hover:bg-white hover:border-primary
                    transition
                    duration-300
                    mb-8
                    ease-in-out">
              <input type="time" id="meeting-time" name="date">
            </div>
            <br>
            <button class="
              mb-5
              mt-12
              text-base
              font-medium
              text-white
              bg-white bg-opacity-20
              rounded-lg
              py-3
              px-6
              hover:bg-opacity-100 hover:text-dark
              signUpBtn
              duration-300
              ease-in-out" type="submit" name="button">Confirmer ma réservation</button>
          </form>
        </div>
      </div>
    </div>


    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)" class="
        hidden
        items-center
        justify-center
        bg-primary
        text-white
        w-10
        h-10
        rounded-md
        fixed
        bottom-8
        right-8
        left-auto
        z-[999]
        hover:bg-dark
        back-to-top
        shadow-md
        transition
        duration-300
        ease-in-out
      ">
      <span class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->

    <script src="assets/js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
</body>

</html>