<!DOCTYPE html>
<html>
<head>
	 <title>Tugas Web</title>
   <script>
            function validasi(){
                var npm = document.getElementById('npm');
                var nama = document.getElementById('nama');
                var kelas = document.getElementById('kelas');
 
                if (harusDiisi(npm, "npm belum diisi")) {
                    if (harusDiisi(nama, "nama belum diisi")) {
                        if (harusDiisi(kelas, "kelas belum diisi"))
                        	 if (harusDiisi(pw1, "password belum diisi"))
                            if (harusDiisi(pw2, "password_confirmation"))  {
                            return true;
                        };
                    };
                };
                return false;
            }
 
            function harusDiisi(att, msg){
                if (att.value.length == 0) {
                    alert(msg);
                    att.focus();
                    return false;
                }
 
                return true;
            }
        </script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<center><h2>TABLE</h2>
<table class="table table-striped" border="1">
  <thead>
    <tr>
      <th scope="col-2">#</th>
      <th scope="col-2">NPM</th>
      <th scope="col-2">Nama</th>
      <th scope="col-2">Kelas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
     <td>15115896</td>
     <td>ricardo</td>
     <td>27 november 1997</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14666222</td>
      <td>Lucky</td>
      <td>21 desember 1997</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>16474333</td>
      <td>Exe</td>
      <td>21 juli 1997</td>
    </tr>
       <tr>
      <th scope="row">4</th>
      <td>10383393</td>
      <td>azzam</td>
      <td>21 juni 1997</td>
    </tr>
  </tbody>
</table>
<center><h2>FORM</h2>
  <div class="col-5">
<form id="absensi" onsubmit="return validasi()" action="proses.php" method="post">
            <p>NPM:</p><input type="text" name="nim" id="npm"/><br/>
            <p>Nama:</p><input type="text" name="nama" id="nama"/><br/>
            <p>Kelas:</p><input type="text" name="kelas" id="kelas"/><br/>
      		<p>Password:</p><input type="password" name="Password" id="pw1"/><br/>
      		<p>Password Confirmation:</p><input type="password" name="Passwordconfirmation" id="pw2"/><br/>
            <input type="submit" value="Simpan" maxlength="100"/>
        </form>
        <script type="text/javascript">
        	window.onload = function () {
        		document.getElementById("pw1").oncharge = validatePassword;
        		document.getElementById("pw2").oncharge = validatePassword;
        	}
        	function.validatePassword(){
        		var pass1=document.getElementById("pw1").value;
        		var pass2=document.getElementById("pw2").value;
        		if (pass1=pass2)
        			document.getElementById("pw2").setCustomValidity("Password Berbeda");
        		else
        			document.getElementById("pw2").setCustomValidity('') 
        	}
        </script>
</html>