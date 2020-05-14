<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .page{
            max-width: 80em;
            margin: 0 auto;
        }
        table th,
        table td{
            text-align: left;
        }
        table.layout{
            width: 100%;
            border-collapse: collapse;
        }
        table.display{
            margin: 1em 0;
        }
        table.display th,
        table.display td{
            border: 1px solid #B3BFAA;
            padding: .5em 1em;
        }

        table.display th{ background: #D5E0CC; }
        table.display td{ background: #fff; }

        table.responsive-table{
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.2);
        }

        .listcust {
            margin: 0;
            padding: 0;
            list-style: none;
            display:table;
            border-spacing: 10px;
            border-collapse: separate;
            list-style-type: none;
        }

        .title {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>Cendekia Entrepreneur Club</h3>
        <h4 style="line-height: 0px;">Laporan</h4>
        <p><small style="opacity: 0.5;">Dicetak : {{ now() }}</small></p>
    </div>
    <div class="title">
        <h3>Laporan</h3>
        @if ($start_date == $end_date)
        <h4>{{ date("l, d F Y", strtotime($start_date)) }} - {{ date("l, d F Y", strtotime($end_date)) }}</h4>
        @else
        <h4>{{ date("l, d F Y", strtotime($start_date)) }}</h4>
        @endif
    </div>
    <div class="page">
        <table class="layout display responsive-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Stok</th>
                    <th>Terjual</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Total Penjualan</th>
                    <th>Keuntungan</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $no = 1;
                    $totalStock = 0;
                    $totalQty = 0;
                    $totalPrice = 0;
                    $totalPurchase = 0;
                    $totaltotalPrice = 0;
                    $totaltotalPurchase = 0;
                @endphp
                @forelse ($products as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->stock }}</td>
                    <td>{{ $qty[$row->name] }}</td>
                    <td>Rp{{ number_format($row->price) }}</td>
                    <td>Rp{{ number_format($row->purchase) }}</td>
                    <td>Rp{{ number_format($row->price * $qty[$row->name]) }}</td>
                    <td>Rp{{ number_format(($row->price - $row->purchase) * $qty[$row->name]) }}</td>
                </tr>
                @php
                    $totalStock += $row->stock;
                    $totalQty += $qty[$row->name];
                    $totalPrice += $row->price;
                    $totalPurchase += $row->purchase;
                    $totaltotalPrice += $row->price * $qty[$row->name];
                    $totaltotalPurchase += ($row->price - $row->purchase) * $qty[$row->name];
                @endphp
                @empty
                <tr>
                    <td class="text-center" colspan="8">Tidak ada data transaksi</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <td>{{ $totalStock }}</td>
                    <td>{{ $totalQty }}</td>
                    <td>Rp{{ number_format($totalPrice) }}</td>
                    <td>Rp{{ number_format($totalPurchase) }}</td>
                    <td>Rp{{ number_format($totaltotalPrice) }}</td>
                    <td>Rp{{ number_format($totaltotalPurchase) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>