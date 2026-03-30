
<!-- ================= Google Font ================= -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- ================= CSS ================= -->
<style>
/* ---- Reset ---- */
body { margin:0; font-family:'Poppins',sans-serif; overflow-x:hidden; }

/* ---- Top Bar ---- */
.csd-topbar { background:#f3e2c3; height:45px; display:flex; align-items:center; overflow:hidden; }
.csd-topbar-inner { width:90%; margin:auto; display:flex; justify-content:center; align-items:center; gap:10px; position:relative; }

/* ---- Topbar Ticker ---- */
.topbar-ticker { position:relative; height:45px; display:flex; align-items:center; justify-content:center; width:100%; overflow:hidden; }
.topbar-ticker-item {
  position:absolute;
  display:flex; align-items:center; gap:8px;
  font-size:13px; font-weight:600; color:#5a3a1a;
  white-space:nowrap;
  opacity:0;
  transform:translateY(20px);
  transition:opacity 0.35s ease, transform 0.35s ease;
  pointer-events:none;
}
.topbar-ticker-item.active {
  opacity:1;
  transform:translateY(0);
  pointer-events:auto;
}
.topbar-ticker-item.exit {
  opacity:0;
  transform:translateY(-20px);
}
/* icon styles */
.topbar-ticker-item .tb-icon { font-size:16px; flex-shrink:0; }
.topbar-ticker-item .tb-tabby {
  background:#3d9970; color:#fff;
  font-size:11px; font-weight:700;
  padding:2px 6px; border-radius:4px;
  letter-spacing:0.5px; flex-shrink:0;
}
/* divider dots desktop — sits BESIDE ticker, never inside it */
.topbar-ticker-dots { display:flex; gap:6px; flex-shrink:0; align-items:center; }
.topbar-ticker-dots span {
  width:7px; height:7px; border-radius:50%;
  background:rgba(90,58,26,0.25); cursor:pointer;
  transition:background 0.3s;
}
.topbar-ticker-dots span.active { background:#c47a2f; }

@media(max-width:992px){
  .csd-topbar-inner { justify-content:center; }
  .topbar-ticker-item { font-size:12px; }
  .topbar-ticker-dots { display:none; }
}

/* ---- Navbar ---- */
.csd-navbar { background:#FFF7EA; border-bottom:2px solid #e6d7c2; width:100%; z-index:9999; position:relative; }
.csd-navbar.sticky { position:fixed; top:0; left:0; right:0; box-shadow:0 4px 12px rgba(0,0,0,.1); }
.csd-nav-inner { width:96%; margin:auto; display:flex; align-items:center; justify-content:space-between; padding:15px 0; }

/* ---- Logo ---- */
.csd-logo img { max-height:70px; display:block; }

/* ---- Desktop Menu ---- */
.csd-menu { list-style:none; display:flex; gap:8px; margin:0; padding:0; flex:1; justify-content:center; }
.csd-menu > li { position:relative; }
.csd-menu > li > a { text-decoration:none; color:#333; font-weight:600; font-size:15px; padding:10px 0; display:block; }

/* ---- Desktop Dropdown ---- */
.csd-sub { display:none; position:absolute; top:100%; left:0; background:#ebd9c0; list-style:none; padding:10px 0 10px 15px; min-width:250px; max-width:300px; border-radius:6px; z-index:9999; margin-top:5px; max-height:400px; overflow-y:auto; overflow-x:hidden; box-shadow:0 6px 20px rgba(0,0,0,.12); }
.csd-menu > li:hover > .csd-sub { display:block; }
.csd-sub li a { padding:8px 5px; display:block; color:#333; font-size:13px; white-space:nowrap; text-decoration:none; }
.csd-sub li a:hover { color:#d88a3c; }

/* Scrollbar */
.csd-sub::-webkit-scrollbar { width:6px; }
.csd-sub::-webkit-scrollbar-track { background:#f3e2c3; border-radius:10px; }
.csd-sub::-webkit-scrollbar-thumb { background:#d88a3c; border-radius:10px; }

/* ---- Buttons ---- */
.csd-btns { display:flex; gap:10px; }
.csd-btns a { background:#d88a3c; color:#fff; padding:10px 16px; border-radius:6px; text-decoration:none; font-size:14px; font-weight:500; }
.csd-btns a:hover { background:#b37225; }

/* ---- Hamburger ---- */
.csd-hamburger { display:none; font-size:30px; background:none; border:none; cursor:pointer; color:#333; }

/* ---- Placeholder ---- */
#csd-placeholder { height:0; }

/* ================ MOBILE ================ */
@media(max-width:992px){
  .csd-topbar-inner { justify-content:center; }
  .csd-btns { display:none; }
  .csd-hamburger { display:block; }
  .csd-logo { min-width:70%; }

  /* Mobile menu hidden by default */
  .csd-menu {
    display:none;
    position:absolute; top:100%; left:0; width:100%;
    flex-direction:column; gap:0;
    background:#FFF7EA; padding:0;
    border-top:1px solid #e6d7c2;
    max-height:80vh; overflow-y:auto;
    z-index:9999;
  }
  .csd-menu.open { display:flex; }

  .csd-menu > li { padding:0; border-bottom:1px solid #f2e4d0; width:100%; }
  .csd-menu > li > a { padding:14px 20px; font-size:15px; }

  /* Mobile dropdown hidden by default */
  .csd-sub {
    display:none;
    position:relative !important;
    box-shadow:none;
    margin-top:0;
    padding:0 0 0 20px;
    max-height:300px;
    overflow-y:auto;
    width:100%;
    min-width:unset;
    max-width:unset;
    border-radius:0;
    background:#fff8ee;
  }
  .csd-menu > li.open > .csd-sub { display:block;         background: #f3e2c3; }

  .csd-sub li a { white-space:normal; word-break:break-word; padding:10px 5px; font-size:14px; }

  /* Abu Dhabi scrollbar mobile */
  .csd-sub::-webkit-scrollbar { width:5px; }
}
</style>


<nav class="csd-navbar" id="csdNavbar">
  <!-- ================= HTML ================= -->
<div class="csd-topbar">
  <div class="csd-topbar-inner">

    <!-- ===== Topbar Ticker ===== -->
    <div class="topbar-ticker" id="topbarTicker">

      <!-- Item 1: Reviews -->
      <div class="topbar-ticker-item active">
        <span class="tb-icon">⭐</span>
        <span>1450+ Satisfied Reviews</span>
      </div>

      <!-- Item 2: Return Policy -->
      <div class="topbar-ticker-item">
        <span class="tb-icon">🔄</span>
        <span>30-Days Return Policy</span>
      </div>

      <!-- Item 3: Pay In Installments -->
      <div class="topbar-ticker-item">
        <span class="tb-tabby">tabby</span>
        <span>Pay In Installments</span>
      </div>

      <!-- Item 4: Free Delivery -->
      <div class="topbar-ticker-item">
        <span class="tb-icon">🚚</span>
        <span>Free Delivery Across Dubai & UAE</span>
      </div>

    </div>

    <!-- Dots — OUTSIDE ticker so no overlap -->
    <div class="topbar-ticker-dots" id="topbarDots">
      <span class="active"></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!-- ===== End Ticker ===== -->

  </div>
</div>

  <div class="csd-nav-inner">
    <!-- Logo -->
    <div class="csd-logo">
      <a href="/"><img src="images/Logo-black.png" alt="Carpet Shop Dubai"></a>
    </div>

    <!-- Hamburger -->
    <button class="csd-hamburger" id="csdHamburger" aria-label="Menu">&#9776;</button>

    <!-- Menu -->
    <ul class="csd-menu" id="csdMenu">
      <li><a href="/">Home</a></li>

      <li class="has-drop">
        <a href="#">Carpet ▾</a>
        <ul class="csd-sub">
          <li><a href="about.php">About</a></li>
          <li><a href="artificial-grass-carpet.php">Artificial Grass Carpet</a></li>
          <li><a href="bedroom-carpet.php">Bedroom Carpet</a></li>
          <li><a href="blue-carpet.php">Blue Carpet</a></li>
          <li><a href="carpet-stitching.php">Carpet Stitching</a></li>
          <li><a href="carpet-texture.php">Carpet texture</a></li>
          <li><a href="carpet-tile.php">Carpet Tiles</a></li>
          <li><a href="exhibition-carpet.php">Exhibition Carpet</a></li>
          <li><a href="floor-carpet.php">Floor Carpet</a></li>
          <li><a href="green-carpet.php">Green Carpet</a></li>
          <li><a href="grey-carpet.php">Grey Carpet</a></li>
          <li><a href="home-carpet.php">Home Carpet</a></li>
          <li><a href="living-room-carpet.php">Living Room Carpet</a></li>
          <li><a href="mosque-carpet.php">Mosque Carpet</a></li>
          <li><a href="office-carpet.php">Office Carpet</a></li>
          <li><a href="out-door-carpet.php">Outdoor Carpet</a></li>
          <li><a href="round-carpet.php">Round Carpet</a></li>
          <li><a href="sisal-carpet.php">Sisal Carpet</a></li>
          <li><a href="stair-carpet.php">Stair Carpet</a></li>
          <li><a href="vinyl-carpet.php">Vinyl Carpet</a></li>
          <li><a href="wall-to-wall-carpet.php">Wall to wall Carpet</a></li>
          <li><a href="wall-cladding-services.php">Wall Cladding Services</a></li>
          <li><a href="design-carpet.php">Design Carpet</a></li>
          <li><a href="carpet-runner-dubai.php">Carpet Runner Dubai</a></li>
          <li><a href="black-carpet.php">Black Carpet Dubai</a></li>
          <li><a href="kids-carpet.php">Kids Carpet</a></li>
          <li><a href="white-carpet-dubai.php">White Carpet</a></li>
          <li><a href="carpet-fitting.php">Carpet Fitting</a></li>
          <li><a href="carpet-underlay.php">Carpet Underlay</a></li>
          <li><a href="wool-carpet.php">Wool Carpet</a></li>
          <li><a href="balcony-grass.php">Balcony Grass</a></li>
          <li><a href="interior-design.php">Interior Design</a></li>
        </ul>
      </li>

      <li class="has-drop">
        <a href="flooring.php">Flooring ▾</a>
        <ul class="csd-sub">
          <li><a href="home-vinyl-flooring.php">Home Vinyl Flooring</a></li>
          <li><a href="kitchen-vinyl-flooring.php">Kitchen Vinyl Flooring</a></li>
          <li><a href="laminiate-flooring.php">Laminiate Flooring</a></li>
          <li><a href="lvt-flooring.php">LVT Flooring</a></li>
          <li><a href="office-flooring.php">Office Flooring</a></li>
          <li><a href="parquet-flooring.php">Parquet Flooring</a></li>
          <li><a href="pvc-folding-doors.php">PVC Folding Doors</a></li>
          <li><a href="pvc-vinyl-flooring.php">PVC Vinyl Flooring</a></li>
          <li><a href="rubber-flooring.php">Rubber Flooring</a></li>
          <li><a href="self-leveling-floor.php">Self Leveling Floor</a></li>
          <li><a href="spc-flooring.php">SPC Flooring</a></li>
          <li><a href="vinyl-flooring.php">Vinyl Flooring</a></li>
          <li><a href="wooden-flooring.php">Wooden Flooring</a></li>
          <li><a href="outdoor-flooring-services.php">Outdoor Flooring Services</a></li>
          <li><a href="epoxy-painting-flooring.php">Epoxy Painting Flooring</a></li>
          <li><a href="epoxy-flooring.php">Epoxy Flooring</a></li>
          <li><a href="epoxy-flakes-flooring.php">Epoxy Flakes Flooring</a></li>
          <li><a href="epoxy-clear-flooring.php">Epoxy Clear Flooring</a></li>
        </ul>
      </li>

      <li class="has-drop">
        <a href="rugs.php">Rugs ▾</a>
        <ul class="csd-sub">
          <li><a href="animal-skin-rugs.php">Animal Skin Rugs</a></li>
          <li><a href="area-rugs.php">Area Rugs</a></li>
          <li><a href="handmade-rugs.php">Handmade Rugs</a></li>
          <li><a href="leopard-rugs.php">Leopard Rugs</a></li>
          <li><a href="modern-rugs.php">Modern Rugs</a></li>
          <li><a href="patchworks-rugs.php">Patchworks Rugs</a></li>
          <li><a href="shaggy-rugs.php">Shaggy Rugs</a></li>
          <li><a href="sisal-rugs.php">Sisal Rugs</a></li>
        </ul>
      </li>

      <li class="has-drop">
        <a href="curtains.php">Curtains ▾</a>
        <ul class="csd-sub">
          <li><a href="blackout-curtains.php">Blackout Curtains</a></li>
          <li><a href="cotton-curtains.php">Cotton Curtains</a></li>
          <li><a href="home-curtains.php">Home Curtains</a></li>
          <li><a href="ikea-curtains.php">Ikea Curtains</a></li>
          <li><a href="line-curtains.php">Linen Curtains</a></li>
          <li><a href="living-room-curtains.php">Living Room Curtains</a></li>
          <li><a href="motorized-curtains.php">Motorized Curtains</a></li>
          <li><a href="sedar-curtains.php">Sedar Curtains</a></li>
          <li><a href="sheer-curtains.php">Sheer Curtains</a></li>
          <li><a href="silk-curtains.php">Silk Curtains</a></li>
          <li><a href="soundproof-curtains-services.php">Soundproof Curtains Services</a></li>
          <li><a href="motorized-blinds.php">Motorized Blinds</a></li>
          <li><a href="office-blinds.php">Office Blinds</a></li>
          <li><a href="roller-blinds.php">Roller Blinds</a></li>
          <li><a href="roman-blinds.php">Roman Blinds</a></li>
          <li><a href="wooden-blinds.php">Wooden Blinds</a></li>
          <li><a href="zebra-blinds.php">Zebra Blinds</a></li>
        </ul>
      </li>

      <li class="has-drop">
        <a href="upholstery.php">Upholstery ▾</a>
        <ul class="csd-sub">
          <li><a href="cotton-fabrics.php">Cotton Fabrics</a></li>
          <li><a href="customized-cushions.php">Customized Cushions</a></li>
          <li><a href="home-textiles.php">Home Textiles</a></li>
          <li><a href="linen-fabrics.php">Linen Fabrics</a></li>
          <li><a href="panting-service.php">Painting Service</a></li>
          <li><a href="sofa-hopostri.php">Sofa Upholstery</a></li>
          <li><a href="sofa-repair.php">Sofa Repair</a></li>
        </ul>
      </li>

      <li class="has-drop">
        <a href="wooden-wall-cladding.php">Wall Panels ▾</a>
        <ul class="csd-sub">
          <li><a href="wooden-wall-cladding.php">Wooden Wall Panels</a></li>
          <li><a href="epoxy-painting.php">Epoxy Painting</a></li>
          <li><a href="customize-furniture.php">Customize Furniture</a></li>
          <li><a href="brick-wall-panels.php">Brick Wall Panels</a></li>
          <li><a href="outdoor-cushions.php">Outdoor Cushions</a></li>
          <li><a href="wall-painting.php">Wall Painting</a></li>
          <li><a href="apartment-painting.php">Apartment Painting</a></li>
          <li><a href="customize-bed.php">Customize Bed</a></li>
          <li><a href="custom-made-sofa.php">Custom Made Sofa</a></li>
          <li><a href="customize-door.php">Customize Door</a></li>
          <li><a href="herringbone-flooring.php">Herringbone Flooring</a></li>
          <li><a href="wooden-door.php">Wooden Door</a></li>
        </ul>
      </li>

      <li class="has-drop">
        <a href="#">Our Services In Abu Dhabi ▾</a>
        <ul class="csd-sub">
          <li><a href="spc-flooring-abu-dhabi.php">SPC-Flooring Abu Dhabi</a></li>
          <li><a href="Vinyl-Flooring-Abu-Dhabi.php">Vinyl Flooring Abu Dhabi</a></li>
          <li><a href="wall-to-wall-carpert-abu-dhabi.php">Wall-to-Wall Carpet Abu Dhabi</a></li>
          <li><a href="Stair-Carpet-Shop-in-Abu-Dhabi.php">Stair Carpet Shop Abu Dhabi</a></li>
          <li><a href="epoxy-flooring-in-abu-dhabi.php">Epoxy Flooring In Abu Dhabi</a></li>
          <li><a href="PVC-skirting-Abu-Dhabi.php">PVC-Skirting Abu Dhabi</a></li>
          <li><a href="Customzie-Furniture-Abu-Dhabi.php">Customize Furniture Abu Dhabi</a></li>
        </ul>
      </li>

      <li class="has-drop">
        <a href="https://www.carpetshopdubai.com/about.php">About ▾</a>
        <ul class="csd-sub">
          <li><a href="https://www.carpetshopdubai.com/contact.php/">Contact</a></li>
          <li><a href="https://www.carpetshopdubai.com/blogs/">Blogs</a></li>
        </ul>
      </li>
    </ul>

    <!-- Buttons -->
    <div class="csd-btns">
      <a href="https://www.carpetshopdubai.com/contact.php">Contact Us</a>
      <a href="https://wa.me/+971565847696">WhatsApp</a>
    </div>
  </div>
</nav>

<div id="csd-placeholder"></div>

<!-- ================= JS (Event Delegation - no DOM timing issues) ================= -->
<script>
(function(){

  /*
   * FIX: On mobile browsers, the first tap on a link triggers :hover (not click).
   * The desktop CSS rule ".csd-menu > li:hover > .csd-sub { display:block }" is
   * not scoped to desktop, so mobile browsers enter a "hover then click" two-tap
   * cycle. The first tap applies :hover (CSS shows the dropdown), the second tap
   * fires click (JS can intercept). To fix this, we detect touch capability and
   * inject a CSS rule that disables the hover-based dropdown on touch devices,
   * letting JS handle everything via single-tap click events.
   */

  var touchStyleInjected = false;
  function injectTouchStyle() {
    if (touchStyleInjected) return;
    touchStyleInjected = true;
    var s = document.createElement('style');
    s.textContent = '@media(max-width:992px){.csd-menu > li:hover > .csd-sub{display:none !important;}.csd-menu > li.open > .csd-sub{display:block !important;}}';
    document.head.appendChild(s);
  }

  /* Detect touch device early */
  document.addEventListener('touchstart', function() {
    injectTouchStyle();
  }, { once: true, passive: true });

  /* Also detect via media query for devices that fire touch events late */
  if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
    injectTouchStyle();
  }

  /* ---- All clicks handled via document delegation ---- */
  document.addEventListener('click', function(e) {

    var hamburger = document.getElementById('csdHamburger');
    var menu      = document.getElementById('csdMenu');
    if (!hamburger || !menu) return;

    /* ---- 1. Hamburger click ---- */
    if (e.target.closest('#csdHamburger')) {
      menu.classList.toggle('open');
      return;
    }

    /* ---- 2. Dropdown parent link click (mobile only) ---- */
    var dropLi = e.target.closest('.has-drop');
    if (dropLi) {
      /* Check if click was on the main link (first child <a>), not a sub-link */
      var mainLink = dropLi.children[0];
      var clickedSubLink = e.target.closest('.csd-sub');
      if (mainLink && !clickedSubLink) {
        /* Only intercept on mobile (menu has .open class from hamburger) */
        if (menu.classList.contains('open')) {
          e.preventDefault();
          e.stopImmediatePropagation();
          /* Close all other dropdowns */
          document.querySelectorAll('.has-drop').forEach(function(li) {
            if (li !== dropLi) li.classList.remove('open');
          });
          /* Toggle this dropdown */
          dropLi.classList.toggle('open');
          /* Keep clicked item visible - scroll MENU container only */
          if (dropLi.classList.contains('open')) {
            setTimeout(function() {
              menu.scrollTop = dropLi.offsetTop;
            }, 10);
          }
          return;
        }
      }
    }

    /* ---- 3. Sub-link click: close menu (mobile) ---- */
    if (e.target.closest('.csd-sub a')) {
      if (menu.classList.contains('open')) {
        menu.classList.remove('open');
        document.querySelectorAll('.has-drop').forEach(function(li) {
          li.classList.remove('open');
        });
      }
    }
  });

  /* ---- Topbar Ticker ---- */
  (function(){
    var items = document.querySelectorAll('#topbarTicker .topbar-ticker-item');
    var dots  = document.querySelectorAll('#topbarDots span');
    if(!items.length) return;
    var current = 0;

    function goTo(next){
      /* exit current */
      items[current].classList.add('exit');
      items[current].classList.remove('active');
      dots[current] && dots[current].classList.remove('active');

      /* small delay so exit animation plays */
      setTimeout(function(){
        items[current].classList.remove('exit');
        current = next;
        items[current].classList.add('active');
        dots[current] && dots[current].classList.add('active');
      }, 350);
    }

    /* Dot click */
    dots.forEach(function(dot, i){
      dot.addEventListener('click', function(){
        if(i === current) return;
        goTo(i);
      });
    });

    /* Auto cycle every 2 s */
    setInterval(function(){
      goTo((current + 1) % items.length);
    }, 2000);
  })();

  /* ---- Sticky navbar ---- */
  window.addEventListener('scroll', function() {
    var navbar = document.getElementById('csdNavbar');
    var placeholder = document.getElementById('csd-placeholder');
    if (!navbar || !placeholder) return;
    if (window.scrollY > 50) {
      navbar.classList.add('sticky');
      placeholder.style.height = navbar.offsetHeight + 'px';
    } else {
      navbar.classList.remove('sticky');
      placeholder.style.height = '0';
    }
  });

})();
</script>
