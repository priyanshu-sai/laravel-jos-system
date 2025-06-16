<!DOCTYPE html>
<html>
<head>
    <title>JOS PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h3>Job Order Statement - #{{ $jos->id }}</h3>
    <p><strong>Month:</strong> {{ $jos->month }}</p>
    <p><strong>Contractor:</strong> {{ $jos->contractor->name ?? 'N/A' }}</p>
    <p><strong>Conductor:</strong> {{ $jos->conductor->first_name ?? 'N/A'}} {{ $jos->conductor->last_name ?? 'N/A'}}</p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Type of Work</th>
                <th>Work Completed</th>
                <th>Rate</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jos->jobOrders as $i => $job)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $job->typeOfWork->name }}</td>
                <td>{{ $job->actual_work_completed }}</td>
                <td>{{ $job->typeOfWork->rate }}</td>
                <td>{{ $job->actual_work_completed * $job->typeOfWork->rate }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p><strong>Total Amount:</strong> ₹{{ $jos->total_amount }}</p>
</body>
</html>
