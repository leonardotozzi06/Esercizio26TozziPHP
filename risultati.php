<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati del Sondaggio</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Risultati del Sondaggio</h1>

    <?php
    // Prendere i dati dal form e metterli nelle variabili
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $data_nascita = $_GET['data_nascita'];
    $orario_arrivo = $_GET['orario_arrivo'];
    $mezzo = $_GET['mezzo'];
    $corsi = isset($_GET['corsi']) ? $_GET['corsi'] : [];

    // Preparare la stringa per i corsi seguiti
    $corsi_selezionati = empty($corsi) ? "Nessuna attività" : implode(", ", $corsi);
    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di Nascita</th>
            <th>Orario di Arrivo</th>
            <th>Mezzo di Trasporto</th>
            <th>Corsi Pomeridiani</th>
        </tr>
        <tr>
            <td><?php echo htmlspecialchars($nome); ?></td>
            <td><?php echo htmlspecialchars($cognome); ?></td>
            <td><?php echo htmlspecialchars($data_nascita); ?></td>
            <td><?php echo htmlspecialchars($orario_arrivo); ?></td>
            <td><?php echo htmlspecialchars($mezzo); ?></td>
            <td><?php echo htmlspecialchars($corsi_selezionati); ?></td>
        </tr>
    </table>
</body>
</html>
