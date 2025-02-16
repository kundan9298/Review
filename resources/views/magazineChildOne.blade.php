  <style>
.section-ajeet-title {
  position: relative;
  font-size: 30px;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  margin: 0 0 35px;
}
.gallery-sec {
  padding: 90px 0 40px;
}

.gf-column {
  float: left;
  display: none; /* Hide all elements by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

.filter {
  padding: 20px 2px 10px;
  text-align: center;
  max-width: 1050px;
  margin: auto;
  object-fit: cover;
}

.gf-btn {
  padding: 10px 20px;
  margin: 5px 4px 4px 0;
  display: inline-block;
  color: #000;
  background: #fff;
  font-size: 18px;
  font-weight: 500;
  border: 1px solid #265df2;
  text-decoration: none;
  transition: all 0.2s;
  border-radius: 9px;
  cursor: pointer;
}
.gf-btn:hover,
.gf-btn-active {
  background: #265df2;
  color: #fff;
  -webkit-transform: translateY(3px);
  -ms-transform: translateY(3px);
  transform: translateY(3px);
}

.gallery {
  display: flex;
  justify-content: center;
  width: fit-content;
  max-width: 1320px;
  flex-wrap: wrap;
  margin: 25px auto;
  /* gap: 14px; */
}
.gallery img {
  width: 360px;
  height: 500px;
  object-fit: cover;
  /* background: center center/cover no-repeat #ddd; */
  transition: 0.3s ease-in-out;
  border-radius: 12px;
  overflow: hidden;
  margin: 10px 10px;
}
.gallery img:hover::after {
  content: "E";
}

.gallery img:hover,
video:hover {
  transform: scale(1.1);
}

.butonsSection {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 7px 15px;
  gap: 15px;
}
.closeBtn {
  font-size: 22px;
  letter-spacing: 2px;
  color: #fff;
  transition: all 0.4s linear;
  padding: 8px 50px;
  border-radius: 25px;
  background: red;
  border: 0;
  outline-offset: -5px;
  outline: 2px solid #fff;
}
.closeBtn:hover {
  cursor: auto;
  background: white;
  color: black;
  padding: 8px 45px;
  outline-offset: 4px;
  outline: 2px solid #fff;
}

.openDiv {
  width: 100%;
  height: 100vh;
  background: #000000e7;
  position: fixed;
  top: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  left: 0;
  z-index: 9999;
}
.imgPreview {
  /*    width: 70%;  */
  object-fit: scale-down;
  max-height: 80vh;
  height: auto;
}

.sets .hide,
.sets .pophide {
  width: 0%;
  opacity: 0;
}

.all-btn {
  text-align: center;
  background-color: #265df2;
  border-radius: 30px;
  margin: -15px auto 0;
  font-size: 1rem;
  width: 100%;
  max-width: 300px;
  padding: 5px 10px;
  letter-spacing: 1px;
  cursor: pointer;
}

.all-btn:active {
  transform: translateY(2px);
}

/* Responsive css Code Start */

@media (max-width: 767px) {
  .gallery img {
    margin: 8px 8px;
    width: 175px;
  }

  .closeBtn {
    padding: 8px 25px;
  }

  .imgPreview {
    width: 70%;
    height: auto;
  }
}

@media (max-width: 575px) {
  .gallery img {
    margin: 8px 6px;
    width: 155px;
  }

  .gf-btn {
    font-size: 15px;
  }

  .closeBtn {
    font-size: 18px;
    padding: 8px 25px;
    border-radius: 15px;
  }
  .closeBtn:hover {
    padding: 8px 20px;
  }

  .imgPreview {
    width: 90%;
    /* max-height: 50vh; */
    height: auto;
  }
}


    </style>




<div class="container mt-4 grid-post-wrap">
    <div class="row">
    <section class="gallery-sec sec-pad">
  <div class="container">
    <div class="section-ajeet-title text-center">Photo Gallery</div>

    <div id="gf-BtnContainer" class="filter">
      <button class="gf-btn gf-btn-active" onclick="filterSelection('bollywood')">Bollywood</button>
      <button class="gf-btn" onclick="filterSelection('hollywood')">Hollywood</button>
      <button class="gf-btn" onclick="filterSelection('tv')">TV Shows</button>
    </div>

    <!-- Gallery Grid Images -->
    <div class="gallery sets">

      <div class="gf-column bollywood">
        <img src="https://iili.io/y7W4t4.md.webp" />
      </div>

      <div class="gf-column bollywood">
        <img src="https://i.redd.it/a90376enwvg91.jpg" />
      </div>

      <div class="gf-column bollywood">
        <img src="https://iili.io/y7waOg.md.jpg" />
      </div>

      <div class="gf-column bollywood">
        <img src="https://iili.io/y7WrNf.webp" />
      </div>

      <div class="gf-column bollywood">
        <img src="https://external-preview.redd.it/FQ0Pct5yXWqEguF_qT1fC7NQr92aqTEiEGIvG81e3rI.jpg?auto=webp&s=c34478373a32fc761a46fb9aaad6ceb5ce2a2cea" />
      </div>

      <div class="gf-column hollywood">
        <img src="https://i.redd.it/wh6hbexev2v91.jpg" />
      </div>

      <div class="gf-column hollywood">
        <img src="https://i.redd.it/mded53nmw2w91.jpg" />
      </div>

      <div class="gf-column hollywood">
        <img src="https://i.redd.it/4b6s83hss9p91.jpg" />
      </div>

      <div class="gf-column tv">
        <img src="https://i.redd.it/2s7w09k01ol91.jpg" />
      </div>

      <div class="gf-column tv">
        <img src="https://i.redd.it/2s7w09k01ol91.jpg" />
      </div>

    </div>

    <div class="all-btn">
      <a href="#" style="color: white; text-decoration-line: none">MORE IMAGES </a>
    </div>
  </div>
</section>
    </div>
   
</div>



<script>
    filterSelection("bollywood");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("gf-column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Highlight active button and current button
var btnContainer = document.getElementById("gf-BtnContainer");
var btns = btnContainer.getElementsByClassName("gf-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("gf-btn-active");
    current[0].className = current[0].className.replace(" gf-btn-active", "");
    this.className += " gf-btn-active";
  });
}

// Popup Gallery Script

let imgs = document.querySelectorAll("img");
let count;
imgs.forEach((img, index) => {
  img.addEventListener("click", function (e) {
    if (e.target == this) {
      count = index;
      let openDiv = document.createElement("div");
      let imgPreview = document.createElement("img");
      let butonsSection = document.createElement("div");
      butonsSection.classList.add("butonsSection");
      let closeBtn = document.createElement("button");

      closeBtn.classList.add("closeBtn");
      closeBtn.innerText = "Close";
      closeBtn.addEventListener("click", function () {
        openDiv.remove();
      });

      imgPreview.classList.add("imgPreview");
      imgPreview.src = this.src;

      //   butonsSection.append(prevButton, nextBtn);
      openDiv.append(imgPreview, butonsSection, closeBtn);

      openDiv.classList.add("openDiv");

      document.querySelector("body").append(openDiv);
    }
  });
});

</script>