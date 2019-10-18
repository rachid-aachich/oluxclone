
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#addBalance">Add Balance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#history">Last 10 Deposits</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active show" id="addBalance">
      <div class="container-fluid ">
        <h3>Add Balance</h3>
        <div class="row">
          <div class="col-sm">
            <form id="formAddBalance">
              <div class="form-group col-lg-12">
                <label class="col-form-label col-form-label-lg" for="method">Method</label> 
                <select  multiple="" id="method" name="method" class="form-control" size=7>
                  <option value='bitcoin' selected >Bitcoin</option>
                  <option value='perfectmoney' >PerfectMoney</option>
                  <option value='ethereum' >Ethereum</option>
                  <option value='litecoin' >Litecoin</option>
                  <option value='bcash' >BitcoinCash</option>
                  <option value='payeer' >Payeer</option>  
                  <option value='advcash' >Advcash</option>  
                </select>
              </div>
              <div class="form-group col-lg-6 ">
                <label class="col-form-label col-form-label-lg" for="amount">Amount</label> 
                <input placeholder="20" type="text" name="amount" class="form-control" required/>
              </div>
              <div class="form-group col-lg-6 ">
                <button id="addBalanceButton" type='submit' form="formAddBalance" class='btn btn-primary btn-lg'><i class="fas fa-plus"></i> Add Balance</button>
              </div>
            </form>
          </div>
          <div class="col-sm">
            <div class="alert alert-light" >
              <ul>
                <li>After payment funds will be added automatically to your accounut <b>INSTANTLY</b></li>
                <li><b>Perfectmoney</b>/<b>Bitcoin</b>/<b>Litecoin</b>/<b>Ethereum</b>/ <b>Bitcoin Cash</b> / <b>Payeer</b> is a secure way to fund your account </li>
                <li>Min/Max is 5 USD/5000 USD</li>
                <li><b>Buyer Protection</b>- any time you like , you can ask for <b>BALANCE REFUND !</b></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="tab-pane fade" id="history">
    <table width="100%"  class="table table-striped table-bordered table-sm" id="table">
      <thead>
        <tr>
        <th scope="col" ></th>
        <th scope="col" >Date</th>
        <th scope="col">Amount</th>
        <th scope="col">Method</th>
        <th scope="col">Before Balance</th>
        <th scope="col">After Balance</th>   
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
if(window.location.hash != "") {
  $("#method").val(window.location.hash.substring(1));
}

$("#formAddBalance").submit(function() {
$('#addBalanceButton').prop('disabled', true);
    $.ajax({
           type: "POST",
           url: 'addBalanceAction.html',
           data: $("#formAddBalance").serialize(), // serializes the form's elements.
           success: function(data)
           {
            if (data == '01') {
              alert('Please enter a valid amount and Minimum of $5');
              $('#addBalanceButton').prop('disabled', false);

             }             
             else{
              pageDiv('payment.html?'+data,'Add Balance - Olux SHOP','Payment.html?'+data,0);
             }
           }
         });

    return false; // avoid to execute the actual submit of the form.
});

</script>