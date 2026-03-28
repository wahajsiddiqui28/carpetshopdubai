<!DOCTYPE html>
<html lang="en">

<head>
  <base href="http://localhost:9090/carpetshopdubai/" />
  <?php include('include/head.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>

<body>
  <?php include('include/header.php'); ?>
  <!--End Main Header -->

  <style>
    .page-title {
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 0;
      color: #fff;
      text-align: center;
    }

    .page-title::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .page-title .auto-container {
      position: relative;
      z-index: 2;
    }

    .page-title h1 {
      color: #fff;
      font-weight: 800;
      text-transform: uppercase;
      font-size: 42px;
      margin-bottom: 15px;
    }

    .bread-crumb li {
      display: inline-block;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
    }

    .bread-crumb li a {
      color: #d88a3c;
    }

    .bread-crumb li::after {
      content: '/';
      margin: 0 10px;
      color: #fff;
    }

    .bread-crumb li:last-child::after {
      content: '';
    }
  </style>

  <!--Page Title-->
  <section class="page-title" style="background-image:url(images/about-baner.jpeg);">
    <div class="auto-container">
      <h1>About Us</h1>
      <ul class="bread-crumb clearfix">
        <li><a href="index.php">Home</a></li>
        <li class="active">About Us</li>
      </ul>
    </div>
  </section>
  <!--End Page Title-->

  <!--Full Width Section One-->
  <section class="full-width-section-one">
    <div class="outer-box clearfix">

      <!--Content Column-->
      <div class="content-column">
        <div class="content-box">
          <!--Sec Title-->
          <div class="sec-title">
            <h2>Provide Qualty Service Since 2008!!</h2>
            <div class="separator"></div>
          </div>
          <h3><strong>Welcome to </strong> Dubai Carpets</h3>
          <div class="text">
            <p>In 2010, Dubai Carpet came into existence to offer the best of Carpet, Flooring, Rugs, Curtain, and <a href="motorized-blinds.php">Motorized Blinds</a> to make the homes beautiful. We have brought the bliss of a variety of home furnishing to customers. Our modern artistic designs have earned a reputation where customers trust our outstanding value and continuous innovation. If you wish to know, the exceptional customer experience then we are there to serve you.</p>
            <p>A team of experts on the back-end will think and find new ideas daily to make sure each client is getting some new designs daily. Multiple numbers of designs for the interiors and exteriors will be found with the carpet Dubai so every client can choose wisely based on their wish and budget. our main goal is to provide our customers with the exceptional quality they desire when considering the evolution of new technologies. </p>
          </div>
        </div>
      </div>

      <!--Image Column-->
      <div class="image-column" style="background-image: url(images/video-img.jpg)">
        <div class="image">
          <img src="images/video-img.jpg" alt="Carpet Supplier Dubai">
        </div>
        <a href="" class="overlay-link lightbox-image">
        </a>
      </div>
      <!--End Image Column-->

    </div>
  </section>
  <!--End Full Width Section One-->
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #fff;
      color: #333;
      line-height: 1.6;
    }

    /* Main container */
    .services-section {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
    }

    /* Grid layout */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    /* Service Box */
    .service-box {
      text-align: left;
    }

    .service-box h3 {
      font-size: 20px;
      text-transform: uppercase;
      font-weight: bold;
      margin-bottom: 10px;
      color: #222;
    }

    /* Orange line under heading */
    .service-box .heading-line {
      height: 3px;
      width: 50px;
      background: #f4a300;
      margin-bottom: 15px;
    }

    /* List styling */
    .service-box ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .service-box ul li {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 16px;
      margin-bottom: 12px;
      line-height: 1.4;
    }

    /* Checkmark Icon */
    .checkmark {
      background: #f4a300;
      color: #fff;
      border-radius: 4px;
      width: 24px;
      height: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      flex-shrink: 0;
      /* Prevents shrinking */
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
      .services-grid {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .service-box h3 {
        text-align: center;
        font-size: 18px;
      }

      .service-box .heading-line {
        margin: 0 auto 15px;
      }

      .service-box ul li {
        justify-content: flex-start;
        /* Keep icon and text aligned to left */
        max-width: 280px;
        margin: 0 auto 12px;
        /* Center block but keep alignment inside */
      }
    }


    .page-title {
      padding: 289px 0 90px !important;
      background-position: bottom center !important;
    }

    .auto-container {
      max-width: 99% !important;
    }

    /* Responsive for Mobile */
    @media (max-width: 768px) {
      .services-section {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .service-list li {
        font-size: 14px;
      }

      .service-list li .icon {
        width: 22px;
        height: 22px;
        margin-right: 8px;
      }
    }

    .news-style-one .inner-box .lower-content h3 {
      font-size: 18px;
    }
  </style>
  </head>

  <body>

    <div class="services-section">
      <div class="services-grid">

        <!-- Furniture Section -->
        <div class="service-box">
          <h3>Types of <strong>Furniture</strong></h3>
          <div class="heading-line"></div>
          <ul>
            <li><span class="checkmark">&#10003;</span> Custom Living Room Furniture</li>
            <li><span class="checkmark">&#10003;</span> Custom Bedroom Furniture</li>
            <li><span class="checkmark">&#10003;</span> Custom Outdoor Furniture</li>
            <li><span class="checkmark">&#10003;</span> Custom Office Furniture</li>
            <li><span class="checkmark">&#10003;</span> Custom Kitchen Cabinets</li>
            <li><span class="checkmark">&#10003;</span> Carpentry Services</li>
            <li><span class="checkmark">&#10003;</span> Upholstery Services</li>
          </ul>
        </div>

        <!-- Flooring Section -->
        <div class="service-box">
          <h3>Types of <strong>Flooring</strong></h3>
          <div class="heading-line"></div>
          <ul>
            <li><span class="checkmark">&#10003;</span> Wooden Flooring</li>
            <li><span class="checkmark">&#10003;</span> Parquet Flooring</li>
            <li><span class="checkmark">&#10003;</span> Laminate Flooring</li>
            <li><span class="checkmark">&#10003;</span> Epoxy Flooring</li>
            <li><span class="checkmark">&#10003;</span> Rubber Flooring</li>
            <li><span class="checkmark">&#10003;</span> SPC Flooring</li>
            <li><span class="checkmark">&#10003;</span> LVT Flooring</li>
          </ul>
        </div>

        <!-- Carpets Section -->
        <div class="service-box">
          <h3>Types of <strong>Carpets</strong></h3>
          <div class="heading-line"></div>
          <ul>
            <li><span class="checkmark">&#10003;</span> Wall To Wall Carpet</li>
            <li><span class="checkmark">&#10003;</span> Stair Carpet</li>
            <li><span class="checkmark">&#10003;</span> Persian Carpets</li>
            <li><span class="checkmark">&#10003;</span> Mosque Carpets</li>
            <li><span class="checkmark">&#10003;</span> Exhibition Carpets</li>
            <li><span class="checkmark">&#10003;</span> Office Carpet Tiles</li>
            <li><span class="checkmark">&#10003;</span> Sisal Carpets</li>
          </ul>
        </div>

        <!-- Curtains Section -->
        <div class="service-box">
          <h3>Types of <strong>Curtains</strong></h3>
          <div class="heading-line"></div>
          <ul>
            <li><span class="checkmark">&#10003;</span> Sheer Curtains</li>
            <li><span class="checkmark">&#10003;</span> Modern Curtains</li>
            <li><span class="checkmark">&#10003;</span> Velvet Curtains</li>
            <li><span class="checkmark">&#10003;</span> Blackout Curtains</li>
            <li><span class="checkmark">&#10003;</span> Bedroom Curtains</li>
            <li><span class="checkmark">&#10003;</span> Motorized Curtains</li>
            <li><span class="checkmark">&#10003;</span> Living Room Curtains</li>
          </ul>
        </div>

      </div>
    </div>
    <!--Featured Section-->
    <section class="full-width-section-one no-padd-top">
      <div class="about-top" id="about">
        <div class="auto-container">
          <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <!--Blog Single-->
              <div class="news-style-one">
                <div class="inner-box">

                  <div class="lower-content">
                    <div class="text">Home furnishing is the foremost thing people notify when reaching home and it becomes the biggest surface in the part of the house. Flooring is quickly scrutinized by the guest as well as the potential house buyers. To bring a special look at the home, the house owner is requested to go with quality home furnishings like carpets, Flooring, Rugs, Curtain, and Blinds for the home and office. Home furnishing becomes a right and power to transform any area into the form of comfortable luxury to living area.</div>

                    <div class="text">In case, you may love the perfect feel of perfect <a href="office-carpet.php">Office carpets</a>, <a href="flooring.php">Flooring</a>, <a href="rugs.php">Rugs</a>, <a href="curtains.php">Curtain</a>, and <a href="blinds.php">Blinds</a> in your home or any other place and looking to protect them, then Carpet Shop Dubai will help you out at that time in an effective manner. Either it may be in the bedroom or living room, these home furnishings are suitable for all areas. Regardless of what your interior designing plan might be, rest guaranteed that there's one shop that will supply the best product for your home. There are numerous advantages of having the best online shop in Dubai.</div>

                    <div class="text"><a href="/">Carpet Shop Dubai</a> comes into existence to offer well-designed products. Make your experience of buying carpet and home furnishing online, a pleasurable one by having royal classic rugs or curtains brought to you exclusively by Carpet Shop Dubai. The beautifully designed, home furnishing will give you a comfortable and alluring look that you will flaunt and have that beautiful design. Home furnishing by Carpet Shop Dubai has a beautiful modern touch with an essentially crafted design that is bound to give you a royal and classic feel.</div><br>
                    <style>
                      .use-cases-section {
                        padding: 60px 0;
                        /* background-color: #f5f5f5; */
                        text-align: center;
                      }

                      .use-cases-section h2 {
                        font-size: 36px;
                        font-weight: 700;
                        color: #000;
                        margin-bottom: 20px;
                        font-family: inherit;
                      }

                      .use-cases-section .intro-text {
                        max-width: 1100px;
                        margin: 0 auto 50px;
                        font-size: 18px;
                        line-height: 1.6;
                        color: #333;
                        padding: 0 20px;
                      }

                      .use-cases-grid {
                        display: grid;
                        grid-template-columns: repeat(6, 1fr);
                        gap: 25px;
                        max-width: 1200px;
                        margin: 0 auto;
                        padding: 0 20px;
                      }

                      .use-case-item {
                        text-align: center;
                      }

                      .use-case-image {
                        width: 100%;
                        aspect-ratio: 1 / 1;
                        background-color: #e0e0e0;
                        border-radius: 12px;
                        margin-bottom: 12px;
                        overflow: hidden;
                        position: relative;
                        border: 2px dashed #ccc;
                        transition: transform 0.3s ease;
                      }

                      .use-case-image:hover {
                        transform: translateY(-5px);
                        border-color: #999;
                      }

                      .use-case-image img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        display: block;
                      }

                      .use-case-item h3 {
                        font-size: 19px;
                        font-weight: 700;
                        color: #000;
                        margin: 0;
                      }

                      @media (max-width: 1200px) {
                        .use-cases-grid {
                          grid-template-columns: repeat(4, 1fr);
                        }
                      }

                      @media (max-width: 900px) {
                        .use-cases-grid {
                          grid-template-columns: repeat(3, 1fr);
                        }
                      }

                      @media (max-width: 600px) {
                        .use-cases-grid {
                          grid-template-columns: repeat(2, 1fr);
                          gap: 15px;
                        }

                        .use-cases-section h2 {
                          font-size: 26px;
                        }

                        .use-case-item h3 {
                          font-size: 16px;
                        }
                      }
                    </style>

                    <section class="use-cases-section">
                      <div class="auto-container">
                        <h2>Where You Can Use Our Carpets?</h2>
                        <p class="intro-text">Make all the spaces stylish, comfortable and functional by using carpets. Our carpets improve the appearance and feel of any interior whether you are creating a comfortable space or a working place. They are completely appropriate for any area and bring warmth, beauty and permanence to any location they are located.</p>

                        <div class="use-cases-grid">
                          <!-- Item 1 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets1.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Living Room">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets1.webp" alt="Living Room">
                              </a>
                            </div>
                            <h3>Living Room</h3>
                          </div>
                          <!-- Item 2 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets2.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Bedroom">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets2.webp" alt="Bedroom">
                              </a>
                            </div>
                            <h3>Bedroom</h3>
                          </div>
                          <!-- Item 3 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets3.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Dining Room">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets3.webp" alt="Dining Room">
                              </a>
                            </div>
                            <h3>Dining Room</h3>
                          </div>
                          <!-- Item 4 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets4.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Office">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets4.webp" alt="Office">
                              </a>
                            </div>
                            <h3>Office</h3>
                          </div>
                          <!-- Item 5 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets5.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Hotel Lobby">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets5.webp" alt="Hotel Lobby">
                              </a>
                            </div>
                            <h3>Hotel Lobby</h3>
                          </div>
                          <!-- Item 6 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets6.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Restaurant">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets6.webp" alt="Restaurant">
                              </a>
                            </div>
                            <h3>Restaurant</h3>
                          </div>
                          <!-- Item 7 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets7.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Conference Hall">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets7.webp" alt="Conference Hall">
                              </a>
                            </div>
                            <h3>Conference Hall</h3>
                          </div>
                          <!-- Item 8 -->
                          <div class="use-case-item">
                            <div class="use-case-item">
                              <div class="use-case-image">
                                <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets8.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Reception Area">
                                  <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets8.webp" alt="Reception Area">
                                </a>
                              </div>
                              <h3>Reception Area</h3>
                            </div>
                          </div>
                          <!-- Item 9 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets9.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Corridor">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets9.webp" alt="Corridor">
                              </a>
                            </div>
                            <h3>Corridor</h3>
                          </div>
                          <!-- Item 10 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets10.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Meeting Room">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets10.webp" alt="Meeting Room">
                              </a>
                            </div>
                            <h3>Meeting Room</h3>
                          </div>
                          <!-- Item 11 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets11.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Home Theater">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets11.webp" alt="Home Theater">
                              </a>
                            </div>
                            <h3>Home Theater</h3>
                          </div>
                          <!-- Item 12 -->
                          <div class="use-case-item">
                            <div class="use-case-image">
                              <a href="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets12.webp" class="lightbox-image" data-fancybox="use-cases" rel="use-cases-gallery" title="Retail Store">
                                <img src="images/about/where-you-can-use-our-carpets/where-you-can-use-our-carpets12.webp" alt="Retail Store">
                              </a>
                            </div>
                            <h3>Retail Store</h3>
                          </div>

                        </div>
                      </div>
                    </section>



                    <!-- Our PROJECTS Gallery Start  -->
                    <style>
                      .projects-gallery-section {
                        background-color: #614124;
                        padding: 80px 0;
                        color: #fff;
                        text-align: center;
                        font-family: 'Outfit', sans-serif;
                      }

                      .projects-gallery-section h2 {
                        font-size: 42px;
                        font-weight: 800;
                        text-transform: uppercase;
                        margin-bottom: 40px;
                        letter-spacing: 2px;
                      }

                      /* Filter Bar */
                      .projects-filter-bar {
                        background: rgba(0, 0, 0, 0.2);
                        display: flex !important;
                        flex-direction: row !important;
                        flex-wrap: wrap;
                        padding: 10px;
                        border-radius: 50px;
                        margin-bottom: 50px;
                        justify-content: center;
                        gap: 10px;
                        width: fit-content;
                        margin: 0 auto 50px auto !important;
                        max-width: 95%;
                        list-style: none;
                        /* Just in case it's treated as a list */
                      }

                      .projects-filter-btn {
                        padding: 10px 25px;
                        border-radius: 30px;
                        cursor: pointer;
                        font-weight: 700;
                        text-transform: uppercase;
                        font-size: 13px;
                        transition: all 0.3s ease;
                        color: #fff;
                        border: none;
                        background: transparent;
                        display: inline-block;
                        width: auto !important;
                        white-space: nowrap;
                      }

                      .projects-filter-btn.active {
                        background: #fff !important;
                        color: #614124 !important;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                      }

                      .projects-filter-btn:hover:not(.active) {
                        background: rgba(255, 255, 255, 0.1);
                      }

                      /* Gallery Grid */
                      .projects-gallery-grid {
                        display: grid;
                        grid-template-columns: repeat(4, 1fr);
                        gap: 20px;
                      }

                      .gallery-item {
                        border-radius: 5px;
                        overflow: hidden;
                        position: relative;
                        aspect-ratio: 4/3;
                        display: block;
                      }

                      .gallery-item img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.5s ease;
                      }

                      .gallery-item:hover img {
                        transform: scale(1.1);
                      }

                      .gallery-item::after {
                        content: '';
                        position: absolute;
                        inset: 0;
                        background: rgba(0, 0, 0, 0.2);
                        opacity: 0;
                        transition: opacity 0.3s;
                      }

                      .gallery-item:hover::after {
                        opacity: 1;
                      }

                      @media (max-width: 1200px) {
                        .projects-gallery-grid {
                          grid-template-columns: repeat(3, 1fr);
                        }
                      }

                      @media (max-width: 768px) {
                        .projects-gallery-grid {
                          grid-template-columns: repeat(2, 1fr);
                          gap: 10px;
                        }

                        .projects-gallery-section h2 {
                          font-size: 30px;
                        }

                        .projects-filter-bar {
                          border-radius: 20px;
                          width: 95%;
                        }

                        .projects-filter-btn {
                          padding: 8px 15px;
                          font-size: 11px;
                        }
                      }
                    </style>

                    <section class="projects-gallery-section">
                      <div class="auto-container">
                        <h2>Our Projects Gallery</h2>

                        <div class="projects-filter-bar">
                          <button class="projects-filter-btn active" onclick="pfilterGallery('all', this)">All</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('villas', this)">Villas</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('apartments', this)">Apartments</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('bedrooms', this)">Bedrooms</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('living-rooms', this)">Living Rooms</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('offices', this)">Offices</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('retail-shops', this)">Retail Shops</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('clinics', this)">Clinics</button>
                          <button class="projects-filter-btn" onclick="pfilterGallery('restaurants', this)">Restaurants</button>
                        </div>

                        <div class="projects-gallery-grid" id="projectsGalleryGrid">
                          <!-- Villas -->
                          <a href="images/our-project-gallery/villas/villas-1.webp" class="gallery-item" data-fancybox="projects" data-category="villas"><img src="images/our-project-gallery/villas/villas-1.webp" alt="Villa Project 1"></a>
                          <a href="images/our-project-gallery/villas/villas-2.webp" class="gallery-item" data-fancybox="projects" data-category="villas"><img src="images/our-project-gallery/villas/villas-2.webp" alt="Villa Project 2"></a>
                          <a href="images/our-project-gallery/villas/villas-3.webp" class="gallery-item" data-fancybox="projects" data-category="villas"><img src="images/our-project-gallery/villas/villas-3.webp" alt="Villa Project 3"></a>
                          <a href="images/our-project-gallery/villas/villas-4.webp" class="gallery-item" data-fancybox="projects" data-category="villas"><img src="images/our-project-gallery/villas/villas-4.webp" alt="Villa Project 4"></a>

                          <!-- Apartments -->
                          <a href="images/our-project-gallery/apartments/apartments-1.webp" class="gallery-item" data-fancybox="projects" data-category="apartments"><img src="images/our-project-gallery/apartments/apartments-1.webp" alt="Apartment Project 1"></a>
                          <a href="images/our-project-gallery/apartments/apartments-2.webp" class="gallery-item" data-fancybox="projects" data-category="apartments"><img src="images/our-project-gallery/apartments/apartments-2.webp" alt="Apartment Project 2"></a>
                          <a href="images/our-project-gallery/apartments/apartments-3.webp" class="gallery-item" data-fancybox="projects" data-category="apartments"><img src="images/our-project-gallery/apartments/apartments-3.webp" alt="Apartment Project 3"></a>
                          <a href="images/our-project-gallery/apartments/apartments-4.webp" class="gallery-item" data-fancybox="projects" data-category="apartments"><img src="images/our-project-gallery/apartments/apartments-4.webp" alt="Apartment Project 4"></a>

                          <!-- Bedrooms -->
                          <a href="images/our-project-gallery/bedrooms/bedrooms-1.webp" class="gallery-item" data-fancybox="projects" data-category="bedrooms"><img src="images/our-project-gallery/bedrooms/bedrooms-1.webp" alt="Bedroom Project 1"></a>
                          <a href="images/our-project-gallery/bedrooms/bedrooms-2.webp" class="gallery-item" data-fancybox="projects" data-category="bedrooms"><img src="images/our-project-gallery/bedrooms/bedrooms-2.webp" alt="Bedroom Project 2"></a>
                          <a href="images/our-project-gallery/bedrooms/bedrooms-3.webp" class="gallery-item" data-fancybox="projects" data-category="bedrooms"><img src="images/our-project-gallery/bedrooms/bedrooms-3.webp" alt="Bedroom Project 3"></a>
                          <a href="images/our-project-gallery/bedrooms/bedrooms-4.webp" class="gallery-item" data-fancybox="projects" data-category="bedrooms"><img src="images/our-project-gallery/bedrooms/bedrooms-4.webp" alt="Bedroom Project 4"></a>

                          <!-- Living Rooms -->
                          <a href="images/our-project-gallery/living-rooms/living-rooms-1.webp" class="gallery-item" data-fancybox="projects" data-category="living-rooms"><img src="images/our-project-gallery/living-rooms/living-rooms-1.webp" alt="Living Room Project 1"></a>
                          <a href="images/our-project-gallery/living-rooms/living-rooms-2.webp" class="gallery-item" data-fancybox="projects" data-category="living-rooms"><img src="images/our-project-gallery/living-rooms/living-rooms-2.webp" alt="Living Room Project 2"></a>
                          <a href="images/our-project-gallery/living-rooms/living-rooms-3.webp" class="gallery-item" data-fancybox="projects" data-category="living-rooms"><img src="images/our-project-gallery/living-rooms/living-rooms-3.webp" alt="Living Room Project 3"></a>
                          <a href="images/our-project-gallery/living-rooms/living-rooms-4.webp" class="gallery-item" data-fancybox="projects" data-category="living-rooms"><img src="images/our-project-gallery/living-rooms/living-rooms-4.webp" alt="Living Room Project 4"></a>

                          <!-- Offices -->
                          <a href="images/our-project-gallery/offices/offices-1.webp" class="gallery-item" data-fancybox="projects" data-category="offices"><img src="images/our-project-gallery/offices/offices-1.webp" alt="Office Project 1"></a>
                          <a href="images/our-project-gallery/offices/offices-2.webp" class="gallery-item" data-fancybox="projects" data-category="offices"><img src="images/our-project-gallery/offices/offices-2.webp" alt="Office Project 2"></a>
                          <a href="images/our-project-gallery/offices/offices-3.webp" class="gallery-item" data-fancybox="projects" data-category="offices"><img src="images/our-project-gallery/offices/offices-3.webp" alt="Office Project 3"></a>
                          <a href="images/our-project-gallery/offices/offices-4.webp" class="gallery-item" data-fancybox="projects" data-category="offices"><img src="images/our-project-gallery/offices/offices-4.webp" alt="Office Project 4"></a>

                          <!-- Retail Shops -->
                          <a href="images/our-project-gallery/retail-shops/retail-shops-1.webp" class="gallery-item" data-fancybox="projects" data-category="retail-shops"><img src="images/our-project-gallery/retail-shops/retail-shops-1.webp" alt="Retail Shop Project 1"></a>
                          <a href="images/our-project-gallery/retail-shops/retail-shops-2.webp" class="gallery-item" data-fancybox="projects" data-category="retail-shops"><img src="images/our-project-gallery/retail-shops/retail-shops-2.webp" alt="Retail Shop Project 2"></a>
                          <a href="images/our-project-gallery/retail-shops/retail-shops-3.webp" class="gallery-item" data-fancybox="projects" data-category="retail-shops"><img src="images/our-project-gallery/retail-shops/retail-shops-3.webp" alt="Retail Shop Project 3"></a>
                          <a href="images/our-project-gallery/retail-shops/retail-shops-4.webp" class="gallery-item" data-fancybox="projects" data-category="retail-shops"><img src="images/our-project-gallery/retail-shops/retail-shops-4.webp" alt="Retail Shop Project 4"></a>

                          <!-- Clinics -->
                          <a href="images/our-project-gallery/clinics/clinics-1.webp" class="gallery-item" data-fancybox="projects" data-category="clinics"><img src="images/our-project-gallery/clinics/clinics-1.webp" alt="Clinic Project 1"></a>
                          <a href="images/our-project-gallery/clinics/clinics-2.webp" class="gallery-item" data-fancybox="projects" data-category="clinics"><img src="images/our-project-gallery/clinics/clinics-2.webp" alt="Clinic Project 2"></a>
                          <a href="images/our-project-gallery/clinics/clinics-3.webp" class="gallery-item" data-fancybox="projects" data-category="clinics"><img src="images/our-project-gallery/clinics/clinics-3.webp" alt="Clinic Project 3"></a>
                          <a href="images/our-project-gallery/clinics/clinics-4.webp" class="gallery-item" data-fancybox="projects" data-category="clinics"><img src="images/our-project-gallery/clinics/clinics-4.webp" alt="Clinic Project 4"></a>

                          <!-- Restaurants -->
                          <a href="images/our-project-gallery/restaurants/restaurants-1.webp" class="gallery-item" data-fancybox="projects" data-category="restaurants"><img src="images/our-project-gallery/restaurants/restaurants-1.webp" alt="Restaurant Project 1"></a>
                          <a href="images/our-project-gallery/restaurants/restaurants-2.webp" class="gallery-item" data-fancybox="projects" data-category="restaurants"><img src="images/our-project-gallery/restaurants/restaurants-2.webp" alt="Restaurant Project 2"></a>
                          <a href="images/our-project-gallery/restaurants/restaurants-3.webp" class="gallery-item" data-fancybox="projects" data-category="restaurants"><img src="images/our-project-gallery/restaurants/restaurants-3.webp" alt="Restaurant Project 3"></a>
                          <a href="images/our-project-gallery/restaurants/restaurants-4.webp" class="gallery-item" data-fancybox="projects" data-category="restaurants"><img src="images/our-project-gallery/restaurants/restaurants-4.webp" alt="Restaurant Project 4"></a>
                        </div>
                      </div>
                    </section>

                    <script>
                      function pfilterGallery(category, btn) {
                        const items = document.querySelectorAll('.gallery-item[data-category]');
                        const buttons = document.querySelectorAll('.projects-filter-btn');

                        // Update Active Button
                        buttons.forEach(b => b.classList.remove('active'));
                        btn.classList.add('active');

                        // Filter Items
                        items.forEach(item => {
                          if (category === 'all' || item.getAttribute('data-category') === category) {
                            item.style.display = 'block';
                          } else {
                            item.style.display = 'none';
                          }
                        });
                      }
                    </script>
                    <!-- Our PROJECTS Gallery End -->










                    <h3>Our Values</h3>

                    <div class="text">Carpet Shop Dubai offers a wide range of all the latest designs and all the traditional favorites in the home furniture. Specialists in high-quality home furnishing products, we are one store providing premium furnishing products at affordable prices for well over a decade. We mostly ensure that the stock is enough of the finest furniture available around the world. And also we make sure about the dealings directly with the manufacturers, cutting out any additional costs to the distributors or wholesalers so that we are allowing us to offer our products at reasonable costs.</div>

                    <div class="text">Either you want to revitalize your home with a brand new style or are simply looking for a new addition to the layout. Carpet Shop Dubai is the best in stocking a wide assortment of styles and designs of such assets. You can find all types of designs which may suit your tastes and preferences. We are independent and owned. We offer a range of finance options and a home delivery service.</div>

                    <div class="text">All the products imported by us must tick four boxes. Those are regarding durability, comfort, function, and design. So when you choose a carpet from us, you can kick back and relax knowing that you have invested in a beautiful carpet, so that it will be gathering compliments from visitors for the long run.</div>

                    <div class="text">All payments are done either before the date of delivery or when it is comfortable. we can normally organize the delivery within three days of the order date. Any item that is damaged in freight will be replaced or a mutual agreement will be determined.</div><br>

                    <h3 style="color:#000000">Payment options: </h3>
                    <ul>
                      <li style="color:#000000"> • Bank deposit directly into our account</li>
                      <li style="color:#000000"> • Online transfer available</li>
                      <li style="color:#000000"> • Cash in store</li>
                      <li style="color:#000000"> • Cash on delivery</li>
                    </ul>

                    <h3 style="color:#000000">Our History</h3>
                    <div class="text">We are in the home furnishing and carpet business for a long time. Our happy customers are the reason for the success. We work with people, the clients, at Carpet Shop Dubai. Our products are original and we always connect with our customers with esteem uprightness, genuineness, receptiveness, individual brilliance, and persistent services. It is our history that the company focused on its customers, business accomplices, and sellers. We are passionate about our business and products. Carpet Shop Dubai respects its duties offers great quality products at affordable cost with lucrative discounts. </div>
                    <h3 style="color:#000000">Our Mission</h3>

                    <div class="text">The company’s mission and vision statement say that the central goal is thusly, to guarantee the quality product has the instruments, innovation, and staff to finish those objectives. The company does this by working with professional people. We adopt new advanced techniques every day to enable it to direct business with the customers. Innovation is a more conventional strategy and our mission is to provide world-class products to every customer. </div>


                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <div class="sidebar-page-container" style="margin-top: 0; padding-top: 0;">
      <div class="auto-container">
        <div class="row clearfix">
          <!--Content Side-->
          <div class="content-side pull-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--Shop Page-->
            <section class="shop-page">
              <div class="product-details">
                <div class="sec-title">
                  <h2>Our <span class="theme_color">Collection</span></h2>
                </div>

                <!--Basic Details-->
                <div class="basic-details">
                  <div class="row clearfix">
                    <div class="image-column col-md-4 col-sm-4 col-xs-12">
                      <div class="carousel-outer">
                        <a href="images/gallery/About.jpg" class="lightbox-image" title="Animal Skin Rugs Dubai">
                          <img src="images/gallery/About.jpg" alt="Animal Skin Rugs in Dubai">
                        </a>
                      </div>
                    </div>

                    <div class="image-column col-md-4 col-sm-4 col-xs-12">
                      <div class="carousel-outer">
                        <a href="images/gallery/About.jpeg1" class="lightbox-image" title="Animal Skin Rugs Dubai">
                          <img src="images/gallery/About.jpeg1" alt="Customized Animal Skin Rugs Dubai">
                        </a>
                      </div>
                    </div>

                    <div class="image-column col-md-4 col-sm-4 col-xs-12">
                      <div class="carousel-outer">
                        <a href="images/gallery/About.jpeg2" class="lightbox-image" title="Animal Skin Rugs Dubai">
                          <img src="images/gallery/About.jpeg2" alt="Animal Skin Rugs Installation Dubai">
                        </a>
                      </div>
                    </div>

                    <div class="image-column col-md-4 col-sm-4 col-xs-12">
                      <div class="carousel-outer">
                        <a href="images/gallery/About.jpeg3" class="lightbox-image" title="Animal Skin Rugs Dubai">
                          <img src="images/gallery/About.jpeg3" alt="Animal Skin Rugs Shop Dubai">
                        </a>
                      </div>
                    </div>

                    <div class="image-column col-md-4 col-sm-4 col-xs-12">
                      <div class="carousel-outer">
                        <a href="images/gallery/About.jpeg4" class="lightbox-image" title="Animal Skin Rugs Dubai">
                          <img src="images/gallery/About.jpeg4" alt="Animal Skin Rugs Supplier Dubai">
                        </a>
                      </div>
                    </div>

                    <div class="image-column col-md-4 col-sm-4 col-xs-12">
                      <div class="carousel-outer">
                        <a href="images/gallery/About.jpeg5" class="lightbox-image" title="Animal Skin Rugs Dubai">
                          <img src="images/gallery/About.jpeg5" alt="Animal Skin Rugs Dubai">
                        </a>
                      </div>
                    </div>
                  </div> <!-- /.row -->
                </div> <!-- /.basic-details -->
              </div> <!-- /.product-details -->
            </section>
          </div>
        </div>
      </div>
    </div>

    <!--Counter Section-->

    <!--
    <section class="team-section">
    	<div class="auto-container">
        	<div class="sec-title medium clearfix">
            	<div class="pull-left">
                	<h2>Our Team</h2>
                    <div class="text">Our talented team is ready to provide yo the best quality service</div>
                </div>
                <div class="pull-right">
                	<a href="#" class="view-member">View All member</a>
                </div>
            </div>
            <div class="team-carousel owl-carousel owl-theme">
            
            	<div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-1.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Rashed Ka.</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
               <div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-2.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Jannatul Fa.</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
              <div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-3.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Jhone Doe</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
              <div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-4.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Crish Jami</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
               <div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-1.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Rashed Ka.</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
               <div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-2.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Jannatul Fa.</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
               <div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-3.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Jhone Doe</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
               <div class="team-member">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/team-4.jpg" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                        	<h3>Crish Jami</h3>
                            <div class="designation">Senior Interiro Designer</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
   -->

    <!--
    <section class="testimonial-section grey-bg">
    	<div class="auto-container">
        	<div class="testimonial-title">
            	<h2>Client Testimonials</h2>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">
            	
                <div class="testimonial-style-two">
                	<div class="inner-box">
                    	<div class="text">The heights by great men reached & kept were not attained by sudden flight, but they while  companions slept, were tooiling upward in the night.</div>
                        <h3>Jhon Doe</h3>
                        <div class="designation">Senior UI/UX Designer</div>
                    </div>
                </div>
                
                <div class="testimonial-style-two">
                	<div class="inner-box">
                    	<div class="text">The heights by great men reached & kept were not attained by sudden flight, but they while  companions slept, were tooiling upward in the night.</div>
                        <h3>Jhon Doe</h3>
                        <div class="designation">Senior UI/UX Designer</div>
                    </div>
                </div>
                
                <div class="testimonial-style-two">
                	<div class="inner-box">
                    	<div class="text">The heights by great men reached & kept were not attained by sudden flight, but they while  companions slept, were tooiling upward in the night.</div>
                        <h3>Jhon Doe</h3>
                        <div class="designation">Senior UI/UX Designer</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
	
    <section class="client-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<h2>Our Partners</h2>
            </div>
            
            <div class="sponsors-outer">
               
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    -->

    <!-- Fancybox & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!--Main Footer-->
    <?php include('include/footer.php'); ?>