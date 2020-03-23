<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            header: page-header;
            footer: page-footer;
        }
        body{
            font-family: Garuda;
        }
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 6px;
        }
    </style>
</head>
<body>
<h2 style="text-align: center">ใบแสดงรายการผ้า</h2>
{{--@foreach([] as $user)--}}
<h3 style="...">บริษัท</h3>

<div id="app">
    <table border="1">
        <thead>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ประเภทสินค้า</th>
            <th>ราคาทุน</th>
            <th>ราคาขาย</th>

        </tr>
        </thead>
        <tbody>
        @foreach([] as $product)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<htmlpageheader name="page-header">
    <div>สรุปรายการสินค้าสั้งหมด ({{date('d/m/Y H:i:s')}})</div>
</htmlpageheader>
<htmlpagefooter name="page-footer">
    <div style="text-align: right"> หน้า {PAGENO}</div>
</htmlpagefooter>
</body>
</html>
