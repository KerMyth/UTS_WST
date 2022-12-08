<script>
    // MODAL FORM TAMBAH DATA 
    function btnTambah() {
        $('#modalTambah').modal('show');
    }
    // MODAL FORM TAMBAH DATA

    // LOAD GET DATA TABLE
    function loadData() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo site_url('users/get') ?>',
            async: false,
            dataType: 'json',
            success: function(data) {
                let output = "";
                let no = 1;
                data.forEach((x) => {
                    output = output +
                        '<tr>' +
                        '<td>' + no++ + '</td>' +
                        '<td>' + x.userName + '</td>' +
                        '<td>' + x.levelUser + '</td>' +
                        '<td><button type="button" onclick="btnEdit(' + x.idUser + ')" class="btn btn-sm btn-outline-secondary" >Edit</button> <button type="button" onclick="deleteConfirm(' + x.idUser + ')" class="btn btn-sm btn-outline-danger" >Delete</button></td>' +
                        '</tr>';
                });
                $('#loadUsers').html(output);
            }
        });
    }
    // LOAD GET DATA TABLE



    // FUNCTION ADD DATA
    $("#btn-insert").on('click', function() {
        let userName = $('[name="userNameTambah"]').val();
        let pass = $('[name="passTambah"]').val();
        let levelUser = $('[name="levelUserTambah"]').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('users/tambah') ?>',
            data: {
                userName: userName,
                pass: pass,
                levelUser: levelUser,
            },
            success: function() {
                $('[name="userNameTambah"]').val('');
                $('[name="passTambah"]').val('');
                $('[name="levelUserTambah"]').val('');
                $('#modalTambah').modal('hide');
                loadData();
            }
        });
    });
    // FUNCTION ADD DATA









    // GET DATA FORM EDIT
    function btnEdit(id) {
        $.ajax({
            type: 'GET',
            url: '<?php echo site_url('users/get/') ?>' + id,
            dataType: 'json',
            success: function(data) {
                let output = '';
                $('[name="idUserEdit"]').val(id);
                $('[name="userNameEdit"]').val(data.userName);
                if (data.levelUser == 'Admin') {
                    output = '<select class="form-select" name="levelUserEdit" required>' +
                        '<option value="Admin">Admin</option>' +
                        '<option value="Member">Member</option>' +
                        '</select>';
                } else {
                    output = '<select class="form-select" name="levelUserEdit" required><option value="Member">Member</option><option value="Admin">Admin</option></select>';
                }
                $('#selectLevel').html(output)
            }
        });
        $('#modalEdit').modal('show');
    }
    // GET DATA FORM EDIT



    // FUNCTION UPDATE DATA
    $("#btn-update").on('click', function() {
        let idUser = $('[name="idUserEdit"]').val();
        let levelUser = $('[name="levelUserEdit"]').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('users/edit/') ?>' + idUser,
            data: {
                levelUser: levelUser
            },
            success: function() {
                $('[name="idUserEdit"]').val('');
                $('[name="userNameEdit"]').val('');
                $('[name="levelUserEdit"]').val('');
                $('#modalEdit').modal('hide');
                loadData();
            }
        });
    });
    // FUNCTION UPDATE DATA




    // DELETE DIALOG KONFIRM
    function deleteConfirm(id) {
        $('[name="idUserHapus"]').val(id);
        $('#deleteModal').modal('show');
    }
    // DELETE DIALOG KONFIRM


    // FUNCTION DELETE DATA
    $("#btn-delete").on('click', function() {
        let idUser = $('[name="idUserHapus"]').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('users/delete/') ?>' + idUser,
            success: function() {
                $('[name="idUserHapus"]').val('');
                $('#deleteModal').modal('hide');
                loadData();
            }
        });
    });







    loadData(); // AUTO LOAD FORM
    $('#users').dataTable(); // GET LOAD DATABASE
</script>