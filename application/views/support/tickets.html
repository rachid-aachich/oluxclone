<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link active" href="#tickettable" data-toggle="tab">My Tickets</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#open" data-toggle="tab"><i class="fas fa-pen"></i> New Ticket</a>
	</li>
</ul>

<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade active show" id="tickettable">
		<table width="100%" class="table  table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Date Created</th>
					<th scope="col">Title</th>
					<th scope="col">Status</th>
					<th scope="col">Last Reply</th>
					<th scope="col">Last Updated</th>
				</tr>
			</thead>
			<tbody id="ticketsTable"></tbody>
		</table>
	</div>
	<div class="tab-pane fade" id="open">
		<div class="container-fluid ">
			<br>
			<h3>Support Tickets</h3>
			<div class="row ">
				<div class="col-sm">
					<form id="Addticket">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" name="title" id="ticket_ticketTitle" class="form-control input-normal"
								required />
						</div>
						<div class="form-group">
							<label for="ticketdata">Message</label>
							<textarea name="ticketdata" id="ticket_ticketMessage" rows="8" cols="80"
								class="form-control input-normal"></textarea>
						</div>
						<button type='submit' form="Addticket" class='btn btn-primary btn-lg' id="btnSubmitTicket">
							Submit
							<i class="fas fa-pen-nib"></i></button>
					</form>
				</div>
				<div class="col-sm">
					<br>
					<div class="alert alert-light">
						<ul>
							<li>If you want to refund an order :
								<ul>
									<li>Go to <abbr title="Account - > My Orders or Click here"
											onclick="pageDiv(13,'Orders - OluxShop','orders.html',0); return false;">My
											Account -> My Orders <i class="fas fa-shopping-cart"></i></abbr></li>
									<li>Choose the order you want to refund</li>
									<li>Then click on refund button </li>
								</ul>
							</li>
							<li>Please avoid opening multiple tickets, Just open one and include all the info you want
								in it</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">


		function getData() {
			$.ajax({
				type: 'GET',
				url: 'http://localhost/oluxclone/support/getTickets',
				success: function (data) {
					if (data.response_type == 'success') {

						tickets_list = data.response_data
						renderItemsList(tickets_list)
					}
				},
				error: function (e) {
					console.log(e.status, e.statusText)
				}
			});
		}

		function renderItemsList(tickets_list) {
			$("#ticketsTable").html("");
			tickets_list.forEach(function (ticket, idx) {
				var ticket_row = "<tr>";
				ticket_row += "<td>" + ticket.id + "</td>"
				ticket_row += "<td>" + ticket.date_created.replace(/(\d{4}-\d{2}-\d{1,2}).*/, '$1') + "</td>"
				ticket_row += "<td>" + ticket.title + "</td>"
				ticket_row += "<td>" + ticket.status + "</td>"
				ticket_row += "<td>" + ticket.message + "</td>"
				ticket_row += "<td>" + ticket.last_updated + "</td>"
				ticket_row += "</tr>";
				$("#ticketsTable").html($("#ticketsTable").html() + ticket_row);
			})
		}

		$(document).ready(function () {
			getData();
		});


		if (window.location.hash != "") {
			$('a[href="' + window.location.hash + '"]').click()
		}
		function CheckColors(val) {
			var element = document.getElementById('Other');
			if (val == 'others')
				element.style.display = 'block';
			else
				element.style.display = 'none';
		}

		$("#Addticket").submit(function () {
			$('button').prop('disabled', true);
			var formData = {
				operation: 'add_ticket',
				title: $('#ticket_ticketMessage').val(),
				message: $('#ticket_ticketMessage').val()
			}
			$.ajax({
				type: "POST",
				url: 'http://localhost/oluxclone/support/save',
				data: formData, // serializes the form's elements.
				success: function (data) {
					var response_type = data.response_type
					if (response_type == 'success') {
						getData();
						$('button').prop('disabled', false);
						$('#ticket_ticketTitle').val('')
						$('#ticket_ticketMessage').val('')
					}
				},
				error: function (e) {
					console.log(e.status, e.statusText)
				}
			});

			return false; // avoid to execute the actual submit of the form.
		});
	</script>