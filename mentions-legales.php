<?php
// URL du Google Doc publié
$doc_url = 'https://docs.google.com/document/d/1GcCVD_aSj2usoGeawQH_y7Rh_DMF1U-cf6KCf-nMWvM/preview';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mentions légales</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
      line-height: 1.6;
      background: #f9f9f9;
      color: #222;
    }

    h1 {
      text-align: center;
      color: #0A192F;
      margin-bottom: 30px;
    }

    iframe {
      width: 100%;
      height: 80vh;
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
      body {
        margin: 20px auto;
      }

      iframe {
        height: 60vh;
      }
    }
  </style>
</head>
<body>
  <h1>Mentions légales</h1>
  <iframe src="<?php echo $doc_url; ?>"></iframe>
</body>
</html>
