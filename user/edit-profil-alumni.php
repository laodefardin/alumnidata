<?php
include 'global_header.php';
?>
<div class="content-wrapper">
 <section class="content"> 
  <div class="box box-warning">
    <div class="box-body">


    <?php
    $profil = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN data_agama ON data_agama.id_agama = alumni_profil.id_agama LEFT OUTER JOIN data_kota ON data_kota.id_kota = alumni_profil.id_kota  LEFT OUTER JOIN data_provinsi ON data_provinsi.id_provinsi = alumni_profil.id_provinsi WHERE id_user = '".$_SESSION['data_id']."'");

    foreach ($profil as $data) {          
      ?>
      <div class="box-body">
        <div class="row">
          <div class="col-sm-2 col-md-2 col-lg-2 " align="center" style="margin-bottom: 25px"> 
            <?php
            $foto = $data["foto"];
            if($foto===''){?>
              <img style="height: 200px"  src="../foto/alumni/anonim.jpg">
            <?php } else {?>
              <img style="height: 200px"  src="../foto/alumni/<?php echo $data['foto']; ?>"> <?php }; ?> 
              <center><a href="uploadfoto" class="btn btn-primary btn-xs" role="button">Ganti Foto</a></center></div>        
              <div class="col-md-10">

                <form action="edit-profil-alumni-1" method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">Nama Lengkap</span>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" id="nmMahasiswa" name="nmMahasiswa" value='<?php echo $data['nama_lengkap']; ?>' placeholder="contoh : Laode Muh. ZulFardinsyah">
                    </div>
                    <span class="col-lg-2">Nomor Induk Mahasiswa</span>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>" disabled>
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">IPK<span style="color:red;"> *</span></span>
                    <div class="col-lg-4">
                      <input type="text"  class="form-control" id="ipk" name="ipk" value='<?php echo $data['ipk']; ?>' placeholder="contoh : 3.65">
                    </div>
                    <span class="col-lg-2">Lama Studi<span style="color:red;"> *</span></span>
                    <div class="col-lg-2">
                      <select name="lamaStudi1" class="form-control" id='lamaStudi1'>
                        <option selected="selected" value="<?php echo $data['lamaStudi1']; ?>"><?php echo $data['lamaStudi1']; ?></option>
                        <?php
                        for($i=1;$i<=8;$i++){
                          $select = '';
                          if($i.' tahun' == $data['lamaStudi1']){
                    // $select='selected=selected';
                          }

                          echo "<option value='".$i." tahun' ".$select.">".$i.' Tahun</option>';
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <select name="lamaStudi2" class="form-control" id='lamaStudi2'>
                        <option selected="selected" value="<?php echo $data['lamaStudi2']; ?>"><?php echo $data['lamaStudi2']; ?></option>
                        <?php
                        for($i=1;$i<=12;$i++){
                          $select = '';
                          if($i.' bulan' == $data['lamaStudi2']){
                    // $select='selected=selected';
                          }

                          echo "<option value='".$i." bulan' ".$select.">".$i.' Bulan</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">Tempat Lahir</span>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" value='<?=isset($data['tmpt_lahir'])?$data['tmpt_lahir']:''?>' id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir">
                    </div>

                    <span class="col-lg-2">Tanggal Lahir</span>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" id="tglLahir" name="tglLahir" value='<?=isset($data['tanggal_lahir'])?$data['tanggal_lahir']:''?>'>
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">No HandPhone</span>
                    <div class="col-lg-4">
                      <input class="form-control date-picker" id="noTelepon" name="noTelepon" type="text"  value='<?=isset($data['no_telp'])?$data['no_telp']:''?>'>
                    </div>
                    <span class="col-lg-2">Nomor Ijasah</span>
                    <div class="col-lg-4">
                      <input type="text" placeholder="" class="form-control" id="noIjasah" name="noIjasah" value='<?=isset($data['no_ijasah'])?$data['no_ijasah']:''?>'>
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">Agama</span>
                    <div class="col-lg-4">
                      <select class="form-control select2" id="agama" name="agama" required style="width: 100%;">
                        <option value="" disabled='disabled'>- Pilih Agama -</option>
                        <?php
                        $daftar_agama = $koneksi->query("SELECT id_agama, nama_agama FROM data_agama");
                        $select_agama = "";
                        $agama = isset($data['id_agama'])?$data['id_agama']:'';
                        foreach ($daftar_agama as $dagama) {
                          if ($dagama["id_agama"]==$agama){
                            $select_agama .= "<option value='$dagama[id_agama]' selected>$dagama[nama_agama]</option>";
                          }else{
                            $select_agama .= "<option value='$dagama[id_agama]'>$dagama[nama_agama]</option>";
                          }
                        }
                        echo $select_agama;
                        ?>
                      </select>
                    </div>
                    <span class="col-lg-2">Email</span>
                    <div class="col-lg-4">
                      <input type="text" placeholder="" class="form-control" id="email" name="email" value="<?=isset($data['email'])?$data['email']:''?>">
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">Provinsi</span>
                    <div class="col-lg-4">
                      <select id="provinsi" name="provinsi" class="form-control select2">
                        <option value="" >Pilih Provinsi</option>
                        <?php
                        $daftar_provinsi = $koneksi->query("SELECT id_provinsi, nama_provinsi FROM data_provinsi");
                        $select_provinsi = "";
                        $provinsi = isset($data['id_provinsi'])?$data['id_provinsi']:'';
                        foreach ($daftar_provinsi as $dprovinsi) {
                          if ($dprovinsi["id_provinsi"]==$provinsi){
                            $select_provinsi .= "<option value='$dprovinsi[id_provinsi]' selected>$dprovinsi[nama_provinsi]</option>";
                          }else{
                            $select_provinsi .= "<option value='$dprovinsi[id_provinsi]'>$dprovinsi[nama_provinsi]</option>";
                          }
                        }
                        echo $select_provinsi;
                        ?>
                      </select>
                    </div>  
                    <span class="col-lg-2">Kabupaten/Kota</span>
                    <div class="col-lg-4">
                      <select class="form-control select2" id="kota" name="kota" required>
                        <option value="" id="kota" selected="selected" disabled="disabled">Pilih Kabupaten/Kota</option>
                        <?php
                        $daftar_kota = $koneksi->query("SELECT id_kota, nama_kota FROM data_kota");
                        $select_kota = "";
                        $kota = isset($data['id_kota'])?$data['id_kota']:'';
                        foreach ($daftar_kota as $dkota) {
                          if ($dkota["id_kota"]==$kota) {
                            $select_kota .= "<option value='$dkota[id_kota]' selected>$dkota[nama_kota]</option>";
                          }
                          else {
                            $select_kota .= "<option value='$dkota[id_kota]'>$dkota[nama_kota]</option>";
                          }
                        }
                        echo $select_kota;
                        ?>
                      </select>
                    </div>

                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">Judul Tugas Akhir</span>
                    <div class="col-lg-10">
                      <textarea type="text" class="form-control" id="tgsAkhir" name="tgsAkhir" ><?=isset($data['judul_skripsi'])?$data['judul_skripsi']:''?></textarea>
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">Alamat Lengkap</span>
                    <div class="col-lg-10">
                      <textarea type="text" class="form-control" id="alamat" name="alamat"><?=isset($data['alamat'])?$data['alamat']:''?></textarea>
                    </div>

                  </div>
                  <div class="row" style="margin-bottom: 15px;">
                    <span class="col-lg-2">Predikat Yudisiom</span>
                    <div class="col-lg-4">
                      <select class="form-control" id="predikatYudisium" name="predikatYudisium" style="width: 100%;">
                        <option value="Cumlaude" <?php if($data['yudisium'] == 'Cumlaude'){echo 'selected';} ?>>Cumlaude</option>
                        <option value="Sangat Memuaskan" <?php if($data['yudisium'] == 'Sangat Memuaskan'){echo 'selected';} ?> >Sangat Memuaskan</option>
                        <option value="Memuaskan" <?php if($data['yudisium'] == 'Memuaskan'){echo 'selected';} ?> >Memuaskan</option>
                      </select>
                    </div>
                    <span class="col-lg-2">Status Alumni</span>
                    <div class="col-lg-4">
                      <select class="form-control" id="statusAlumni" name="statusAlumni">
                        <option value=""> - Pilih Status Dulu - </option>
                        <option value="Bekerja" <?php if($data['statusalumni'] == 'Bekerja'){echo 'selected';} ?>>Bekerja</option>
                        <option value="Lanjut Studi" <?php if($data['statusalumni'] == 'Lanjut Studi'){echo 'selected';} ?>>Lanjut Studi</option>
                        <option value="Belum Bekerja" <?php if($data['statusalumni'] == 'Belum Bekerja'){echo 'selected';} ?>>Belum Bekerja</option>
                      </select>
                    </div>
                  </div>


                <?php }?>
                <div class="row">
                  <div class="col-lg-12">
                    <button type="submit" value="add" name="submit" style="float:right" class="btn btn-success"> &gt;&gt; Selanjutnya</button>
                  </div>
                </div>
              </form>
            </div>
          </div>




        </div>
      </div> 
    </div>
  </section>
</div>
<?php
include 'global_footer.php';
?>
<script>
  $(function(){ // sama dengan $(document).ready(function(){
    $('#provinsi').change(function(){
   $('#kota').html("<img src='assets/ajax-loader.gif'>"); //Menampilkan loading selama proses pengambilan data kota
    var id = $(this).val(); //Mengambil id provinsi
    $.get("option.php", {id:id}, function(data){
      $('#kota').html(data);
    });
  });
  });

    //Date picker
    $('#tglLahir').datepicker({
      autoclose: true
    });
  </script>