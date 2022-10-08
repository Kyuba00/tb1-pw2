<h1><?php echo $judul ?></h1>

<!--form perlu di tambahkan enctype="multipart/form-data" agar bisa melakukan upload file-->
<form method="post" action="<?php echo site_url('buku/submit/' . $data_buku_single['id']); ?>" enctype="multipart/form-data">
    <table class="table table-responsive table-borderless">
        <tr>
            <td>File</td>
            <td>
                <!--input untuk memilih file yang akan diupload-->
                <input type="file" name="userfile" size="20" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Upload" class="btn btn-primary"></td>
        </tr>
    </table>
</form>

<!--response setelah upload-->
<?php if (!empty($response)) : ?>
    <?php echo $response; ?>
<?php endif; ?>