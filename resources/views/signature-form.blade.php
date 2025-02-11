<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
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

label {
    font-size: 14px;
    font-weight: 500;
    color: #666;
    display: block;
    text-align: left;
    margin-bottom: 6px;
}

input {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    color: #333;
    transition: all 0.3s ease;
    box-sizing: border-box;
}

input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

button {
    background: #007bff;
    color: #fff;
    padding: 14px 24px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
    width: 100%;
}

button:hover {
    background: #0056b3;
    box-shadow: 0 4px 8px rgba(0, 91, 187, 0.3);
}

    </style>
</head>
<body>
    <div class="container">
        <h2>QR Code Tanda Tangan Digital</h2>
        <form action="/signature/generate" method="POST">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Generate QR Code</button>
        </form>
    </div>
</body>
</html>
