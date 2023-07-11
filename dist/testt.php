<html>
<body>

<form>
  Masukkan bilangan pertama:<br>
  <input type="number" id="num1" value="0" min="10"><br>
  Masukkan bilangan kedua:<br>
  <input type="number" id="num2" value="0"><br><br>
  Jumlah: <span id="result">0</span><br><br>
  Masukkan bilangan ketiga:<br>
  <input type="number" id="num3"><br><br>
  Akhir: <span id="result2">0</span>
</form> 

<script>
function hitungJumlah() {
    var x = document.getElementById("num1").value;
    var y = document.getElementById("num2").value;
    var yy = document.getElementById("num3").value;
    
    // Penanganan input yang tidak valid
    if (isNaN(yy) || isNaN(y)) {
        document.getElementById("result").innerHTML = "Masukkan bilangan yang valid!";
        return;
    }
    
    // Penanganan input yang kosong
    if (x === "" || y === "") {
        x = x || 0;
        y = y || 0;
    }
    
    var z = (parseInt(x) + parseInt(y));
    document.getElementById("result").innerHTML = z;
    var zz = (parseInt(yy) - parseInt(z)).toLocaleString();
    document.getElementById("result2").innerHTML = zz;
}

document.getElementById("num1").addEventListener("input", hitungJumlah);
document.getElementById("num2").addEventListener("input", hitungJumlah);
document.getElementById("num3").addEventListener("input", hitungJumlah);
</script>

</body>
</html>
