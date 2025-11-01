<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<style>
  body { font-family: Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 0; }
  .header { background: linear-gradient(90deg, #003366, #0055a5); padding: 20px; text-align: center; color: white; }
  .header img { max-height: 60px; }
  .content { background: white; margin: 20px auto; padding: 20px; border-radius: 8px; max-width: 600px; }
  h2 { color: #003366; }
  .highlight { color: #ff6600; font-weight: bold; }
  .footer { text-align: center; font-size: 12px; color: #777; margin-top: 20px; }
</style>
</head>
<body>
  <div class="header">
    <img src="https://ton-site.com/logo.png" alt="Université TIME">
    <h1>Confirmation de votre candidature</h1>
  </div>
  <div class="content">
    <h2>Bonjour {{ $firstName }},</h2>
    <p>Nous avons bien reçu votre candidature pour le programme <strong>{{ $program }}</strong> à l'Université TIME.</p>
    <p>Notre équipe d’admission va étudier votre dossier et vous recontactera prochainement.</p>
    <p class="highlight">Merci pour votre confiance et bienvenue dans la communauté TIME !</p>
  </div>
  <div class="footer">
    © {{ date('Y') }} Université TIME - Tous droits réservés
  </div>
</body>
</html>
