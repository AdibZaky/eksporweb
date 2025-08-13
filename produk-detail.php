<?php
$produk = [
  "large-red-chili" => [
    "nama" => "Large Red Chili",
    "gambar" => "assets/cabe-merah.jpg",
    "deskripsi" => "Perfect for sauces and food industries, medium heat, bright color.",
    "detail" => "This chili is ideal for food industries due to its vibrant red color and medium heat level. It’s commonly used in sauces, chili paste, and processed food ingredients."
  ],
  "red-birds-eye-chili" => [
    "nama" => "Red Bird's Eye Chili",
    "gambar" => "assets/cabe-rawit.jpg",
    "deskripsi" => "Extremely spicy, great for sambal and Southeast Asian cuisine.",
    "detail" => "This chili is very spicy and often used in Indonesian sambal. It is a popular export item for markets that enjoy strong flavors and heat, such as Thailand, Vietnam, and Sri Lanka."
  ],
  "large-green-chili" => [
    "nama" => "Large Green Chili",
    "gambar" => "assets/cabe-hijaubesar.jpg",
    "deskripsi" => "Mild and fresh taste, ideal for stir-fries and salads.",
    "detail" => "Known for its mild heat and fresh aroma, this green chili is commonly used in stir-fried dishes and fresh salad garnishes. It's also great for pickling and preserving."
  ],
  "curly-red-chili" => [
    "nama" => "Curly Red Chili",
    "gambar" => "assets/cabe-keriting.jpg",
    "deskripsi" => "Vibrant color and unique shape, excellent for fresh chili sauce.",
    "detail" => "With a curly texture and bright red hue, this variety is widely used in fresh sambal and sauces. Its shape and intense aroma make it a favorite in traditional dishes."
  ],
  "curly-green-chili" => [
    "nama" => "Curly Green Chili",
    "gambar" => "assets/cabe-kerihijau.jpg",
    "deskripsi" => "Colorful mix of red, green, orange – for premium export.",
    "detail" => "This chili often appears in multicolor (green, orange, red) form and is harvested young for freshness. It’s attractive for export to gourmet and premium markets."
  ],
  "javanese-chili" => [
    "nama" => "Javanese Chili",
    "gambar" => "assets/cabejawa.jpg",
    "deskripsi" => "Rare and exotic, attractive for niche export markets.",
    "detail" => "This variety is native to Java and appreciated for its unique appearance and heat profile. Its rarity makes it suitable for niche markets looking for exotic spices."
  ]
];

$slug = $_GET['produk'] ?? '';
//echo "Slug yang diminta: $slug<br>";
$data = $produk[$slug] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $data ? $data['nama'] : "Product Not Found"; ?></title>
  <link rel="stylesheet" href="style.css">
  <style>
    .produk-detail {
      max-width: 700px;
      margin: 60px auto;
      padding: 30px;
      background: #fff7f1;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      text-align: center;
      font-family: 'Poppins', sans-serif;
    }
    .produk-detail img {
      width: 100%;
      max-width: 400px;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .produk-detail h1 {
      color: #d43f00;
    }
    .produk-detail p {
      font-size: 16px;
      color: #444;
    }
    .produk-detail a {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 20px;
      background: #d43f00;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    
  </style>
</head>
<body>
  <?php if ($data): ?>
    <div class="produk-detail">
      <h1><?php echo $data['nama']; ?></h1>
      <img src="<?php echo $data['gambar']; ?>" alt="<?php echo $data['nama']; ?>">
      <p><strong>Description:</strong> <?php echo $data['deskripsi']; ?></p>
      <p><strong>Detail:</strong> <?php echo $data['detail']; ?></p>
      <a href="index.php">← Back to Home</a>
    </div>
  <?php else: ?>
    <div class="produk-detail">
      <h2>Product Not Found</h2>
      <a href="index.php">← Back to Home</a>
    </div>
  <?php endif; ?>
</body>
</html>
