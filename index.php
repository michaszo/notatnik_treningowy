<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trenieng</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1 class="title">100 pompek</h1>
        <div class="trenings">
            <table class="table">
                <thead class="table__head">
                    <tr class="table__tr">
                        <th class="table__col">Dzień</th>
                        <th class="table__col">Data</th>
                        <th class="table__col" colspan="2">Liczba serii</th>
                        <th class="table__col" colspan="2">Wykonanie</th>
                    </tr>
                    <tr class="table__tr">
                        <th class="table__col"></th>
                        <th class="table__col"></th>
                        <th class="table__col">pompki</th>
                        <th class="table__col">brzuszki</th>
                        <th class="table__col">pompki</th>
                        <th class="table__col">brzuszki</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table__tr">
                        <th class="table__col table__col--body">1</th>
                        <td class="table__col table__col--body">19.04</td>
                        <td class="table__col table__col--body">5</td>
                        <td class="table__col table__col--body">5</td>
                        <td class="table__col table__col--body">Na kolanach 4 <br> Z kolanami na kanapie 1</td>
                        <td class="table__col table__col--body">Z kettelbellem 3 <br> 2 scyzoryki</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="add_trening add_trening--collapse">
            <h2 class="title add_trening__button">Dodaj nowy trening:</h2>
            <form class="form" action="add_trening.php" method="post">
                <label class="form__label">dzień: <input type="text" class="form__text" name="day"></label>
                <label class="form__label">liczba serii pompek: <input type="text" class="form__text" name="pushup_series"></label>
                <label class="form__label">liczba serii brzuszków: <input type="text" class="form__text" name="crunches_series"></label>
                <label class="form__label">wykonanie pompek: <input type="text" class="form__text" name="pushup_style"></label>
                <label class="form__label">wykonanie brzuszków: <input type="text" class="form__text" name="crunches_style"></label>
                <button  class="form__button" type="submit">dodaj trening</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>