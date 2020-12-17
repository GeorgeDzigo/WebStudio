let imgs = [
      "https://www.kobedigital.com/wp-content/uploads/2018/08/google-partner-KD.png",
      "https://www.kobedigital.com/wp-content/uploads/2018/08/upcity-partner-2018-KD.png",
      "https://www.kobedigital.com/wp-content/uploads/2018/08/top-seos-partner-KD.png",
      "https://www.kobedigital.com/wp-content/uploads/2018/08/bing-partner-KD.png",
      "https://www.kobedigital.com/wp-content/uploads/2018/08/dan-partner-final-KD.png",
      "https://www.kobedigital.com/wp-content/uploads/2018/08/shopify-experts-kd.png",
      "https://www.kobedigital.com/wp-content/uploads/2018/08/big-commerce-partner-kd.png",
      "https://www.kobedigital.com/wp-content/uploads/2018/08/clutch-partner-2018-KD.png"
];


var slider = document.getElementById('slider');
var cs = 0;

function a(s) {
      let e = document.createElement('img');
      e.src = s;
      return e;
}

function showSlider(i) { 
      let currentSlider = imgs[i];
      currentSlider = a(currentSlider);
      slider.innerHTML = ' '; 
      slider.appendChild(currentSlider);
}

function autoChange() { 
      if (cs != imgs.length - 1) {
            return ++cs;
          
      }
      else if (cs == imgs.length - 1) {
            cs = 0;
            return cs;
      } 
}


setInterval(function () { 
      showSlider(cs);
      autoChange();
}, 1500)
