$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
		nav:true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            576: {
                items: 1,
                nav: true
            },
            992: {
                items: 2,
                nav: true,
                loop: true
            },
            1400: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });
});


// captcha js 
$(document).ready(function () {
    // Generate captcha on page load
    generateCaptcha();
    // Handle captcha refresh button click
    $("#refresh-captcha").click(function () {
      generateCaptcha();
      $("#captcha-input").val("");
    });
    // Handle form submit
    $("#captcha-form").submit(function (event) {
      event.preventDefault();
  
      // Validate captcha
      var captchaInput = $("#captcha-input").val();
      var captchaCode = sessionStorage.getItem("captchaCode");
      if (captchaInput != captchaCode) {
        alert("Invalid captcha code. Please try again.");
        generateCaptcha();
        $("#captcha-input").val("");
        return;
      }
      // Form validation successful, submit form
      alert("Form submitted successfully.");
      $("#captcha-form").trigger("reset");
      generateCaptcha();
    });
  
    // Define the function generateCaptcha()
    function generateCaptcha() {
      // Get the canvas element with ID captcha and create an instance of its canvas rendering context
      var a = $("#captcha")[0],
        b = a.getContext("2d");
      // Clear the canvas
      b.clearRect(0, 0, a.width, a.height);
      // Define the string of characters that can be included in the captcha
      var f = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
        e = "",
        g = -45,
        h = 45,
        i = h - g,
        j = 20,
        k = 30,
        l = k - j;
      // Generate each character of the captcha
      for (var m = 0; m < 6; m++) {
        // Select random letter from the pool to be part of the captcha
        var n = f.charAt(Math.floor(Math.random() * f.length));
        e += n;
  
        // Set up the text formatting
        b.font = j + Math.random() * l + "px Arial";
        b.textAlign = "center";
        b.textBaseline = "middle";
  
        // Set the color of the text
        b.fillStyle =
          "rgb(" +
          Math.floor(Math.random() * 256) +
          "," +
          Math.floor(Math.random() * 256) +
          "," +
          Math.floor(Math.random() * 256) +
          ")";
  
        // Add the character to the canvas
        var o = g + Math.random() * i;
        b.translate(20 + m * 30, a.height / 2);
        b.rotate((o * Math.PI) / 180);
        b.fillText(n, 0, 0);
        b.rotate((-1 * o * Math.PI) / 180);
        b.translate(-(20 + m * 30), (-1 * a.height) / 2);
      }
      // Set the captcha code in session storage
      sessionStorage.setItem("captchaCode", e);
    }
  });
// captcha js end




// home banner countdown js 
var deadline = addDaysToDate(new Date(), 3).getTime();
var daysSpan = document.getElementById('days');
var hoursSpan = document.getElementById('hours');
var minutesSpan = document.getElementById('minutes');
var secondsSpan = document.getElementById('seconds');

updateClock(deadline);
var interval = setInterval(updateClock, 1000);

function addDaysToDate(startDate, numberOfDays) {
    return new Date(
        startDate.getFullYear(),
        startDate.getMonth(),
        startDate.getDate() + numberOfDays,
        startDate.getHours(),
        startDate.getMinutes(),
        startDate.getSeconds()
    );
}

function getRemainingTime(deadline) {
    var total = deadline - new Date().getTime();

    if (isNaN(total)) {
        return false;
    }

    var seconds = Math.floor((total / 1000) % 60);
    var minutes = Math.floor((total / 1000 / 60) % 60);
    var hours = Math.floor((total / (1000 * 60 * 60)) % 24);
    var days = Math.floor(total / (1000 * 60 * 60 * 24));

    return {
        'total': total,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function updateClock() {
    var remainingTime = getRemainingTime(deadline);

    if (remainingTime.total <= 0) {
        clearInterval(interval);

        document.getElementById('expired').classList.add('show');

        return false;
    } else if (!remainingTime) {
        return false;
    }

    daysSpan.innerText = addLeadingZeros(remainingTime.days);
    hoursSpan.innerText = addLeadingZeros(remainingTime.hours);
    minutesSpan.innerText = addLeadingZeros(remainingTime.minutes);
    secondsSpan.innerText = addLeadingZeros(remainingTime.seconds);
}

function addLeadingZeros(time) {
    return ('0' + time).slice(-2);
}


