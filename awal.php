<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PET SHOP</title>

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Re<span>PetShop</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#info">Tentang Kami</a>
        <a href="#products">Produk</a>
        <a href="index.php">Exit</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <section class="hero-section" id="home">
      <div class="hero-judul">
        <img src="image/imagelogo.jpeg" alt="" />
        <h1>Selamat Datang Di<br />Re PetShop<span></span></h1>
        <p>Menyediakan Berbagai Macam Kebutuhan Hewan Kesayangan Andaa</p>
        <div class="hero-button">
          <a href="#products">Product</a>
        </div>
      </div>
    </section>
    <section class="product" id="products">
      <div class="produk-isi">
        <div class="judul-product">
          <h4>PRODUCT</h4>
        </div>
        <div class="container">
          <div class="card">
            <img src="image/produk1.jpeg" alt="Produk 1" />
            <div class="card-content">
              <h2>Tempat Makan Hewan</h2>
              <p>Rp. 75.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>

          <div class="card">
            <img src="image/produk2.jpeg" alt="Produk 2" />
            <div class="card-content">
              <h2>Rumah Kucing Lucu</h2>
              <p>Rp. 300.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>

          <div class="card">
            <img src="image/produk3.jpeg" alt="Produk 3" />
            <div class="card-content">
              <h2>Tas Gendong Kucing</h2>
              <p>Rp. 180.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
          <div class="card">
            <img src="image/produk4.jpeg" alt="Produk 4" />
            <div class="card-content">
              <h2>Makan Kucing 1 Paket</h2>
              <p>Rp. 140.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
          <div class="card">
            <img src="image/produk5.jpeg" alt="Produk 5" />
            <div class="card-content">
              <h2>Maenan kucing bulu buluan</h2>
              <p>Rp. 30.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
          <div class="card">
            <img src="image/produk6.jpeg" alt="Produk 6" />
            <div class="card-content">
              <h2>Shampoo Kucing</h2>
              <p>Rp. 35.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="info" id="info">
      <div class="isi-info">
        <div class="judul-info">
          <h1>About</h1>
          <div class="contact-info">
            <h2>Contact : 085801146817</h2>
            <div class="lokasi-info">
              <h2>Location</h2>
              <div class="maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0134488329827!2d109.12990867448922!3d-6.888991893110044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9b624d32b3b%3A0x5b268c839410785c!2sJl.%20Wonosobo%20No.1a%2C%20Pekauman%20Kulon%2C%20Debong%20Tengah%2C%20Kec.%20Tegal%20Sel.%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah%2052132!5e0!3m2!1sid!2sid!4v1705171173837!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="container-footer">
      <div class="judul-footer">
        <h4>Terima Kasih Sudah Mengunjungi Web PetShop Kami</h4>
        <h5>Jangan Lupa Di Order</h5>
        <p>@created By Regina 22041088</p>
      </div>
    </footer>
    <script src="js/main.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
