<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Confirmation de candidature - Université TIME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles généraux */
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f6fb;
            font-family: Arial, Helvetica, sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #f4f6fb;
            padding: 20px 0;
        }

        .main {
            background: #ffffff;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid #e6eef9;
        }

        .banner {
            display: block;
            width: 100%;
            height: auto;
        }

        .header-title {
            background-color: #0f4fa3; /* bleu foncé */
            color: #ffffff;
            padding: 6px 20px;
            text-align: left;
        }

            .header-title h1 {
                font-size: 19px;
                margin: 0;
                font-weight: 600;
            }

        .content {
            padding: 22px;
            color: #333333;
        }

            .content h2 {
                font-size: 17px;
                margin: 0 0 10px 0;
                color: #0f4fa3; /* bleu foncé */
            }

            .content p {
                font-size: 15px;
                line-height: 1.6;
                margin: 0 0 12px 0;
            }

        .highlight {
            display: inline-block;
            padding: 8px 12px;
            background-color: #ff9b3c; /* orange doux */
            color: #ffffff;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
        }

        .footer {
            padding: 14px 20px;
            text-align: center;
            font-size: 13px;
            color: #7b8aa3;
            background-color: #eef5ff; /* bleu très clair */
        }

        /* Responsive */
        @media only screen and (max-width: 480px) {
            .header-title h1 {
                font-size: 18px;
            }

            .content h2 {
                font-size: 16px;
            }

            .content p {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="main" width="600" cellpadding="0" cellspacing="0" role="presentation">
            <!-- Bannière (HEADER) -->
            <tr>
                <td style="padding:0; margin:0;">
                    <img src="https://www.ecoles.com.tn/sites/default/files/universite/images/time-couv.jpg"
                         alt="Bannière Université TIME" class="banner" style="display:block; border:0; outline:none; text-decoration:none;">
                </td>
            </tr>

            <!-- Titre principal (sous la bannière) -->
            <tr>
                <td class="header-title">
                    <h1>Confirmation de votre candidature</h1>
                </td>
            </tr>

            <!-- Contenu principal (ANCIEN TEXTE REMIS) -->
            <tr>
                <td class="content">
                    <h2>Bonjour {{ $firstName }},</h2>
                    <p>Nous avons bien reçu votre candidature pour le programme <strong>{{ $program }}</strong> à l'Université TIME.</p>
                    <p>Notre équipe d’admission va étudier votre dossier et vous recontactera prochainement.</p>

                    <p style="margin:0;">
                        Cordialement,<br>
                        L’équipe des Admissions<br>
                        Université TIME
                    </p>
                </td>
            </tr>

            <!-- Footer simple avec copyright -->
            <tr>
                <td style="background-color: #0f4fa3; color: #ffffff; padding: 10px 20px; text-align: center; font-size: 12px;">
                    Université TIME – École Supérieure Privée des Technologies de l’Information et d’Administration des Entreprises<br>
                    45, Avenue Mohamed V – 1002 Montplaisir Tunis – Tunisie<br>
                    Tél. (+216) 71 95 11 94 – Email : <a href="mailto:admissions@time.ens.tn" style="color:#ffffff; text-decoration:underline;">admissions@time.ens.tn</a><br>
                    © {{ date('Y') }} Université TIME – Tous droits réservés
                </td>
            </tr>

        </table>
    </center>
</body>
</html>
