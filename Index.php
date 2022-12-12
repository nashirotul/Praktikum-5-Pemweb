<form id="form_mahasiswa" method="POST">
    <label for="prodi">Prodi</label>
    <select name="prodi"id="prodi">
    <option value="">--Masukan Pilihan--</option>
    <option value="Teknik Informatika"> Teknik Informatika </option>
    <option value="Teknik Elektro"> Teknik Elektro </option>
    <option value="Teknologi Pangan"> Teknologi Pangan </option>
    <option value="Teknik Industri"> Teknik Industri </option>
    <option value="Teknik Biomedis"> Teknik Biomedis </option>
    <option value="Teknik Geofisika"> Teknik Geofisika </option>
    </select>
</form>
<br>
<div id="tampilan_data"></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
    $(document).ready(function () {
        $("#tampilan_data").load("tampilan.php");
            let data = $("#form_mahasiswa").serialize();
            $.ajax({
                type : "POST",
                url : "tampilan.php",
                data : data,
                success : function (response) {
                    $("#tampil_data").load("tampil.php");
                }
            });
         });
</script>