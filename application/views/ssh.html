<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="tab" href="#filter"><i class="fas fa-filter"></i> Filter</a>
	</li>
</ul>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade show active" id="filter">
		<table class="table table-borderless "><thead><tr><th class='sorttable_nosort'>Country</th>
<th class='sorttable_nosort'>System Information</th>
<th class='sorttable_nosort'>WHM</th>
<th class='sorttable_nosort'>Detected Hosting</th>
<th class='sorttable_nosort'>Seller</th>
<th class='sorttable_nosort'></th></tr></thead><tbody><tr><td><select class='filterselect form-control input-sm' name="ssh_country"><option value="">ALL</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Bolivia">Bolivia</option><option value="Canada">Canada</option><option value="China">China</option><option value="Costa Rica">Costa Rica</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Hong Kong">Hong Kong</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Ireland">Ireland</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Lithuania">Lithuania</option><option value="Malaysia">Malaysia</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Poland">Poland</option><option value="Singapore">Singapore</option><option value="South Korea">South Korea</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option></select></td><td><input class='filterinput form-control input-sm' name="ssh_info" size='3'></td><td><select class='filterselect form-control input-sm' name="ssh_whm"><option value="">ALL</option><option value="no">no</option><option value="yes">yes</option></select></td><td><input class='filterinput form-control input-sm' name="ssh_hosting" size='3'></td><td><select class='filterselect form-control input-sm' name="ssh_seller"><option value="">ALL</option><option value="seller18">seller18</option><option value="seller44">seller44</option><option value="seller69">seller69</option><option value="seller85">seller85</option><option value="seller90">seller90</option><option value="seller97">seller97</option><option value="seller109">seller109</option><option value="seller121">seller121</option><option value="seller127">seller127</option><option value="seller151">seller151</option><option value="seller155">seller155</option><option value="seller158">seller158</option><option value="seller159">seller159</option><option value="seller165">seller165</option><option value="seller168">seller168</option><option value="seller189">seller189</option></select></td><td><button id='filterbutton'class="btn btn-primary btn" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table>	</div>
</div>

<table width="100%"  class="table table-striped table-bordered sticky-header table-sm" id="table">
<thead>
    <tr>
      <th scope="col" >Country</th>
      <th scope="col" >Login</th>

      <th scope="col" >Information</th>
      <th scope="col">RAM</th>
      <th scope="col">WHM</th>
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
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#ssh_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#ssh_info").text().toLowerCase() );var ck3 = $.trim( $(this).find("#ssh_whm").text().toLowerCase() );var ck4 = $.trim( $(this).find("#ssh_hosting").text().toLowerCase() );var ck5 = $.trim( $(this).find("#ssh_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="ssh_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="ssh_info"]').val().toLowerCase() );var val3 = $.trim( $('select[name="ssh_whm"]').val().toLowerCase() );var val4 = $.trim( $('input[name="ssh_hosting"]').val().toLowerCase() );var val5 = $.trim( $('select[name="ssh_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' ) || ck4.indexOf(val4)==-1 || (ck5 != val5 && val5 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buyit(id,code,price){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){

          balance = $('#balance').text();
          if (price <= balance){
              $("#buy_"+id).html('Purchasing...').show();
              $.ajax({
                type:       'GET',
                url:        'sshbuy'+id+'-'+code+'.html',
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