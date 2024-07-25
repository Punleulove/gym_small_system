<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Report (Printable)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2y ruptured jeans 369yTuIn XxQT6VWvRXfu eAMKuCS VXiblLQsnl_QzONAW9vQz0z9xyM7+H (optional) bootstrap/js/popper.min.js"
        crossorigin="anonymous">
    <style>
        @media print {
            body {
                margin: 0;
               
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Membership Report</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($report as $membership)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $membership->name }}</td>
                        <td>{{ $membership->pname }}</td>
                        <td>{{ number_format($membership->price, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No memberships found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if (isset($total))
            <p class="text-end">Total Price: {{ number_format($total, 2) }}</p>
        @endif
    </div>

</body>

</html>
