<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h1>Tabel<h1>
        <table class="table table-sm table-dark table-hover tabel-striped">
        <thead>
        <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis kelamin</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
    
    </tr>
    </thead>
    <tbody>
     @for($i=0; %i< %jumlah;% i++)   
    </tr>
        <td>123</td>
        <td>Joni</td>
        <td>laki-laki</td>
        <td>10-10-2008</td>
        <td>sidiarjo</td>
    </tr>

    <!-- <tr>
        <td>123</td>
        <td>Joni</td>
        <td>laki-laki</td>
        <td>10-10-2008</td>
        <td>sidiarjo</td>
    /tr>
    <tr>
        <td>123</td>
        <td>Joni</td>
        <td>laki-laki</td>
        <td>10-10-2008</td>
        <td>sidiarjo</td> -->
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</body>
</script>

</html>
