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
    <title>Premium CP Apps</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style2.css">
</head>

<body class="text-gray-300">
    <div class="full-width-wrapper">

      <header class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-xl sticky top-0 z-50 backdrop-blur-md">
       
        <div class="text-3xl font-extrabold text-cyan-400 tracking-wider drop-shadow-md animate-pulse" >Emulators & Roms</div>
        
        <nav class="hidden md:flex space-x-6 text-gray-300">
          <a href="login.php" class="hover:text-cyan-400 transition font-semibold">PC Games</a>
          <a href="cp-games.php" class="hover:text-cyan-400 transition font-semibold">CP Games</a>
          <a href="premium-cp-apps.php" class="hover:text-cyan-400 transition font-semibold">Premium CP Apps</a>
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
                            
                            
                              <!-- START OF EMU for CP -->
<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">Emulators for CP</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img4/gamehub.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">GameHub</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">Windows Emulator</p>
                <a href="https://gamehub.xiaoji.com/download/" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img4/yuzu-pc.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">YUZU</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">Nintendo Switch Emulator</p>
                <a href="https://files.yuzuemulators.com/yuzu-emulator-for-android-by-yuzuemulators.com.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
                <a href="https://files.yuzuemulators.com/yuzu-emulator-for-android-by-yuzuemulators.com.apk" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Prodkey/firm</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img4/ppsspp-g.jpeg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">PPSSPP Gold</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">PSP Emulator</p>
                <a href="https://drive.google.com/file/d/1EhuTb7UUeLLwyHjqwwefpGK12Xa9pRqQ/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img4/aethersx2.jpg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">AetherSX2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">PS2 Emulator</p>
                <a href="https://drive.google.com/file/d/10LBEbLxuVEQDrw-Ln0xyhg6AutWUIWKQ/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
                <a href="https://drive.google.com/file/d/15dyAE8FBI-qcElRiuWkQfffdWZf___Sa/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">BIOS Link</a>
              </div>
            </div>

      </div>
          
</section>

                              <!-- END OF EMU for CP -->

                              <!-- START OF EMU for PC -->
<section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">Emulators with Roms for PC</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img4/fnc.jpeg" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Fight Night Champion</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">For PC | Emulator: RPCS3</p>
                <a href="https://www.mediafire.com/file/oa8ubfm0t7xjn4n/FIGHT_NIGHT_CHAMPION-PR.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img4/smg-2.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Supermario Galaxy 2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">For PC | Emulator: Dolphin</p>
                <a href="https://www.mediafire.com/file/i998ikzgjehpkly/SUPER_MARIO_GALAXY_2-PR.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
          
</section>
                              <!-- END OF EMU for PC -->



<section>

<h2 class="text-4xl font-extrabold mb-6 text-cyan-400">ROMS</h2>

<!-- PPSSPP ROMS -->

<h3 class="text-4xl mb-6 text-red-400">PPSSPP</h3>

<div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-20">

  <div>
      <p>Final fantasy - DISSIDIA 012 :
        <a href="https://www.youtube.com/watch?v=fkDRRR_gmOY" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s :
        <a href="https://drive.google.com/file/d/1eNOAfwo8br-KFi6zBH7J4iKWSzJF1Bt3/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">ISO file</a>
        <a href="https://drive.google.com/file/d/11cGxmXbCbURcXcbM2x4dPcgivZbsdkfi/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">SaveData: UNLOCK ALL CHAR</a>
      </p>

  </div>

  <div>
      <p>Ratchet & Clank- Size Matters :
        <a href="https://www.youtube.com/watch?v=J6fYnBOrULs" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s :
        <a href="https://www.mediafire.com/folder/cv4aw5cpt5g6r/Ratchet+&+Clank-+Size+Matters" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">ISO file</a>
      </p>

  </div>
</div>

<!-- END of PPSSPP ROMS -->

<!-- PS2 ROMS -->

<BR></BR>

<h3 class="text-4xl mb-6 text-red-400">PS2</h3>

<div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-20">

  <div>
      <p>Shadow of Colossus : 
        <a href="https://www.youtube.com/watch?v=EOJwDeAV_mc&list=PLrVlvcyP9YsC0Tfre61EzprUSQJ9tl5og" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s :
        <a href="https://www.mediafire.com/file/wigv882sdwehsoq/Shadow_of_the_Colossus_%2528USA%2529.rar/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">ISO file</a>
      </p>

  </div>

  <div>
      <p>Silent Hill 2 : 
        <a href="https://www.youtube.com/watch?v=k7Kr15i7qeI" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s :
        <a href="https://www.mediafire.com/file/3omzg2i2j20ybwj/Silent+Hill+2+(USA)+(En,Ja,Fr,De,Es,It)+(v2.01).rar/file" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">ISO file</a>
      </p>

  </div>

</div>

<BR></BR>



<!-- NINTENDO SWITCH ROMS -->

<h3 class="text-4xl mb-6 text-red-400">NINTENDO SWITCH</h3>

<div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-20">

  <div>
      <p>Luigi's Mansion 3 : 
        <a href="https://www.youtube.com/watch?v=yEWtIFdvhMo" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s : 
        <a href="https://drive.google.com/file/d/1eNOAfwo8br-KFi6zBH7J4iKWSzJF1Bt3/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">BASE</a>
        <a href="https://drive.google.com/file/d/1eNOAfwo8br-KFi6zBH7J4iKWSzJF1Bt3/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">UPDATE</a>
        <a href="https://drive.google.com/file/d/11cGxmXbCbURcXcbM2x4dPcgivZbsdkfi/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">DLC's</a>
      </p>

  </div>

  <div>
      <p>Mario Kart 8 Deluxe : 
        <a href="https://www.youtube.com/watch?v=GHz6s5iVpYU" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s : 
        <a href="https://drive.google.com/file/d/1MDRj4zHvKlI3bnYg9a006Hdz6qndi_sP/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">BASE</a>
        <a href="https://drive.google.com/file/d/1-abZHX-8HT46KoZVPQ41sqkSF6GKLAgH/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">UPDATE</a>
        <a href="https://drive.google.com/file/d/1nxYQit2Isu_6stuKXicO-DSsQuXrzSnU/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">DLC's</a>
      </p>

  </div>

  <div>
      <p>Pokemon Legends Arceus : 
        <a href="https://www.youtube.com/watch?v=0VE-XviiLWk" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s : 
        <a href="https://drive.google.com/file/d/1eNOAfwo8br-KFi6zBH7J4iKWSzJF1Bt3/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">BASE</a>
        <a href="https://drive.google.com/file/d/1eNOAfwo8br-KFi6zBH7J4iKWSzJF1Bt3/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">UPDATE</a>
      </p>

  </div>

  <div>
      <p>Kirby and the Forgotten Land : 
        <a href="https://www.youtube.com/watch?v=DkngORlTRdI" 
           target="_blank"
           class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
          Gameplay
        </a>
      </p>

      <p class="mt-4">Download Link/s : 
        <a href="https://drive.google.com/file/d/16zWvC7s5T3hncOCsY4tJ-FJyDrgUh8hj/view?usp=drive_link" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">BASE</a>
      </p>

  </div>

</div>
          
</section>

<!-- END of PPSSPP ROMS -->

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