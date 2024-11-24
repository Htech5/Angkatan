var mainlinks = document.getElementsByClassName("mainlinks");
var content = document.getElementsByClassName("content");

// Function to open a tab
function opentab(tabname) {
  // Loop through mainlinks elements and remove 'active' class
  Array.from(mainlinks).forEach((link) => {
    link.classList.remove("active");
  });

  // Loop through content elements and remove 'active' class
  Array.from(content).forEach((item) => {
    item.classList.remove("active");
  });

  // Add 'active' class to the clicked/current element
  event.currentTarget.classList.add("active");

  // Show the corresponding content by ID
  document.getElementById(tabname).classList.add("active");
}

var sidemenu = document.getElementById("submenu");

// Function to open the side menu
function openmenu() {
  sidemenu.style.right = "0";
}

// Function to close the side menu
function closemenu() {
  sidemenu.style.right = "-200px";
}

// DOMContentLoaded event to handle form submission
document.addEventListener("DOMContentLoaded", function () {
  const scriptURL = "https://script.google.com/macros/s/AKfycbzrY5wjcnrtxtTeXmsvGzOG6AQ0J54UA5zWBfhgDuv9AiDaieC7rp-UntFS_3_g0XFwLQ/exec";
  const form = document.forms["submit-to-google-sheet"];
  const msg = document.getElementById("msg");
  const modal = new bootstrap.Modal(document.getElementById("exampleModal"));

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    // Send form data to Google Sheets
    fetch(scriptURL, { method: "POST", body: new FormData(form) })
      .then((response) => {
        msg.innerHTML = "Message sent successfully";
        form.reset();
        modal.show(); // Show the modal upon success

        // Clear the success message after 5 seconds
        setTimeout(function () {
          msg.innerHTML = "";
        }, 5000);
      })
      .catch((error) => console.error("Error!", error.message));
  });
});

// Get current page URL
const currentPage = window.location.pathname.split("/").pop();

// Get all <a> elements inside #submenu
const menuItems = document.querySelectorAll("#submenu a");

// Loop through menu items and add 'active' class if URL matches
menuItems.forEach((menuItem) => {
  const href = menuItem.getAttribute("href");
  if (href === currentPage) {
    menuItem.classList.add("active");
  }
});

// Function to scroll to the top of the page with smooth behavior
function scrollToTop() {
  window.scrollTo({
    top: 0, // Scroll to the top
    behavior: 'smooth' // Add smooth scrolling effect
  });
}

// Add 'fade-in' class when the page is loaded
window.addEventListener('load', function () {
  const container = document.querySelector('.container');
  container.classList.add('fade-in');
});
