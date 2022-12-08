<script>
    // MODAL FORM TAMBAH DATA 
    function btnTambah() {
        $('#TambahData').modal('show');
    }
    // MODAL FORM TAMBAH DATA

    // LOAD GET DATA TABLE
    function loadData() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo site_url('ControllerData/get') ?>',
            async: false,
            dataType: 'json',
            success: function(data) {
                let output = "";
                let no = 1;
                data.forEach((x) => {
                    output = output +
                        '<tr>' +
                        '<td>' + no++ + '</td>' +
                        '<td>' + x.matkul + '</td>' +
                        '<td>' + x.mutu + '</td>' +
                        '<td><button type="button" onclick="btnEdit(' + x.id_penilaian + ')" class="btn btn-sm btn-outline-secondary" >Edit</button> <button type="button" onclick="deleteConfirm(' + x.id_penilaian + ')" class="btn btn-sm btn-outline-danger" >Delete</button></td>' +
                        '</tr>';
                });
                $('#LoadDateses').html(output);
            }
        });
    }
    // LOAD GET DATA TABLE



    // FUNCTION ADD DATA
    $("#SimpanData").on('click', function() {
        let matkul = $('[name="TambahMatkul"]').val();
        let mutu = $('[name="TambahMutu"]').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('ControllerData/tambah') ?>',
            data: {
                matkul: matkul,
                mutu: mutu,
            },
            success: function() {
                $('[name="TambahMatkul"]').val('');
                $('[name="TambahMutu"]').val('');
                $('#TambahData').modal('hide');
                loadData();
            }
        });
    });
    // FUNCTION ADD DATA



    // GET DATA FORM EDIT
    function btnEdit(id) {
        $.ajax({
            type: 'GET',
            url: '<?php echo site_url('ControllerData/get/') ?>' + id,
            dataType: 'json',
            success: function(data) {
                let output = '';
                $('[name="idDataEdit"]').val(id);
                $('[name="DataKuliahEdit"]').val(data.matkul);
                $('[name="DataMutuEdit"]').val(data.mutu);
            }
        });
        $('#modalEdit').modal('show');
    }
    // GET DATA FORM EDIT



    // FUNCTION UPDATE DATA
    $("#btn-update").on('click', function() {
        let id_penilaian = $('[name="idDataEdit"]').val();
        let matkul = $('[name="DataKuliahEdit"]').val();
        let mutu = $('[name="DataMutuEdit"]').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('ControllerData/edit/') ?>' + id_penilaian,
            data: {
                matkul: matkul,
                mutu: mutu,
            },
            success: function() {
                $('[name="idDataEdit"]').val('');
                $('[name="DataKuliahEdit"]').val('');
                $('[name="DataMutuEdit"]').val('');
                $('#modalEdit').modal('hide');
                loadData();
            }
        });
    });
    // FUNCTION UPDATE DATA




    // DELETE DIALOG KONFIRM
    function deleteConfirm(id) {
        $('[name="idDataHapus"]').val(id);
        $('#DeleteModal').modal('show');
    }
    // DELETE DIALOG KONFIRM


    // FUNCTION DELETE DATA
    $("#btn-delete").on('click', function() {
        let id_penilaian = $('[name="idDataHapus"]').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('ControllerData/delete/') ?>' + id_penilaian,
            success: function() {
                $('[name="idDataHapus"]').val('');
                $('#DeleteModal').modal('hide');
                loadData();
            }
        });
    });







    loadData(); // AUTO LOAD FORM
    $('#Datases').dataTable(); // GET LOAD DATABASE
</script>