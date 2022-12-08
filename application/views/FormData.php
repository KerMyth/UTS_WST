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
        <table id="Datases" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Matkul</th>
                    <th>Mutu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <!-- SHOW TABLE -->
            <tbody id="LoadDateses"></tbody>
        </table>
    </div>
</div>
<!-- HTML FORMAT LAYOUT CRUD TABLE-->





<!-- HTML MODAL FORM TAMBAH DATA -->
<div class="modal fade" id="TambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <input type="text" class="form-control" name="TambahMatkul" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mutu</label>
                    <input type="text" class="form-control" name="TambahMutu" required>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" id="SimpanData" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- HTML MODAL FORM TAMBAH DATA -->




<!-- HTML MODAL FORM EDIT DATA -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="idDataEdit">
                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <input type="text" class="form-control" name="DataKuliahEdit">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mutu</label>
                    <input type="text" class="form-control" name="DataMutuEdit">
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" id="btn-update" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- HTML MODAL FORM EDIT DATA -->




<!-- HTML DELETE CONFIRM -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <input type="hidden" name="idDataHapus">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="btn-delete" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- HTML DELETE CONFIRM -->

</body>

</html>