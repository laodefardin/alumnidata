<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
<div class="container ua-sigle-article no-padding">
	<div class="img-paralax hidden-xs">
		<div class="container">
			<div class="paralax-title">
				Pendaftaran Alumni
			</div>
		</div>
	</div>

	
		<section class="content">
			<div class="">
				<div class="box-header">
					<div class="box-title"><h4><b>Masukkan Data Anda di form berikut:</b></h4></div>
				</div>
				<div class="box-body table-responsive" style="border: 1px solid #fff;">
					<div id='section1'>
						<div class="col-lg-5">
							<input type='text' class='form-control' onkeypress='return isNumberKey(event)' onchange='cari()' id='getAlumni' placeholder=' Input NIM saat Mahasiswa'/>
						</div>
						<div class="col-lg-2">
							<button id='cari' class='btn btn-warning'  onclick='cari()'><i class='fa fa-search'></i> Cari</button>
						</div>
						<div class="col-lg-12">
							&nbsp;
						</div>
						<div class="col-lg-12">
							<div id='selectAlumni'></div>
						</div>
					</div>
					<div id='section2'>
						<div class="col-lg-12" style="border: 1px solid #f29f24;">
							<div id='previewAlumni'></div>
						</div>
					</div>
					<div id='section3'>
						<div class="col-lg-12">
							<div id='formulirAlumni'></div>
						</div>
					</div>
					<div id='section4'>
						<div class="col-lg-12">
							<div id='Previewnext1'></div>
						</div>
					</div>
					<div id='section5'>
						<div class="col-lg-12">
							<div id='Previewnext2'></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
		<!-- /.content -->
	</div></div>

	<?php
	include 'global_footer.php';
	?>
<script>
		$(document).ready(function() {
			$('#section1').show();
			$('#section2').hide();
			$('#section3').hide();
			$('#section4').hide();
			$('#section5').hide();
		});
		function cari(){
			var getAlumni = document.getElementById('getAlumni').value;
			if(getAlumni==''){
				alert("Form Masih Kosong....");
				return false;
			}
			$.ajax({
				data : 'getAlumni='+getAlumni,
				type : "GET",
				url  : "inputdata/getalumni",
				beforeSend : function(e){
					$('#modal-kotak , #bg').fadeIn("slow");
				},

				success : function(data){
					//console.log(data);
					$('#selectAlumni').html(data);
					$('#modal-kotak , #bg').fadeOut("slow");
				}
			})
		}
		function isNumberKey(evt)
		{
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
			return true;
		}
		function preview(val){
			$.ajax({
				data : ({preview:val}),
				type : "GET",
				url  : "inputdata/getpreview",
				beforeSend : function(){
					$('#modal-kotak , #bg').fadeIn("slow");
				},
				
				success : function(data){
					$('#section1').hide();
					$('#section2').show();
					$('#section3').hide();
					$('#section4').hide();
					$('#section5').hide();
					$('#previewAlumni').html(data);
					$('#modal-kotak , #bg').fadeOut("slow");
				}
			})
		}
		function formulir(val){
			$.ajax({
				data : ({id:val}),
				type : "GET",
				url  : "inputdata/get_formulir",
				beforeSend : function(){
					$('#modal-kotak , #bg').fadeIn("slow");
				},
				success : function(data){
					$('#section1').hide();
					$('#section2').hide();
					$('#section3').show();
					$('#section4').hide();
					$('#section5').hide();
					$('#formulirAlumni').html(data);
					$('#modal-kotak , #bg').fadeOut("slow");
				}
			})
		}

		function next1(val){
			var nmMahasiswa = document.getElementById('nmMahasiswa').value;
			if(nmMahasiswa==''){
				alert("Maaf Nama Mahasiswa Masih Kosong....");
				return false;
			}
			var ipk = document.getElementById('ipk').value;
			if(ipk==''){
				alert("Maaf IPK Masih Kosong....");
				return false;
			}
			var ipk2 = document.getElementById('ipk2').value;
			if(ipk!==ipk2){
				alert("IPK tidak sesuai....");
				return false;
			}
			var lamaStudi = document.getElementById('lamaStudi1').value;
			if(lamaStudi==''){
				alert("Maaf Lama Studi Masih Kosong....");
				return false;
			}
			var lamaStudi1 = document.getElementById('lamaStudi11').value;
			if(lamaStudi!==lamaStudi1){
				alert("Lama Studi (Tahun) tidak sesuai ....");
				return false;
			}
			
			var lamaStudi2 = document.getElementById('lamaStudi2').value;
			
			var lamaStudi22 = document.getElementById('lamaStudi22').value;
			if(lamaStudi2!==lamaStudi22){
				alert("Lama Studi (Bulan) Tidak sesuai....");
				return false;
			}
			var tempatLahir = document.getElementById('tempatLahir').value;
			if(tempatLahir==''){
				alert("Maaf Tempat Lahir Masih Kosong....");
				return false;
			}
			var tglLahir = document.getElementById('tglLahir').value;
			if(tglLahir==''){
				alert("Maaf Tanggal Lahir Masih Kosong....");
				return false;
			}
			var noTelepon = document.getElementById('noTelepon').value;
			if(noTelepon==''){
				alert("Maaf Nomor Telepon Masih Kosong....");
				return false;
			}
			var noIjasah = document.getElementById('noIjasah').value;
			if(noIjasah==''){
				alert("Maaf Nomor Ijazah Masih Kosong....");
				return false;
			}
			var agama = document.getElementById('agama').value;
			if(agama==''){
				alert("Maaf Agama Masih Kosong....");
				return false;
			}
			var email = document.getElementById('email').value;
			if(email==''){
				alert("Maaf Email Masih Kosong....");
				return false;
			}
			var provinsi = document.getElementById('provinsi').value;
			if(provinsi==''){
				alert("Maaf Provinsi Masih Kosong....");
				return false;
			}
			var kota = document.getElementById('kota').value;
			if(kota==''){
				alert("Maaf Kabupaten Masih Kosong....");
				return false;
			}
			var tgsAkhir = document.getElementById('tgsAkhir').value;
			if(tgsAkhir==''){
				alert("Maaf Tugas Akhir Masih Kosong....");
				return false;
			}
			var alamat = document.getElementById('alamat').value;
			if(alamat==''){
				alert("Maaf Alamat Masih Kosong....");
				return false;
			}
			var predikatYudisium = document.getElementById('predikatYudisium').value;
			if(predikatYudisium==''){
				alert("Maaf Predikat Yudisium Masih Kosong....");
				return false;
			}
			var statusAlumni = document.getElementById('statusAlumni').value;
			if(statusAlumni==''){
				alert("Maaf Status Alumni Masih Kosong....");
				return false;
			}
			
			//var formData = new FormData($('#form1')[0]);
			var formData = new FormData( $( 'form#form1' )[ 0 ] );
			
			formData.append('id',val);
			formData.append('predikatYudisium',predikatYudisium);
			formData.append('statusAlumni',statusAlumni);
			formData.append('submit',val);
			$.ajax({
				data : formData,
				contentType : false,
				processData : false,
				type : "POST",
				url  : "inputdata/saveNext1",
				beforeSend : function(){
					$('#modal-kotak , #bg').fadeIn("slow");
				},
				success : function(data){
					if(data=='rc'){
						alert("Maaf Data Anda Tidak Cocok....");
						return false;
					}else{
						$('#section1').hide();
						$('#section2').hide();
						$('#section3').hide();
						$('#section4').show();
						$('#section5').hide();
						$('#Previewnext1').html(data);
						$('#modal-kotak , #bg').fadeOut("slow");
					}
				}
			})
		}

		function previewKerja(val){
			var namaPerusahaan = document.getElementById('namaPerusahaan').value;
			if(namaPerusahaan==''){
				alert("Maaf Nama Perusahaan Masih Kosong....");
				return false;
			}

			var alamatPerusahaan = document.getElementById('alamat_perusahaan').value;
			if(alamatPerusahaan==''){
				alert("Maaf Alamat Perusahaan Masih Kosong....");
				return false;
			}
			var posisi = document.getElementById('posisi').value;
			if(posisi==''){
				alert("Maaf Posisi Masih Kosong....");
				return false;
			}
			var lamaBekerja = document.getElementById('lamaBekerja').value;
			if(lamaBekerja==''){
				alert("Maaf Lama Bekerja Masih Kosong....");
				return false;
			}
			var rata2Gaji = document.getElementById('rata2Gaji').value;
			if(rata2Gaji==''){
				alert("Maaf Rata - Rata Gaji Masih Kosong....");
				return false;
			}
			var rentangJarak = document.getElementById('rentangJarak').value;
			if(rentangJarak==''){
				alert("Maaf Rata - Rata rentangJarak Masih Kosong....");
				return false;
			}
			var Kesesuaian = document.getElementById('Kesesuaian').value;
			if(Kesesuaian==''){
				alert("Maaf Rata - Rata Kesesuaian Masih Kosong....");
				return false;
			}
			
		$.ajax({
			data : {'status':'kerja','namaperusahaan':namaPerusahaan,'alamat':alamatPerusahaan,'posisi':posisi,'lamaBekerja':lamaBekerja,'rata2Gaji':rata2Gaji,'rentangjarak':rentangJarak,'kesesuaian':Kesesuaian},
			type : "POST",
			url  : "inputdata/saveNext2",
			beforeSend : function(){
				$('#modal-kotak , #bg').fadeIn("slow");
			},
			success : function(data){
				$('#section1').hide();
				$('#section2').hide();
				$('#section3').hide();
				$('#section4').hide();
				$('#section5').show();
				$('#Previewnext2').html(data);
				$('#modal-kotak , #bg').fadeOut("slow");
			}
		})
	}
	function previewLanjut(val){
		var univLanjut = document.getElementById('univLanjut').value;
		if(univLanjut==''){
			alert("Maaf Universitas Masih Kosong....");
			return false;
		}
		var prodiLanjut = document.getElementById('prodiLanjut').value;
		if(prodiLanjut==''){
			alert("Maaf Program Studi Masih Kosong....");
			return false;
		}
		var semesterLanjut = document.getElementById('semesterLanjut').value;
		if(semesterLanjut==''){
			alert("Maaf Semester Masih Kosong....");
			return false;
		}
		$.ajax({
			data : ({'status':'lanjut',id:val,'univ':univLanjut,'prodi':prodiLanjut,'semester':semesterLanjut}),
			type : "POST",
			url  : "inputdata/saveNext2",
			beforeSend : function(){
				$('#modal-kotak , #bg').fadeIn("slow");
			},
			success : function(data){
				$('#section1').hide();
				$('#section2').hide();
				$('#section3').hide();
				$('#section4').hide();
				$('#section5').show();
				$('#Previewnext2').html(data);
				$('#modal-kotak , #bg').fadeOut("slow");
			}
		})
	}
	function simpanUser(){
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		var nmMahasiswa = document.getElementById('nm_lengkap').value;
		var retypePassword = document.getElementById('retypePassword').value;
		if(password != retypePassword){
			alert("Maaf Password Tidak Sama...");
			return false;
		}
		if(password == ''){
			alert("Password kosong...");
			return false;
		}
		$.ajax({
			data : ({'user':username,'pwd':password,'nama':nmMahasiswa}),
			type : "POST",
			url  : "inputdata/simpanUser",
			success : function(data){
				alert('Berhasil Menyimpan Data...Silahkan anda Login');
				window.location.assign("login");
			}
		})
	}
</script>