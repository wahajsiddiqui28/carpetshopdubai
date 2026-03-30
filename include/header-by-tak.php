<style>
/* ---- Top Bar ---- */
.csd-topbar { background:#f3e2c3; height:45px; display:flex; align-items:center; overflow:hidden; }
.csd-topbar-inner { width:90%; margin:auto; display:flex; justify-content:center; align-items:center; gap:10px; }

/* ---- Topbar Ticker ---- */
.topbar-ticker { position:relative; height:45px; display:flex; align-items:center; justify-content:center; flex:1; overflow:hidden; }
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
.topbar-ticker-item.active  { opacity:1; transform:translateY(0); pointer-events:auto; }
.topbar-ticker-item.exit    { opacity:0; transform:translateY(-20px); }
.topbar-ticker-item .tb-icon  { font-size:16px; flex-shrink:0; }
.topbar-ticker-item .tb-tabby {
  background:#3d9970; color:#fff;
  font-size:11px; font-weight:700;
  padding:2px 6px; border-radius:4px;
  letter-spacing:0.5px; flex-shrink:0;
}
.topbar-ticker-dots { display:flex; gap:6px; flex-shrink:0; align-items:center; }
.topbar-ticker-dots span {
  width:7px; height:7px; border-radius:50%;
  background:rgba(90,58,26,0.25); cursor:pointer; transition:background 0.3s;
}
.topbar-ticker-dots span.active { background:#c47a2f; }
@media(max-width:992px){
  .topbar-ticker-item { font-size:12px; }
  .topbar-ticker-dots { display:none; }
}
</style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L2PRQTV4P7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L2PRQTV4P7');
</script>

<!-- ===== Sticky Wrapper: topbar + main header scroll together ===== -->
<div class="sticky-header-wrap">

<!-- Top header  -->
<div class="csd-topbar">
  <div class="csd-topbar-inner">

    <div class="topbar-ticker" id="topbarTicker2">
      <div class="topbar-ticker-item active"><span class="tb-icon">⭐</span><span>1450+ Satisfied Reviews</span></div>
      <div class="topbar-ticker-item"><span class="tb-icon">🔄</span><span>30-Days Return Policy</span></div>
      <div class="topbar-ticker-item"><span class="tb-tabby">tabby</span><span>Pay In Installments</span></div>
      <div class="topbar-ticker-item"><span class="tb-icon">🚚</span><span>Free Delivery Across Dubai & UAE</span></div>
    </div>

    <div class="topbar-ticker-dots" id="topbarDots2">
      <span class="active"></span><span></span><span></span><span></span>
    </div>

  </div>
</div>

<script>
(function(){
  var items = document.querySelectorAll('#topbarTicker2 .topbar-ticker-item');
  var dots  = document.querySelectorAll('#topbarDots2 span');
  if(!items.length) return;
  var current = 0;
  function goTo(next){
    items[current].classList.add('exit');
    items[current].classList.remove('active');
    dots[current] && dots[current].classList.remove('active');
    setTimeout(function(){
      items[current].classList.remove('exit');
      current = next;
      items[current].classList.add('active');
      dots[current] && dots[current].classList.add('active');
    }, 350);
  }
  dots.forEach(function(dot,i){ dot.addEventListener('click',function(){ if(i!==current) goTo(i); }); });
  setInterval(function(){ goTo((current+1)%items.length); }, 2000);
})();
</script>
<!-- Desktop Top Bar -->
<div class="desktop-top-bar d-none d-lg-flex justify-content-end align-items-center px-4 py-2" style="background:#f3e2c4; color:#000; font-size:14px;">
    <div class="top-right d-flex gap-4">
        <span>Address: <a href="tel:+971547794446" style="color:#000; font-weight: 600; text-decoration:none; "> 39,3B St - Al-Quoz Dubai</a></span>
        <span>Email: <a href="mailto:Carpetscurtains@gmail.com" style="color:#000; text-decoration:none; font-weight: 600; ">Carpetscurtains@gmail.com</a></span>
    </div>
</div>

 <!-- Mobile Top Contact Bar -->
<div class="mobile-contact-bar d-lg-none text-center py-2 d-none" style="background:#000; color:#fff; font-weight:700; height:35px; font-size:14px;">
    Call: <a href="tel:+971547794446" style="color:#fff; text-decoration: none !Important;">+971-54779-4446</a>
</div>


<!--Main Header-->
<header class="main-header">
    <div class="auto-container d-flex justify-content-between align-items-center py-3 px-4">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php"><img src="images/Logo-black.png" alt="Carpet Shop Dubai" style="height:60px;"></a>
        </div>

        <!-- Navigation Menu -->
        <nav class="main-menu d-none d-lg-block px-4">
            <ul class="list-unstyled d-flex gap-5 mb-0">
                <li><a href="/">Home</a></li>

                           <!-- <li><a href="about.php">About Us</a></li>-->
                           
                           
                           <li class="has-sub">
                              <a href="#">Carpet</a>
                              <ul class="bb"> 
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
                           <li class="has-sub">
                              <a href="flooring.php">Flooring </a>
                              <ul class="bb">
                                 <li><a href="home-vinyl-flooring.php">Home Vinyl Flooring</a></li>
                                 <li><a href="kitchen-vinyl-flooring.php">Kitchen  Vinyl Flooring</a></li>
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
                                 <li><a href="outdoor-flooring-services.php">Outddor Flooring Services</a></li>
                              </ul>
                           </li>
                           <li class="has-sub">
                              <a href="rugs.php">Rugs</a>
                              <ul class="bb">
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
                           <li class="has-sub">
                              <a href="curtains.php">Curtains  </a>
                              <ul class="bb">
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
                           <!--<li class="has-sub">-->
                           <!--   <a href="blinds.php">Blinds</a>-->
                           <!--   <ul>-->
                           <!--      <li><a href="motorized-blinds.php">Motorized Blinds</a></li>-->
                           <!--      <li><a href="office-blinds.php">Office Blinds</a></li>-->
                           <!--      <li><a href="roller-blinds.php">Roller Blinds</a></li>-->
                           <!--      <li><a href="roman-blinds.php">Roman Blinds</a></li>-->
                           <!--      <li><a href="wooden-blinds.php">Wooden Blinds</a></li>-->
                           <!--      <li><a href="zebra-blinds.php">Zebra Blinds</a></li>-->
                           <!--   </ul>-->
                           <!--</li>-->
                                                      <li class="has-sub">
                              <a href="upholstery.php">Upholstery  </a>
                              <ul class="bb">
                                 <li><a href="cotton-fabrics.php">Cotton Fabrics</a></li>
                                 <li><a href="customized-cushions.php">Customized Cushions</a></li>
                                 <li><a href="home-textiles.php">Home Textiles</a></li>
                                 <li><a href="linen-fabrics.php">Linen Fabrics</a></li>
                                 <li><a href="panting-service.php">Painting Service</a></li>
                                 <li><a href="sofa-hopostri.php">Sofa Upholstery</a></li>
                                 <li><a href="sofa-repair.php">Sofa Repair</a></li>
                              </ul>
                           </li>
                           
                           
              <!--START Wodde Wall Cladding-->

                               <li class="has-sub">
                              <a href="wooden-wall-cladding.php">Wall Panels </a>
                              <ul class="bb">
                                 <li><a href="wooden-wall-cladding.php"> Wooden Wall Panels</a></li>
                                 <li><a href="epoxy-painting.php">Epoxy Painting</a></li>
                                 <li><a href="customize-furniture.php">Customize Furniture</a></li>
                                 <li><a href="brick-wall-panels.php">Brick Wall Panels</a></li>
                                   <li><a href="outdoor-cushions.php">Outdoor Cushions</a></li>
                                     <li><a href="wall-painting.php">Wall Painting</a></li>
                                       <li><a href="apartment-painting.php">Apartment Painting</a></li>
                                         <li><a href="customize-bed.php">Customize Bed</a></li>
                                            <li><a href="custom-made-sofa.php">Custom Made Sofa</a></li>                <li><a href="customize-door.php">Customize Door</a></li> 
                                            <li><a href="herringbone-flooring.php">Herringbone Flooring</a></li>
                                            <li><a href="wooden-door.php">Wooden Door</a></li>
                                 
                              </ul>
                           </li>
                           
                           
                               <!--End Wodde Wall Cladding-->
                               
                               <li class="has-sub">
                              <a href="#" class="abu-dhabi-services-link">Our Services In Abu Dhabi▾</a>
                              <ul class="dropdown">
                                 <li><a href="epoxy-flooring-in-abu-dhabi.php">Epoxy Flooring In Abu Dhabi</a></li>
                                  <li><a href="wall-to-wall-carpert-abu-dhabi.php">Wall to Wall Carpert Abu Dhabi</a></li>
                                  <li><a href="Vinyl-Flooring-Abu-Dhabi.php">Vinyl Flooring Abu Dhabi</a></li>
                                  <li><a href="Stair-Carpet-Shop-in-Abu-Dhabi.php">Stair-Carpet-Shop-in-Abu-Dhabi</a></li>
                                 <li><a href="spc-flooring-abu-dhabi.php">SPC Flooring Abu Dhabi</a></li>
                                 <li><a href="PVC-skirting-Abu-Dhabi.php">PVC-Skirting Abu Dhabi</a></li>
                                 <li><a href="Customzie-Furniture-Abu-Dhabi.php">Customzie Furniture Abu Dhabi</a></li>
                              </ul>
                           </li>
                               
            </ul>
        </nav>

        <!-- Call / WhatsApp -->
        <div class="header-contact d-none d-lg-flex align-items-center gap-2">
            <a href="tel:+971547794446" class="btn btn-call">Call Now</a>
            <a href="https://wa.me/+971565847696" target="_blank" class="btn btn-whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="mobile-nav-toggle d-lg-none">
            <span class="fa fa-bars"></span>
        </div>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div class="mobile-menu d-lg-none">
        <ul class="list-unstyled mb-0">
            <li><a href="/">Home</a></li>

                           <!-- <li><a href="about.php">About Us</a></li>-->
                           
                           
                           <li class="has-sub">
                              <a href="carpet.php">Carpet</a>
                              <ul class="bb"> <br>
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
                           <li class="has-sub">
                              <a href="flooring.php">Flooring </a> 
                              <ul class="bb">  <br>
                                 <li><a href="home-vinyl-flooring.php">Home Vinyl Flooring</a></li>
                                 <li><a href="kitchen-vinyl-flooring.php">Kitchen  Vinyl Flooring</a></li>
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
                                 <li><a href="outdoor-flooring-services.php">Outddor Flooring Services</a></li>
                              </ul>
                           </li>
                           <li class="has-sub">
                              <a href="rugs.php">Rugs </a> 
                              <ul class="bb">  <br>
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
                           <li class="has-sub">
                              <a href="curtains.php">Curtains  </a>
                              <ul class="bb">  <br>
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
                           <!--<li class="has-sub">-->
                           <!--   <a href="blinds.php">Blinds</a> -->
                           <!--   <ul>  <br>-->
                           <!--      <li><a href="motorized-blinds.php">Motorized Blinds</a></li>-->
                           <!--      <li><a href="office-blinds.php">Office Blinds</a></li>-->
                           <!--      <li><a href="roller-blinds.php">Roller Blinds</a></li>-->
                           <!--      <li><a href="roman-blinds.php">Roman Blinds</a></li>-->
                           <!--      <li><a href="wooden-blinds.php">Wooden Blinds</a></li>-->
                           <!--      <li><a href="zebra-blinds.php">Zebra Blinds</a></li>-->
                           <!--   </ul>-->
                           <!--</li>-->
                                                      <li class="has-sub">
                              <a href="upholstery.php">Upholstery  </a>
                              <ul class="bb">  <br>
                                 <li><a href="cotton-fabrics.php">Cotton Fabrics</a></li>
                                 <li><a href="customized-cushions.php">Customized Cushions</a></li>
                                 <li><a href="home-textiles.php">Home Textiles</a></li>
                                 <li><a href="linen-fabrics.php">Linen Fabrics</a></li>
                                 <li><a href="panting-service.php">Painting Service</a></li>
                                 <li><a href="sofa-hopostri.php">Sofa Upholstery</a></li>
                                 <li><a href="sofa-repair.php">Sofa Repair</a></li>
                              </ul>
                           </li>
                           
                           
              <!--START Wodde Wall Cladding-->

                               <li class="has-sub">
                              <a href="wooden-wall-cladding.php">Wall Panels </a>
                              <ul class="bb">  <br>
                                 <li><a href="wooden-wall-cladding.php"> Wooden Wall Panels</a></li>
                                 <li><a href="epoxy-painting.php">Epoxy Painting</a></li>
                                 <li><a href="customize-furniture.php">Customize Furniture</a></li>
                                 <li><a href="brick-wall-panels.php">Brick Wall Panels</a></li>
                                   <li><a href="outdoor-cushions.php">Outdoor Cushions</a></li>
                                     <li><a href="wall-painting.php">Wall Painting</a></li>
                                       <li><a href="apartment-painting.php">Apartment Painting</a></li>
                                         <li><a href="customize-bed.php">Customize Bed</a></li>
                                            <li><a href="custom-made-sofa.php">Custom Made Sofa</a></li>                <li><a href="customize-door.php">Customize Door</a></li> 
                                            <li><a href="herringbone-flooring.php">Herringbone Flooring</a></li>
                                            <li><a href="wooden-door.php">Wooden Door</a></li>
                                 
                              </ul>
                           </li>
                           
                           <li class="has-sub">
                              <a href="#" class="abu-dhabi-services-link">Our Services In Abu Dhabi▾</a>
                              <ul class="dropdown">
                                 <li><a href="epoxy-flooring-in-abu-dhabi.php">Epoxy Flooring In Abu Dhabi</a></li>
                                 <li><a href="wall-to-wall-carpert-abu-dhabi.php">Wall to Wall Carpert Abu Dhabi</a></li>
                                 <li><a href="Stair-Carpet-Shop-in-Abu-Dhabi.php">Stair-Carpet-Shop-in-Abu-Dhabi</a></li>
                                  <li><a href="Vinyl-Flooring-Abu-Dhabi.php">Vinyl Flooring Abu Dhabi</a></li>
                                 <li><a href="spc-flooring-abu-dhabi.php">SPC-Flooring Abu Dhabi</a></li>
                                 <li><a href="PVC-skirting-Abu-Dhabi.php">PVC-Skirting Abu Dhabi</a></li>
                                 <li><a href="Customzie-Furniture-Abu-Dhabi.php">Customzie Furniture Abu Dhabi</a></li>
                                 
                              </ul>
                           </li>
                           
                               <!--End Wodde Wall Cladding-->
        </ul>
    </div>
</header>

</div><!-- ===== End sticky-header-wrap ===== -->

<style>
/* ---- Sticky wrapper: topbar + navbar together ---- */
.sticky-header-wrap {
    position: sticky;
    top: 0;
    z-index: 9999;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* Header Styles */
.main-header {
    width: 100%;
    background: #fff7ea;
    /* sticky removed — wrapper handles it */
}

.main-header .logo img {
    max-height: 70px;
}

/* Main Menu Desktop */
.main-header .main-menu ul li a {
    color: #000;
    font-weight: 600; /* Increased weight */
    font-size: 16px;  /* Increased font size */
    text-decoration: none;
    transition: color 0.3s;
    padding: 0 8px;
}

.main-header .main-menu ul li a:hover {
    color: #fff4e0;
}

/* Add padding left and right to main menu container */
.main-header .main-menu {
    padding-left: 20px;
    padding-right: 20px;
}

.header-contact .btn {
    background: #8a522a;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    padding: 8px 16px;
    border-radius: 50px;
    text-decoration: none;
    transition: background 0.3s;
}

.header-contact .btn:hover {
    background: #6b3f1e;
}

.mobile-nav-toggle span {
    font-size: 30px;
    color: #000;
    cursor: pointer;
    padding-right:20px !Important;
    
}

.mobile-menu {
    display: none;
    background: #b9722f;
    padding: 15px;
    
}

.mobile-menu ul li {
    padding: 10px 0;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    font-size: 14px;
}

.mobile-menu ul li a {
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}

/* Top Bar Styles */
.desktop-top-bar span, .desktop-top-bar a {
    font-size: 14px;
    height: 30px;
    padding-top: 5px;
}

/* Responsive */
@media (max-width: 992px) {
    .main-menu, .header-contact, .desktop-top-bar { display: none; }
}

@media (max-width: 992px) {
    .mobile-menu.show { display: block; }
}

.main-menu ul li ul {
    display: none;
    position: absolute;
    background: #fff;
    padding: 10px 0;
    min-width: 180px;
    border-radius: 6px;
    z-index: 999;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

/* Show submenu on hover */
.main-menu ul li:hover > ul {
    display: block;
}

/* Submenu items style */
.main-menu ul li ul li {
    padding: 8px 20px;
    width: 100%;
}

.main-menu ul li ul li a {
    color: #fff;
    font-weight: 500;
    font-size: 15px;
    display: block;
    text-decoration: none;
}

.main-menu ul li ul li a:hover {
    background: #b9722f;
    border-radius: 4px;
}

/* Ensure parent li has position relative for absolute submenu */
.main-menu ul li {
    position: relative;
}

/*-------------------------------------------*/ 

/* Add dropdown icon for parent menu items */
.main-menu ul li.has-sub > a::after {
    content: "\25BE"; /* ▼ Unicode for downward arrow */
    font-size: 12px;
    margin-left: 6px;
    transition: transform 0.3s ease;
}

/* Rotate arrow on hover to indicate open submenu */
.main-menu ul li.has-sub:hover > a::after {
    transform: rotate(180deg);
}

/* Optional: adjust padding for parent links with arrow */
.main-menu ul li.has-sub > a {
    display: inline-flex;
    align-items: center;
}

/* Nested submenus arrow (if needed) */
.main-menu ul li ul li.has-sub > a::after {
    content: "\25B8"; /* ▶ Unicode for right arrow for nested submenus */
    margin-left: auto;
    font-size: 10px;
    transition: transform 0.3s ease;
}

/* Rotate right arrow on hover for nested submenus */
.main-menu ul li ul li.has-sub:hover > a::after {
    transform: rotate(90deg);
}

/* ------------------ Mobile --------------------------*/ 

/* Mobile submenu icon */
.mobile-menu li.has-sub > a::after {
    content: "\25BE"; /* downward arrow */
    float: right;
    font-size: 14px;
    margin-left: 6px;
    transition: transform 0.3s ease;
}

/* Rotate arrow when submenu is open */
.mobile-menu li.has-sub.open > a::after {
    transform: rotate(180deg);
}

/* Hide submenus by default */
.mobile-menu li ul {
    display: none;
    padding-left: 15px;
}

/* Show submenu when parent has 'open' class */
.mobile-menu li.open > ul {
    display: block;
}

/* Scroll function styles for Abu Dhabi submenu */
.main-menu ul li ul.dropdown {
    max-height: 300px;
    overflow-y: auto;
    overflow-x: hidden;
    scrollbar-width: thin;
    scrollbar-color: #8a522a #f3e2c4;
}

.main-menu ul li ul.dropdown::-webkit-scrollbar {
    width: 6px;
}

.main-menu ul li ul.dropdown::-webkit-scrollbar-track {
    background: #f3e2c4;
    border-radius: 10px;
}

.main-menu ul li ul.dropdown::-webkit-scrollbar-thumb {
    background: #8a522a;
    border-radius: 10px;
}

.main-menu ul li ul.dropdown::-webkit-scrollbar-thumb:hover {
    background: #6b3f1e;
}

.mobile-menu li ul.dropdown {
    max-height: 250px;
    overflow-y: auto;
    overflow-x: hidden;
    scrollbar-width: thin;
    scrollbar-color: #fff #b9722f;
}

.mobile-menu li ul.dropdown::-webkit-scrollbar {
    width: 5px;
}

.mobile-menu li ul.dropdown::-webkit-scrollbar-track {
    background: #b9722f;
    border-radius: 10px;
}

.mobile-menu li ul.dropdown::-webkit-scrollbar-thumb {
    background: #fff;
    border-radius: 10px;
}

.mobile-menu li ul.dropdown::-webkit-scrollbar-thumb:hover {
    background: #f3e2c4;
}
</style>

<script>
// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function(){
    const toggle = document.querySelector('.mobile-nav-toggle');
    const menu = document.querySelector('.mobile-menu');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('show');
    });

    // Submenu toggle for mobile
    const submenuParents = document.querySelectorAll('.mobile-menu li.has-sub > a');
    submenuParents.forEach(anchor => {
        anchor.addEventListener('click', function(e){
            e.preventDefault(); // prevent following the link
            const parentLi = this.parentElement;
            parentLi.classList.toggle('open'); // toggle the submenu
        });
    });
    
    // Scroll function for Abu Dhabi submenu - Desktop
    const abuDhabiLinks = document.querySelectorAll('.abu-dhabi-services-link');
    abuDhabiLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            const submenu = this.nextElementSibling;
            if (submenu && submenu.classList.contains('dropdown')) {
                // Small delay to ensure submenu is visible before scrolling
                setTimeout(() => {
                    submenu.scrollTop = 0;
                }, 50);
            }
        });
    });
    
    // Scroll function for Abu Dhabi submenu - Mobile
    const mobileAbuDhabiLinks = document.querySelectorAll('.mobile-menu .abu-dhabi-services-link');
    mobileAbuDhabiLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const parentLi = this.parentElement;
            // Check if this is the Abu Dhabi services menu item
            if (this.textContent.includes('Abu Dhabi')) {
                // Small delay to allow submenu to open
                setTimeout(() => {
                    const submenu = parentLi.querySelector('ul.dropdown');
                    if (submenu) {
                        submenu.scrollTop = 0;
                    }
                }, 100);
            }
        });
    });
});
</script>