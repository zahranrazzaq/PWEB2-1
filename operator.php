<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 1</title>
</head>
<body>
    <h2>kalkulator</h2>
    <form action="">
        <label for="">angka 1:</label>
       <input type="number" name="angka">
       <br>
       <label for="">angka 2:</label>
       <input type="number" name="angka2">
       <select name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
       </select>
       <br>
       <button type="submit" name="hitung"> Hitung</button>
    </form>
    <?php
        $_a = 10;
        $_b = 5;
        $_c = $_a + $_b;
    ?>
    
</body>
</html>