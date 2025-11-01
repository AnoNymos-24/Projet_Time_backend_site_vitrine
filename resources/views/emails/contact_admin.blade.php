<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 30px auto;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* Bannière */
        .header {
            background: #004080;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        .header img {
            max-height: 60px;
            margin-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 20px;
        }

        /* Contenu */
        .content {
            padding: 25px;
        }

        .field {
            margin: 12px 0;
            padding: 10px;
            border-bottom: 1px solid #e6e6e6;
        }

        .label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 150px;
        }

        .message-box {
            margin-top: 15px;
            padding: 15px;
            background: #f2f7ff;
            border-left: 4px solid #004080;
            border-radius: 6px;
            white-space: pre-line;
        }

        /* Pied de page */
        .footer {
            background: #f2f2f2;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Bannière -->
        <div class="header">
            <img src="https://timeuniversity.tn/logo.png" alt="Université TIME Logo">
            <h1>Nouveau message de contact</h1>
        </div>

        <!-- Contenu -->
        <div class="content">
            <div class="field"><span class="label">Nom :</span> {{ $name }}</div>
            <div class="field"><span class="label">Email :</span> {{ $email }}</div>
            <div class="field"><span class="label">Sujet :</span> {{ $subject }}</div>

            <h2 style="color:#004080; margin-top:20px;">Message :</h2>
            <div class="message-box">
                {{ $user_message }}
            </div>
        </div>

        <!-- Pied de page -->
        <div class="footer">
            © {{ date('Y') }} Université TIME - Tous droits réservés
        </div>
    </div>
</body>
</html>
