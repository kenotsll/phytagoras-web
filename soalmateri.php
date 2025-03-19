<?php
session_start(); // Start the session

// Check if the session variable `id_user` is set
if (!isset($_SESSION['username'])) {
    // If `id_user` session does not exist, redirect to login.php
    header("Location: login.php");
    exit;
}

// If `id_user` exists, display content of index.php
echo "Welcome to the Index Page, username " . $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengenalan Penjumlahan dan Teorema Pythagoras</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  <!-- Link to External CSS -->
  <link rel="stylesheet" href="styles.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <style>
*   {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Nunito', sans-serif;
  }

body {
    background-color: #f0f8ff;
    color: #333;
    padding: 20px;
    font-family: 'Nunito', sans-serif;
  }

/* Header and Navigation */
header {
    background-color: #2c6477;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    padding: 10px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

header img {
    float: left;
    width: 60px;
    margin-left: 20px;
  }

nav {
    float: right;
    margin-right: 50px;
  }

nav ul {
    list-style: none;
    display: flex;
  }

nav ul li {
    margin: 0 15px;
  }

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
  }

.burger {
    display: none;
  }

/* Responsive Navigation */
@media (max-width: 768px) {
    nav ul {
        display: none;
        flex-direction: column;
        position: absolute;
        background-color: #2c6477;
        top: 70px;
        right: 0;
        width: 100%;
    }

    nav ul.active {
        display: flex;
    }

    nav ul li {
        margin: 10px 0;
        text-align: center;
    }

    .burger {
        display: block;
        color: white;
        font-size: 30px;
        float: right;
        margin-right: 20px;
        cursor: pointer;
    }
}

/* Container Styling */
.container {
    margin-top: 70px;
    padding: 30px;
    max-width: 700px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  }

section {
    margin-bottom: 40px;
  }

h1, h2, h3 {
    color: #2c3e50;
  }

h1 {
    text-align: center;
    font-size: 2.5em;
  }

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

table, th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
  }

th {
    background-color: #4c6c81;
    color: #fff;
  }

/* Pythagoras Quiz Styling */
.quiz-container {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
  }

.timer {
    font-size: 20px;
    color: #e74c3c;
    text-align: right;
    margin-bottom: 20px;
  }

.question {
    margin: 25px 0;
  }

.options label {
    display: block;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #f9f9f9;
    border: 2px solid #dcdcdc;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

.options label:hover {
    background-color: #ecf0f1;
  }

input[type="radio"], input[type="checkbox"] {
    margin-right: 10px;
  }

/* Buttons */
.submit-btn {
    background-color: #3498db;
    color: white;
    padding: 12px 25px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

/*form interaktif */
button {
  padding: 10px;
  width: 100%;
  background-color: #007bff;
  color: white;
  order: none;
  border-radius: 4px;
  cursor: pointer;
}
button:hover {
  background-color: #0056b3;
}
h1, h2 {
margin-top: 20px;
color: #333;
}
.explanation {
margin-top: 10px;
background-color: #f9f9f9;
padding: 10px;
border-radius: 5px;
}
.submit-btn:hover {
    background-color: #2980b9;
  }

.submit-btn:disabled {
    background-color: #ccc;
  }

/* Result Section */
.result {
    margin-top: 30px;
    text-align: center;
  }

/* Feedback Form */
form {
    display: flex;
    flex-direction: column;
  }

input, textarea {
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

input[type="submit"] {
    background-color: #2c6477;
    color: white;
    border: none;
    cursor: pointer;    
    transition: background-color 0.3s ease;
  }

input[type="submit"]:hover {
    background-color: #4c6c81;
  }

/* Footer */
footer {
    background-color: #2c6477;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
  }

.social-icons a {
    margin: 0 10px;
    color: #fff;
    text-decoration: none;
  }
  </style>

</head>
<body>
  <!-- Header -->
  <header>
    <img src="https://cdn.discordapp.com/attachments/916463580184989736/1283218718750670902/382f662d-49e3-42bf-ba96-d31ae0f84c9d-removebg-preview.png?ex=66e2320f&is=66e0e08f&hm=ae6c75f494a987698f0a3436e087ea5aa1e40346534ef3fedc2f2122e4c9cb70&" alt="Logo">
    <nav>
      <ul>
        <li><a href="#definisi">Definisi</a></li>
        <li><a href="#contoh">Contoh Soal</a></li>
        <li><a href="#pythagoras">Pythagoras</a></li>
        <li><a href="#latihan soal">latihan soal</a></li>
        <li><a href="#Form Interaktif">Form Interaktif</a></li>
        <li><a href="#Feedback">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <div class="burger">&#9776;</div>
    </nav>
  </header>

  <!-- Content -->
  <div class="container">
    <!-- Definisi -->
    <section id="definisi">
      <h2>Pengenalan Penjumlahan dan Pengurangan Dasar</h2>
      <p>Penjumlahan adalah proses menggabungkan dua atau lebih angka untuk mendapatkan hasil yang disebut jumlah. Pengurangan adalah proses mengurangi satu angka dari angka lain untuk mendapatkan selisih.</p>
    </section>

    <!-- Contoh Penjumlahan dan Pengurangan -->
    <section id="contoh">
      <h3>Contoh Soal Penjumlahan dan Pengurangan Dasar</h3>
      <ul>
        <li><img src="https://i.pinimg.com/564x/18/fb/5e/18fb5e0e869e229021414f549b8000c9.jpg" alt="Gambar penambahan dan pengurangan dasar" width="300"></li>
        <li>Soal pertama: 9 + 4 = 13, sedangkan soal kedua: 9 - 4 = 5</li>
        <li>Soal ketiga: 8 + 6 = 14, sedangkan soal keempat: 8 - 6 = 2</li>
        <li>Soal kelima: 10 + 3 = 13, sedangkan soal keenam: 10 - 3 = 7</li>
      </ul>
    </section>

    <!-- Teorema Pythagoras -->
    <section id="pythagoras">
      <h2>Pengertian Teorema Pythagoras</h2>
      <p>Teorema Pythagoras adalah prinsip dasar dalam matematika yang menghubungkan panjang sisi-sisi segitiga siku-siku. Teorema ini menyatakan bahwa dalam sebuah segitiga siku-siku, kuadrat panjang sisi miring (hipotenusa) sama dengan jumlah kuadrat panjang dua sisi lainnya.</p>
      <p>\( a^2 + b^2 = c^2 \)</p>
      <p>Di mana:</p>
      <ul>
        <li><b>a</b> dan <b>b</b> adalah panjang dua sisi yang saling tegak lurus</li>
        <li><b>c</b> adalah panjang sisi miring (hipotenusa)</li>
      </ul>
    </section>

    <!-- Tabel Pythagoras -->
    <section id="tabel">
      <h3>Tabel Tripel Pythagoras</h3>
      <table border="1">
        <tr>
          <th>No.</th>
          <th>p</th>
          <th>q</th>
          <th>p<sup>2</sup> - q<sup>2</sup></th>
          <th>2pq</th>
          <th>p<sup>2</sup> + q<sup>2</sup></th>
          <th>Tripel Pythagoras</th>
        </tr>
        <tr>
          <td>1.</td>
          <td>2</td>
          <td>1</td>
          <td>3</td>
          <td>4</td>
          <td>5</td>
          <td>3, 4, 5</td>
        </tr>
        <tr>
          <td>2.</td>
          <td>3</td>
          <td>1</td>
          <td>8</td>
          <td>6</td>
          <td>10</td>
          <td>8, 6, 10</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>3</td>
          <td>2</td>
          <td>5</td>
          <td>12</td>
          <td>13</td>
          <td>5, 12, 13</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>4</td>
          <td>1</td>
          <td>15</td>
          <td>8</td>
          <td>17</td>
          <td>15, 8, 17</td>
        </tr>
        <tr>
          <td>5.</td>
          <td>4</td>
          <td>2</td>
          <td>12</td>
          <td>16</td>
          <td>20</td>
          <td>12, 16, 20</td>
        </tr>
      </table>
    </section>

    <!-- Pythagoras Quiz -->
    <section id="latihan soal">
      <h3>Kuis Teorema Pythagoras</h3>
      <div class="container">
        <h1>Pythagoras Quiz</h1>
        <div class="timer">Time Remaining: <span id="time">10:00</span></div>

        <form id="quizForm">
          <!-- Question 1 -->
          <div class="question">
            <p><strong>1. Pada segitiga siku-siku dengan panjang sisi alas 9 cm dan sisi tegak 12 cm, berapakah panjang sisi miringnya?</strong></p>
            <div class="options">
              <label><input type="radio" name="q1" value="a"> a) 10 cm</label>
              <label><input type="radio" name="q1" value="b"> b) 15 cm</label>
              <label><input type="radio" name="q1" value="c"> c) 12 cm</label>
              <label><input type="radio" name="q1" value="d"> d) 13 cm</label>
              <label><input type="radio" name="q1" value="e"> e) 14 cm</label>
            </div>
          </div>

          <!-- Question 2 -->
          <div class="question">
            <p><strong>2. Pilih semua jawaban yang benar untuk panjang sisi miring segitiga siku-siku dengan alas 8 cm dan sisi tegak 15 cm.</strong></p>
            <div class="options">
              <label><input type="checkbox" name="q2" value="a"> a) 17 cm</label>
              <label><input type="checkbox" name="q2" value="b"> b) 18 cm</label>
              <label><input type="checkbox" name="q2" value="c"> c) 16 cm</label>
              <label><input type="checkbox" name="q2" value="d"> d) 20 cm</label>
              <label><input type="checkbox" name="q2" value="e"> e) 13 cm</label>
            </div>
          </div>

          <!-- Question 3 -->
          <div class="question">
            <p><strong>3. Hitung panjang sisi miring dari segitiga siku-siku dengan panjang alas 6 cm dan tinggi 8 cm.</strong></p>
            <input type="text" name="q3" placeholder="Jawaban dalam cm">
          </div>

          <!-- Question 4 -->
          <div class="question">
            <p><strong>4. Pilih semua sisi yang bisa menjadi sisi miring segitiga siku-siku:</strong></p>
            <div class="options">
              <label><input type="checkbox" name="q4" value="a"> a) 13 cm, 5 cm, 12 cm</label>
              <label><input type="checkbox" name="q4" value="b"> b) 15 cm, 9 cm, 12 cm</label>
              <label><input type="checkbox" name="q4" value="c"> c) 10 cm, 6 cm, 8 cm</label>
              <label><input type="checkbox" name="q4" value="d"> d) 25 cm, 7 cm, 24 cm</label>
              <label><input type="checkbox" name="q4" value="e"> e) 17 cm, 8 cm, 15 cm</label>
            </div>
          </div>

          <!-- Question 5: True/False Table -->
          <div class="question">
            <p><strong>5. Pilih Benar atau Salah untuk pernyataan berikut:</strong></p>
            <table class="benar-salah-table">
              <tr>
                <th>Pernyataan</th>
                <th>Benar</th>
                <th>Salah</th>
              </tr>
              <tr>
                <td>a) Sisi miring dari segitiga dengan sisi lainnya 9 cm dan 12 cm adalah 15 cm.</td>
                <td><input type="radio" name="q5a" value="benar"></td>
                <td><input type="radio" name="q5a" value="salah"></td>
              </tr>
              <tr>
                <td>b) Segitiga dengan panjang sisi alas 8 cm dan sisi tegak 15 cm memiliki sisi miring 17 cm.</td>
                <td><input type="radio" name="q5b" value="benar"></td>
                <td><input type="radio" name="q5b" value="salah"></td>
              </tr>
              <tr>
                <td>c) Pythagoras hanya berlaku untuk segitiga sama sisi.</td>
                <td><input type="radio" name="q5c" value="benar"></td>
                <td><input type="radio" name="q5c" value="salah"></td>
              </tr>
            </table>
          </div>
          <button type="button" class="submit-btn" id="submitQuiz">Submit</button>
        </form>
        <div id="result" class="result"></div>
      </div>
    </section>

    <section id ="Form Interaktif">
      <h3>Form Interaktif</h3>
      <body>
      <div class="container">
          <label for="a">Nilai A²</label>
          <input type="number" id="a" placeholder="Masukkan nilai A²">
  
          <label for="b">Nilai B²</label>
          <input type="number" id="b" placeholder="Masukkan nilai B²">
  
          <button onclick="hitungPythagoras()">HASIL</button>
  
          <h1 id="hasil">Nilai C akan muncul di sini</h1>
          <div id="explanation" class="explanation" style="display: none;">
              <h2>Langkah Perhitungan</h2>
              <p id="steps"></p>
          </div>
      </div>
    </body>
  </section>

    <!-- Form Feedback -->
    <section id="Feedback">
      <h3>Feedback</h3>
      <form action="/submit-feedback" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
        <label for="region">Asal Daerah:</label>
        <input type="text" id="region" name="region" placeholder="Masukkan asal daerah Anda" required>
        <label for="school-level">Tingkat Sekolah:</label>
        <select id="school-level" name="school-level" required>
          <option value="">Pilih tingkat sekolah</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA">SMA</option>
        </select>
        <label for="message">Pesan atau Saran:</label>
        <textarea id="message" name="message" rows="5" placeholder="Tulis feedback Anda" required></textarea>
        <input type="submit" value="Kirim">
      </form>
    </section>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 - Pembelajaran Matematika. Kunjungi Instagram kami!</p>
    <div class="social-icons">
      <a href="https://www.instagram.com/nannyhm_?igsh=NTA2b2M3YjZ0MTQ0" target="_blank">Instagram Adnan</a>
      <a href="https://www.instagram.com/baymaxsm?igsh=YzRzMWV6aHZlcHFq" target="_blank">Instagram Syauqi</a>
    </div>
  </footer>
  <script>
  let timer = 600; // 10 minutes in seconds
  let timerElement = document.getElementById('time');
  let interval = setInterval(updateTimer, 1000);

  function updateTimer() {
    const minutes = Math.floor(timer / 60);
    const seconds = timer % 60;
    timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    if (timer === 0) {
      clearInterval(interval);
      submitQuiz();
    }
    timer--;
  }

  document.getElementById('submitQuiz').addEventListener('click', submitQuiz);

  function submitQuiz() {
    clearInterval(interval);
    document.getElementById('submitQuiz').disabled = true;

    const form = document.forms['quizForm'];
    let score = 0;

    // Correct answers
    const correctAnswers = {
      q1: 'd',
      q2: ['a'],
      q3: '10',
      q4: ['a', 'c', 'd'],
      q5a: 'Salah',
      q5b: 'Benar',
      q5c: 'Salah'
    };

    // Disable all form inputs after submit
    const allInputs = form.querySelectorAll('input');
    allInputs.forEach(input => {
      input.disabled = true; // Disable each input (radio, checkbox, text)
    });

    // Question 1
    if (form.q1.value === correctAnswers.q1) score += 25;

    // Question 2 (multiple correct answers)
    const q2Answers = Array.from(form.q2).filter(input => input.checked).map(input => input.value);
    if (JSON.stringify(q2Answers) === JSON.stringify(correctAnswers.q2)) score += 25;

    // Question 3
    if (form.q3.value === correctAnswers.q3) score += 25;

    // Question 4 (multiple correct answers)
    const q4Answers = Array.from(form.q4).filter(input => input.checked).map(input => input.value);
    if (JSON.stringify(q4Answers.sort()) === JSON.stringify(correctAnswers.q4.sort())) score += 25;

    // Question 5
    if (form.q5a.value === correctAnswers.q5a) score += 8.33;
    if (form.q5b.value === correctAnswers.q5b) score += 8.33;
    if (form.q5c.value === correctAnswers.q5c) score += 8.33;

    const totalScore = Math.min(100, Math.round(score));

    document.getElementById('result').innerHTML = `
      <div class="score">Your Score: ${totalScore}/100</div>
      <p class="Kunci Jawaban">Kunci Jawaban:</p>
      <ul>
        <li>1. d) 13 cm</li>
        <li>2. a) 17 cm</li>
        <li>3. 10 cm</li>
        <li>4. a, c, d) Pilihan ganda kategori</li>
        <li>5. a) Salah, b) Benar, c) Salah</li>
      </ul>
    `;
  }
  function hitungPythagoras() {
    let a = parseFloat(document.getElementById('a').value);
    let b = parseFloat(document.getElementById('b').value);

    if (isNaN(a) || isNaN(b)) {
        document.getElementById('hasil').innerHTML = "Masukkan angka yang valid untuk a dan b!";
        document.getElementById('explanation').style.display = "none";
        return;
    }

    // Menghitung c menggunakan rumus a² + b² = c²
    let c = Math.sqrt(a * a + b * b).toFixed(2);

    // Menampilkan hasil perhitungan c
    document.getElementById('hasil').innerHTML = `Nilai C: ${c}`;
    document.getElementById('explanation').style.display = "block";

    // Menampilkan langkah-langkah perhitungan
    document.getElementById('steps').innerHTML = 
        `Langkah perhitungan:<br> 
        a² + b² = c²<br> 
        ${a}² + ${b}² = ${a * a} + ${b * b} = ${(a * a + b * b).toFixed(2)}<br>
        √(${(a * a + b * b).toFixed(2)}) = ${c}`;
  }
</script>
</body>
</html>
