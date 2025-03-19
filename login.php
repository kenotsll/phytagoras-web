<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Merriweather:wght@400&display=swap" rel="stylesheet">
    <style>
      /* General styling */
      body {
        background: linear-gradient(135deg, #2C6477, #fad0c4);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Nunito', sans-serif;
      }
      .login-container {
        display: flex;
        max-width: 800px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
      }
      .left-section {
        background: linear-gradient(135deg, #2C6477, #fad0c4);
        padding: 40px;
        color: white;
        width: 50%;
        text-align: center;
      }
      .left-section img {
        width: 100px;
        margin-bottom: 20px;
        border-radius: 50%;
      }
      .left-section h2 {
        font-weight: bold;
        font-size: 1.8em;
      }
      .left-section p {
        font-family: 'Merriweather', serif;
        font-size: 1em;
        margin-top: 15px;
      }
      .right-section {
        padding: 40px;
        width: 50%;
      }
      .right-section h3 {
        font-weight: bold;
        color: #ff647a;
      }
      .form-control {
        border: none;
        border-radius: 20px;
        background-color: #f3f3f3;
        padding: 15px;
        margin-bottom: 20px;
      }
      .btn-custom {
        border-radius: 20px;
        background: linear-gradient(135deg, #ff9a9e, #fad0c4);
        color: white;
        font-weight: bold;
        width: 100%;
      }
      .btn-custom:hover {
        background: linear-gradient(135deg, #fad0c4, #ff9a9e);
      }
    </style>
  </head>
  <body>
    <div class="login-container">
      <div class="left-section">
        <img src="https://cdn.discordapp.com/attachments/916463580184989736/1283218718490361928/382f662d-49e3-42bf-ba96-d31ae0f84c9d.jpeg?ex=673497cf&is=6733464f&hm=4c5bc1ca97ad089e33bef31f9780521a18982b20e214ad3ba62e2aa8aa91d890&" alt="Logo">
        <h2>Selamat datang!</h2>
        <p>Belajar pertambahan dan pengurangan serta phytagoras, Terdapat materi yang lengkap dan latihan soal yang lengkap hanya disini!</p>
      </div>
      <div class="right-section">
        <h3 class="text-center">Masuk Ke Akun Anda!</h3>
        <form action="proses_login.php" method="post">
          <input type="username" name="username" class="form-control" placeholder="Username" required>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <button type="submit" class="btn btn-custom mt-3">Sign In</button>
        </form>
      </div>
    </div>
  </body>
</html>
