<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $magdetails->issue_name?>-Global Radiance Review</title>
    
    
    
    <!-- Meta Description for SEO -->
    <meta name="description" content="View and read the latest digital magazine from Global Radiance Review, featuring top stories on industry insights, leadership trends, and innovative technologies.">

    <!-- Meta Keywords for SEO -->
    <meta name="keywords" content="Global Radiance Review, digital magazine, leadership trends, industry insights, technology, PDF viewer, online magazine, sustainability, business insights, innovation, executive magazine">

    <!-- Meta Author for SEO -->
    <meta name="author" content="Global Radiance Review">
    
    

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="<?php echo $magdetails->issue_name?> - Global Radiance Review">
    <meta property="og:description" content="Read the latest edition of Global Radiance Review magazine, featuring exclusive insights on sustainability, leadership, and innovation.">
    <meta property="og:image" content="https://globalradiancereview.com/public/assets/media/magazine_image/<?php echo $magdetails->magazine_image?>">
    <meta property="og:url" content="https://globalradiancereview.com/digital/<?php echo $magdetails->issue_year.'/'.$magdetails->issue_month.'/'.$magdetails->slug ?>">
    <meta property="og:type" content="website">
    


    <!-- Twitter Card Meta Tags for Social Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $magdetails->issue_name?> - Global Radiance Review">
    <meta name="twitter:description" content="Explore the latest industry insights and leadership trends with Global Radiance Review's digital magazine.">
    <meta name="twitter:image" content="https://globalradiancereview.com/public/assets/media/magazine_image/<?php echo $magdetails->magazine_image?>">



    <style>
        /* Ensure the body and html take full height */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        /* Center the iframe and make it responsive */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        /* Make iframe take the full width and height of its container */
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Display the PDF file in an iframe -->
    <?php 
        echo '<iframe src="http://flowpaper.com/flipbook/https://globalradiancereview.com/public/assets/media/pdf/'.$magdetails->digital_magazine.'" allowFullScreen></iframe>';
    ?>
</div>

</body>
</html>
