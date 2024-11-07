<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">

<div class="countdown-container">
  <p class="countdown-message">Website akan kembali online dalam:</p>
  <div class="countdown">
    <div class="box" id="days-box">
      <span id="days">00</span>
      <p>Hari</p>
    </div>
    <div class="box" id="hours-box">
      <span id="hours">00</span>
      <p>Jam</p>
    </div>
    <div class="box" id="minutes-box">
      <span id="minutes">00</span>
      <p>Menit</p>
    </div>
    <div class="box" id="seconds-box">
      <span id="seconds">00</span>
      <p>Detik</p>
    </div>
  </div>
</div>

<div class="popup-overlay" id="popup-overlay" style="display: none;">
  <div class="popup-content">
    <x-popup/>
  </div>
</div>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Inter', Arial, sans-serif;
  }

  .countdown-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .countdown {
    display: flex;
    gap: 3vw; 
    margin-bottom: 7vw;
    margin-top: 3vw; 
  }

  .box {
    width: 12vw; 
    height: 15vw; 
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 1vw;
    box-shadow: 0px 10px 4px 1px rgba(0, 0, 0, 0.63);
  }

  #days-box {
    background-color: #F4B527;
  }

  #hours-box {
    background-color: #374E9D;
  }

  #minutes-box {
    background-color: #F4B527;
  }

  #seconds-box {
    background-color: #374E9D;
  }

  .box span {
    font-size: 5vw; 
    font-weight: bold;
    color: white;
  }

  .box p {
    margin-top: 0.8vw; 
    font-size: 2vw; 
    color: #ffffff;
    font-weight: bold;
  }

  .box span, .box p, .countdown-message{
    font-family: 'Pathway Extreme', sans-serif;
  }
  .countdown-message {
    font-weight: bold;
    font-size: 2.5vw; 
    color: #333;
    margin-top: 2vh;
  }

  .popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }

  .popup-content {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 80vw;
  }

  .popup-content h1 {
    font-size: 2em;
    margin-bottom: 20px;
  }

  .popup-content button {
    padding: 10px 20px;
    font-size: 1em;
    color: #fff;
    background-color: #374E9D;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .popup-content button:hover {
    background-color: #2d3e7d;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const targetDate = new Date("November 7, 2024 16:53:20").getTime(); //Untuk Waktu

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = targetDate - now;

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").textContent = days < 10 ? "0" + days : days;
      document.getElementById("hours").textContent = hours < 10 ? "0" + hours : hours;
      document.getElementById("minutes").textContent = minutes < 10 ? "0" + minutes : minutes;
      document.getElementById("seconds").textContent = seconds < 10 ? "0" + seconds : seconds;

      if (distance < 0) {
        clearInterval(countdownInterval); 
        showPopup(); 
      }
    }

    function showPopup() {
      document.querySelector(".countdown-container").style.display = "none"; 
      document.getElementById("popup-overlay").style.display = "flex"; 
    }

    function closePopup() {
      document.getElementById("popup-overlay").style.display = "none"; // Hide popup
    }

    const countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown(); 

    window.closePopup = closePopup;
  });
</script>
