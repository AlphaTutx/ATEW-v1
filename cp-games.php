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
    <title>CP Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style2.css">
</head>

<body class="text-gray-300">
    <div class="full-width-wrapper">

      <header class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-xl sticky top-0 z-50 backdrop-blur-md">
       
        <div class="text-3xl font-extrabold text-cyan-400 tracking-wider drop-shadow-md animate-pulse" >Cp Games</div>
        
        <nav class="hidden md:flex space-x-6 text-gray-300">
          <a href="login.php" class="hover:text-cyan-400 transition font-semibold">PC Games</a>
          <a href="cp-games.php" class="hover:text-cyan-400 transition font-semibold">CP Games</a>
          <a href="premium-cp-apps.php" class="hover:text-cyan-400 transition font-semibold">Premium CP/PC Apps</a>
          <a href="Emulators-and-Roms.php" class="hover:text-cyan-400 transition font-semibold">Emulators&Roms</a>        
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
    placeholder="Search cp games..."
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

            <!-- Game cards -->

<section>
          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">🎮 All CP Games</h2>

          <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/bm-inf.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Bright Memory: Infinite</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Unlocked All Paid DLCs<br><br>SIZE - 2.36 GB</p>                
                <a href="https://dl.apkvision.org/bright-memory-infinite/Bright-Memory-Infinite-vers1.22-full-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=mp2svVcxqFw" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/wofh-wa.png" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Way of the Hunter Wild America</h3>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 4.94 GB</p>                
                <a href="https://dl.apkvision.org/way-of-the-hunter-wild-america/WOTH-America-v1.0.6-mod-apkvision.apks" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=lg0ds5UoZxE&list=PLTLjn0Iza2t3_Ksrt13qM8FuVifCK6fo0" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/cnf-ep.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">CHERNOFEAR: Evil of Pripyat</h3>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 594.77 MB</p>                
                <a href="https://dl.apkvision.org/chernofear-evil-of-pripyat/CHERNOFEAR-Evil-of-Pripyat-v1.47-full-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=_KWHez5S6m8" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/tf-2.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">The Fall 2 : Zombie Survival</h3>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 918.94 MB</p>                
                <a href="https://dl.apkvision.org/the-fall-2-zombie-survival/TheFall2-v1.23-full-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=ZbTfjcQbOXo&t=322s" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/dls-2025.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Dream League Soccer 2025</h3>                
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 184.04 MB</p>                
                <a href="https://dl.apkvision.org/dream-league-soccer-2025/Dream%20League%20Soccer%202026_13.040_apkvision.xapk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=uQNBpGmSnLw" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/efb.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">eFootball™</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 2.36 GB</p>                
                <a href="https://dl.apkvision.org/efootball/eFootball%E2%84%A2%202024_10.2.1_apkvision.xapk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=BwYZrgDpUco" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/hbmr.jpeg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Hitman: Blood Money Reprisal</h3>                
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 3.06 GB</p>                
                <a href="https://dl.apkvision.org/hitman-blood-money-reprisal/hitman-bmr-v1.2RC13-apkvision.apks" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=hwl_teK4lv0&list=PLlTQsdwUVyRmnXQhVfEIHypkfkMzq4pB4" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/scsv.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Shin chan: Summer Vacation</h3>                
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 1.9 GB</p>                
                <a href="https://dl.apkvision.org/shin-chan-summer-vacation/Shin-chan-Summer-Vacation-v1.0.2-unlocked-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=Oj2jnXL6ByU" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/woi2.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Wall Of Insanity 2</h3>
                <br>               
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 1 GB</p>                
                <a href="https://dl.apkvision.org/wall-of-insanity-2/Wall-Of-Insanity-2-v1.3-full-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=AouFcln7VWs&list=PLyucSNUrI7OtlL4tRXMDOeB2Ge91-80aa" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/ark-ult.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">ARK: Ultimate Mobile Edition</h3>                
                <p class="text-red-400 text-sm mb-4">All Paid DLC Unlocked (Maps & God Console) | License Check Removed<br>SIZE - 2.24 GB</p>                
                <a href="https://dl.apkvision.org/ark-ultimate-mobile-edition/ARK-Ultimate-Mobile-Edition-v1.0-b28-unlocked-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=UpKy4F1jcV0" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/sm2.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">The Amazing Spider-Man 2</h3>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 635 MB</p>                
                <a href="https://docs.google.com/document/d/1XxamwRiwm7C0SevyGuKIbXc2nJdtgFf2eGdljN_F8SY/edit?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=0zo5eqV2I-w" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/prow-z.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">PROW Z</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 1.01 GB</p>                
                <a href="https://dl.apkvision.org/prow-z-open-world-premium/PROW-Z-v1.0-full-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=9P4axnhebLU" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/tabs.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5"> 
                <h3 class="font-bold text-xl text-white mb-1">TABS Pocket Edition</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 1.24 GB</p>                
                <a href="https://dl.apkvision.org/tabs-pocket-edition/TABS-Pocket-Edition-v1.1.05-full-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=BG3h6vdtVWQ&list=PLwkM9SypJALtVQjx2j8cJxRpSQXd-2MAW" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/mc-pe.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Minecraft PE</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 876.43 MB</p>                
                <a href="https://dl.apkvision.org/minecraft/Minecraft-v1.21.131.1-full-apkvision.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=s4uyRWolZ3Q" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/m-e.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">ManEater</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Premium Version<br><br>SIZE - 5.33 GB</p>                
                <a href="https://dl.apkvision.org/maneater/Maneater-v1.3-full-apkvision.apks" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=ik8kJ2G0vpo" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/t6.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Tekken 6</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Full Version<br><br>SIZE - 37.75MB</p>                
                <a href="https://dl.apkvision.org/tekken-6/tekken6_v1.0.0.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=9x0SvPhT8NQ&t=475s" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/sf.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Spider Fuser</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Full Version<br><br>SIZE - 134.8 MB</p>                
                <a href="https://drive.google.com/file/d/1IO8cimRPe_hgwC5c63Dit0ennodyYAnR/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=T1-Z4SP5Y98" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/www-2k25.jpg" alt="WWE 2K25" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">WWE 2K25<br>[Netflix Edition]</h3>                
                <p class="text-red-400 text-sm mb-4">Commentary Included<br><br>SIZE - 4.58 GB</p>                
                <a href="https://www.mediafire.com/file/044pasmflckgsed/WWE-2K25-v0.1157.0-commentary-unlocked-apkvision.apks/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=3d7UuIlYEWo" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/hn.jpeg" alt="Hollow Knight" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Hollow Knight</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Full Version<br><br>SIZE - 931.55 MB</p>                
                <a href="https://www.mediafire.com/file/uqm2ukuoqlomxg0/hollow-knight-mobile-1.5.78.11833-mod-apkvision.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=MKW9ocWSOMs" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

          <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/pp-4.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Poppy Playtime 4</h3>
                <br>                
                <p class="text-red-400 text-sm mb-4">Full Version<br><br>SIZE - 1.78 GB</p>                
                <a href="https://www.mediafire.com/file/lu4fawamtxvtp6a/Poppy-Playtime-Chapter-4-v1.0.5-full-apkvision.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=hpdU1o99Sls" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/rdr-rockstar.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Red Dead Redemption <br>[Rockstar Version]</h3>
                <p class="text-red-400 text-sm mb-4">60FPS Unlock | Unlocked Graphic Settings<br>SIZE - 7.41 GB</p>
                <a href="https://www.mediafire.com/file/ak1albo6gy0dy4m/RDR-ROCKSTAR-v1.50.60293175-full-apkvision.apks/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=papqdr5CcEE" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>
            
            <!-- Game Card Template -->

             <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/cuphead.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Cuphead + DLC</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">Full Version || DLC Unlocked<br><br>SIZE - 1.9 GB</p>
                <a href="https://www.mediafire.com/file/x17nm3oyxha970n/Cuphead_with_DLC_Full_Version_v1.0.3_lore_Apkvision.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=zny7g6tslNg" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/bully-ae.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Bully Anniversary Edition</h3>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked | Unlocked 60 FPS Support | Increase Money<br><br>SIZE - 2.7 GB</p>
                <a href="https://www.mediafire.com/file/vvttwq9yls7z257/Bully_Anniversary_Edition_v1.4.299_lore.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=lKmKo5w1EZU&list=PLPpEvzuUGZvajlKaHraDGbFXWfnKO-MEr" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/mhs.jpg" alt="Monster Hunter Stories" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Monster Hunter Stories</h3>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked | Unlimited Money<br><br>SIZE - APK: 79.96 MB | OBB: 1.59 GB</p>
                <a href="https://docs.google.com/document/d/1Exeh5SgobOfCZLXwITMXxfPYYu-NUJ0W0DJnFJUmEuc/edit?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=KRO1eLe-Xaw" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/ss-bfbb.jpg" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">SpongeBob SquarePants - Battle for Bikini Bottom</h3>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - APK: 38.84 MB | OBB: 2.44 GB</p>
                <a href="https://docs.google.com/document/d/1_FFiHJ9jxyd6GHzaG1GrLkQoYkYCm-95WAu4Z1N_tO8/edit?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=kOvFyQbIzyI" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/wreckfest.jpg" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Wreckfest</h3><br>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 5.74 GB</p>
                <a href="https://www.mediafire.com/file/7rsywud877e92xu/lore_Wreckfest_v1.0.97_Full_Version.apks/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=jBNOrUUnYEo" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/tom.png" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Trials of Mana</h3><br>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 5.84 GB</p>
                <a href="https://www.mediafire.com/file/qtrb15rgcq8ypsv/lore_Trials_of_Mana_v1.0.4_Full_Version_Apkvision.apks/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=PCGuMH7Uvos" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/a9.jpg" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Asphalt 9</h3><br>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 1.43 GB</p>
                <a href="https://www.mediafire.com/file/lf6p8v0uttvuqt3/Asphalt_9_v1.2.1_FULL_OFFLINE_Version_lore.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=fYsO_B2QkRA" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/eternights" alt="Eternights" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Eternights</h3><br>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 3.7 GB</p>
                <a href="https://www.mediafire.com/file/2jpnxfb2nmh4w9a/Eternights_v1.0.2_Full_Version.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=-T4bv6jFNvY" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/mxd.png" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">MEGA MAN X DiVE</h3><br>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 2.15 GB</p>
                <a href="https://www.mediafire.com/file/1fsps1b2ggt6ied/MEGA_MAN_X_DiVE_Offline_v1.0.1_Full_Version.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=m6RqswBWGZs" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/pvz.jpg" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Plants vs Zombies - FUSION</h3>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 420 MB</p>
                <a href="https://www.mediafire.com/file/y86na8jz19s8cos/PvZ_Fusion_v3.0.1.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=op94IZP2K4E" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/gta-sa-defi.jpg" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">GTA San Andreas - Definitive Edition</h3>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked | 60 fps<br><br>SIZE - 13 GB</p>
                <a href="https://www.mediafire.com/file_premium/besfl3k3fjb8eut/60FPS-GTA-SA-DE-1.86.44544238-full-apkvision.apks/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=8yIwuSQQMjE&list=PLeryE-e3frBD57R0CVgct2PO66Y41pkvU" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/pop.jpg" alt="SpongeBob SquarePants - Battle for Bikini Bottom" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Prince of Persia - The Lost Crown</h3>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked<br><br>SIZE - 2 GB</p>
                <a href="https://drive.google.com/file/d/1McrR81HVZTTmf3ndMfi4hvvUrbtfXf02/view" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=bURUf1XxHZM&list=PL0q_sjjswpJgqlQ-G5jU9GZ419iFY1YyI" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/uns.jpg" alt="Ultimate Ninja STORM" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Ultimate Ninja STORM + MOD</h3>
                <p class="text-red-400 text-sm mb-4">All Characters Unlocked<br><br>SIZE - 3.23 GB</p>
                <a href="https://www.mediafire.com/file/nth4my91znxg8wz/Ultimate_Ninja_STORM_v1.2.9_Unlocked_Mod_Menu_lore.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=QtjRZTKUcdc&list=PLGtZwVE-T07sCDGlkr2MyS51ICYInqgdb" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/hw-ss.jpg" alt="Ultimate Ninja STORM" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Hollow Knight: Silksong + MOD Menu</h3>
                <p class="text-red-400 text-sm mb-4"> No internet connection, login or password required<br>SIZE - 1.82 GB</p>
                <a href="https://www.mediafire.com/file/uy0c0be6pykr5sz/Hollow_Knight_Silksong_v1.1.5-Mod_Menu.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=Y-drJT5MxgM" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

             <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/ss-cs.jpg" alt="SpongeBob - The Cosmic Shake" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">SpongeBob - The Cosmic Shake</h3>
                <p class="text-red-400 text-sm mb-4">Full Version<br><br>SIZE - 3.9 GB</p>
                <a href="https://www.mediafire.com/file/4b64gr4hbyn6m1a/Spongebob_The_Cosmic_Shake_v1.1.2_Full_Version.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=WMG5NdBdJL0" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/gta-sa-vc-defi.jpg" alt="GTA Vice City Definitive Edition" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">GTA Vice City Definitive Edition</h3>
                <p class="text-red-400 text-sm mb-4">Mod Unlocked Netflix 60FPS<br><br>SIZE - 3.48 GB</p>
                <a href="https://www.mediafire.com/file/qxsb5l2tb7ivb0s/GTA-Vice-City-Definitiveeee-60-FPS-v1.90.0-mod-apkvision.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=k1wMs_6ehws&list=PLeryE-e3frBBPhrO8_17EeararoTb62Vq" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/lnm.png" alt="Little Nightmares" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Little Nightmares</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">60FPS<br><br>SIZE - 1.05 GB</p>
                <a href="https://www.mediafire.com/file/25qac2mpnrzx23g/little-nightmaressss_144-.apk/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=O4JdtO-GTeQ" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nba2k14-26.jpg" alt="Little Nightmares" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NBA 2k20 Modded to 2k26</h3>
                <p class="text-red-400 text-sm mb-4">Updated as of now<br><br>SIZE - APK: 83.09 MB | OBB: 2.95 GB</p>
                <a href="https://docs.google.com/document/d/1pN-vpjSMyH4oOr_dqKW6rKvjPMFPr7yH_wfWcsk6djI/edit?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=9mF7nnF9mY4&t=17s" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>


            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/gl-del-ed.jpeg" alt="Little Nightmares" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Grid Legends Deluxe Edition</h3>
                <p class="text-red-400 text-sm mb-4">Updated as of now<br><br>SIZE - APK: 4.1 GB</p>
                <a href="https://dl.apkvision.org/grid-legends-deluxe-edition/grid-legends-1.1.4RC7-mod-apkvision.apks" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=pG2xZS-S50k" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img3/rdr-netflix.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Red Dead Redemption <br>[Netflix Version]</h3>
                <p class="text-red-400 text-sm mb-4">Full Version Unlocked || No Netflix account is required<br>SIZE - 6.26 GB</p>
                <a href="https://www.mediafire.com/file/oyvqrgfikuirhb9/Red_Dead_Redemption_NETFLIX_v1.50.60293175_Unlocked_lore.apks/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=papqdr5CcEE" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            </div>
</section>







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