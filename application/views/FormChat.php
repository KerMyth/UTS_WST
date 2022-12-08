<!-- HTML FORMAT LAYOUT CRUD TABLE-->
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4><?php echo $title; ?></h4>
            </div>
            <div class="col">
                <!-- LINK FORM DIALOG TAMBAH DATA-->
                <button onclick="btnTambah()" class="btn btn-sm btn-primary float-end">+ Tambah</button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="Chatses" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Isi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>``
            </thead>
            <!-- SHOW TABLE -->
            <tbody id="LoadChates"></tbody>
        </table>
    </div>
</div>
<!-- HTML FORMAT LAYOUT CRUD TABLE-->





<!-- HTML MODAL FORM TAMBAH DATA -->
<div class="modal fade" id="TambahChat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="TambahNama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">isi</label>
                    <input type="text" class="form-control" name="TambahIsi" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="TambahStats" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" id="SimpanChat" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- HTML MODAL FORM TAMBAH DATA -->




<!-- HTML MODAL FORM EDIT DATA -->
<div class="modal fade" id="EditChat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="idEditChat">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="EditNama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">isi</label>
                    <input type="text" class="form-control" name="EditIsi" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="EditStatus" required>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" id="ButtonChat" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- HTML MODAL FORM EDIT DATA -->




<!-- HTML DELETE CONFIRM -->
<div class="modal fade" id="DeleteChat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <input type="hidden" name="idChatHapus">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="btn-delete" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- HTML DELETE CONFIRM -->

</body>

</html>