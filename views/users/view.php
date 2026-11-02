<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <table class="table table-hover table-striped">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= $user->id ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?= htmlspecialchars($user->name) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($user->email) ?></td>
            </tr>
            <tr>
                <th>Password hash</th>
                <td><code><?= htmlspecialchars($user->password) ?></code></td>
            </tr>
            <tr>
                <th>Created</th>
                <td><?= $user->created_at ?></td>
            </tr>
            <tr>
                <th>Updated</th>
                <td><?= $user->updated_at ?></td>
            </tr>
        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
