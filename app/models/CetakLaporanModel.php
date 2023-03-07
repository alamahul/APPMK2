<?php



/**
 * 
 */
class CetakLaporanModel
{
  private $tabelpengaduan = 'pengaduan';
  public function __construct() {
    return date_default_timezone_set('Asia/Jakarta');
  }
  public function cetakdetailPengaduan($data)
  {
    
    // var_dump($data);die;
        // Create an instance of the class:
        $mpdf = new \Mpdf\Mpdf();

        // Write some HTML code:
        $mpdf->WriteHTML('
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Pengaduan</title>
</head>
<style type="text/css">
  *{
    font-family: Arial,Helvetica, sans-serif;

  }
  .tables{
    background-color: white;
  }
  table{
    width:100%;
    margin: 30px;
    border:1px solid #ddd;
  }
  table tr td{
    border:1px solid #ddd;
  }
  table tr td {
    text-align: center;
  }
  .table-foto{

  }
  .judul{
    color: black;
    margin-left: 12px;
    font-family:Arial,Helvetica, sans-serif;
    font-size: 14px;
    font-weight: bold;
  }
  .container{
    background-color: lightgrey;
    border: 1px solid #ddd;
  }
  .head-table{
    font-family: Arial,Helvetica, sans-serif;
    background-color: lightgrey;
  }
  .isi-laporan{
    font-family: Arial,Helvetica, sans-serif;
  }
  th{
    font-family:Arial,Helvetica, sans-serif;
  }
</style>
<body>
  <div class="container">
  
  <p class="judul">Detail Pengaduan</p>
  
  <div class="tables">
<table cellspacing="0" cellpadding="10" class="table-foto">
  <tr>
    <th class="head-table">Foto Laporan</th>
  </tr>
  <tr>
    <th class="foto-laporan"><img src="img/' . $data["pengaduan"]["foto"] .'" width="100px"></th>
  </tr>
</table>
<table cellspacing="0" cellpadding="10" class="table-laporan">
  <tr>
    <th class="head-table">ID pengaduan</th><th class="head-table">Tanggal Pengaduan</th><th class="head-table">Status</th>
  </tr>
  <tr>
    <td class="isi-laporan">' . $data["pengaduan"]["id_pengaduan"] .'</td><td class="isi-laporan">' . $data["pengaduan"]["tgl_pengaduan"] .'</td><td class="isi-laporan">' . $data["pengaduan"]["status"] .'</td>
  </tr>
</table>
<table cellspacing="0" cellpadding="10" class="table-laporan">
  <tr>
    <th class="head-table">Isi Laporan</th>
  </tr>
  <tr>
    <td class="isi-laporan">'. $data["pengaduan"]["isi_laporan"] .'
  </tr>
</table>
<table class="table-pengirim" width="100%" cellspacing="0" cellpadding="10">
          <tr>
            <th class="head-table">NIK</th>
            <th class="head-table">Nama</th>
            <th class="head-table">Username</th>
            <th class="head-table">telepon</th>
          </tr>

          <tr>
            <td>' . $data["pengaduan"]["nik"] .'</td>
            <td>' . $data["pengaduan"]["nama"] .'</td>
            <td>' . $data["pengaduan"]["username"] .'</td>
            <td>' . $data["pengaduan"]["telp"] .'</td>
          </tr>
</table>
</div>
</div>
</body>
</html>

          ');
          $time = date('d_F_Y,h:i:s A');
        // Output a PDF file directly to the browser
        $mpdf->Output();
  }
  public function cetakStatus0Pengaduan($data) {
 
    
    $mpdf = new \Mpdf\Mpdf();
    $no = 1;
    $htmlHead = '<!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laporan Pengaduan</title>
      </head>
      <style type="text/css">
        *{
          font-family: Arial,Helvetica, sans-serif;

        }
        .tables{
          background-color: white;
        }
        table{
          width:100%;
          margin: 30px;
          border:1px solid #ddd;
        }
        table tr td{
          border:1px solid #ddd;
        }
        table tr td {
          text-align: center;
        }
        .judul{
          color: black;
          margin-left: 12px;
          font-family:Arial,Helvetica, sans-serif;
          font-size: 14px;
          font-weight: bold;
        }
        .container{
          background-color: lightgrey;
          border: 1px solid #ddd;
        }
        }
        .isi-laporan{
          font-family: Arial,Helvetica, sans-serif;
          text-align:center;width:150px; height:25px; overflow:hidden;
        }
        th{
          font-family:Arial,Helvetica, sans-serif;
          background-color: lightgrey;
        }
      </style>
      <body>
        <div class="container">
        <p class="judul">Laporan Pengaduan yang Berstatus 0</p>
        <div class="tables">';
          $htmlfooter = '</div>
      </div>
      </body>';
          $htmlbody = '
          <table border="1px" cellpadding="10" cellspacing="0">
          <thead>
          <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </tfoot>';
          foreach ($data['pengaduan'] as $rows) {
          $htmlbody .= '<tbody>
                <tr>
                  <td>'. $no++.'</td>
                  <td>'. $rows['tgl_pengaduan'].'</td>
                  <td>'. $rows['nik'].'</td>
                  <td><div class="isi-laporan" style="">'. $rows['judul_laporan'] . '</div></td>
                  <td>'. $rows['alamat_pengaduan'].'</td>
                  <td>'. $rows['foto'].'</td>
                  <td>'. $rows['status'].'</td>
                </tr>
              </tbody>';
          }
          $htmlbody .='</table>';
        //  echo($htmlHead.$htmlbody.$htmlfooter);die;

          $mpdf->WriteHTML($htmlHead.$htmlbody.$htmlfooter);
          $time = date('d_F_Y,h:i:s A');
          //imetput a PDF file directly to the browser
          $mpdf->Output('laporan_pengaduan_yang_berstatus_0_tanggal-'.$time.'.pdf', \Mpdf\Output\Destination::DOWNLOAD);
  }
  public function cetakStatusProsesPengaduan($data) {
 
    
    $mpdf = new \Mpdf\Mpdf();
    $no = 1;
    $htmlHead = '<!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laporan Pengaduan</title>
      </head>
      <style type="text/css">
        *{
          font-family: Arial,Helvetica, sans-serif;

        }
        .tables{
          background-color: white;
        }
        table{
          width:100%;
          margin: 30px;
          border:1px solid #ddd;
        }
        table tr td{
          border:1px solid #ddd;
        }
        table tr td {
          text-align: center;
        }
        .judul{
          color: black;
          margin-left: 12px;
          font-family:Arial,Helvetica, sans-serif;
          font-size: 14px;
          font-weight: bold;
        }
        .container{
          background-color: lightgrey;
          border: 1px solid #ddd;
        }
        }
        .isi-laporan{
          font-family: Arial,Helvetica, sans-serif;
          text-align:center;width:150px; height:25px; overflow:hidden;
        }
        th{
          font-family:Arial,Helvetica, sans-serif;
          background-color: lightgrey;
        }
      </style>
      <body>
        <div class="container">
        <p class="judul">Laporan Pengaduan yang Berstatus Proses</p>
        <div class="tables">';
          $htmlfooter = '</div>
      </div>
      </body>';
          $htmlbody = '
          <table border="1px" cellpadding="10" cellspacing="0">
          <thead>
          <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </tfoot>';
          foreach ($data['pengaduan'] as $rows) {
          $htmlbody .= '<tbody>
                <tr>
                  <td>'. $no++.'</td>
                  <td>'. $rows['tgl_pengaduan'].'</td>
                  <td>'. $rows['nik'].'</td>
                  <td><div class="isi-laporan" style="">'. $rows['judul_laporan'] . '</div></td>
                  <td>'. $rows['alamat_pengaduan'].'</td>
                  <td>'. $rows['foto'].'</td>
                  <td>'. $rows['status'].'</td>
                </tr>
              </tbody>';
          }
          $htmlbody .='</table>';
        //  echo($htmlHead.$htmlbody.$htmlfooter);die;

          $mpdf->WriteHTML($htmlHead.$htmlbody.$htmlfooter);
          $time = date('d_F_Y,h:i:s A');
          //imetput a PDF file directly to the browser
          $mpdf->Output('laporan_pengaduan_yang_berstatus_proses_tanggal-'.$time.'.pdf', \Mpdf\Output\Destination::DOWNLOAD);
  }
  public function cetakStatusSelesaiPengaduan($data) {
 
    
    $mpdf = new \Mpdf\Mpdf();
    $no = 1;
    $htmlHead = '<!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laporan Pengaduan</title>
      </head>
      <style type="text/css">
        *{
          font-family: Arial,Helvetica, sans-serif;

        }
        .tables{
          background-color: white;
        }
        table{
          width:100%;
          margin: 30px;
          border:1px solid #ddd;
        }
        table tr td{
          border:1px solid #ddd;
        }
        table tr td {
          text-align: center;
        }
        .judul{
          color: black;
          margin-left: 12px;
          font-family:Arial,Helvetica, sans-serif;
          font-size: 14px;
          font-weight: bold;
        }
        .container{
          background-color: lightgrey;
          border: 1px solid #ddd;
        }
        }
        .isi-laporan{
          font-family: Arial,Helvetica, sans-serif;
          text-align:center;width:150px; height:25px; overflow:hidden;
        }
        th{
          font-family:Arial,Helvetica, sans-serif;
          background-color: lightgrey;
        }
      </style>
      <body>
        <div class="container">
        <p class="judul">Laporan Pengaduan yang Berstatus Selesai</p>
        <div class="tables">';
          $htmlfooter = '</div>
      </div>
      </body>';
          $htmlbody = '
          <table border="1px" cellpadding="10" cellspacing="0">
          <thead>
          <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </tfoot>';
          foreach ($data['pengaduan'] as $rows) {
          $htmlbody .= '<tbody>
                <tr>
                  <td>'. $no++.'</td>
                  <td>'. $rows['tgl_pengaduan'].'</td>
                  <td>'. $rows['nik'].'</td>
                  <td><div class="isi-laporan" style="">'. $rows['judul_laporan'] . '</div></td>
                  <td>'. $rows['alamat_pengaduan'].'</td>
                  <td>'. $rows['foto'].'</td>
                  <td>'. $rows['status'].'</td>
                </tr>
              </tbody>';
          }
          $htmlbody .='</table>';
        //  echo($htmlHead.$htmlbody.$htmlfooter);die;

          $mpdf->WriteHTML($htmlHead.$htmlbody.$htmlfooter);
          $time = date('d_F_Y,h:i:s A');
          //imetput a PDF file directly to the browser
          $mpdf->Output('laporan_pengaduan_yang_berstatus_semua_tanggal-'.$time.'.pdf', \Mpdf\Output\Destination::DOWNLOAD);
  }
  public function cetakSemuaPengaduan($data) {
 
    
    $mpdf = new \Mpdf\Mpdf();
    $no = 1;
    $htmlHead = '<!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laporan</title>
      </head>
      <style type="text/css">
        *{
          font-family: Arial,Helvetica, sans-serif;

        }
        .tables{
          background-color: white;
        }
        table{
          width:100%;
          margin: 30px;
          border:1px solid #ddd;
        }
        table tr td{
          border:1px solid #ddd;
        }
        table tr td {
          text-align: center;
        }
        .judul{
          color: black;
          margin-left: 12px;
          font-family:Arial,Helvetica, sans-serif;
          font-size: 14px;
          font-weight: bold;
        }
        .container{
          background-color: lightgrey;
          border: 1px solid #ddd;
        }
        }
        .isi-laporan{
          font-family: Arial,Helvetica, sans-serif;
          text-align:center;width:150px; height:25px; overflow:hidden;
        }
        th{
          font-family:Arial,Helvetica, sans-serif;
          background-color: lightgrey;
        }
      </style>
      <body>
        <div class="container">
        <p class="judul">Laporan Pengaduan</p>
        <div class="tables">';
          $htmlfooter = '</div>
      </div>
      </body>';
          $htmlbody = '
          <table border="1px" cellpadding="10" cellspacing="0">
          <thead>
          <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Tanggal Pengaduan</th>
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Alamat Pengaduan</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
              </tfoot>';
          foreach ($data['pengaduan'] as $rows) {
          $htmlbody .= '<tbody>
                <tr>
                  <td>'. $no++.'</td>
                  <td>'. $rows['tgl_pengaduan'].'</td>
                  <td>'. $rows['nik'].'</td>
                  <td>'. $rows['judul_laporan'] . '</div></td>
                  <td>'. $rows['alamat_pengaduan'].'</td>
                  <td>'. $rows['foto'].'</td>
                  <td>'. $rows['status'].'</td>
                </tr>
              </tbody>';
          }
          $htmlbody .='</table>';
        //  echo($htmlHead.$htmlbody.$htmlfooter);die;

          $mpdf->WriteHTML($htmlHead.$htmlbody.$htmlfooter);
          $time = date('d_F_Y,h:i:s A');
          //imetput a PDF file directly to the browser
          $mpdf->Output('Laporan_pengaduan_semua_tanggal-'.$time.'.pdf', \Mpdf\Output\Destination::DOWNLOAD);
  }
  public function cetakSemuaMasyarakat($data) {
 
    
    $mpdf = new \Mpdf\Mpdf();
    $no = 1;
    $htmlHead = '<!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laporan Masyarakat</title>
      </head>
      <style type="text/css">
        *{
          font-family: Arial,Helvetica, sans-serif;

        }
        .tables{
          background-color: white;
        }
        table{
          width:100%;
          margin: 30px;
          border:1px solid #ddd;
        }
        table tr td{
          border:1px solid #ddd;
        }
        table tr td {
          text-align: center;
        }
        .judul{
          color: black;
          margin-left: 12px;
          font-family:Arial,Helvetica, sans-serif;
          font-size: 14px;
          font-weight: bold;
        }
        .container{
          background-color: lightgrey;
          border: 1px solid #ddd;
        }
        }
        .isi-laporan{
          font-family: Arial,Helvetica, sans-serif;
          text-align:center;width:150px; height:25px; overflow:hidden;
        }
        th{
          font-family:Arial,Helvetica, sans-serif;
          background-color: lightgrey;
        }
      </style>
      <body>
        <div class="container">
        <p class="judul">Laporan Masyarakat</p>
        <div class="tables">';
          $htmlfooter = '</div>
      </div>
      </body>';
          $htmlbody = '
          <table border="1px" cellpadding="10" cellspacing="0">
          <thead>
          <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Username</th>
                  <th>Telp</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Telp</th>
                </tr>
              </tfoot>';
          foreach ($data['masyarakat'] as $rows) {
          $htmlbody .= '<tbody>
                <tr>
                  <td>'. $no++.'</td>
                  <td>'. $rows['nik'].'</td>
                  <td>'. $rows['nama'].'</td>
                  <td>'. $rows['alamat'] . '</div></td>
                  <td>'. $rows['username'].'</td>
                  <td>'. $rows['telp'].'</td>
                </tr>
              </tbody>';
          }
          $htmlbody .='</table>';
        //  echo($htmlHead.$htmlbody.$htmlfooter);die;

          $mpdf->WriteHTML($htmlHead.$htmlbody.$htmlfooter);
          $time = date('d_F_Y,h:i:s A');
          //imetput a PDF file directly to the browser
          $mpdf->Output('Laporan_masyarakat_tanggal-'.$time.'.pdf', \Mpdf\Output\Destination::DOWNLOAD);
  }
}