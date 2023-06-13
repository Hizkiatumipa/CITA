function updateTime() {
  var timeElement = document.querySelector('.time');
  var dateElement = document.querySelector('.date');
  var dayElement = document.querySelector('.day');

  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();
  var seconds = currentTime.getSeconds();

  var day = currentTime.toLocaleDateString('en-US', { weekday: 'long' });
  var month = currentTime.toLocaleDateString('en-US', { month: 'long' });
  var date = currentTime.getDate();
  var year = currentTime.getFullYear();

  // Tambahkan nol di depan angka jika angka < 10
  hours = (hours < 10 ? "0" : "") + hours;
  minutes = (minutes < 10 ? "0" : "") + minutes;
  seconds = (seconds < 10 ? "0" : "") + seconds;

  var timeString = hours + ":" + minutes + ":" + seconds;
  var dateString = month + " " + date + ", " + year;

  timeElement.textContent = timeString;
  dateElement.textContent = dateString;
  dayElement.textContent = day;
}

// Panggil updateTime setiap detik (1000ms)
setInterval(updateTime, 1000);