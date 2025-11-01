<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nouvelle candidature reçue - Université TIME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        /* Styles généraux (conserver au maximum en inline si client mail stricte) */
        body {
            margin: 0;
            padding: 0;
            background: #f4f6fb;
            font-family: Arial, Helvetica, sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            padding: 20px 0;
        }

        .container {
            background: #ffffff;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid #e6eef9;
        }

        .banner {
            display: block;
            width: 100%;
            height: auto;
        }

        .title-bar {
            background: #0f4fa3;
            color: #ffffff;
            padding: 16px 20px;
        }

            .title-bar h1 {
                margin: 0;
                font-size: 20px;
                font-weight: 600;
            }

        .content {
            padding: 18px 20px;
            color: #333333;
            font-size: 15px;
            line-height: 1.5;
        }

        .section-title {
            color: #0f4fa3;
            font-size: 16px;
            margin: 12px 0 8px;
            font-weight: 600;
        }

        .field {
            margin: 6px 0;
        }

            .field .label {
                color: #0b57b7;
                font-weight: 700;
                display: inline-block;
                width: 140px;
                vertical-align: top;
            }

        .small {
            font-size: 13px;
            color: #6b7b8f;
        }

        .doc-list {
            margin: 8px 0 0 0;
            padding-left: 18px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #ff9b3c;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 700;
            margin-top: 12px;
        }

        .footer {
            background: #eef5ff;
            color: #7b8aa3;
            font-size: 13px;
            text-align: center;
            padding: 14px 18px;
        }

        .meta {
            font-size: 13px;
            color: #6b7b8f;
            margin-top: 8px;
        }

        @media only screen and (max-width:480px) {
            .field .label {
                display: block;
                width: 100%;
                margin-bottom: 4px;
            }

            .btn {
                width: 100%;
                text-align: center;
                display: block;
            }
        }
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="container" width="600" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;max-width:600px;">
            <!-- BANNIERE (HEADER) -->
            <tr>
                <td style="padding:0;">
                    <img src="https://www.ecoles.com.tn/sites/default/files/universite/images/time-couv.jpg"
                         alt="Bannière Université TIME" class="banner" style="display:block;border:0;outline:none;text-decoration:none;">
                </td>
            </tr>

            <!-- TITRE -->
            <tr>
                <td class="title-bar" style="background:#0f4fa3;color:#fff;padding:7px 20px;">
                    <h1 style="margin:0;font-size:20px;">Nouvelle candidature reçue</h1>
                </td>
            </tr>

            <!-- CONTENU -->
            <tr>
                <td class="content" style="padding:18px 20px;color:#333;font-size:15px;line-height:1.5;">
                    <p style="margin:0 0 10px 0;" class="small">Bonjour !</p>

                    <p style="margin:0 0 14px 0;">
                        Une nouvelle candidature a été soumise. Vous trouverez ci-dessous les informations principales du candidat pour examen.
                    </p>

                    <!-- Informations personnelles -->
                    <div>
                        <div class="section-title" style="color:#0f4fa3;font-weight:600;margin-top:6px;">Informations personnelles</div>

                        <div class="field"><span class="label" style="color:#0b57b7;font-weight:700;width:140px;display:inline-block;">Prénom :</span> <span>{{ $firstName }}</span></div>
                        <div class="field"><span class="label">Nom :</span> <span>{{ $lastName }}</span></div>
                        <div class="field"><span class="label">Email :</span> <span><a href="mailto:{{ $email }}" style="color:#0f4fa3;text-decoration:none;">{{ $email }}</a></span></div>
                        <div class="field"><span class="label">Téléphone :</span> <span>{{ $phone ?? 'Non renseigné' }}</span></div>
                        <div class="field"><span class="label">Date de naissance :</span> <span>{{ $dateOfBirth ?? 'Non renseignée' }}</span></div>
                        <div class="field"><span class="label">Lieu de naissance :</span> <span>{{ $placeOfBirth ?? 'Non renseigné' }}</span></div>
                        <div class="field"><span class="label">Nationalité :</span> <span>{{ $nationality ?? 'Non renseignée' }}</span></div>
                        <div class="field"><span class="label">Adresse :</span> <span>{{ $address ?? 'Non renseignée' }}</span></div>
                        <div class="field"><span class="label">Ville :</span> <span>{{ $city ?? 'Non renseignée' }}</span></div>
                        <div class="field"><span class="label">Code postal :</span> <span>{{ $postalCode ?? 'Non renseigné' }}</span></div>
                    </div>

                    <!-- Programme -->
                    <div style="margin-top:12px;">
                        <div class="section-title">Programme choisi</div>
                        <div class="field"><span class="label">Cycle :</span> <span>{{ $cycle }}</span></div>
                        <div class="field"><span class="label">Formation :</span> <span>{{ $program }}</span></div>
                        <div class="field"><span class="label">Niveau :</span> <span>{{ $level }}</span></div>
                        <div class="field"><span class="label">Justification :</span> <span>{{ $justification ?? 'Non fournie' }}</span></div>
                    </div>

                    <!-- Documents -->
                    <div style="margin-top:12px;">
                        <div class="section-title">Documents joints</div>
                        <p style="margin:6px 0 6px 0;">Les documents envoyés par le candidat sont disponibles ci-dessous (si fournis) :</p>
                        <ul class="doc-list" style="margin:6px 0 12px 18px;padding:0;color:#333;">
                            <!-- Utiliser la logique côté serveur pour afficher les liens réels si présents -->
                                                                <li>
                                        Diplôme :
                                        @if($documents['diplome'])
                                            <span style="color:green;">Fourni</span>
                                        @else
                                            <span>Non fourni</span>
                                        @endif
                                    </li>
                                    <li>
                                        Pièce d'identité :
                                        @if($documents['pieceIdentite'])
                                            <span style="color:green;">Fourni</span>
                                        @else
                                            <span>Non fournie</span>
                                        @endif
                                    </li>
                                    <li>
                                        Photo d'identité :
                                        @if($documents['photoIdentite'])
                                            <span style="color:green;">Fourni</span>
                                        @else
                                            <span>Non fournie</span>
                                        @endif
                                    </li>
                                    <li>
                                        Relevé de notes :
                                        @if($documents['releverNotes'])
                                            <span style="color:green;">Fourni</span>
                                        @else
                                            <span>Non fourni</span>
                                        @endif
                                    </li>

                        </ul>

                      

                        <p class="meta" style="margin-top:12px;color:#6b7b8f;">
                            Reçu le : <strong>{{ $submittedAt ?? now() }}</strong>
                        </p>
                    </div>
                </td>
            </tr>

            <!-- FOOTER -->
            <tr>
                <td class="footer" style="background:#eef5ff;color:#7b8aa3;padding:14px 18px;text-align:center;font-size:13px;">
                    Université TIME – 45, Avenue Mohamed V, 1002 Montplaisir Tunis – Tunisie<br>
                    Tél. (+216) 71 95 11 94 • Email : <a href="mailto:admissions@time.ens.tn" style="color:#0f4fa3;text-decoration:none;">admissions@time.ens.tn</a><br>
                    © {{ date('Y') }} Université TIME - Tous droits réservés
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
