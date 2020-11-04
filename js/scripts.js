
    const dropdownBtn = document.querySelector("#dropdownBtn");
    const dropMenu = document.querySelector("#dropdownMenu");
    const homeBtn = document.querySelector("#homeBtn");
    const aboutBtn = document.querySelector("#aboutBtn");
    const portfolioBtn = document.querySelector("#portfolioBtn");
    const contactBtn = document.querySelector("#contactBtn");


    function menuDropdown(){
        if (homeBtn.className === "notActive") {
            homeBtn.className += " active";
            aboutBtn.className += " active";
            portfolioBtn.className += " active";
            contactBtn.className += " active";
          } else {
            homeBtn.className = "notActive";
            aboutBtn.className = "notActive";
            portfolioBtn.className = "notActive";
            contactBtn.className = "notActive";
          }
    }

    