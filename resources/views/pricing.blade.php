@extends('master')
@section('content')
<style>
    /* info (hed, dek, source, credit) */
    .rg-container {
        font-family: 'Lato', Helvetica, Arial, sans-serif;
        font-size: 16px;
        line-height: 1.4;
        margin: 0;
        padding: 1em 0.5em;
        color: #222;
    }

    .rg-header {
        margin-bottom: 1em;
        text-align: left;
    }

    .rg-header>* {
        display: block;
    }

    .rg-hed {
        font-weight: bold;
        font-size: 1.4em;
    }

    .rg-dek {
        font-size: 1em;
    }

    .rg-source {
        margin: 0;
        font-size: 0.75em;
        text-align: right;
    }

    .rg-source .pre-colon {
        text-transform: uppercase;
    }

    .rg-source .post-colon {
        font-weight: bold;
    }

    /* table */
    table.rg-table {
        width: 100%;
        margin-bottom: 0.5em;
        font-size: 1em;
        border-collapse: collapse;
        border-spacing: 0;
    }

    table.rg-table tr {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        text-align: left;
        color: #333;
    }

    table.rg-table thead {
        border-bottom: 3px solid #000000;
    }

    table.rg-table tr {
        border-bottom: 1px solid #000000;
        color: #222;
    }

    table.rg-table tr.highlight {
        background-color: #37d7ff !important;
    }

    table.rg-table.zebra tr:nth-child(even) {
        background-color: #70e2ff;
    }

    table.rg-table th {
        font-weight: bold;
        padding: 0.35em;
        font-size: 0.9em;
    }

    table.rg-table td {
        padding: 0.35em;
        font-size: 0.9em;
    }

    table.rg-table .highlight td {
        font-weight: bold;
    }

    table.rg-table th.number,
    td.number {
        text-align: right;
    }

    /* media queries */
    @media screen and (max-width: 1200px) {
        .rg-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        table.rg-table {
            width: 100%;
        }

        table.rg-table tr.hide-mobile,
        table.rg-table th.hide-mobile,
        table.rg-table td.hide-mobile {
            display: none;
        }

        table.rg-table thead {
            display: none;
        }

        table.rg-table tbody {
            width: 100%;
        }

        table.rg-table tr,
        table.rg-table th,
        table.rg-table td {
            display: block;
            padding: 0;
        }

        table.rg-table tr {
            border-bottom: none;
            margin: 0 0 1em 0;
            padding: 0.5em;
        }

        table.rg-table tr.highlight {
            background-color: inherit !important;
        }

        table.rg-table.zebra tr:nth-child(even) {
            background-color: transparent;
        }

        table.rg-table.zebra td:nth-child(even) {
            background-color: #e2f9fe;
        }

        table.rg-table tr:nth-child(even) {
            background-color: transparent;
        }

        table.rg-table td {
            padding: 0.5em 0 0.25em 0;
            border-bottom: 1px dotted #000000;
            text-align: right;
        }

        table.rg-table td[data-title]:before {
            content: attr(data-title);
            font-weight: bold;
            display: inline-block;
            content: attr(data-title);
            float: left;
            margin-right: 0.5em;
            font-size: 0.98em;
        }

        table.rg-table td:last-child {
            padding-right: 0;
            border-bottom: 2px solid #000000;
        }

        table.rg-table td:empty {
            display: none;
        }

        table.rg-table .highlight td {
            background-color: inherit;
            font-weight: normal;
        }
    }
</style>
<section>
    <div class="container">
        <h4 class="text-center mt-5 mb-5">Laundry & Drycleaning Price List</h4>

        <div class='rg-container'>

            <table class='rg-table zebra' summary='Hed'>
                <thead>
                    <tr>
                        <th class='text '>SERVICES</th>
                        <th class='text '>BASIC</th>
                        <th class='text '>GOLD</th>
                        <th class='text '>PLATINUM</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class=''>
                        <td class='text ' data-title=''>MEMBERSHIP ANNUAL FESS</td>
                        <td class='text ' data-title='BASIC'>FREE</td>
                        <td class='text ' data-title='GOLD'>Rs 500/YR</td>
                        <td class='text ' data-title='PLATINUM'>Rs 2000/YR</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>CASH BACK</td>
                        <td class='text ' data-title='BASIC'></td>
                        <td class='text ' data-title='GOLD'></td>
                        <td class='text ' data-title='PLATINUM'>Rs 1000</td>
                    </tr>


                    <tr>
                        <th colspan="4" class='text-center' style="text-align:center"> CHARGES APPLIED </th>
                    </tr>


                    <tr>
                        <th colspan="4" class='text-center' style="text-align:center">LAUNDRY</th>
                    </tr>



                    <tr class=''>
                        <td class='text ' data-title=''>WASH & STEAM IRONING</td>
                        <td class='text ' data-title='BASIC'>99/KG</td>
                        <td class='text ' data-title='GOLD'>79/KG</td>
                        <td class='text ' data-title='PLATINUM'>59/KG</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>WASH & FOLD</td>
                        <td class='text ' data-title='BASIC'>68/KG</td>
                        <td class='text ' data-title='GOLD'>58/KG</td>
                        <td class='text ' data-title='PLATINUM'>48/KG</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>WOOLEN CLOTHES</td>
                        <td class='text ' data-title='BASIC'>109/KG</td>
                        <td class='text ' data-title='GOLD'>99/KG</td>
                        <td class='text ' data-title='PLATINUM'>89/KG</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>IRONING</td>
                        <td class='text ' data-title='BASIC'>18 Rs/Pc</td>
                        <td class='text ' data-title='GOLD'>16 Rs/Pc</td>
                        <td class='text ' data-title='PLATINUM'>15 Rs/pc</td>
                    </tr>


                    <tr>
                        <th colspan="4" class='text-center' style="text-align:center">DRYCLEANING</th>
                    </tr>



                    <tr class=''>
                        <td class='text ' data-title=''>DRY CLEANING</td>
                        <td class='text ' data-title='BASIC'>Please refer Price list</td>
                        <td class='text ' data-title='GOLD'>10 %Off On Price list</td>
                        <td class='text ' data-title='PLATINUM'>20% Off On Price list</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''></td>
                        <td class='text ' data-title='BASIC'></td>
                        <td class='text ' data-title='GOLD'></td>
                        <td class='text ' data-title='PLATINUM'></td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>DELIVERY CHARGES</td>
                        <td class='text ' data-title='BASIC'>On Actuals</td>
                        <td class='text ' data-title='GOLD'>Free Delivery Slots Available</td>
                        <td class='text ' data-title='PLATINUM'>FREE</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>DELIVERY TIME</td>
                        <td class='text ' data-title='BASIC'>48 Hrs</td>
                        <td class='text ' data-title='GOLD'>48 Hrs</td>
                        <td class='text ' data-title='PLATINUM'>24 Hrs</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>SPOT CLEANING</td>
                        <td class='text ' data-title='BASIC'>YES</td>
                        <td class='text ' data-title='GOLD'>YES</td>
                        <td class='text ' data-title='PLATINUM'>YES</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>DISINFECTION</td>
                        <td class='text ' data-title='BASIC'>YES</td>
                        <td class='text ' data-title='GOLD'>YES</td>
                        <td class='text ' data-title='PLATINUM'>YES</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>FABRIC CONDITIONING</td>
                        <td class='text ' data-title='BASIC'>YES</td>
                        <td class='text ' data-title='GOLD'>YES</td>
                        <td class='text ' data-title='PLATINUM'>YES</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''>WEEKLY OFFERS</td>
                        <td class='text ' data-title='BASIC'>YES</td>
                        <td class='text ' data-title='GOLD'>YES</td>
                        <td class='text ' data-title='PLATINUM'>YES</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title=''></td>
                        <td class='text ' data-title='BASIC'></td>
                        <td class='text ' data-title='GOLD'></td>
                        <td class='text ' data-title='PLATINUM'></td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</section>
<section>
    <div class="container">
        <h4 class="text-center mt-5 mb-3">Detailed Price List</h4>
        <div class='rg-container'>
            <h4 class="text-center">Men Price List</h4>

            <table class='rg-table zebra' summary='Hed'>

                <thead>
                    <tr>
                        <th class='text '>MEN</th>
                        <th class='number '>Price</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class=''>
                        <td class='text ' data-title='MEN'>Shirt</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Shirt Silk</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Shirt Woolen</td>
                        <td class='number ' data-title='Price'>220</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Tshirt</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Pant</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Jeans</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Suit Complete</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Waist Coat</td>
                        <td class='number ' data-title='Price'>130</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Long Coat</td>
                        <td class='number ' data-title='Price'>400</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Jacket Full Sleaves</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Jacket Half Sleaves</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Jacket With Hood</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Leather Jacket</td>
                        <td class='number ' data-title='Price'>700</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Sweat Shirt</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Sweat Shirt With Hood</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Sweater Full sleaves Plain</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Sweater Full sleaves Heavy</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Sweater Half</td>
                        <td class='number ' data-title='Price'>200</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Sweater Half Heavy</td>
                        <td class='number ' data-title='Price'>250</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Long Pullover</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Kurta Heavy</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Kurta</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Dhoti</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Achakan</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Safari Suit Coat</td>
                        <td class='number ' data-title='Price'>230</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Safari Suit pant</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>Shorts</td>
                        <td class='number ' data-title='Price'>90</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>PYJAMA</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>capri</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>sweat pants</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>track pants</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>swimming costume</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>under wear</td>
                        <td class='number ' data-title='Price'>50</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='MEN'>vest</td>
                        <td class='number ' data-title='Price'>50</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <hr>
        <div class='rg-container'>
            <table class='rg-table zebra' summary='Hed'>

                <thead>
                    <tr>
                        <th class='text '>WOMEN</th>
                        <th class='number '>Price</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Kurta Plain</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Kurta Heavy</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>salwar Plain</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>salwar Heavy</td>
                        <td class='number ' data-title='Price'>200</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Plazo Plain</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Plazo Heavy</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Duppatta Plain</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Duppatta Heavy</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Saree Plain</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Saree Heavy</td>
                        <td class='number ' data-title='Price'>400</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Petticoat</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Blouse</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Blouse Heavy</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Dress Plain</td>
                        <td class='number ' data-title='Price'>270</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Dress Heavy</td>
                        <td class='number ' data-title='Price'>380</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Dress long plain</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Dress Long Heavy</td>
                        <td class='number ' data-title='Price'>450</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Lehenga Plain</td>
                        <td class='number ' data-title='Price'>600</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Lehenga Heavy</td>
                        <td class='number ' data-title='Price'>900</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Skirt Short Plain</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Skirt Short Heavy</td>
                        <td class='number ' data-title='Price'>250</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Skirt Long Plain</td>
                        <td class='number ' data-title='Price'>210</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Skirt Long Heavy</td>
                        <td class='number ' data-title='Price'>250</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Top Plain</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Top Heavy</td>
                        <td class='number ' data-title='Price'>220</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Top woolen</td>
                        <td class='number ' data-title='Price'>210</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Tshirt</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Pant</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Jeans</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Jumper</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Dangree</td>
                        <td class='number ' data-title='Price'>270</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Legging</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Capri</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Slacks</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Stole Plain</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Stole Heavy</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Shawl Plain</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Shawl Heavy</td>
                        <td class='number ' data-title='Price'>400</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Scarf</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Coat</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Long Coat</td>
                        <td class='number ' data-title='Price'>400</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Jacket Full Sleaves</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Jacket Half Sleaves</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Jacket With Hood</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Leather Jacket</td>
                        <td class='number ' data-title='Price'>700</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Sweat Shirt</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Sweat Shirt With Hood</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Sweater Full sleaves Plain</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Sweater Full sleaves Heavy</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Sweater Half</td>
                        <td class='number ' data-title='Price'>200</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Sweater Half Heavy</td>
                        <td class='number ' data-title='Price'>250</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Long Pullover</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Stocking</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Track Pants</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='WOMEN'>Brassieres</td>
                        <td class='number ' data-title='Price'></td>
                    </tr>

                </tbody>
            </table>

        </div>
        <hr>
        <div class='rg-container'>
            <table class='rg-table zebra' summary='Hed'>
                <thead>
                    <tr>
                        <th class='text '>KIDS</th>
                        <th class='number '>Price</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Shirt</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Shirt Woolen</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Tshirt</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Top Plain</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Top Heavy</td>
                        <td class='number ' data-title='Price'>130</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Pant</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Jeans</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Capri</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Jumper</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Dangree</td>
                        <td class='number ' data-title='Price'>220</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Frock Plain</td>
                        <td class='number ' data-title='Price'>140</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Frock Heavy</td>
                        <td class='number ' data-title='Price'>160</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Skirt Short Plain</td>
                        <td class='number ' data-title='Price'>130</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Skirt Short Heavy</td>
                        <td class='number ' data-title='Price'>200</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Skirt Long Plain</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Skirt Long Heavy</td>
                        <td class='number ' data-title='Price'>250</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Dress Plain</td>
                        <td class='number ' data-title='Price'>220</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Dress Heavy</td>
                        <td class='number ' data-title='Price'>260</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Dress long plain</td>
                        <td class='number ' data-title='Price'>260</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Dress Long Heavy</td>
                        <td class='number ' data-title='Price'>390</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Sherwani</td>
                        <td class='number ' data-title='Price'>470</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Kurta Plain</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Kurta Heavy</td>
                        <td class='number ' data-title='Price'>280</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Salwar Plain</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Salwar Heavy</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Dupatta Plain</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Dupatta Heavy</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Blouse</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Blouse Heavy</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Lehenga Plain</td>
                        <td class='number ' data-title='Price'>600</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Lehenga Heavy</td>
                        <td class='number ' data-title='Price'>900</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Suit Complete</td>
                        <td class='number ' data-title='Price'>280</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Waist Coat</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Long Coat</td>
                        <td class='number ' data-title='Price'>320</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Long Pullover</td>
                        <td class='number ' data-title='Price'>190</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Jacket Full Sleaves</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Jacket Half Sleaves</td>
                        <td class='number ' data-title='Price'>190</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Jacket With Hood</td>
                        <td class='number ' data-title='Price'>280</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Sweat Shirt</td>
                        <td class='number ' data-title='Price'>190</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Sweat Shirt With Hood</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Sweater Full sleaves Plain</td>
                        <td class='number ' data-title='Price'>190</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Sweater Full sleaves Heavy</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Sweater Half</td>
                        <td class='number ' data-title='Price'>160</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Sweater Half Heavy</td>
                        <td class='number ' data-title='Price'>200</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>swimming costume</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Legging</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Track Pant</td>
                        <td class='number ' data-title='Price'>80</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='KIDS'>Baby Blanket</td>
                        <td class='number ' data-title='Price'>200</td>
                    </tr>

                </tbody>
            </table>
        </div>

        <hr>
        <div class='rg-container'>
            <table class='rg-table zebra' summary='Hed'>

                <thead>
                    <tr>
                        <th class='text '>HOUSE HOLD</th>
                        <th class='number '>Price</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Curtain Door</td>
                        <td class='number ' data-title='Price'>210</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Curtain Door With Lining</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Curtain Window</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Curtain Window With Ling</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Door Blind</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Window Blind</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Blanket Single</td>
                        <td class='number ' data-title='Price'>400</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Blanket Double</td>
                        <td class='number ' data-title='Price'>500</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Quilt Single</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Quilt Double</td>
                        <td class='number ' data-title='Price'>440</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Quilt cover Single</td>
                        <td class='number ' data-title='Price'>350</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Quilt Cover Double</td>
                        <td class='number ' data-title='Price'>440</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Duvet</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Duvet Double</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Bedsheet Single</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Bedsheet Double</td>
                        <td class='number ' data-title='Price'>210</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Bed spread Single</td>
                        <td class='number ' data-title='Price'>240</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Bed Spread Double</td>
                        <td class='number ' data-title='Price'>300</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Sofa Cover Small</td>
                        <td class='number ' data-title='Price'>90</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Sofa Cover Big</td>
                        <td class='number ' data-title='Price'>100</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Cusion Small</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Cushion Big</td>
                        <td class='number ' data-title='Price'>180</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Cushion Cover Small</td>
                        <td class='number ' data-title='Price'>90</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Cushion Cover Big</td>
                        <td class='number ' data-title='Price'>120</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Pillow Cover</td>
                        <td class='number ' data-title='Price'>90</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Chair Cover</td>
                        <td class='number ' data-title='Price'>90</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Hand Towel</td>
                        <td class='number ' data-title='Price'>90</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Towel</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Towel Heavy</td>
                        <td class='number ' data-title='Price'>200</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Table Cloth</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Table Mat</td>
                        <td class='number ' data-title='Price'>150</td>
                    </tr>


                    <tr class=''>
                        <td class='text ' data-title='HOUSE HOLD'>Foot Mat</td>
                        <td class='number ' data-title='Price'>60</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</section>
@endsection