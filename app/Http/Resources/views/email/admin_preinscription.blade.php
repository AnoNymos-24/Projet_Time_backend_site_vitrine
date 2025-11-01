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
    <h1>Nouvelle candidature reçue</h1>
  </div>
  <div class="content">
    <h2>Détails du candidat</h2>
    <p><strong>Nom :</strong> {{ $lastName }} {{ $firstName }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Téléphone :</strong> {{ $phone }}</p>
    <p><strong>Programme :</strong> {{ $program }} ({{ $cycle }} - {{ $level }})</p>
    <p><strong>Justification :</strong> {{ $justification }}</p>
    <p class="highlight">Les documents sont joints à cet email.</p>
  </div>
  <div class="footer">
    © {{ date('Y') }} Université TIME - Tous droits réservés
  </div>
</body>
</html>
