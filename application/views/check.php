
    


        <div class="card mt-4">
      <div class="card-body">
      </div>
    </div>
     <div class="card shadow">
      <div class="card-body">
      </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-md-center text-white">
      <div class="col col-lg-2">
      </div>
      <div class="col-md-auto col-lg-5">

        <div class="card text-white">
          <h6 class="card-header">
            <img class="mb-2" width="30" height="30" src="https://img.icons8.com/cotton/30/winter-games--v1.png" alt="winter-games--v1"/> Cek ID Game Anda.</h6>
          <div class="card-body">
            
            <form id="checkForm">
            <div class="row">
            <div class="col-md-8 mt-2">
              <input type="number" name="id" id="id" class="form-control" placeholder="ID Game" aria-label="ID Game" required>
            </div>
            <div class="col-md-4 mt-2">
              <input type="number" name="zone" id="zone" class="form-control" placeholder="Zone" aria-label="Zone" required>
            </div>
            
          </div>
            <div class="d-grid gap-2 mt-4">
              <button class="btn btn-warning text-white" type="submit">Cek ID</button>
            </div>
          </form>
          </div>
        </div>

      </div>
      <div class="col col-lg-4">
        <table class="table table-dark table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Nickname</th>
      <th scope="col">Diamond</th>
    </tr>
  </thead>
  <tbody>

 
      
  
         <tr>
          <td id="result"></td>
          <td>
            <a href="" class="btn btn-info btn-sm text-white">Top UP</a>
          </td>
        </tr>
        
  </tbody>
</table>
      
      
      
      </div>
    </div>
    </div>

  



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    document.getElementById('checkForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const id = document.getElementById('id').value;
    const zone = document.getElementById('zone').value;
    const url = 'https://api.isan.eu.org/nickname/ml?id=' + id + '&zone=' + zone;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response) {
                    document.getElementById('result').innerHTML = response.name;
                } else {
                    document.getElementById('result').innerHTML = 'Data tidak ada'+ response.name;
                }
            } else {
                document.getElementById('result').innerHTML = '<span class="text-danger">Data tidak ditemukan</span>';
            }
        }
    };
    xhr.send();
});
</script>
    <script>
      AOS.init();
      
$('#wa').on('input', function() {
    if (this.value.startsWith('08')) {
        this.value = "628";
    }
    this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');
});

$('.currency-idr').each(function() {
    var monetary_value = $(this).text();
    var i = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
    }).format(monetary_value);
    $(this).text(i);
});

function parseNumber(strg) {
    var strg = strg || "";
    var decimal = '.';
    strg = strg.replace(/[^0-9$.,]/g, '');
    if (strg.indexOf(',') > strg.indexOf('.')) decimal = ',';
    if ((strg.match(new RegExp("\\" + decimal, "g")) || []).length > 1) decimal = "";
    if (decimal !== "" && (strg.length - strg.indexOf(decimal) - 1 == 3) && strg.indexOf("0" + decimal) !== 0) decimal =
        "";
    strg = strg.replace(new RegExp("[^0-9$" + decimal + "]", "g"), "");
    strg = strg.replace(',', '.');
    return parseFloat(strg);
}



function get_price(id = null) {

        var jumlah = 1;
    

    $("#product_id").val(id);

    $.ajax({
        url: 'https://rrqtopup.com/id/order/get-price/' + id,
        type: 'POST',
        data: 'jumlah=' + jumlah,
        dataType: 'JSON',
        success: function(result) {
            for (let price in result) {
                $("#price-method-" + result[price].method).text('Rp ' + result[price].price);


                var harga = parseNumber(result[price].price);
                var textinfo = (result[price].info);

                var balance = document.getElementById("price-method-balance");
                
                if (balance !== null) {
                    balance.innerHTML = 'Rp ' + (Math.round((harga))).toLocaleString('id-ID');
                }
                
                
                    var method1 = document.getElementById("price-method-Midtrans-qris");
                    
                    if (method1 !== null) {
                        var feePercentage1 = 0.7;
                        var feeNominal1 = 0;
                        
                        var calculatedPrice1 = (Math.round((harga * (feePercentage1 + 100) / 100) + feeNominal1)).toLocaleString('id-ID');
                        method1.innerHTML = 'Rp ' + calculatedPrice1;
                    }
                    
                
                    var method35 = document.getElementById("price-method-Xendit-BNI");
                    
                    if (method35 !== null) {
                        var feePercentage35 = 0;
                        var feeNominal35 = 5000;
                        
                        var calculatedPrice35 = (Math.round((harga * (feePercentage35 + 100) / 100) + feeNominal35)).toLocaleString('id-ID');
                        method35.innerHTML = 'Rp ' + calculatedPrice35;
                    }
                    
                
                    var method36 = document.getElementById("price-method-Xendit-MANDIRI");
                    
                    if (method36 !== null) {
                        var feePercentage36 = 0;
                        var feeNominal36 = 5000;
                        
                        var calculatedPrice36 = (Math.round((harga * (feePercentage36 + 100) / 100) + feeNominal36)).toLocaleString('id-ID');
                        method36.innerHTML = 'Rp ' + calculatedPrice36;
                    }
                    
                
                    var method37 = document.getElementById("price-method-Xendit-BRI");
                    
                    if (method37 !== null) {
                        var feePercentage37 = 0;
                        var feeNominal37 = 5000;
                        
                        var calculatedPrice37 = (Math.round((harga * (feePercentage37 + 100) / 100) + feeNominal37)).toLocaleString('id-ID');
                        method37.innerHTML = 'Rp ' + calculatedPrice37;
                    }
                    
                
                    var method38 = document.getElementById("price-method-Xendit-PERMATA");
                    
                    if (method38 !== null) {
                        var feePercentage38 = 0;
                        var feeNominal38 = 5000;
                        
                        var calculatedPrice38 = (Math.round((harga * (feePercentage38 + 100) / 100) + feeNominal38)).toLocaleString('id-ID');
                        method38.innerHTML = 'Rp ' + calculatedPrice38;
                    }
                    
                
                    var method40 = document.getElementById("price-method-Xendit-ALFAMART");
                    
                    if (method40 !== null) {
                        var feePercentage40 = 0;
                        var feeNominal40 = 6000;
                        
                        var calculatedPrice40 = (Math.round((harga * (feePercentage40 + 100) / 100) + feeNominal40)).toLocaleString('id-ID');
                        method40.innerHTML = 'Rp ' + calculatedPrice40;
                    }
                    
                
                    var method193 = document.getElementById("price-method-Midtrans-ID_OVO");
                    
                    if (method193 !== null) {
                        var feePercentage193 = 0.7;
                        var feeNominal193 = 0;
                        
                        var calculatedPrice193 = (Math.round((harga * (feePercentage193 + 100) / 100) + feeNominal193)).toLocaleString('id-ID');
                        method193.innerHTML = 'Rp ' + calculatedPrice193;
                    }
                    
                
                    var method194 = document.getElementById("price-method-Midtrans-ID_DANAewallet");
                    
                    if (method194 !== null) {
                        var feePercentage194 = 0.7;
                        var feeNominal194 = 0;
                        
                        var calculatedPrice194 = (Math.round((harga * (feePercentage194 + 100) / 100) + feeNominal194)).toLocaleString('id-ID');
                        method194.innerHTML = 'Rp ' + calculatedPrice194;
                    }
                    
                
                    var method195 = document.getElementById("price-method-Midtrans-ID_SHOPEEPAY");
                    
                    if (method195 !== null) {
                        var feePercentage195 = 0.7;
                        var feeNominal195 = 0;
                        
                        var calculatedPrice195 = (Math.round((harga * (feePercentage195 + 100) / 100) + feeNominal195)).toLocaleString('id-ID');
                        method195.innerHTML = 'Rp ' + calculatedPrice195;
                    }
                    
                
                    var method196 = document.getElementById("price-method-Midtrans-ID_LINKAJA");
                    
                    if (method196 !== null) {
                        var feePercentage196 = 0.7;
                        var feeNominal196 = 0;
                        
                        var calculatedPrice196 = (Math.round((harga * (feePercentage196 + 100) / 100) + feeNominal196)).toLocaleString('id-ID');
                        method196.innerHTML = 'Rp ' + calculatedPrice196;
                    }
                    
                
                    var method197 = document.getElementById("price-method-Midtrans-ID_DANA");
                    
                    if (method197 !== null) {
                        var feePercentage197 = 0.7;
                        var feeNominal197 = 0;
                        
                        var calculatedPrice197 = (Math.round((harga * (feePercentage197 + 100) / 100) + feeNominal197)).toLocaleString('id-ID');
                        method197.innerHTML = 'Rp ' + calculatedPrice197;
                    }
                    
                
               
                // var qrisx = document.getElementById("price-method-Xendit-ID_DANAqris");
                // var ovox = document.getElementById("price-method-Xendit-ID_OVO");
                // var danax = document.getElementById("price-method-Xendit-ID_DANAewallet");
                // var shopeex = document.getElementById("price-method-Xendit-ID_SHOPEEPAY");
                // var linkajax = document.getElementById("price-method-Xendit-ID_LINKAJA");
                // var astrapayx = document.getElementById("price-method-Xendit-ID_ASTRAPAY");
                // var vabcax = document.getElementById("price-method-Xendit-BCA");
                // var vabnix = document.getElementById("price-method-Xendit-BNI");
                // var vamandirix = document.getElementById("price-method-Xendit-MANDIRI");
                // var vabrix = document.getElementById("price-method-Xendit-BRI");
                // var vapermatax = document.getElementById("price-method-Xendit-PERMATA");
                // var vaBJBx = document.getElementById("price-method-Xendit-BJB");
                // var vaBSIx = document.getElementById("price-method-Xendit-BSI");
                // var vaSAHABAT_SAMPOERNA = document.getElementById("price-method-Xendit-SAHABAT_SAMPOERNA");
                // var indomaretx = document.getElementById("price-method-Xendit-INDOMARET");
                // var alfamartx = document.getElementById("price-method-Xendit-ALFAMART");
                
                // if (qrisx !== null) {
                //     qrisx.innerHTML = 'Rp ' + (Math.round((harga * 1.007) + 0)).toLocaleString('id-ID');
                // }
                // if (ovox !== null) {
                //     ovox.innerHTML = 'Rp ' + (Math.round(harga * 1.007)).toLocaleString('id-ID');
                // }
                // if (shopeex !== null) {
                //     shopeex.innerHTML = 'Rp ' + (Math.round(harga * 1.007)).toLocaleString('id-ID');
                // }
                // if (danax !== null) {
     …
    </script>
  </body>
</html>
    
    

      
    

    