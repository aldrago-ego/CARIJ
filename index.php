<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <title><?= $SITE_NAME ?></title>
    <meta name="description" content="Le CARIJ est un organe technique et stratégique qui accompagne l’État dans la modernisation de la justice et les réformes institutionnelles au Togo." />
    
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Top Bar Juridique -->
    <div class="top-bar">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="contact-infos-top">
          <span>Tél: <a href="tel:<?= str_replace(' ', '', $CONTACT_PHONE) ?>"><?= $CONTACT_PHONE ?></a></span>
          <span class="divider">|</span>
          <span>Email: <a href="mailto:<?= $CONTACT_EMAIL ?>"><?= $CONTACT_EMAIL ?></a></span>
        </div>
        <div class="top-links">
           <a href="#contact">Consultation & Appui</a>
        </div>
      </div>
    </div>

    <!-- Navbar -->
    <header class="nav" id="navbar">
      <div class="nav-inner">
        <a href="#accueil" class="brand">
          <div class="brand-logo">CARIJ</div>
          <div class="brand-tagline">Comité d’Appui aux Réformes<br/>Institutionnelles et Juridictionnelles</div>
        </a>

        <button id="menu-toggle" class="menu-toggle" aria-label="Ouvrir le menu">
          ☰
        </button>

        <nav id="nav-links" class="nav-links">
          <ul>
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#mission">L'Association</a></li>
            <li><a href="#domaines">Domaines d'Intervention</a></li>
            <li><a href="#realisations">Nos Réalisations</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <!-- Hero Section -->
      <section id="accueil" class="hero">
        <div class="hero-bg">
            <img src="images/hero_bg.png" alt="Justice et institution" />
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content container">
          <div class="hero-card">
            <h1>Pour la modernisation de la justice au Togo</h1>
            <div class="separator-gold"></div>
            <p class="hero-subtitle">
              Soutenir l'État, structurer les réformes et promouvoir les droits humains à travers l'expertise et la facilitation institutionnelle.
            </p>
            <div class="cta-row">
              <a href="#mission" class="btn btn-primary">Notre Mission</a>
            </div>
          </div>
        </div>
      </section>

      <!-- About / Mission -->
      <section id="mission" class="section about-section bg-parchment">
        <div class="container">
          <div class="about-grid">
            <div class="about-text">
              <span class="badge">Notre Rôle</span>
              <h2>Organe Technique et Facilitateur</h2>
              <div class="separator-gold-left"></div>
              <p>Basé à Lomé, le <strong>CARIJ</strong> est un organe d'appui gouvernemental et un Think tank actif dans les réformes du système judiciaire togolais.</p>
              <p>Notre mission n'est pas de légiférer ou de juger, mais de structurer l'avenir de la justice en proposant des politiques publiques basées sur des études minutieuses.</p>
              
              <ul class="mission-list mt-4">
                <li><span class="icon">🏛️</span> <strong>Améliorer</strong> le fonctionnement de la justice</li>
                <li><span class="icon">⚖️</span> <strong>Accompagner</strong> les réformes institutionnelles et juridictionnelles</li>
                <li><span class="icon">📜</span> <strong>Proposer</strong> des politiques publiques novatrices</li>
              </ul>
            </div>
            <div class="about-image">
              <img src="images/mission.png" alt="Professionnels du droit en réunion" />
              <div class="img-border"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Domaines d'intervention -->
      <section id="domaines" class="section domains-section">
        <div class="container">
          <div class="section-header text-center">
            <span class="badge">Domaines de compétence</span>
            <h2>Interventions & Appuis Techniques</h2>
            <div class="separator-gold mx-auto"></div>
            <p class="section-desc">Des actions transversales en faveur des droits humains et du droit institutionnel.</p>
          </div>
          
          <div class="domains-grid">
            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">⚖️</span>
                <h3>Système Judiciaire</h3>
              </div>
              <div class="card-body">
                <p>Apporter des solutions techniques pour pallier la lenteur de la justice et favoriser l'accessibilité aux droits pour l'ensemble des citoyens.</p>
              </div>
            </div>
            
            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">🏛️</span>
                <h3>Réformes de l'État</h3>
              </div>
              <div class="card-body">
                <p>Analyse et appui à la refonte des institutions étatiques pour garantir une administration juste, efficace et conforme aux conventions des droits.</p>
              </div>
            </div>
            
            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">🔒</span>
                <h3>Droit Pénitentiaire</h3>
              </div>
              <div class="card-body">
                <p>Lutte contre la surpopulation carcérale, accompagnement de la réinsertion sociale et études visant à faire reculer le taux de récidive.</p>
              </div>
            </div>
            
            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">📊</span>
                <h3>Politiques Publiques</h3>
              </div>
              <div class="card-body">
                <p>Consultations régulières, coordination d'ateliers multi-acteurs et publication d'études chiffrées stratégiques (ex: sur la récidive).</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Réalisations / Galerie -->
      <section id="realisations" class="section gallery-section bg-soft-gray">
        <div class="container">
          <div class="section-header text-center">
            <span class="badge">Notre Impact</span>
            <h2>Actions et Réalisations</h2>
            <div class="separator-gold mx-auto"></div>
            <p class="section-desc">Aperçu en images de nos ateliers, conférences, et consultations sur le terrain.</p>
          </div>
          
          <div class="gallery mt-5">
            <?php
              $dir = 'gallery/';
              // GLOB_BRACE n'est parfois pas supporté sur certains OS, fallback sécurisé :
              $images = [];
              if (is_dir($dir)) {
                  $extensions = ['jpg', 'jpeg', 'png', 'webp'];
                  foreach ($extensions as $ext) {
                      $found = glob($dir . '*.' . $ext);
                      if ($found) {
                          $images = array_merge($images, $found);
                      }
                      $found_upper = glob($dir . '*.' . strtoupper($ext));
                      if ($found_upper) {
                          $images = array_merge($images, $found_upper);
                      }
                  }
              }

              if (!empty($images)) {
                  $total = count($images);
                  foreach($images as $index => $img) {
                      $filename = pathinfo($img, PATHINFO_FILENAME);
                      $title = ucwords(str_replace(['-', '_'], ' ', $filename));
                      $display = ($index < 8) ? 'block' : 'none';
                      
                      echo '<div class="gallery-item-legal" data-index="'.$index.'" style="display:'.$display.'">';
                      echo '<div class="gallery-img-wrapper">';
                      echo '<img src="'.$img.'" alt="'.$title.'" loading="lazy">';
                      echo '</div>';
                      echo '<div class="gallery-caption"><h4>'.$title.'</h4></div>';
                      echo '</div>';
                  }
              } else {
                  echo '<p class="text-center w-100" style="font-family: Lora, serif; font-style: italic; color: #555;">Les images de nos réalisations seront bientôt mises à disposition.</p>';
              }
            ?>
          </div>
          <?php if (isset($total) && $total > 8): ?>
            <div class="text-center mt-5">
              <button id="load-more" class="btn btn-outline-dark">Afficher la suite</button>
            </div>
          <?php endif; ?>
        </div>
      </section>

      <!-- Contact -->
      <section id="contact" class="section contact-section">
        <div class="container">
          <div class="contact-wrapper">
            <div class="contact-info-legal bg-navy text-white">
              <h2>Joindre l'Association</h2>
              <div class="separator-gold-left"></div>
              <p class="mt-4">
                Le CARIJ se tient à la disposition des institutions, ONG et partenaires pour collaborer et fournir son expertise technique.
              </p>
              
              <ul class="contact-list mt-5">
                <li>
                  <span class="icon">📍</span>
                  <div>
                    <strong>Siège Social</strong>
                    <p><?= $ADDRESS ?></p>
                  </div>
                </li>
                <li>
                  <span class="icon">📞</span>
                  <div>
                    <strong>Secrétariat</strong>
                    <p><a href="tel:<?= str_replace(' ', '', $CONTACT_PHONE) ?>" class="text-white"><?= $CONTACT_PHONE ?></a></p>
                  </div>
                </li>
                <li>
                  <span class="icon">✉️</span>
                  <div>
                    <strong>Correspondance</strong>
                    <p><a href="mailto:<?= $CONTACT_EMAIL ?>" class="text-white"><?= $CONTACT_EMAIL ?></a></p>
                  </div>
                </li>
              </ul>
            </div>
            
            <div class="contact-form-legal">
              <h3>Formulaire de Demande</h3>
              <p class="mb-4 text-muted">Veuillez remplir ce formulaire pour toute demande d'assistance technique ou proposition de partenariat.</p>
              <form class="legal-form">
                <div class="form-row">
                  <div class="form-group">
                    <label>Nom complet</label>
                    <input type="text" placeholder="Entrez votre nom" required />
                  </div>
                  <div class="form-group">
                    <label>Institution / Organisation</label>
                    <input type="text" placeholder="Votre organisation" />
                  </div>
                </div>
                <div class="form-group">
                  <label>Email de contact</label>
                  <input type="email" placeholder="adresse@email.com" required />
                </div>
                <div class="form-group">
                  <label>Objet de votre demande</label>
                  <textarea placeholder="Décrivez le motif de votre sollicitation..." rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Transmettre le message</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer-legal">
      <div class="container">
        <div class="footer-top d-flex justify-content-between">
          <div class="footer-brand">
            <h2>CARIJ</h2>
            <p>Comité d’Appui aux Réformes Institutionnelles et Juridictionnelles</p>
          </div>
          <div class="footer-nav">
             <a href="#mission">À propos</a>
             <a href="#domaines">Domaines</a>
             <a href="#realisations">Réalisations</a>
             <a href="#contact">Contact</a>
          </div>
        </div>
        <div class="footer-bottom d-flex justify-content-between align-items-center">
          <p class="copyright">© <?= date('Y') ?> CARIJ. Tous droits réservés.</p>
          <div class="legal-links">
            <a href="mentions-legales.php" target="_blank">Mentions Légales</a>
            <span class="divider">|</span>
            <a href="cgv-cgu.php" target="_blank">CGU</a>
            <span class="divider">|</span>
            <a href="politique-confidentialite.php" target="_blank">Confidentialité</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bannière Cookies -->
    <div id="cookie-banner" class="cookie-banner-legal">
      <div class="container d-flex align-items-center justify-content-between alert-box">
          <p>
            Veuillez noter que l'association CARIJ utilise des cookies strictement à des fins d'amélioration de la navigation. <a href="politique-confidentialite.php" target="_blank">En savoir plus</a>
          </p>
          <div class="cookie-actions">
            <button id="accept-cookies" class="btn btn-primary btn-sm">J'accepte</button>
            <button id="reject-cookies" class="btn btn-outline-dark btn-sm">Je refuse</button>
          </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
