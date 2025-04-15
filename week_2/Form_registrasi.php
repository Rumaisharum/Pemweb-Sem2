<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center my-4">Form Registrasi</h2>

    <div class="container px-5 my-5">
        <?php 
        $ar_prodi = [
            "TI" => "Teknik Informatika",
            "SI" => "Sistem Informasi",
            "BD" => "Bisnis Digital"
        ];

        $ar_skill = ["HTML", "CSS", "JavaScript", "PHP", "Python"];
        ?>

        <form method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control" required="required">
                </div>
            </div>

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
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Pr" required="required"> 
                        <label for="radio_0" class="custom-control-label">Perempuan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Lk" required="required"> 
                        <label for="radio_1" class="custom-control-label">Laki-Laki</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                    <select id="program_studi" name="program_studi" required="required" class="custom-select">
                        <option value="">Pilih Program Studi</option>
                        <?php 
                        foreach($ar_prodi as $k => $v){
                            echo "<option value='$k'>$v</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label> 
                <div class="col-8">
                    <?php 
                    foreach($ar_skill as $skill) {
                        echo "<div class='form-check form-check-inline'>
                                <input class='form-check-input' type='checkbox' name='skill[]' value='$skill'>
                                <label class='form-check-label'>$skill</label>
                              </div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card-o"></i>
                            </div>
                        </div> 
                        <input id="domisili" name="domisili" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="Email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div> 
                        <input id="Email" name="Email" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div> 

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
