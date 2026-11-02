<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/admin/users/edit?id=<?= $user->id ?>" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="<?= htmlspecialchars($user->name) ?>" name="name" type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="<?= htmlspecialchars($user->email) ?>" name="email" type="email" class="form-control" id="email" placeholder="example@cool.yolo">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input name="password" type="password" class="form-control" id="password">
            <div class="form-text">Leave empty to keep the current password. Required when changing name or email.</div>
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Confirm New Password</label>
            <input name="password_confirm" type="password" class="form-control" id="password_confirm">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
