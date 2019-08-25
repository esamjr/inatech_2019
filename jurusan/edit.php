<form action="action.php" method="post">
    <table border="1">
    <?php
    include("../koneksi.php");
    $sql=mysql_query("
    SELECT * FROM `jurusan` WHERE `id` = '{$_GET['id']}';");
    while($row=mysql_fetch_array($sql)){
        echo("
        <tr>
            <td>Nama</td>
            <td>
                <input type='hidden' name='id' value='{$row['id']}'>
                <input type='text' name='nama' value='{$row['nama']}'>
            </td>
        </tr>
        ");
    }
    ?>
        <tr>
            <td>
                <input type="hidden" name="action" value="edit">
                <input type="submit" value=" Ubah ">
            </td>
            <td><input type="reset" value=" Batal "></td>
        <tr>
    </table>
</form>