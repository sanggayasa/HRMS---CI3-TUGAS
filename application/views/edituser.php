<div class="card shadow mb-4 p-3 m-3">
    <form action="<?= base_url("home/prosesEdit"); ?>" method="post">
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">userid</label>
            <div class="col-sm-10">
                <input name="id" type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $querydetail->id; ?>" readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input name="name" type="text" class=" form-control-plaintext" id="staticEmail" value="<?= $querydetail->name; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input name="username" type="text" class=" form-control-plaintext" id="staticEmail" value="<?= $querydetail->username; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputPassword" value="<?= $querydetail->password; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <input name="role" type="text" class="form-control" id="inputPassword">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">departemen</label>
            <div class="col-sm-10">
                <input name="departemen" type="text" class=" form-control-plaintext" id="staticEmail" value="<?= $querydetail->departemen; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">position</label>
            <div class="col-sm-10">
                <input name="position" type="text" class=" form-control-plaintext" id="staticEmail" value="<?= $querydetail->position; ?>">
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</div>