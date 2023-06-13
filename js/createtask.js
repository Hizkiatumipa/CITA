function buatTask() {
    // Mendapatkan nilai input dari pengguna
    var taskName = document.getElementById("masukkan-task").value;
    var dueDate = document.getElementById("input-date-to").value;
  
    // Membuat elemen baris baru untuk ditambahkan ke tabel "Upcoming"
    var newRow = document.createElement("tr");
    newRow.className = "list-upcoming";
  
    // Membuat elemen checkbox
    var checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    newRow.appendChild(checkbox);
  
    // Membuat elemen span untuk nama tugas
    var taskSpan = document.createElement("span");
    taskSpan.innerText = taskName;
    newRow.appendChild(taskSpan);
  
    // Membuat elemen kolom tanggal jatuh tempo
    var dueDateCol = document.createElement("td");
    dueDateCol.innerText = dueDate;
    newRow.appendChild(dueDateCol);
  
    // Menambahkan baris baru ke tabel "Upcoming"
    var upcomingTable = document.querySelector(".content-upcoming tbody");
    upcomingTable.appendChild(newRow);
  
    // Menghapus nilai input setelah tugas ditambahkan
    document.getElementById("masukkan-task").value = "";
    document.getElementById("input-date-to").value = "";
  }
  