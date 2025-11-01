<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de visite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        /* Reset léger */
        body {
            margin: 0;
            padding: 0;
            background: #f4f6fb;
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        .container {
            max-width: 700px;
            margin: 28px auto;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        }
        /* Bannière */
        .banner {
            display: block;
            width: 100%;
            height: 160px;
            object-fit: cover;
            border: 0;
        }
        /* En-tête texte */
        .header {
            background: #0f4fa3;
            color: #fff;
            padding: 14px 20px;
            text-align: center;
        }

            .header h1 {
                margin: 0;
                font-size: 20px;
                font-weight: 700;
            }
        /* Contenu */
        .content {
            padding: 20px 22px;
            font-size: 15px;
            line-height: 1.6;
        }

        .label {
            display: inline-block;
            width: 150px;
            font-weight: 700;
            color: #0b57b7;
            vertical-align: top;
        }

        .field {
            margin: 8px 0;
        }

        .message-box {
            margin-top: 8px;
            padding: 14px;
            background: #f2f7ff;
            border-left: 4px solid #0f4fa3;
            border-radius: 6px;
            white-space: pre-line;
        }

        .meta {
            margin-top: 12px;
            color: #6b7b8f;
            font-size: 13px;
        }
        /* bouton action */
        .btn {
            display: inline-block;
            margin-top: 14px;
            padding: 10px 16px;
            background: #ff9b3c;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 700;
        }
        /* footer */
        .footer {
            background: #eef5ff;
            padding: 14px 18px;
            text-align: center;
            color: #7b8aa3;
            font-size: 13px;
        }
        /* responsive */
        @media (max-width:600px) {
            .container {
                margin: 14px;
                border-radius: 8px;
            }

            .label {
                display: block;
                width: 100%;
                margin-bottom: 6px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Bannière -->
        <img src="https://www.ecoles.com.tn/sites/default/files/universite/images/time-couv.jpg"
             alt="Bannière Université TIME" class="banner">

        <!-- Titre -->
        <div class="header">
            <h1>Nouvelle demande de visite</h1>
        </div>

        <!-- Contenu -->
        <div class="content">
            <p style="margin:0 0 12px 0;">Bonjour ,</p>

            <p style="margin:0 0 12px 0;">Une nouvelle demande de visite a été soumise. Ci-dessous les informations transmises par le visiteur :</p>

            <div class="field"><span class="label">Nom :</span> <span>{{ $firstName }} {{ $lastName }}</span></div>
            <div class="field"><span class="label">Email :</span> <span><a href="mailto:{{ $email }}" style="color:#0f4fa3;text-decoration:none;">{{ $email }}</a></span></div>
            <div class="field"><span class="label">Téléphone :</span> <span>{{ $phone ?? 'Non renseigné' }}</span></div>
            <div class="field"><span class="label">Date de visite :</span> <span>{{ \Carbon\Carbon::parse($visitDate)->format('d/m/Y') }}</span></div>
            <div class="field"><span class="label">Créneau horaire :</span> <span>{{ $timeSlot ?? 'Non précisé' }}</span></div>

            <div style="margin-top:12px;">
                <div class="label" style="width:auto; display:block; margin-bottom:6px; font-weight:700; color:#0b57b7;">Message :</div>
                <div class="message-box">
                    {{ $user_message }}
                </div>
            </div>

            <p class="meta">Reçu le : <strong>{{ $submittedAt ?? now() }}</strong></p>

       
        </div>

        <!-- Footer -->
        <div class="footer">
            Université TIME – 45, Avenue Mohamed V, 1002 Montplaisir Tunis – Tunisie<br>
            Tél. (+216) 71 95 11 94 • Email : <a href="mailto:admissions@time.ens.tn" style="color:#0f4fa3;text-decoration:none;">admissions@time.ens.tn</a><br>
            © {{ date('Y') }} Université TIME - Tous droits réservés
        </div>
    </div>
</body>
</html>
