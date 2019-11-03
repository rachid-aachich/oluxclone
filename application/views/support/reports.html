<div class="alert alert-light">
  <h5><b>How to report a bad item ? </b></h5>
  <b>My Account</b> > <b>My Orders</b> then choose the item you want to report and click on <b>Report</b> button
  <p>You only have <b>12 hour</b> to report a bad item</p>
</div>

<table width="100%" class="table  table-bordered table-hover table-sm" id="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date Created</th>
      <th scope="col">Order ID</th>
      <th scope="col">Item Type</th>
      <th scope="col">Seller</th>
      <th scope="col">Report State</th>
      <th scope="col">Last Reply</th>
      <th scope="col">Last Updated</th>
    </tr>
  </thead>
  <tbody id="reportsTable">
  </tbody>
</table>

<script type="text/javascript">
  function getData() {
    $.ajax({
      type: 'GET',
      url: 'http://localhost/oluxclone/support/getReports',
      success: function (data) {
        if (data.response_type == 'success') {

          reports_list = data.response_data
          renderItemsList(reports_list)
        }
      },
      error: function (e) {
        console.log(e.status, e.statusText)
      }
    });
  }

  function renderItemsList(reports_list) {
    $("#reportsTable").html("");
    reports_list.forEach(function (report, idx) {
      var report_row = "<tr>";
      report_row += "<td>" + report.id + "</td>"
      report_row += "<td>" + report.date_created.replace(/(\d{4}-\d{2}-\d{1,2}).*/, '$1') + "</td>"
      report_row += "<td>" + report.order_id + "</td>"
      report_row += "<td>" + report.item_type + "</td>"
      report_row += "<td>" + report.seller + "</td>"
      report_row += "<td>" + report.status + "</td>"
      report_row += "<td>" + report.message + "</td>"
      report_row += "<td>" + report.last_updated + "</td>"
      report_row += "</tr>";
      $("#reportsTable").html($("#reportsTable").html() + report_row);
    })
  }

  $(document).ready(function () {
    getData();
  });
</script>