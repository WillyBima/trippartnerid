<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <style media="screen">
      .header{
        font-family: Cambria;
        text-align: center;
      }
      .content-header{
        font-family: Cambria;
        display: grid;
        grid-column-gap: 10px;
        grid-template-columns: auto auto auto;
        padding: 50px;
        text-align: center;
      }
      .tabel, th, td{
        font-family: Cambria;
        border: 1px solid black;
        border-collapse: collapse;
        margin-left: 65px;
        margin-right: 65px;
        margin-top: 50px;
      }
      th, td{
        padding: 5px;
        text-align: center;
      }
      .keterangan{
        display: grid;
        grid-column-gap: 10px;
        grid-template-columns: auto auto auto;
        padding: 50px;
        text-align: center;
      }
      .footer{
        display: grid;
        grid-column-gap: 100px;
        grid-template-columns: auto auto;
        padding: 60px;
        margin-top: 100px;
      }
    </style> -->
  </head>
  <body>
    <div class="header">
      <h1 style="margin-bottom: 0px; text-align: center; font-family: Cambria;">E-tiket</h1>
      <h3 style="margin-top: 0px; margin-bottom: 30px; text-align: center; font-family: Cambria;">TripPartner.id</h3>
    </div>
    <div class="content-header" style="margin-bottom: 30px; font-family: Cambria;">
      <table style="width:100%;">
        <thead style="text-align: center;">
          <tr>
            <th>Nama Bus</th>
            <th>Tanggal Berangkat</th>
            <th>Id Pemesanan</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
          @foreach($order as $o)
          <tr>
            <td>{{$o->nama_bus}}</td>
            <td>{{$o->tanggal_pergi}}<br>
              <br><b>Tanggal Pulang</b><br>
              {{$o->tanggal_pulang}}
            </td>
            <td>{{$o->id}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <hr style="width: 650px; margin-bottom: 30px;">
    <div class="keterangan">
      <table style="width:100%;">
        <thead style="text-align: center;">
          <tr>
            <th><img src="{{url('assets/img/icon/jam.png')}}"></th>
            <th><img src="{{url('assets/img/icon/tiket.png')}}"></th>
            <th><img src="{{url('assets/img/icon/warning.png')}}"></th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
          <tr>
            <td>Pelunasan Paling Lama H-1 Minggu Sebelum Keberangkatan</td>
            <td>Tunjukkan E-Tiket anda ketika akan Berangkat</td>
            <td>Tanggal Keberangkatan dan Kepulangan tidak bisa dirubah</td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr style="width: 650px; margin-top: 50px;">
    <div class="tabel" style="margin-bottom: 300px; font-family: Cambria;">
      <table style="width:100%;">
        <thead style="text-align: center;">
          <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Rute</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
          @foreach($order as $o)
          <tr>
            <td>1</td>
            <td>{{$o->nama}}</td>
            <td>{{$o->alamat_jemput}} - {{$o->alamat_tujuan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="footer">
      <table style="width:100%;">
        <thead>
          <tr>
            <th style="text-align: left;">Customer Service</th>
            <th style="text-align: right;">Customer Service Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: left;">0812 6865 0827</td>
            <td style="text-align: right;">TripPartner@gmail.com</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
