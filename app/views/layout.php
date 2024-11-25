<!DOCTYPE html>
<html>
<head>
    <title>To-Do List App</title>
</head>
<body>
    <h1>To-Do List</h1>

    <form method="post">
        <input type="text" name="task" placeholder="Tambah tugas baru" required>
        <button type="submit" name="add">Tambah</button>
    </form>

    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                    <button type="submit" name="toggle">
                        <?= $todo['completed'] ? '✓' : '○' ?>
                    </button>
                    <?= $todo['task'] ?>
                    <button type="submit" name="delete">Hapus</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>