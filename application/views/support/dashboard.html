<ul class="nav nav-tabs nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#tickettable" data-toggle="tab">Tickets</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#reporttable" data-toggle="tab">Reports</a>
  </li>
</ul>
<br><br>
<div id="myTabContent" class="tab-content">

  <div class="tab-pane fade active show" id="tickettable">
    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <div class="input-group">
            <input type="text" class="form-control" id="ticket_searchTicketsInput" placeholder="Search tickets"
              aria-describedby="ticket_searchTicketsInput">
            <div class="input-group-append">
              <button id='ticket_searchTicketsButton' class="btn btn-primary btn"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <table width="100%" class="table  table-bordered table-hover table-sm" id="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Date Created</th>
          <th scope="col">Title</th>
          <th scope="col">Status</th>
          <th scope="col">Thread</th>
          <!-- <th scope="col">Edit status</th> -->
        </tr>
      </thead>
      <tbody id="ticketsTable"></tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="reporttable">
    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <div class="input-group">
            <input type="text" class="form-control" id="report_searchReportsInput" placeholder="Search reports"
              aria-describedby="report_searchReportsInput">
            <div class="input-group-append">
              <button id='report_searchReportsButton' class="btn btn-primary btn"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <table width="100%" class="table  table-bordered table-hover table-sm" id="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Date Created</th>
          <th scope="col">Order ID</th>
          <th scope="col">Item Type</th>
          <th scope="col">Seller</th>
          <th scope="col">Report State</th>
          <th scope="col">Thread</th>
          <!-- <th scope="col">Edit status</th> -->
        </tr>
      </thead>
      <tbody id="reportsTable">
      </tbody>
    </table>
  </div>



  <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="threadTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="list-group" id="threadBody"></div>
          </div>
          <div class="modal-footer">
            <input type="text" class="form-control" id="threadModal_message" placeholder="" required>
            <button type="button" class="btn btn-outline-primary" id="threadModal_submitMessage">
              <i class="fas fa-paper-plane"></i></button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

      var selectedEntityId = null
      var selectedEntityType = null
      var tickets_list = []
      var reports_list = []

      function getData() {
        $.ajax({
          type: 'GET',
          url: 'http://localhost/oluxclone/support/getTickets',
          success: function (data) {
            if (data.response_type == 'success') {

              tickets_list = data.response_data
              renderTicketsList(tickets_list)
            }
          },
          error: function (e) {
            console.log(e.status, e.statusText)
          }
        });

        $.ajax({
          type: 'GET',
          url: 'http://localhost/oluxclone/support/getReports',
          success: function (data) {
            if (data.response_type == 'success') {

              reports_list = data.response_data
              renderReportsList(reports_list)
            }
          },
          error: function (e) {
            console.log(e.status, e.statusText)
          }
        });
      }

      function getThread() {
        $.ajax({
          type: 'POST',
          url: 'http://localhost/oluxclone/support/getMessages',
          data: {
            operation: "get_thread",
            entity_id: selectedEntityId,
            entity_type: selectedEntityType
          },
          success: function (data) {
            if (data.response_type == 'success') {

              messages_list = data.response_data
              renderMessagesList(messages_list)
            }
          },
          error: function (e) {
            console.log(e.status, e.statusText)
          }
        });
      }

      function renderMessagesList(messages_list) {
        $("#threadBody").html("");
        messages_list.forEach(function (message, idx) {
          var message_row = `<a href="#" class="list-group-item list-group-item-action" style="text-align: ${message.user_id == 1 ? 'right' : 'left'}">`;
          // message_row += `<strong>${message.title || ""}</strong> <br> `
          message_row += `${message.message}`
          message_row += `<br>`
          message_row += `<span class="badge ${message.user_id == 1 ? 'badge-primary' : 'badge-dark'} badge-pill">${message.date_created}</span>`
          message_row += `</a>`
          $("#threadBody").html($("#threadBody").html() + message_row);
        })
      }

      function renderTicketsList(tickets_list) {
        $("#ticketsTable").html("");
        tickets_list = tickets_list
        tickets_list.forEach(function (ticket, idx) {
          var ticket_row = "<tr>";
          ticket_row += "<td>" + ticket.id + "</td>"
          ticket_row += "<td>" + ticket.date_created.replace(/(\d{4}-\d{2}-\d{1,2}).*/, '$1') + "</td>"
          ticket_row += "<td>" + ticket.title + "</td>"
          ticket_row += "<td>" + ticket.status + "</td>"
          ticket_row += `
                <td>
                    <div>
                        <button id="item_editItemModal" class="btn btn-outline-primary btn-sm btn-block" data-toggle="modal" onclick="openThreadModal('tickets',${ticket.id})">
                        <i class="fas fa-comments"></i>
                        </button>
                    </div>
                </td>
                `;
          // ticket_row += `
          //       <td>
          //           <div>
          //               <button id="item_editItemModal" class="btn btn-warning btn-sm btn-block" data-toggle="modal">
          //               <i class="fas fa-pencil-alt"></i>
          //               </button>
          //           </div>
          //       </td>
          //       `;
          ticket_row += "</tr>";
          $("#ticketsTable").html($("#ticketsTable").html() + ticket_row);
        })
      }

      function renderReportsList(reports_list) {
        $("#reportsTable").html("");
        reports_list = reports_list
        reports_list.forEach(function (report, idx) {
          var report_row = "<tr>";
          report_row += "<td>" + report.id + "</td>"
          report_row += "<td>" + report.date_created.replace(/(\d{4}-\d{2}-\d{1,2}).*/, '$1') + "</td>"
          report_row += "<td>" + report.order_id + "</td>"
          report_row += "<td>" + report.item_type + "</td>"
          report_row += "<td>" + report.seller + "</td>"
          report_row += "<td>" + report.status + "</td>"
          report_row += `
                <td>
                    <div>
                        <button id="item_editItemModal" class="btn btn-outline-primary btn-sm btn-block" data-toggle="modal" onclick="openThreadModal('reports',${report.id})">
                        <i class="fas fa-comments"></i>
                        </button>
                    </div>
                </td>
                `;
          // report_row += `
          //       <td>
          //           <div>
          //               <button id="item_editItemModal" class="btn btn-warning btn-sm btn-block" data-toggle="modal">
          //               <i class="fas fa-pencil-alt"></i>
          //               </button>
          //           </div>
          //       </td>
          //       `;
          report_row += "</tr>";
          $("#reportsTable").html($("#reportsTable").html() + report_row);
        })
      }

      $(document).ready(function () {
        getData();
      });

      function openThreadModal(entity_type, entity_id) {
        selectedEntityId = entity_id;
        selectedEntityType = entity_type
        $("#threadTitle").html(`Thread for ${entity_type.replace('s', '')} #${entity_id}`)
        $("#threadModal").modal('show');
      }
      $('#threadModal').on('shown.bs.modal', function (e) {
        getThread(selectedEntityId);
      })
      $('#threadModal').on('hidden.bs.modal', function (e) {
        selectedEntityId = null;
        selectedEntityType = null
        $("#threadModal_message").val('');
      })


      $("#ticket_searchTicketsInput").keyup(function () {
        var searchValue = $("#ticket_searchTicketsInput").val();
        var searchResultList = []

        if (searchValue && searchValue.length > 0) {
          searchValue = searchValue.toLowerCase();
          $("#ticket_searchTicketsButton").html('<i class="fas fa-times"></i>');
          $("#ticket_searchTicketsButton").click(function () {
            $("#ticket_searchTicketsInput").val('');
            $("#ticket_searchTicketsInput").trigger('keyup');
          })
          tickets_list.forEach(function (report, idx) {
            if (
              ticket.status.toLowerCase().includes(searchValue)
              || ticket.title.toLowerCase().includes(searchValue)
              || ticket.id.toLowerCase().includes(searchValue)
              || ticket.message.toLowerCase().includes(searchValue)
            ) searchResultList.push(ticket)
          })
          renderTicketsList(searchResultList);
        } else {
          $("#ticket_searchTicketsButton").html('<i class="fas fa-search"></i>');
          $("#ticket_searchTicketsButton").click(function () {
          })
          renderTicketsList(searchResultList);
        }

      });

      $("#report_searchReportsInput").keyup(function () {
        var searchValue = $("#report_searchReportsInput").val();
        var searchResultList = []

        if (searchValue && searchValue.length > 0) {
          searchValue = searchValue.toLowerCase();
          $("#report_searchReportssButton").html('<i class="fas fa-times"></i>');
          $("#report_searchReportssButton").click(function () {
            $("#report_searchReportsInput").val('');
            $("#report_searchReportsInput").trigger('keyup');
          })
          reports_list.forEach(function (ticket, idx) {
            if (
              report.id.toLowerCase().includes(searchValue)
              || report.item_type.toLowerCase().includes(searchValue)
              || report.seller.toLowerCase().includes(searchValue)
              || report.status.toLowerCase().includes(searchValue)
            ) searchResultList.push(report)
          })
          renderReportsList(searchResultList);
        } else {
          $("#report_searchReportssButton").html('<i class="fas fa-search"></i>');
          $("#report_searchReportssButton").click(function () {
          })
          renderReportsList(searchResultList);
        }
      });

      $("#threadModal_submitMessage").click(function () {
        var message = $("#threadModal_message").val();

        if (message && message.trim().length > 0) $("#threadModal_message").removeClass('is-invalid');
        else { $("#itemModal_itemName").addClass('is-invalid'); return; }


        $("#threadModal_submitMessage").attr('disabled', true)


        $.ajax({
          type: 'POST',
          url: 'http://localhost/oluxclone/support/addMessage',
          data: {
            operation: "add_message",
            entity_id: selectedEntityId,
            entity_type: selectedEntityType,
            message: message
          },
          success: function (data) {
            if (data.response_type == 'success') {
              getThread(selectedEntityId);
              $("#threadModal_message").val('');
            } else {
              $("#addItemModal_errors").removeAttr("hidden");
              data.response_data.forEach(errorMessage => {
                $("#addItemModal_errors").html($("#addItemModal_errors").html() + "<strong>" + errorMessage + "</strong><br/>")
              });
            }
          },
          error: function (e) {
            console.log(e.status, e.statusText)
          }
        });
        $("#threadModal_submitMessage").attr('disabled', false)
      })

    </script>