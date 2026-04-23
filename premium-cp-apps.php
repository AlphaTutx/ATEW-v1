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
    <title>Premium Apps</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style2.css">
</head>

<body class="text-gray-300">
    <div class="full-width-wrapper">

      <header class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-xl sticky top-0 z-50 backdrop-blur-md">
       
        <div class="text-3xl font-extrabold text-cyan-400 tracking-wider drop-shadow-md animate-pulse" >Premium Apps</div>
        
        <nav class="hidden md:flex space-x-6 text-gray-300">
          <a href="login.php" class="hover:text-cyan-400 transition font-semibold">| PC Games |</a>
          <a href="cp-games.php" class="hover:text-cyan-400 transition font-semibold">| CP Games |</a>
          <a href="premium-cp-apps.php" class="hover:text-cyan-400 transition font-semibold">| Premium CP & PC Apps |</a>
          <a href="Emulators-and-Roms.php" class="hover:text-cyan-400 transition font-semibold">| Emulators & Roms |</a>        
          <a href="gamesuppfix.php" class="hover:text-cyan-400 transition font-semibold">| Support/Fix |</a>
          <a href="18-section.php" class="hover:text-cyan-400 transition font-semibold">| 18+ Section |</a>
          <a href="https://docs.google.com/spreadsheets/d/11IYCG_vo-DEtob08IRnInzHfAwrtf11-K2QZKiwODCM/edit?usp=drive_link" target="_blank" class="hover:text-cyan-400 transition font-semibold">| Request Area |</a>
          <a href="logout.php" class="text-red-500 hover:text-red-700 transition font-semibold">| Logout |</a>
       
        </nav>

        </header>

        <main class="max-w-7xl mx-auto px-4 py-12 space-y-20">

          <!-- Search Bar -->
<div class="relative w-3/5 mx-auto mb-10">
  <input
    type="text"
    id="searchInput"
    placeholder="Search here..."
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
          



                              <!-- SPORTS STREAMING APPS -->
<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">SPORTS STREAMING APPS</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/olympic-games.jpg" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Live OLYMPIC GAMES</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Sports LIVE Streaming Site<br>No need to download</p>
                <a href="https://ppvs.su/" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Stream Now</a>
                <a href="https://docs.google.com/document/d/1kWCefdtv1N2AxQ6ORIvUvLdUa7h22aUXrds7ENcPg2o/edit?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Instruction</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/nba-lp.png" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Live NBA Games <br>[Option 1]</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">NBA Games LIVE Streaming App<br>No need to Sign Up/In</p>
                <a href="https://www.mediafire.com/file/fonz5ycoyuewhoy/rbtv_app_v3.0.308.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/nba-lp.png" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Live NBA Games <br>[Option 2]</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">NBA Games LIVE Streaming App<br>No need to Sign Up/In</p>
                <a href="https://www.mediafire.com/file/pjqzg076zmecnoy/CRICFy_TV_v5.5.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
            
</section>
                                <!-- END OF SPORTS STREAMING APPS -->


                                <!-- MOVIE STREAMING APPS -->
<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">MOVIE STREAMING APPS</h2>
          
      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/hbo-max.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">HBO MAX</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No need account | No ADS | Premium unlocked</p>
                <a href="https://www.mediafire.com/file/h6cp11zmjdavsdi/HBOMax%252B_Mod_By_iking_08_02_2026.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/prime-vid.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Prime Video</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No need account | No ADS | Premium unlocked</p>
                <a href="https://www.mediafire.com/file/rmnfzjnpyjz0cbx/Prime_Video_v4.0.800.404_40_Pro__41_.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/fr.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">FreeReels Premium</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No need account | No ADS | Premium unlocked</p>
                <a href="https://www.mediafire.com/file/pmr7tw1qnyg9hn4/FreeReels_v2.1.60_%2528Mod%2529.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/cinetv.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">CineTV PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No need account | No ADS | Multilingual | No need account</p>
                <a href="https://www.mediafire.com/file/ifyp73629gsyhiu/CineTV_v4.0.0_(022026).apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/stv.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Live TV and Dubbed Movies</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & SMART TV's</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Movie Streaming App<br>No need to Sign Up/In/Download</p>
                <a href="https://www.mediafire.com/file/krbrbxeohn7agyl/DXStreamTVApp.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/netflix.png " alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NETMirror</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & SMART TV's</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Movie Streaming App<br>No need to Sign Up/In/Download</p>
                <a href="https://www.mediafire.com/file/mx3ao963r966815/NetMirror_for_TV_%2526_Mobile_1.0_lore.apk/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

             <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/mv-aio.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">All in One MOVIE STREAMING SITE</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No ADS | Movie Streaming Site<br>No need to Sign Up/In/Download</p>
                <a href="https://www.dulo.tv/" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Stream Now</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/netflix.png " alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NETFLIX Alternative [Option 1]</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Movie Streaming App<br>No need to Sign Up/In/Download</p>
                <a href="https://www.n4ked.top/" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Stream Now</a>
                <a href="https://docs.google.com/document/d/1kWCefdtv1N2AxQ6ORIvUvLdUa7h22aUXrds7ENcPg2o/edit?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Instruction</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/netflix.png " alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NETFLIX Alternative [Option 2]</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Movie Streaming App<br>No need to Sign Up/In/Download</p>
                <a href="https://socialtoolsbyhashim.site/empireflix.php" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Stream Now</a>
                <a href="https://docs.google.com/document/d/1kWCefdtv1N2AxQ6ORIvUvLdUa7h22aUXrds7ENcPg2o/edit?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Instruction</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/netflix.png " alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NETFLIX Alternative [Option 3]</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Movie Streaming App<br>No need to Sign Up/In/Download</p>
                <a href="https://yflix.to/movie" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Stream Now</a>
                <a href="https://docs.google.com/document/d/1kWCefdtv1N2AxQ6ORIvUvLdUa7h22aUXrds7ENcPg2o/edit?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Instruction</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/h-prem.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Hiku PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked<br>Rated 18+ Movies</p>
                <a href="https://www.mediafire.com/file/cmy0jngqekhpu51/HIKU_1.0.20_40_Premium__41_.apk/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/dbl-prem.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">DramaBox Lite PREMIUM</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked<br>No need to Sign Up/In/Download</p>
                <a href="https://www.mediafire.com/file/jrs5u4ouii1kyg5/DramaBox_Lite_1.0.1_40_Premium__41_.apk/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/mb-vip.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Movie Streaming App <br> [Option 3]</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Movie Streaming App<br>No need to Sign Up/In</p>
                <a href="https://www.mediafire.com/file/vcgg0facndnbzhj/MovieBox+VIP_v3.0.11.1230.03(50020080).apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/hdo-box.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Movie Streaming App <br> [Option 4]</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No ads |   For Tv & Mobile</p><br>
                <a href="https://www.mediafire.com/file/k70o3xa36900b9d/HDO_Box_for_TV_MOD_By_JuanJade.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
          
</section>
                                  
                                <!-- END OF MOVIE STREAMING APPS -->


                                <!-- ANIME STREAMING APP -->
<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">ANIME STREAMING APPS</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/9anime.png" alt="9Anime" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">9Anime</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p> 
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Signature & Authentication Bypassed| Ads Patched/Disabled</p>
                <a href="https://drive.google.com/file/d/1UGYFAPJFQ5MfEjVwdK6BRWvvLzvbq-fq/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/anime-multi.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Anime Multiverse</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p> 
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No ads</p>
                <br>
                <a href="https://www.mediafire.com/file/kl7h25eimyocm0d/Anime+Multiverse_v99999(7451890).apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/anilab-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Anilab PREMIUM</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p> 
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No ads | Up to 1080P | Subbed & Dubbed options</p>
                <a href="https://www.mediafire.com/file/2cy1kxi3m1wqf72/Anilab_v1.1.2.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/hianime.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">hiAnime PREMIUM</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p> 
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium Crunchyroll Content | Add free | No need to login</p>
                <a href="https://drive.google.com/file/d/1Quizx_ZIQTdHyoG-daqBv9hf8BAGIYCt/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
          
</section>
                            <!-- END OF ANIME STREAMING APP -->


                            <!-- PREMIUM APPS -->
<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">MUSIC STREAMING APPS</h2>
         <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

         <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/radio.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
                <div class="p-5">
                  <h3 class="font-bold text-xl text-white mb-1">Worldwide FM RADIO</h3>
                  <br>
                  <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES & COMPUTERS</p>
                  <p class="text-cyan-400 text-sm mb-4 font-semibold">No ads</p>
                  <br>
                  <a href="https://paparadio.online/" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Stream Now</a>
                </div>
              </div>


          <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/spotify-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
                <div class="p-5">
                  <h3 class="font-bold text-xl text-white mb-1">Spotify PREMIUM</h3>
                  <br>
                  <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                  <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium Version | No ads</p>
                  <br>
                  <a href="https://files-2.modyolo.com/Spotify/Spotify_v9.1.40.1486.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
                </div>
              </div>

          <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/yttv-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5"> 
                <h3 class="font-bold text-xl text-white mb-1">Youtube TV PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR SMART TV's</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked</p>
                <br>
                <a href="https://www.mediafire.com/file/q5t1k56cnuwpp85/Y0uTub3_TV_Pr3m1um_v1.0.6_lore.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/deezer-prem.jpeg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Deezer Premium</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked | Enjoy offline music </p>
                <a href="https://drive.google.com/file/d/1lXq0Rw6fNwmNzxtvSev8bs_fzj9UkhSu/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/ot.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">OpenTune</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked</p>
                <br>
                <a href="https://www.mediafire.com/file/0h9wu65747bprgg/OpenTune_v2.0.11%2528125%2529.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/magicsing-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Magic Sing PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Life time Karaoke Premium</p>
                <br>
                <a href="https://www.mediafire.com/file/69bimg5acwuis52/Karaoke_Premium.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>


            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/yt-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Youtube PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No need micro G | No ads | Pop-up play | Background Play</p>
                <a href="https://www.mediafire.com/file/slyia9ej5i1b5e4/YouTube_Premium_v5.5.80.175.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

             

            

      </div>
          
</section>

                            <!-- END OF PREMIUM APPS -->    

<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">PHOTO AND VIDEO EDITING APPS</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/ape-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Adobe Photoshop Express PREMIUM</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium Unlocked</p>
                <br>
                <br>
                <a href="https://drive.google.com/file/d/1upUsM2z8MyH_HipQRjVJBC284YTGaPNS/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/km-prem.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">KineMaster PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium Unlocked</p>
                <br>
                <br>
                <a href="https://drive.google.com/file/d/13qS_pOTfRFq6HYzLKfS47hiJ09oSM-ka/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/pa-gold.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Picsart GOLD</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium Unlocked</p>
                <br>
                <br>
                <a href="https://www.mediafire.com/file/wz7yfskpf4budlb/Picsart_v29.1.4_%255BGold%255D_%25281%2529.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/pr.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">PhotoRoom MAX</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium Unlocked</p>
                <br>
                <br>
                <a href="https://www.mediafire.com/file/mxcwwo7p2d9ea12/Photoroom_2026.01.01_Mod_By_ModRings.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div> 

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/remini.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Remini PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No login required | Premium features Unlocked | Export video up to 1080P | No ads</p>
                <a href="https://www.mediafire.com/file/pbitp1kwkl42f0r/CapCut_Pro_v15.3.0.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/capcut-pro.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Capcut PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No login required | Premium features Unlocked | Export video up to 1080P</p>
                <br>
                <a href="https://www.mediafire.com/file/pbitp1kwkl42f0r/CapCut_Pro_v15.3.0.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
          
</section>


                          
                              <!-- END OF PRO APPS -->

<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">OTHER USEFUL APPS</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/all-adobe-2024.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">All Adobe Pre-Activated PC Softwares 2024</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pre-activated</p>
                <br>
                <a href="https://drive.google.com/file/d/1cPL3uH90ztJmPRCr46v557ms9RWC8HaY/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/ant-dl-manager.jpeg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
                <div class="p-5">
                  <h3 class="font-bold text-xl text-white mb-1">Ant Download Manager PRO</h3>
                  <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                  <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro version | Supported Torrent links</p>
                  <br>
                  <a href="https://www.mediafire.com/file/skj2ktdowbvpifd/Ant_Download_Manager_Pro_2.16.4.92194.rar/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
                </div>
              </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/tc-pro.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
                <div class="p-5">
                  <h3 class="font-bold text-xl text-white mb-1">Teracopy PRO</h3>
                  <br>
                  <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                  <p class="text-cyan-400 text-sm mb-4 font-semibold">Fast data transfer | Lifetime use</p>
                  <br>
                  <a href="https://www.mediafire.com/file/a9xmd7gybsvc408/TeraCopy_Pro_3.17.0.0.7z/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
                </div>
              </div>

              <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/ru-pro.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
                <div class="p-5">
                  <h3 class="font-bold text-xl text-white mb-1">Revo Uninstaller PRO</h3>
                  <br>
                  <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                  <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro version</p>
                  <br>
                  <a href="https://www.mediafire.com/file/myg12p8snpegurr/Revo_Uninstaller_Pro_v5.4.7_Multilingual_Portable_Edition.rar/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
                </div>
              </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/speechify-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Speechify Text to Speech PREMIUM</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No need to login</p>
                <br>
                <a href="https://www.mediafire.com/file/hzgo6tpu2j47cd0/Speechify_Text_to_Speech_v5_40_6785_b5406785_arm64_9_0_Patched.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/adobe-illus.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Adobe Illustrator</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">No need to login</p>
                <br>
                <a href="https://drive.google.com/file/d/1zf_qg06CC0aon-aYUTAyyA0H4IhsZzve/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/bandlab-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Bandlab PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">NO ADS | SIGN UP OR LOGIN WITH EMAIL | PREMIUM/PRO UNLOCKED</p>
                <a href="https://www.mediafire.com/file/ap07vwtizz1fzk4/BandLab_11.16.0_HEROMODS_%25281%2529.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/plex-pro.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Perplexity PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">PREMIUM/PRO UNLOCKED</p>
                <br>
                <a href="https://drive.google.com/file/d/1Gp2KTONpE79VXImhLPsmRbFkXSo_Fa-t/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/lofi-cam-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Lofi Camera PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked</p>
                <br>
                <a href="https://www.mediafire.com/file/3745guruf5mk4p0/LoFi_Cam_v2.17.0_40_Premium__41_40_Mod_by__ElaMods_41__.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>
            
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/suno-prem.jpeg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Suno PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked</p>
                <br>
                <a href="https://www.mediafire.com/file/5nhscpj43kjwq2m/Suno_1.41.0_PR3MIUM%252B_%2528Safefileku%2529.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/di-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Dynamic Island</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Phone design</p><br>
                <a href="https://www.mediafire.com/file/4czus8013irraod/Dynamic_Island_36.0_40_Premium__41_40_Mod_by_ElaMods__41__.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/tc-prem.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">True Caller PREMIUM</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Premium features Unlocked</p><br>
                <a href="https://www.mediafire.com/file/b8zvzqm64twlr6r/Truecaller-Premium-v16.8.6_build_1608006-Mod.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/wps-pro.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">WPS Office PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro features Unlocked</p><br>
                <a href="https://www.mediafire.com/file/9vs5nv5shw18mgm/WPS_Office_18.24_Mod_By_ModRings.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/wa-pro.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Windy App PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro features Unlocked</p><br>
                <a href="https://www.mediafire.com/file/c8jngd4cll0k5u9/Windy.app-Pro-v87.0.1_build_836-Mod.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/vc-pro.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Voice Changer PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro features Unlocked</p><br>
                <a href="https://www.mediafire.com/file/73ii3v65lklftp2/Voice_Changer_-_Tune_My_Voice_1.34.2.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/ps-pro.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Parallel Space PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro features Unlocked</p><br>
                <a href="https://www.mediafire.com/file/woafwlhlrpoe05g/Parallel_Space_Pro_v4.0.9107_10920_Subscribed_Mod_%25281%2529.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/gemini-pro.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Gemini PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>                
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro features Unlocked</p>
                <br>
                <a href="https://www.mediafire.com/view/ygo6prf5t90jt67/GEMINIPRO.jpg/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/idm.jpeg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Internet Download Manager</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>                
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pre-activated | Fast download speed</p>
                <br>
                <a href="https://drive.google.com/file/d/1V0blJyzGYrEYuY7TYEeG8ofCW-hSR0Sl/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
                <a href="https://docs.google.com/document/d/1GlG6H_PrFu-j_wYzwhBDDCtCF8cHDxBVxkCElHz-mRo/edit?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-3 rounded-md shadow-md transition">Read me first!</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/z-pro.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">ZArchiver PRO</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR PHONES</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Pro features Unlocked</p><br>
                <a href="https://www.mediafire.com/file/br9qd95joaf5mhy/ZArchiver_Pro.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>
            

      </div>
          
</section>


                              <!-- SPORTS STREAMING APPS -->
<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">PLUGINS & TOOLS FOR MIXING AND MASTERING</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/fl-stud-25.jpg" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">FL Studio Producer Edition 2025</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Mixing and mastering</p>
                <a href="" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/au-1.5.jpeg" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Adobe Audition 1.5</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Mixing and mastering</p>
                <a href="https://www.mediafire.com/file/jtg7ug0ptutbzxx/Adobe_Audition_1.5.7z/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/au-2026.jpg" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Adobe Audition 2026</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Mixing and mastering</p>
                <a href="https://www.mediafire.com/file/e0mxnd7vtux9w8c/Adobe.Audition.2026.V26.0.rar/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/deverberate3.png" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Acon Digital DeVerberate 3</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Mixing and mastering</p>
                <a href="https://www.mediafire.com/file/4y1u0q3nfddk07c/Acon_Digital_DeVerberate_3.rar/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/at-evo-vst6.jpg" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Antares Autotune Evo VST6</h3>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Mixing and mastering</p>
                <a href="https://www.mediafire.com/file/oe5zf95lpj4whza/Antares_Autotune_Evo_VST6_.rar/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/wdb.jpg" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Waves Diamond Bundle</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Mixing and mastering</p>
                <a href="https://www.mediafire.com/file/dimvikhvy29mjsf/Waves_Diamond_Bundle_v5.2.7z/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>
            
            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/wavesv10.jpeg" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Waves V10</h3>
                <br>
                <p class="text-red-400 text-sm mb-4 font-semibold">FOR COMPUTERS</p>
                <p class="text-cyan-400 text-sm mb-4 font-semibold">Mixing and mastering</p>
                <a href="https://www.mediafire.com/file/dimvikhvy29mjsf/Waves_Diamond_Bundle_v5.2.7z/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
            
</section>


</main>

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