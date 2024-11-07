<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Maintenance Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
  </head>
  <body>
    <link rel="stylesheet" href="./css/styles.css" />
    <div>
      <div class="container-main">
        <div class="container-header">
          <div class="container-logo">
            <img
              alt="image"
              src="./img/afilalogo-200h.png"
              class="logo-image"
            />
          </div>
          <div class="container-left-image">
            <img
              alt="image"
              src="./img/sideleft-section1-mobile%201-200w.png"
              class="left-image"
            />
          </div>
          <div class="container-content">
            <div class="content-wrapper">
              <span class="main-heading">
                <span>Situs Sedang Dalam Perbaikan</span>
              </span>
              <span class="subheading">
                <span>
                  Kami mohon maaf atas ketidaknyamanan yang anda alami.
                </span>
                <br />
                <span>
                  saat ini situs sedang dalam perbaikan untuk meningkatkan kualitas layanan kami
                </span>
                <br />
              </span>
              <img
                alt="image"
                src="./images/v260_2.png"
                class="maintenance-image"
              />
            </div>
          </div>
          <div class="container-right-image">
            <div class="right-image-wrapper">
              <img
                alt="image"
                src="./img/sideright-section1%201-200w.png"
                class="right-image"
              />
            </div>
            <x-countdown />
          </div>
          <div class="container-contact">
            <div class="contact-details">
              <div class="contact-item">
                <span class="contact-heading">Kamu bisa menghubungi.&nbsp;</span>
              </div>
              <div class="contact-item">
                <span class="contact-phone">Phone. +6281144411201&nbsp;</span>
              </div>
              <div class="contact-item">
                <span class="contact-email">
                  Email. afilamediakarya@gmail.com
                </span>
              </div>
            </div>
            <div class="social-media-images">
              <img
                alt="image"
                src="./img/v260_22-200h.png"
                class="social-image"
                data-href="https://afila.co.id/"
              />
              <img
                alt="image"
                src="./img/v260_19-200h.png"
                class="social-image"
              />
              <img
                alt="image"
                src="./img/v260_20-200h.png"
                class="social-image"
              />
              <img
                alt="image"
                src="./img/v260_21-200h.png"
                class="social-image"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


<script>
  //Utk Footer
  document.querySelectorAll('.social-image').forEach((img, index) => {
  img.addEventListener('click', () => {
    let url;
    switch (index) {
      case 0:
        url = 'https://id.linkedin.com/company/afilamediakarya'; 
        break;
      case 1:
        url = 'https://web.facebook.com/afilastudio/?locale=id_ID&_rdc=1&_rdr'; 
        break;
      case 2:
        url = 'https://www.youtube.com/channel/UCwwYgKrjMOuFDp0_2zPlB5g'; 
        break;
      case 3:
        url = 'https://www.instagram.com/afilamediakarya/'; 
        break;
      default:
        url = '#';
    }
    
    if (url) {
      window.open(url, '_blank'); // Opens the link in a new tab
    }
  });
});
</script>