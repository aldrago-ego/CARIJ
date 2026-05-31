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
          <!-- Logo mis à jour avec l'image officielle du CARIJ -->
          <div class="brand-logo-img">
            <img src="images/logo_carij.jpeg" alt="Logo CARIJ" style="height: 50px; width: auto; vertical-align: middle; margin-right: 10px;" />
          </div>
          <div class="brand-text">
            <div class="brand-logo">CARIJ</div>
            <div class="brand-tagline">Comité d’Appui aux Réformes<br/>Institutionnelles et Juridictionnelles</div>
          </div>
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
            <!-- Nouveau texte principal -->
            <h1>Carij accompagne vos structures, vos organisations dans leurs réformes institutionnelles et juridictionnelles</h1>
            <div class="separator-gold"></div>
            <!-- Petit texte du bas retiré conformément à ta demande -->
            <div class="cta-row">
              <a href="#mission" class="btn btn-primary">Notre Mission</a>
            </div>
          </div>
        </div>
      </section>

      <!-- About / Mission (L'Association) -->
      <section id="mission" class="section about-section bg-parchment">
        <div class="container">
          <div class="about-grid">
            <div class="about-text">
              <span class="badge">Qui sommes-nous</span>
              <h2>Comité d'Appui aux Réformes Institutionnelles et Juridictionnelles</h2>
              <div class="separator-gold-left"></div>
              
              <!-- Remplacement par les deux paragraphes réels de tes fiches -->
              <p>Le <strong>CARIJ</strong> est une organisation non gouvernementale de développement conformément au N° 854/MPD/2016 du 22 Août 2016. Le CARIJ a conclu un accord-programme avec le gouvernement de la République Togolaise conformément au N° 812/MPD/2018 du 31 Août 2018.</p>
              
              <p>Nous nous appuyons sur une équipe pluridisciplinaire de juristes, de sociologues, d'anthropologues, d'économistes, de gestionnaires et de cartographes sous la supervision de l'administrateur de CARIJ qui totalise plus de trente années d'expérience.</p>
              
              <ul class="mission-list mt-4">
                <li><span class="icon">🏛️</span> <strong>Accompagner:</strong> les structures, les organisations et les institutions.</li>
                <li><span class="icon">⚖️</span> <strong>Structurer:</strong> les réformes institutionnelles, organisationnelles et juridictionnelles.</li>
                <li><span class="icon">🌍</span> <strong>Prendre en compte:</strong> les exigences de l'évolution de la société.</li>
              </ul>
            </div>
            <div class="about-image">
              <img src="images/papa.jpeg" alt="Professionnels du droit en réunion" />
              <div class="img-border"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Domaines d'intervention (Remplacé par : Les différents organismes de CARIJ) -->
      <section id="domaines" class="section domains-section">
        <div class="container">
          <div class="section-header text-center">
            <span class="badge">Structure & Champs d'Action</span>
            <h2>Les différents organismes de CARIJ</h2>
            <div class="separator-gold mx-auto"></div>
            <p class="section-desc">Quatre pôles majeurs concourent à la réalisation des missions et des interventions du CARIJ.</p>
          </div>
          
          <div class="domains-grid">
            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">🎓</span>
                <h3>Renforcement des Capacités</h3>
              </div>
              <div class="card-body">
                <p>Gestion des droits catégoriels, égalité de genre et développement, ainsi que le déploiement des techniques de plaidoyer et de mobilisation sociale.</p>
              </div>
            </div>
            
            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">📊</span>
                <h3>Études et Projets</h3>
              </div>
              <div class="card-body">
                <p>Analyses approfondies, conceptions méthodologiques, élaboration complète et suivi rigoureux de la mise en œuvre des projets de l'organisation.</p>
              </div>
            </div>
            
            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">⚖️</span>
                <h3>Assistance et Conseils Juridiques</h3>
              </div>
              <div class="card-body">
                <p>Interventions directes et avis d'experts axés sur le Droit et la Justice pour orienter et sécuriser les réformes structurelles.</p>
              </div>
            </div>

            <div class="domain-card-legal">
              <div class="card-header">
                <span class="icon-legal">🤝</span>
                <h3>Suivi et Réinsertion</h3>
              </div>
              <div class="card-body">
                <p>Accompagnement socio-économique global des ex-détenus, suivi sur le terrain et actions d'appui pour favoriser la réinsertion sociale.</p>
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
             <a href="#domaines">Organismes</a>
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