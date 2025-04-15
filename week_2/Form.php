<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<h2> Form Niali Mahasiswa </h2>

<fieldset>
    <legend>silahkan isi Form dibawah ini: </legend>
<?php  
$data_matkul = [
    'WEB1'=> 'Pemrograman Web 1',
    'WEB2'=> 'Pemrograman Web 2',
    'BASDAT'=> 'Basis Data',
    'UI/UX'=> 'UI/UX',
    'JARKOM'=> 'Jaringan Komputer',
    ];
?>

<?php ?>
<form method="GET" action>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-vcard-o"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select" required="required">
        <option value="WEB 1">WEB 1</option>
        <option value="WEB 2">WEB 2</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="No" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="No" name="No" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="No" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="No" name="No" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
    </Form>
    </fieldset>
    </body>
    </html>

    