let dataArray = [];
        function addData() {
          const input = document.getElementById("dataInput");
          const value = parseInt(input.value);
          if (!isNaN(value)) {
            dataArray.push(value);
          }
          input.value = "";
        }
        function handleOperation() {
          const op = document.getElementById("operation").value;
          const resultBox = document.getElementById("result");
          let result = "";
          if (op === "display") {
            result = dataArray.join(", ");
          } else if (op === "count") {
            result = dataArray.length;
          } else if (op === "sum") {
            result = dataArray.reduce((a, b) => a + b, 0);
          } else if (op === "average") {
            result = dataArray.length ? (dataArray.reduce((a, b) => a + b, 0) / dataArray.length).toFixed(2) : 0;
          } else if (op === "max") {
            result = dataArray.length ? Math.max(...dataArray) : "N/A";
          } else if (op === "min") {
            result = dataArray.length ? Math.min(...dataArray) : "N/A";
          } else if (op === "ganjil") {
            result = dataArray.filter(x => x % 2 !== 0).join(", ");
          } else if (op === "genap") {
            result = dataArray.filter(x => x % 2 === 0).join(", ");
          } else if (op === "hapus") {
            dataArray = [];
            result = "Data dihapus.";
          }
          resultBox.value = result;
        }