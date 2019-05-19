<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Validasi</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Haloo ini pake bootstrap</h1>
            </div>
            <div class="card-body">
                <form action="validasi.php" method="post">
                    <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Masukkan NIM">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>