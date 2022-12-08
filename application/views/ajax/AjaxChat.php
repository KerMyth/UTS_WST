<script>
    // MODAL FORM TAMBAH DATA 
    function btnTambah() {
        $('#TambahChat').modal('show');
    }
    // MODAL FORM TAMBAH DATA

    // LOAD GET DATA TABLE
    function loadChat() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo site_url('ControllerChat/get') ?>',
            async: false,
            dataType: 'json',
            success: function(data) {
                let output = "";
                let no = 1;
                data.forEach((x) => {
                    output = output +
                        '<tr>' +
                        '<td>' + no++ + '</td>' +
                        '<td>' + x.nama + '</td>' +
                        '<td>' + x.isi + '</td>' +
                        '<td>' + x.stats + '</td>' +
                        '<td><button type="button" onclick="btnEdit(' + x.id_chat + ')" class="btn btn-sm btn-outline-secondary" >Edit</button> <button type="button" onclick="deleteConfirm(' + x.id_chat + ')" class="btn btn-sm btn-outline-danger" >Delete</button></td>' +
                        '</tr>';
                });
                $('#LoadChates').html(output);
            }
        });
    }
    // LOAD GET DATA TABLE



    // FUNCTION ADD DATA
    $("#SimpanChat").on('click', function() {
        let nama = $('[name="TambahNama"]').val();
        let isi = $('[name="TambahIsi"]').val();
        let stats = $('[name="TambahStats"]').val();

        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('ControllerChat/tambah') ?>',
            data: {
                nama: nama,
                isi: isi,
                stats: stats
            },
            success: function() {
                $('[name="TambahNama"]').val('');
                $('[name="TambahIsi"]').val('');
                $('[name="TambahStats"]').val('');
                $('#TambahChat').modal('hide');
                loadChat();
            }
        });
    });
    // FUNCTION ADD DATA





    // GET DATA FORM EDIT
    function btnEdit(id) {
        $.ajax({
            type: 'GET',
            url: '<?php echo site_url('ControllerChat/get/') ?>' + id,
            dataType: 'json',
            success: function(data) {
                let output = '';
                $('[name="idEditChat"]').val(id);
                $('[name="EditNama"]').val(data.nama);
                $('[name="EditIsi"]').val(data.isi);
                $('[name="EditStatus"]').val(data.stats);
            }
        });
        $('#EditChat').modal('show');
    }
    // GET DATA FORM EDIT



    // FUNCTION UPDATE DATA
    $("#ButtonChat").on('click', function() {
        let id_chat = $('[name="idEditChat"]').val();
        let nama = $('[name="EditNama"]').val();
        let isi = $('[name="EditIsi"]').val();
        let stats = $('[name="EditStatus"]').val();

        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('ControllerChat/edit/') ?>' + id_chat,
            data: {
                nama: nama,
                isi: isi,
                stats: stats
            },
            success: function() {
                $('[name="idEditChat"]').val('');
                $('[name="EditNama"]').val('');
                $('[name="EditIsi"]').val('');
                $('[name="EditStatus"]').val();
                $('#EditChat').modal('hide');
                loadChat();
            }
        });
    });
    // FUNCTION UPDATE DATA




    // DELETE DIALOG KONFIRM
    function deleteConfirm(id) {
        $('[name="idChatHapus"]').val(id);
        $('#DeleteChat').modal('show');
    }
    // DELETE DIALOG KONFIRM


    // FUNCTION DELETE DATA
    $("#btn-delete").on('click', function() {
        let id_chat = $('[name="idChatHapus"]').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('ControllerChat/delete/') ?>' + id_chat,
            success: function() {
                $('[name="idChatHapus"]').val('');
                $('#DeleteChat').modal('hide');
                loadChat();
            }
        });
    });







    loadChat(); // AUTO LOAD FORM
    $('#Chatses').dataTable(); // GET LOAD DATABASE
</script>