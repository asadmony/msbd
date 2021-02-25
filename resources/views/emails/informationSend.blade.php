<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title></title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <style>
    body{
        font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }
        table.order-table > thead > tr > th, .table > tbody > tr > th, table.order-table > tfoot > tr > th, table.order-table > thead > tr > td, table.order-table > tbody > tr > td, table.order-table > tfoot > tr > td {
    border: 1px solid #e7e7e7;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: top;
    font-size: 13px;
    color: #676a6c;
    }
    table.order-table > thead > tr > th, table.order-table > thead > tr > td {
    background-color: #F5F5F6;
    border-bottom-width: 1px;
}
h4{
    font-size: 14px;
}
.invoice-total > tbody > tr > td {
    border: 0 none;
}
.invoice-total > tbody > tr > td:first-child {
    text-align: right;
}
.invoice-total > tbody > tr > td:last-child {
    border-bottom: 1px solid #DDDDDD;
    text-align: right;
    width: 15%;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
table.order-table {
    color: #212529;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}
table.order-table tbody tr:nth-of-type(odd) {
    background-color: rgba(0,0,0,.05);
}
.text-navy {
    color: #1ab394 !important;
}
table.order-table tr th {
    padding: 8px 8px;
    border: 1px solid #e7e7e7;
}
table.invoice-total tr td {
    padding: 5px 0;
    color: #676a6c;
    font-size: 14px;
}
table.invoice-total {
    width: 100%;
}
.row{
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 15px;
}
.leftsidetext {
    float: left;
    width: 50%;
}

.rightsidetext {
    float: right;
    text-align: right;
    width: 50%;
}
table{
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}
    </style>
</head>

<body>
<div style="margin: 25px 15px;">

<div style="background: #ebebeb;padding: 15px;">
    <center>
        <h2 style="font-weight: bold;">
            {{$desc}}
        </h2>
    </center>

</div>
<br>
<table>
    <tr>
        <td>
            From: 
            <address>
                <strong>{{ $name }}.</strong><br>
                {{-- <strong>Seeking information for {{$seeking_for}} </strong> <br> --}}
                <abbr title="Phone">Mobile:</abbr> {{$mobile}}<br>
                <abbr title="Phone">Email:</abbr> {{$email}}
            </address>
        </td>
    </tr>
</table>


</div>

</body>