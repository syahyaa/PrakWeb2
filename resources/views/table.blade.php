<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_pemeriksaan" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
            <div class="col-8">
                <input id="tgl_pemeriksaan" name="tgl_pemeriksaan" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="lahir_usia" class="col-4 col-form-label">Tanggal Lahir / Usia</label>
            <div class="col-8">
                <input id="lahir_usia" name="lahir_usia" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="jns_klmn" class="col-4 col-form-label">Jenis Kelamin</label>
            <div class="col-8">
                <input id="jns_klmn" name="jns_klmn" type="text" class="form-control">
            </div>
        </div>
        <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin-left: 35%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
      text-align: center;
    }
  </style> 
  <table style= "justify-content: center",>
    <tr>
        <thead>
                <th>Jenis Tes</th>
                <th>Hasil Pemeriksaan </th>
                <th>Normal</th>
        </thead>
        <tbody>
            <tr>
                <td>Tekanan Dara </td>
                <td></td>
                <td>{{$darah}} mmhg</td>
            </tr>
            <tr>
                <td>Asam Urat</td>
                <td></td>
                <td>pria : {{$pria}} | wanita : {{$wanita}} </td>
            </tr>
            <tr>
                <td>Kolestrol Total </td>
                <td></td>
                <td> {{$kolestrol}} mg/dl</td>
            </tr>
            <tr>
                <td rowspan="3">Gula Darah</td>
                <td rowspan="3"></td>
                <td>Puasa : {{$puasa}} mg/dl</td>
            </tr>
            <tr>
                <td>2 jam setelah makan : {{$obat}} mg/dl</td>
            </tr>
            <tr>
                <td>Sewaktu/acak : {{$acak}} mg/dl</td>
            </tr>
            <br>
        </tbody>
    </tr>
</table>
<br>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>