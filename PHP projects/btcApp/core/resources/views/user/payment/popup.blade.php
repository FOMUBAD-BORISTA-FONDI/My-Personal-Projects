<!DOCTYPE html>
<html>
<head>
    <title>Deposit Confirmation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .popup-container {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }

        .popup-content {
            font-size: 18px;
            color: #333;
        }

        h2 {
            font-size: 28px;
            color: #5e54a4;
            margin-bottom: 15px;
        }

        p {
            margin: 10px 0;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-right: 10px;
            width: 100%;
            max-width: 150px;
        }

        .btn-back {
            background-color: #5e54a4;
            color: #fff;
        }

        .btn-validate {
            background-color: #d6ac2a;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="popup-container">
        <div class="popup-content">
            <h2>Deposit Confirmation</h2>
            <p>Hello, {{ $user->name }}</p>
            <p>You have a pending deposit with tracking number: {{ $data->trx }}</p>
            {{-- <p>Test: {{ $all }}</p> --}}
            <p>Please review the details and proceed with validation.</p>
            <div class="button-container">
                <a href="{{ route('user.fund') }}" class="btn btn-back">Back</a>
                {{-- <a href="{{ route('user.validate', ['track' => $data->trx]) }}" class="btn btn-validate">Validate</a> --}}
            </div>
        </div>
    </div>
</body>
</html>
