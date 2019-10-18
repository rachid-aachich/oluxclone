

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#filter"><i class="fas fa-filter"></i> Filter</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade show active" id="filter">
    <table class="table table-borderless "><thead><tr><th class='sorttable_nosort'>Country</th>
<th class='sorttable_nosort'>Description</th>
<th class='sorttable_nosort'>Domains</th>
<th class='sorttable_nosort'>Seller</th>
<th class='sorttable_nosort'></th></tr></thead><tbody><tr><td><select class='filterselect form-control input-sm' name="leads_country"><option value="">ALL</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Belgium">Belgium</option><option value="Brazil">Brazil</option><option value="Bulgaria">Bulgaria</option><option value="Canada">Canada</option><option value="China">China</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Egypt">Egypt</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Liechtenstein">Liechtenstein</option><option value="Malaysia">Malaysia</option><option value="Mix">Mix</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Spain">Spain</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Turkey">Turkey</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Viet Nam">Viet Nam</option></select></td><td><input class='filterinput form-control input-sm' name="leads_about" size='3'></td><td><input class='filterinput form-control input-sm' name="leads_domains" size='3'></td><td><select class='filterselect form-control input-sm' name="leads_seller"><option value="">ALL</option><option value="seller18">seller18</option><option value="seller26">seller26</option><option value="seller34">seller34</option><option value="seller37">seller37</option><option value="seller41">seller41</option><option value="seller44">seller44</option><option value="seller49">seller49</option><option value="seller50">seller50</option><option value="seller51">seller51</option><option value="seller73">seller73</option><option value="seller82">seller82</option><option value="seller85">seller85</option><option value="seller102">seller102</option><option value="seller107">seller107</option><option value="seller111">seller111</option><option value="seller118">seller118</option><option value="seller119">seller119</option><option value="seller122">seller122</option><option value="seller126">seller126</option><option value="seller131">seller131</option><option value="seller132">seller132</option><option value="seller139">seller139</option><option value="seller142">seller142</option><option value="seller148">seller148</option><option value="seller151">seller151</option><option value="seller153">seller153</option><option value="seller158">seller158</option><option value="seller159">seller159</option><option value="seller161">seller161</option><option value="seller166">seller166</option><option value="seller169">seller169</option><option value="seller182">seller182</option><option value="seller185">seller185</option><option value="seller190">seller190</option><option value="seller191">seller191</option><option value="seller194">seller194</option><option value="seller201">seller201</option><option value="seller206">seller206</option></select></td><td><button id='filterbutton'class="btn btn-primary btn" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table>  </div>
</div>

<table width="100%"  class="table table-striped table-bordered table-condensed sticky-header" id="table">
<thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" style="width:12%">Country</th>
      <th scope="col">Source</th>
      <th scope="col">Emails Domains</th>
      <th scope="col">Email N</th>
      <th scope="col">Sample</th>      
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>
      <th scope="col">Buy</th>
    </tr>
</thead>
  <tbody>
    {items}
  </tbody>
</table>

<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#leads_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#leads_about").text().toLowerCase() );var ck3 = $.trim( $(this).find("#leads_domains").text().toLowerCase() );var ck4 = $.trim( $(this).find("#leads_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="leads_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="leads_about"]').val().toLowerCase() );var val3 = $.trim( $('input[name="leads_domains"]').val().toLowerCase() );var val4 = $.trim( $('select[name="leads_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || ck3.indexOf(val3)==-1 || (ck4 != val4 && val4 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buyit(id,code,price){
  $('#myModal').modal('hide');
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){

          balance = $('#balance').text();
          if (price <= balance){
              $("#buy_"+id).html('Purchasing...').show();
              $.ajax({
                type:       'GET',
                url:        'leadsbuy'+id+'-'+code+'.html',
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
function leadinfo(id,code){
   $("#myModalLabel").text('Sample');
   $("#modelbody").html('');
   $('#myModal').modal('show');
      $.ajax({
        type:       'GET',
        url:        'leadsshow'+id+'-'+code+'.html',
        success:    function(data)
        {
            $("#modelbody").html(data);
        }});   

}


</script>