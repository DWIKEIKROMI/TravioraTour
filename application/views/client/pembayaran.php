<br><br><br><br><br><br>
<br><br><br><br>

<form method="POST" action="<?php base_url(); ?>proses_bayar">
    <div class="mb-3 ml-5 mr-5">
        <label class="form-label">Nama</label> <br>

        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3 ml-5 mr-5">
        <div class="form-group">
            <label class="form-label">Gender</label><br>
            <select class="form-control" name="gender" required>
                <option value="P">Perempuan</option>
                <option value="L">Laki-Laki</option>
            </select>
        </div>
    </div>

    <div class="mb-3 ml-5 mr-5">
        <label class="form-label">Phone</label> <br>
        <input type="text" class="form-control" name="phone" required>
    </div>
    <div class="mb-3 ml-5 mr-5">
        <label class="form-label">Address</label> <br>
        <input type="text" class="form-control" name="address" required>
    </div>

    <div class="mb-3 ml-5 mr-5">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>