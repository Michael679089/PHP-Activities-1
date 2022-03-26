$(Document).ready(function () {
  let bg = $(".above-container");

  // Animate Queue 1
  bg.animate({
    opacity: 0,
  }, {
    duration: 1000,
    easing: 'swing',
    complete: function () {
      setTimeout(function () {
        bg.remove();
      }, 1000)
    }
  });

  // Making HREF vars
  var cart_link = document.getElementById('cart_link');
  var tel_link = document.getElementById('tel_link');
  var calci_link = document.getElementById('calcu_link');
  var NumToWrd_link = document.getElementById('NumToWrd_link');
  cart_link.href = "CartesianPlane.php";
  tel_link.href = "TelephoneDial.php";
  calcu_link.href = "calculator.php";
  NumToWrd_link.href = "NumbersToWords.php";
});