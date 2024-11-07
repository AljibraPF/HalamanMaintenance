<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">


<div class="home-container1">
        <div class="home-container2">
          <img
            src="./images/v245_3.png"
            alt="image"
            class="home-image"
          />
          <h1 class="home-text1">Website telah kembali online.</h1>
          <span class="home-text2">
            <span>
              Website kami telah kembali online! Jelajahi website kami dengan
              lebih mudah
            </span>
            <br />
            <span>dan cepat. Terimakasih atas kesabaran Anda.</span>
            <br />
          </span>
          <button onclick="redirectToLink()" type="button" class="button">OK</button>
        </div>
      </div>
    </div>
  </body>
</html>

<style>
    .home-text1, .home-text2, .button {
        font-family: 'Pathway Extreme', sans-serif; 
    }

    .home-container2 {
        flex: 0 0 auto;
        width: auto;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        border-radius: 10px;
    }
    .home-image {
        width: 100px;
        object-fit: cover;
        margin-bottom: 10%;
    }
    .home-text1 {
        margin-bottom: 5%;
    }
    .home-text2 {
        text-align: center;
        margin-bottom: 3%;
    }

  .button {
    width: 16vw;
    height: 4vw;
    background: linear-gradient(90deg, #F4B627 0%, #374E9E 100%);
    border: none;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    transition: all 0.3s ease; 
  }

  .button:hover {
    background: linear-gradient(90deg, #374E9E 0%, #F4B627 100%); 
    transform: scale(1.1); 
    box-shadow: 0 0.8vw 1vw rgba(0, 0, 0, 0.3); 
  }

  .button:active {
    transform: scale(1); 
    box-shadow: 0 0.4vw 0.8vw rgba(0, 0, 0, 0.1); 
  }
</style>

<script>
  function redirectToLink() {
    window.location.href = "https://afila.co.id/"; 
  }
</script>
