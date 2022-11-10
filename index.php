<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metin İşleme 2 - Kelime Değiştirme</title>
</head>

<body>
    <style>
        * {
            color: white !important;
            box-sizing: border-box;
        }

        body {
            background: #1D2D3B;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
        }

        input,
        button {
            padding: .5rem 1rem;
            border: 3px solid #33884C;
            border-radius: 2rem;
            font-size: 1.2rem;
            outline: none;
            margin: 0;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            width: 30rem;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
            padding: .5rem;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%;
            padding: .5rem;
        }

        input {
            background: #364A57;
            width: 100%;
        }

        button {
            background: #49626F;
            width: 100%;
            cursor: pointer;
        }

        a {
            position: fixed;
            bottom: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
    <div>
        <?php
        session_start();
        if (isset($_SESSION["metin"])) {
            if (isset($_GET["sil"])) {
                session_unset();
                header("location:https://mustafa/");
            }
            if (isset($_POST["kelime_degistir"])) {
                $_SESSION["metin"] = str_replace($_POST["degistirilecekkelime"], $_POST["degistirenkelime"], $_SESSION["metin"]);
                header("location:https://mustafa/");
            }
            echo "<h2>" . $_SESSION["metin"] . "</h2>";
        ?>
            <form action="" method="post">
                <div class="col-6">
                    <input type="text" placeholder="Değiştirilecek Kelime" name="degistirilecekkelime">
                </div>
                <div class="col-6">
                    <input type="text" placeholder="Değiştiren Kelime" name="degistirenkelime">
                </div>
                <div class="col-12">
                    <button type="submit" name="kelime_degistir">Değiştir</button>
                </div>
            </form>

            <a href="https://mustafa/?sil"><button class="sil">Metin Sil</button></a>

        <?php
        } else {
            if (isset($_POST["metin_tanimla"])) {
                $_SESSION["metin"] = $_POST["metin"];
                header("location:https://mustafa/");
            }
        ?>
            <form action="" method="post">
                <div class="col-12">
                    <input type="text" placeholder="Metin" name="metin">
                </div>
                <div class="col-12">
                    <button type="submit" name="metin_tanimla">Oluştur</button>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>
