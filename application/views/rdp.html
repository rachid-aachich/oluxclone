<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#filter"><i class="fas fa-filter"></i> Filter</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade show active" id="filter">
    <table class="table table-borderless "><thead><tr><th class='sorttable_nosort'>Country</th>
<th class='sorttable_nosort'>Windows Type</th>
<th class='sorttable_nosort'>Access</th>
<th class='sorttable_nosort'>Detected Hosting</th>
<th class='sorttable_nosort'>Seller</th>
<th class='sorttable_nosort'></th></tr></thead><tbody><tr><td><select class='filterselect form-control input-sm' name="rdp_country"><option value="">ALL</option><option value="Australia">Australia</option><option value="Bangladesh">Bangladesh</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Bulgaria">Bulgaria</option><option value="Canada">Canada</option><option value="China">China</option><option value="Czechia">Czechia</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Greece">Greece</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Japan">Japan</option><option value="Netherlands">Netherlands</option><option value="Poland">Poland</option><option value="Russia">Russia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Singapore">Singapore</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Turkey">Turkey</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Vietnam">Vietnam</option></select></td><td><select class='filterselect form-control input-sm' name="rdp_windows"><option value="">ALL</option><option value="10">10</option><option value="2008">2008</option><option value="2012">2012</option><option value="2016">2016</option><option value="7">7</option><option value="8">8</option><option value="ME">ME</option></select></td><td><select class='filterselect form-control input-sm' name="rdp_access"><option value="">ALL</option><option value="ADMIN">ADMIN</option><option value="USER">USER</option></select></td><td><input class='filterinput form-control input-sm' name="rdp_hosting" size='3'></td><td><select class='filterselect form-control input-sm' name="rdp_seller"><option value="">ALL</option><option value="seller18">seller18</option><option value="seller26">seller26</option><option value="seller34">seller34</option><option value="seller44">seller44</option><option value="seller50">seller50</option><option value="seller54">seller54</option><option value="seller60">seller60</option><option value="seller69">seller69</option><option value="seller74">seller74</option><option value="seller90">seller90</option><option value="seller98">seller98</option><option value="seller102">seller102</option><option value="seller110">seller110</option><option value="seller111">seller111</option><option value="seller118">seller118</option><option value="seller127">seller127</option><option value="seller130">seller130</option><option value="seller131">seller131</option><option value="seller132">seller132</option><option value="seller148">seller148</option><option value="seller151">seller151</option><option value="seller153">seller153</option><option value="seller158">seller158</option><option value="seller159">seller159</option><option value="seller165">seller165</option><option value="seller166">seller166</option><option value="seller169">seller169</option><option value="seller189">seller189</option><option value="seller190">seller190</option><option value="seller191">seller191</option><option value="seller195">seller195</option><option value="seller206">seller206</option></select></td><td><button id='filterbutton'class="btn btn-primary btn" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table>  </div>
</div>


<table width="100%"  class="table table-striped table-bordered sticky-header table-sm" id="table">
<thead >
    <tr>
      <th scope="col" >Country</th>
      <th scope="col" >State</th>
      <th scope="col" >Windows</th>
      <th scope="col" >Ram</th>
      <th scope="col">Access</th>
      <th scope="col">Username</th>
      <th scope="col">Detected Hosting</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>

      <th style="width: 10%" scope="col" class="sorttable_nosort">Buy</th>
    </tr>
</thead>
  <tbody>
    {items}
  </tbody>
</table>

<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#rdp_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#rdp_windows").text().toLowerCase() );var ck3 = $.trim( $(this).find("#rdp_access").text().toLowerCase() );var ck4 = $.trim( $(this).find("#rdp_hosting").text().toLowerCase() );var ck5 = $.trim( $(this).find("#rdp_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="rdp_country"]').val().toLowerCase() );var val2 = $.trim( $('select[name="rdp_windows"]').val().toLowerCase() );var val3 = $.trim( $('select[name="rdp_access"]').val().toLowerCase() );var val4 = $.trim( $('input[name="rdp_hosting"]').val().toLowerCase() );var val5 = $.trim( $('select[name="rdp_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || (ck2 != val2 && val2 != '' ) || (ck3 != val3 && val3 != '' ) || ck4.indexOf(val4)==-1 || (ck5 != val5 && val5 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buyit(id,code,price){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
          balance = $('#balance').text();
          if (price <= balance){
              $("#buy_"+id).html('Purchasing ...').show();
              $.ajax({
                type:       'GET',
                url:        'rdpbuy'+id+'-'+code+'.html',
                success:    function(data)
                {
                  $("#buy_"+id).html(data).show();

                  ajaxinfo();
                }});
          }
          else {
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>', function() {});}}
  });
}


</script>