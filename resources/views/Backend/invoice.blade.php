@extends('backend.master')
@section('content')
    <table class="body-wrap">
        <tbody>
            <tr>
                <td></td>
                <td class="container" width="600">
                    <div class="content">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="content-wrap aligncenter">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="content-block">
                                                        <h2>Thanks For Buy</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="content-block">
                                                        <table class="invoice">
                                                            <tbody>
                                                                <tr>
                                                                    <td>User:{{ $invoice->userName }}<br>Code:
                                                                        {{ $invoice->rand_code }}<br>Start
                                                                        Date:{{ $invoice->join_date }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table class="invoice-items" cellpadding="0"
                                                                            cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>{{ $invoice->pname }}</td>
                                                                                    <td class="alignright">$
                                                                                        {{ $invoice->price }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>End Date:{{ $invoice->end_date }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        {{ $invoice->interval }}/day
                                                                                    </td>
                                                                                </tr>


                                                                                <tr class="total">
                                                                                    <td class="alignright" width="80%">
                                                                                        Total</td>
                                                                                    <td class="alignright">$
                                                                                        {{ $invoice->price }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="content-block">
                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            class="btn btn-success">Pay Mow</button>
                                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#card">Print Card</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="content-block">
                                                        Company Gym
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="footer">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td class="aligncenter content-block">Questions? Email <a href="mailto:">Khoem
                                                punleu</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ url('../pay/image.png') }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade b1" id="card" tabindex="-1" aria-labelledby="card" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="card">Card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body b2" id="card-to-print">
                    <div class="cart">
                        <img src="{{ url('../pay/gymbanner.jpg') }}" alt="John" style="width:100%">
                        <h3 style="color: white">{{ $invoice->name }}</h3>
                        <p class="title">{{ $invoice->interval }}/day</p>
                        <p>End date: {{ $invoice->end_date }}</p>
                        <p>code:{{ $invoice->rand_code }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="print-button" class="btn btn-success">Print</button>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .cart {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 300px;
                margin: auto;
                text-align: center;
                font-family: arial;
                background: black;
                color: white;
            }

            .title {
                color: white;
                font-size: 18px;
            }

            h1 {
                color: white;
            }
        </style>
        <script></script>
    @endsection
