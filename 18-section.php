<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18+ Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style2.css">
</head>

<body class="text-gray-300">
    <div class="full-width-wrapper">

      <header class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-xl sticky top-0 z-50 backdrop-blur-md">
       
        <div class="text-3xl font-extrabold text-cyan-400 tracking-wider drop-shadow-md animate-pulse" >18+ Section</div>
        
        <nav class="hidden md:flex space-x-6 text-gray-300">
          <a href="login.php" class="hover:text-cyan-400 transition font-semibold">PC Games</a>
          <a href="cp-games.php" class="hover:text-cyan-400 transition font-semibold">CP Games</a>
          <a href="premium-cp-apps.php" class="hover:text-cyan-400 transition font-semibold">Premium CP Apps</a>        
          <a href="gamesuppfix.php" class="hover:text-cyan-400 transition font-semibold">Game Support/Fix</a>
          <a href="18-section.php" class="hover:text-cyan-400 transition font-semibold">18+ Section</a>
          <a href="https://www.facebook.com/profile.php?id=100087598551338" target="_blank" class="hover:text-cyan-400 transition font-semibold">Fb Page</a>
          <a href="https://docs.google.com/spreadsheets/d/14crWaue7VCDUBApUCCkyZkLNzjpLTrjKyMYSNzY_8jc/edit?usp=drive_link" target="_blank" class="hover:text-cyan-400 transition font-semibold">Request a game</a>
          <a href="logout.php" class="text-red-500 hover:text-red-700 transition font-semibold">Logout</a>
		  

          
        </nav>

        </header>

        <main class="max-w-7xl mx-auto px-4 py-12 space-y-20">

          <!-- Search Bar -->
<div class="relative w-3/5 mx-auto mb-10">
  <input
    type="text"
    id="searchInput"
    placeholder="Search games..."
    class="w-full py-2.5 pl-12 pr-4 rounded-full bg-gray-900/60 text-white 
           border border-cyan-500/20 backdrop-blur-md shadow-md 
           focus:border-cyan-400 focus:shadow-cyan-400/40 transition-all text-sm outline-none"
  />

  <svg xmlns="http://www.w3.org/2000/svg"
       class="h-5 w-5 text-cyan-300 absolute left-4 top-1/2 -translate-y-1/2 opacity-80"
       fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
  </svg>
</div>
          <!-- End Search Bar -->

            <!-- Start of 18+ SECTION-->

<section>

          <h2 class="text-4xl font-extrabold mb-6 text-red-400">18+ Apps</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="18-img/cumtube.jpeg" alt="Cumtube" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Cumtube Premium</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">No ADS | Compatibility with Chromecast devices | Up to 1080p </p>
                <a href="https://drive.google.com/file/d/1Ar_RDt7xBrJlV-eyRpQ0FaqU5wNa1wUn/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="18-img/sextube.png" alt="Cumtube" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Sextube Pro</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">Unlocked Pro Version | No ADS</p>
                <br>
                <a href="https://drive.google.com/file/d/1RTBppMPk9iMmqIYjziPO3n9huZ5KmaLA/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="18-img/rated-x.png" alt="Cumtube" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Hot Movies</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">Unlocked VIP Version | No ADS</p>
                <br>
                <a href="https://drive.google.com/file/d/1poCwbBRedDVAKKTpuVUwB2Z0W-7Xb_Ik/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
            
</section>


      <!-- END of 18+ APPS -->


<section>
  <h2 class="text-4xl font-extrabold mb-6 text-red-400">Direct Links</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-20">

  <!-- SAMSARA -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1aif_0alHHYhsXvC6cR7oiPxMmAFYWXX1?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          SAMSARA
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/folders/1q5jum9b4PhxVOMtwP9_uZiSiibRg4DcZ?usp=drive_link" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>

    <!-- SHAYNA CHUA -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1FyTYeO0fGO3KlQjghKt2op5vNej2efkl?usp=drive_link" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          SHAYNA CHUA
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/file/d/135LSOIi_5YJ88MwO_GF10wY-bWs2k9VW/view" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source1: Gdrive</a>
        <a href="https://drive.google.com/file/d/1k41twHre6nhEcP2XuxHVA0ZN_hOSwtyH/view" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source2: Gdrive</a>
        <a href="https://drive.google.com/file/d/19ZJOshKgL9CYgl9hg-dYKdFcBcXK7Om2/view" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source3: Gdrive</a>
      </p>
    </div>


    <!-- NERIZA ABELLA -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1OKRPfoHuWwTmum9STAAg7Dme6jBVQf4q?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          NERIZA ABELLA
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://terabox.com/s/1qy4Tfm35TQoeV7R_c3_ugA" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source1: Terabox</a>
      </p>
    </div>


    <!-- ALITE ANLEI TUPAZ -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1-R6gYhK54sa9pzx_AZ0SiS0E4RtVyXA9?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          ALITE ANLEI TUPAZ
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/folders/1-WVS4pamjHyPyiJe2luGt92FkBnRpDHc?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


    <!-- CHARISSA MAE AMINOSO -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1bdRCnXC3uY-NY3to8FeQZK0y9h9M_6d-?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          CHARISSA MAE AMINOSO
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/file/d/1EsOFQtfqud8UKAlHq74iUK-GYfeX2_AK/view" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


    <!-- JEREMIE RIVERA -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1isywi6MG6j5NcHDM1P05qyCXkEwSwTer?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          JEREMIE RIVERA
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/folders/1iuWkj_SG97t3UAW7QmVJOu0DEtzI6ehW?usp=drive_link" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


    <!-- HANNAH MALAMUG -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/file/d/1E1XQR7uzJCB_nyNwnjhKdbz9PKJ0dVcu/view?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          HANNAH MALAMUG
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/u/0/folders/19omwRA4k7lrRC_UGYlgZqEUz_atUBaCG" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


    <!-- THEA FABRIGAS -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1LvBsmp-Tc5G2JJPJ2a9wzzN1G_oyBsta?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          THEA FABRIGAS
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/folders/1MgOS8E1uawj18lGmlQuZGt-ZWkzl3Oe-?usp=drive_link" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


    <!-- LARCY61 -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1C9bguMM-v6j2LwsTiwu9SJR2OCzgVHwD?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          LARCY61
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/ufpenbw0m3s5ghg/Larcy61.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Mediafire</a>
      </p>
    </div>


    <!-- BELLA -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/12CvP2s9AZnrzd83wfFdd8WWc0Iqp3Dae?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          BELLA
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/z6k4c2nje90zg8l/Bella.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Mediafire</a>
      </p>
    </div>


    <!-- BARBIE LACOSTE -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1PJJO17XvR0_Qy4bnJ6Xu0JSTiWA-v117?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          BARBIE LACOSTE
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/pfy27ou5fegvw07/Barbie+Lacoste.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Mediafire</a>
      </p>
    </div>


    <!-- CHARLOTTE PEÑALOSA -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1teLGi_lFsorS8Rh3kzm702nbT3eRddIj?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          CHARLOTTE PEÑALOSA
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/folders/1twFhHpzBG7GPxACnqRsfNBEixIoqJoah?usp=drive_link" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


    <!-- KATH MANDAL -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1R45BvYWFN93NjIRT2CYLgZQGh3iTq0Ez?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          KATH MANDAL
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/folders/1RAMHroU8VNMhCHsEJEq0m5NyVVQgciyG?usp=drive_link" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


    <!-- BRUNETTE EVANGELINE -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1Ur9Tz2oiELUFTyDaChwMSIccNooeZyTE?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          BRUNETTE EVANGELINE
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/vb3eyslvypinj2v/Brunette+Evangeline.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Mediafire</a>
      </p>
    </div>

    <!-- BRUNETTE EVANGELINE -->
    <div>
      <p>PREVIEW :
        <a href="https://drive.google.com/drive/folders/1cx-TY3LrUicTSxL-T1wm4IMLk4Yf48oP?usp=drive_link"
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          JUDY AHN DELA CRUZ
        </a>
      </p>

      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/drive/folders/1czq7A90ChwooNGdd2suiXgWOFflvInbf?usp=drive_link" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Source: Gdrive</a>
      </p>
    </div>


  </div>
</section>



<!-- START OF RANDOM SEX VIDS -->


<section>

<h2 class="text-4xl font-extrabold mb-6 text-red-400">Random Sex Links</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-20">
<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/rnn1rucm7obxrcb/Crezel.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">CREZEL | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/8abwiwbhye7cepm/Akilarious.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">AKILARIOUS | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://drive.google.com/folderview?id=13v3TnsdinuOvcnm7kIgJpmQQE6e32iW9" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">ALLY TAN | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/fxkou8dzdpbl6dj/Cassie+(Personals).zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">CASSIE | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/dttyvqnchq5g974/Angela+-+SHS.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">ANGELA | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/1f3zk0lurmcioe5/ACDSY.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">ACDSY | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/flqszboxyz46qiy/Jalanie.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">JALANIE | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file_premium/jxx3qp736js86fd/Ylara.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">YLARA | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/qm56d99ms4uav7x/Dimple+Thea.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">DIMPLE THEA | Source: Mediafire</a>
      </p>
</div>

<div>
      <p class="mt-4">VIDEO LINK/S :
        <a href="https://www.mediafire.com/file/rbw0j67z4t8k42a/Kimjun.zip/file" target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">KIMJUN | Source: Mediafire</a>
      </p>
</div>

</div>
</section>


            <!-- End of RANDOM LINKS-->

<!-- Search Filtering Script -->
    
<script>
  const searchInput = document.getElementById("searchInput");
  const gameCards = document.querySelectorAll(".game-card");

  searchInput.addEventListener("keyup", () => {
    const searchValue = searchInput.value.toLowerCase();

    gameCards.forEach(card => {
      const title = card.querySelector("h3").textContent.toLowerCase();
      const genre = card.querySelector("p").textContent.toLowerCase();

      if (title.includes(searchValue) || genre.includes(searchValue)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
</script>

<!-- END Search Filtering Script -->


</body>
</html>