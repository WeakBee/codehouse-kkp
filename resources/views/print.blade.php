<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Laporan Klien</h2>

<table>
  <tr>
    <th>Nama</th>
    <th>Email</th>
    <th>Category</th>
    <th>Perusahaan</th>
    <th>Nomor Telepon</th>
    <th>Kebutuhan</th>
    <th>Tanggal</th>
  </tr>
  @foreach ($form as $data)
  <tr>
    <td>{{$data['client_name']}}</td>
    <td>{{$data['client_email']}}</td>
    <td>{{$data['category']}}</td>
    <td>{{$data['client_company']}}</td>
    <td>{{$data['client_phone']}}</td>
    <td>{{$data['how_can_we_help']}}</td>
    <td>{{$data['created_at']}}</td>
  </tr>
  @endforeach
</table>

<script>
    window.print();
</script>
</body>
</html>