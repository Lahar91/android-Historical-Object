<div class="col-lg-12">
    <?= form_open_multipart('admin/kuis/saveedit/' . $db_kuis->id_kuis) ?>
    <div class="card card-primary">
        <div class="card-header">
            <h5 class="m-0">Soal</h5>
        </div>
        <div class="card-body">
            <div class="ckconten">
                <textarea cols="100" rows="50" id="editor1" name="soal"><?= $db_kuis->soal_kuis ?></textarea>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h5 class="m-0">Jawaban</h5>
        </div>
        <div class="card-body">


            <div class="col-md-6 form-group">

                <div class="form-check mt-3">

                    <div class="input-group">
                        <div class="input-group-prepend">

                            <span class="input-group-text"><input type="radio" name="radio1" id="radio1" value="a" <?php if ($db_kuis->jawaban_benar == $db_kuis->Pilihan_A) echo 'checked' ?>> </span>
                            <span class="input-group-text">A</span>

                        </div>
                        <input type="text" class="form-control" name="jawab_a" id="idjawab_a" value="<?= $db_kuis->Pilihan_A ?>">

                    </div>
                </div>

                <div class="form-check mt-3">

                    <div class="input-group">
                        <div class="input-group-prepend">

                            <span class="input-group-text"><input type="radio" name="radio1" id="radio1" value="b" <?php if ($db_kuis->jawaban_benar == $db_kuis->Pilihan_B) echo 'checked' ?>></span>
                            <span class="input-group-text">B</span>

                        </div>
                        <input type="text" class="form-control" name="jawab_b" id="idjawab_b" value="<?= $db_kuis->Pilihan_B ?>">

                    </div>
                </div>

                <div class="form-check mt-3">

                    <div class="input-group">
                        <div class="input-group-prepend">

                            <span class="input-group-text"><input type="radio" name="radio1" value="c" <?php if ($db_kuis->jawaban_benar == $db_kuis->Pilihan_C) echo 'checked' ?>></span>
                            <span class="input-group-text">C</span>


                        </div>
                        <input type="text" class="form-control" name="jawab_c" id="idjawab_c" value="<?= $db_kuis->Pilihan_C ?>">

                    </div>
                </div>


            </div>
            <div class=" text-right">
                <button type="submit" class="btn btn-outline-primary btn-light" id="tombol">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>

    </div>



</div>


<script>
    ClassicEditor
        .create(document.querySelector('#editor1'), {

            toolbar: {
                items: [
                    'heading', '|',
                    'fontfamily', 'fontsize', '|',
                    'alignment', '|',
                    'fontColor', 'fontBackgroundColor', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                    'link', '|',
                    'outdent', 'indent', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'code', 'codeBlock', '|',
                    'insertTable', '|',
                    'uploadImage', 'ckfinder', 'blockQuote', '|',
                    'undo', 'redo'
                ],
                shouldNotGroupWhenFull: true
            },


            ckfinder: {
                // Upload the images to the server using the CKFinder QuickUpload command.
                uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json',
                // uploadUrl: 'base_url('admin/konten/upload_image2') ?>',
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>