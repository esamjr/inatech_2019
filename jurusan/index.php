<table border="1" cellspacing="0">
    <tr>
        <td>Jurusan</td>
        <td><a href="create.php">Create</a></td>
    </tr>

    <?php
        include("../koneksi.php");

    $sql=mysql_query("
        SELECT * FROM `jurusan`;");
    
    while($row=mysql_fetch_array($sql)): ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td>
                <a href='edit.php?id=<?= $row['id'] ?>'>Edit</a>
                |
                <form action="action.php" method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="submit" value="delete">
                </form>
            </td>
        </tr>

<?php endwhile; ?>
</table>