<div class="alert alert-light">
  <center>
    <h4><i class="fas fa-shopping-cart"></i> Your Orders</h4>
    <p>You can only report a bad tool within <b>12 hours</b> by clicking on <span class="badge badge-primary">Report
        #ID</span> , Otherwise we can't give you refund or replacement!</p>
    <form id="filter" class="col-lg-5">
      <div class="input-group mb-3">
        <input type="text" name="search" id="search" class="form-control">
        <div class="input-group-append">
          <button type="submit" form="filter" class="btn btn-outline-primary btn">Search <i
              class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
  </center>
</div>
<table width="100%" class="table table-bordered table-hover table-sm" id="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type</th>
      <th scope="col">Item</th>
      <th scope="col">Open (View)</th>
      <th scope="col">Price</th>
      <th scope="col">Seller</th>

      <th scope="col">Report</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody id="ordersTable"></tbody>

  <div class="modal fade" id="reportOrderModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="reportOrderModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="itemModal_title">Report Order</h5>
        </div>
        <div class="modal-body">
          <form class="needs-validation" id="reportOrder_form" novalidate>
            <div class="form-group">
              <label for="reportModal_reportTitle">Report title</label>
              <input type="text" class="form-control" id="reportModal_reportTitle" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="reportModal_reportMessage" class="col-form-label">Report message</label>
              <textarea class="form-control" id="reportModal_reportMessage" required></textarea>
            </div>
          </form>
          <div class="alert alert-danger" id="reportOrdermModal_errors" role="alert" hidden></div>
        </div>

        <div class="modal-footer">
          <div class="float-right">
            <button class="btn btn-primary" type="button" id="reportOrdermModal_reportOrder">
              Report
            </button>
            <button type="button" class="btn btn-secondary" id="reportOrdermModal_cancelReport">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script type="text/javascript">

    var reportedOrderId = null;

    function getData() {
      $.ajax({
        type: 'GET',
        url: 'http://localhost/oluxclone/account/getOrders',
        success: function (data) {
          if (data.response_type == 'success') {

            orders_list = data.response_data
            renderItemsList(orders_list)
          }
        },
        error: function (e) {
          console.log(e.status, e.statusText)
        }
      });
    }

    function renderItemsList(orders_list) {
      $("#ordersTable").html("");
      orders_list.forEach(function (order, idx) {
        var order_row = "<tr>";
        order_row += "<td>" + order.id + "</td>"
        order_row += "<td>" + order.item_type + "</td>"
        order_row += "<td>" + order.item_name + "</td>"
        order_row += `
          <td>
            <div">
                <button id="item_editItemModal" class="btn btn-outline-primary btn-sm btn-block">
                  <i class="fas fa-eye"></i>
                </button>
            </div>
          </td>
        `;
        order_row += "<td>" + order.item_price + "</td>"
        order_row += "<td>" + order.seller + "</td>"
        order_row += `
          <td>
            <div">
                <button id="item_editItemModal" class="btn btn-outline-warning btn-sm btn-block" data-toggle="modal" onclick="toggleReportOrder(${order.id})">
                  <i class="fas fa-exclamation-circle"></i>
                </button>
            </div>
          </td>
        `;
        order_row += "<td>" + order.date_created.replace(/(\d{4}-\d{2}-\d{1,2}).*/, '$1') + "</td>"
        order_row += "</tr>";
        $("#ordersTable").html($("#ordersTable").html() + order_row);
      })
    }

    $(document).ready(function () {
      getData();
    });

    function toggleReportOrder(orderId) {
      reportedOrderId = orderId
      $("#reportOrderModal").modal('show');
    }

    $('#reportOrderModal').on('hidden.bs.modal', function (e) {
      $("#reportOrder_form").trigger("reset");
    });
    $('#reportOrdermModal_cancelReport').click(function () {
      $("#reportOrderModal").modal('hide');
    });

    $("#reportOrdermModal_reportOrder").click(function () {
      var report_title = $("#reportModal_reportTitle").val();
      var report_message = $("#reportModal_reportMessage").val();

      if (report_title && report_title.trim().length > 0) $("#reportModal_reportTitle").removeClass('is-invalid');
      else { $("#reportModal_reportTitle").addClass('is-invalid'); return; }

      if (report_message && report_message.trim().length > 0) $("#reportModal_reportMessage").removeClass('is-invalid');
      else { $("#reportModal_reportMessage").addClass('is-invalid'); return; }

      $("#reportOrdermModal_reportOrder").attr('disabled', true)
      $("#reportOrdermModal_reportOrder").html("Reporting ...");
      $("#reportOrdermModal_cancelReport").attr('disabled', true)

      $.ajax({
        type: 'POST',
        url: 'http://localhost/oluxclone/support/save',
        data: {
          operation: 'add_report',
          order_id: reportedOrderId,
          title: report_title,
          message: report_message,
        },
        success: function (data) {
          if (data.response_type == 'success') {
            getData();
            $("#reportOrdermModal_errors").html();
            $("#reportOrdermModal_errors").hide();
            reportedOrderId = null;
            $('#reportOrderModal').modal('hide');
          } else {
            $("#reportOrdermModal_errors").removeAttr("hidden");
            data.response_data.forEach(errorMessage => {
              $("#reportOrdermModal_errors").html($("#reportOrdermModal_errors").html() + "<strong>" + errorMessage + "</strong><br/>")
            });
          }
        },
        error: function (e) {
          console.log(e.status, e.statusText)
        }
      });
      $("#reportOrdermModal_reportOrder").attr('disabled', false)
      $("#reportOrdermModal_reportOrder").html("Report");
      $("#reportOrdermModal_cancelReport").attr('disabled', false)
    })

    $("#filter").on("submit", function () {
      $("#table tbody tr").each(function () {
        var ck3 = $(this).text().toLowerCase();
        var val3 = $('input[name="search"]').val().toLowerCase();
        if (ck3.indexOf(val3) == -1)
          $(this).hide();
        else
          $(this).show();
      });
      return false;
    });

  </script>