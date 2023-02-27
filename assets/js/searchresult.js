function updateLayout() {
    // get the current viewport width
    var viewportWidth = window.innerWidth;
  
    // check the viewport width and apply styles accordingly
    if (viewportWidth < 575) {
      // apply mobile styles
      document.querySelector(".patterns-browser").style.display = "none";
    } else {
      // apply desktop styles
      document.querySelector(".patterns-browser").style.display = "block";
    }
  }
  
  // call the updateLayout function when the page loads
  window.onload = updateLayout;
  
  // call the updateLayout function when the viewport is resized
  window.addEventListener("resize", updateLayout);