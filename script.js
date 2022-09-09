let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


// add event listener to post an opptunity with php

function postOpportunity() {
  let title = document.getElementById("title").value;
  let description = document.getElementById("description").value;
  let location = document.getElementById("location").value;
  let date = document.getElementById("date").value;
  let time = document.getElementById("time").value;
  let contact = document.getElementById("contact").value;
  let email = document.getElementById("email").value;
  let phone = document.getElementById("phone").value;
  let url = document.getElementById("url").value;
  let image = document.getElementById("image").value;
  let data = {
    title: title,
    description: description,
    location: location,
    date: date,
    time: time,
    contact: contact,
    email: email,
    phone: phone,
    url: url,
    image: image
  };
  console.log(data);
  $.ajax({
    type: "POST",
    url: "postOpportunity.php",
    data: data,
    success: function(response) {
      console.log(response);
    }
  });
}


// add event listener to post an opptunity with php
