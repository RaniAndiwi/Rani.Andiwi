<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mata Kuliah-Tambah</title>
</head>

<body>

    <form action="prosestambah.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>Kode</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
            <td>SKS</td>
            <td>
            <form action="prosestambah.php" method="post">
        <input type="radio" name="sks" value="1">1
        <input type="radio" name="sks" value="2">2
        <input type="radio" name="sks" value="3">3
        <br>
            </form>
            </td>
            </tr>
             
               <tr>
               <td>
                <td>
                    <input type="submit" value="Tambah">
                </td>
                </td>
                </tr>
            </tr>
        </table>

    </form>

</body>

</html>