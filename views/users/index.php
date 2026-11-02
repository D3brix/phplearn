<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach (($users ?? []) as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= htmlspecialchars($user->name) ?></td>
                    <td><?= htmlspecialchars($user->email) ?></td>
                    <td><?= $user->created_at ?></td>
                    <td><?= $user->updated_at ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="/admin/users/view?id=<?= $user->id ?>" class="btn btn-info">View</a>
                            <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/users/delete?id=<?= $user->id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
