<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Signature</title>
    <style>
     body {
    font-family: 'Poppins', sans-serif;
    background-color: #eef2f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background: linear-gradient(135deg, #ffffff, #f9f9f9);
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    text-align: center;
    width: 100%;
    max-width: 450px;
}

h2 {
    color: #333;
    margin-bottom: 25px;
    font-weight: 600;
}

p {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
}

strong {
    color: #333;
}

img {
    margin-top: 20px;
    max-width: 100%;
    height: auto;
}

a {
    display: inline-block;
    margin-top: 30px;
    padding: 14px 24px;
    text-decoration: none;
    background: #007bff;
    color: #fff;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s ease;
}

a:hover {
    background: #0056b3;
    box-shadow: 0 4px 8px rgba(0, 91, 187, 0.3);
}

    </style>
</head>
<body>
    <div class="container">
        <h2>QR Code untuk {{ $request->name }}</h2>
        <p><strong>Email:</strong> {{ $request->email }}</p>
        <img src="data:image/png;base64,{{ $qrCode }}" alt="QR Code">
        <br>
        <a href="/signature/form">Buat QR Code Lain</a>
    </div>
</body>
</html>
