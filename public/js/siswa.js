$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "api/siswa";

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".data-siswa").append(
                    `
                    <li>${
                        value.nama
                    } <button class="btn btn-danger btn-sm hapus-data" data-id="${
                        value.id
                    }">Hapus</button></li>
                    `
                );
            });
        }
    });

    // Simpan Data
    $(".tombol-simpan").click(function(simpan) {
        simpan.preventDefault();
        var variable_isian_nama = $("input[name=namasiswa]").val();
        // console.log(nama)
        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "json",
            data: {
                namasiswa: variable_isian_nama
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // Hapus Data
    $(".data-siswa").on("click", ".hapus-data", function() {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });
});
