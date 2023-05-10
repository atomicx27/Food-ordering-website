let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
} 

// Form Validation
function ValidateContactForm() {
  var name = document.ContactForm.Name;

  if (name.value == "") {
      window.alert("Please enter PNR NUMBER.");
      name.focus();
      return false;
  }

  if (name.value > 'A' && name.value < 'Z' || name.value > 'a' && name.value < 'z') {
      window.alert("ONLY NUMBERS");
      name.focus();
      return false;
  }

  if (name.value.length != 10) {
      window.alert("Please enter 10 digits to continue");
      name.focus();
      return false;
  }
}