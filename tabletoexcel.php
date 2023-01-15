<HTML>
<head>
    <title>Ekspor Tabel Data ke Excel</title>
    <h2>Daftar Peminjam Buku</h2>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #tblSewa {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
 
        #tblSewa td, #tblSewa th {
          border: 1px solid #e6d7ff;
          padding: 8px;
        }
 
        #tblSewa tr:nth-child(even){background-color: #e7d1ff;}
 
        #tblSewa tr:hover {background-color: #e6d7ff;}
 
        #tblSewa th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #d2afff;
            color: white;
          }
          body{
            width : 80%;
            margin : 10 auto;
          }
          button{
            background-color: #d2afff; 
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
      </style>
</head>
<body>
        <table id="tblSewa" cellpadding="0" cellspacing="0">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Kembali</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Udin</td>
                <td>Matahari Terbit</td>
                <td>12/01/2023</td>
                <td>19/01/2023</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Putri</td>
                <td>Hujan Bulan Juni</td>
                <td>13/01/2023</td>
                <td>20/01/2023</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Farhan</td>
                <td>Cara Sukses Menjadi YouTuber</td>
                <td>13/01/2023</td>
                <td>20/01/2023</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Lina</td>
                <td>Fajar menyingsing</td>
                <td>14/01/2023</td>
                <td>21/01/2023</td>
              </tr>
        </table>
        <br />
        <button onclick="exportData('tblSewa')">
            <i class="fa fa-download"></i>
            Download Excel
        </button>

        <script>
            function exportData(tableID, filename = ''){
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
            //Penamaan file excel
            filename = filename?filename+'.xls':'data_sewa.xls';
    
            //Create download link element
            downloadLink = document.createElement("a");
    
            document.body.appendChild(downloadLink);
    
            if(navigator.msSaveOrOpenBlob){
            var blob = new Blob(['\ufeff', tableHTML], {
              type: dataType
            });
            navigator.msSaveOrOpenBlob( blob, filename);
            }else{
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
            // Setting the file name
            downloadLink.download = filename;
        
            //triggering the function
            downloadLink.click();
            }
            }
        </script>
</body>
</html>