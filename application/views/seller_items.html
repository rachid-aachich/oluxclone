<div class="container">
  <div class="row">
    <div class="col-sm">
      <h2>
        My Items list
      </h2>
    </div>
    <div class="col-sm">
    </div>
    <div class="col-sm">
      <div class="input-group">
        <input type="text" class="form-control" id="item_searchItemsInput" placeholder="Search items"
          aria-describedby="item_searchItemsInput">
        <div class="input-group-append">
          <button id='item_searchItemsButton' class="btn btn-primary btn"><i class="fas fa-search"></i></button>
        </div>
      </div>
      <br />
      <div class="input-group">
        <button id='item_addItemModal' class="btn btn-primary btn-sm btn-block" onclick="toggleAddItem()"><i
            class="fas fa-plus-circle"></i>
          Add Item </button>
      </div>
    </div>
  </div>
</div>
<br />
<div class="container">
  <div class="row">

    <table class="table table-hover">
      <thead>
        <tr class="bg-primary" style="color:white!important">
          <th scope="col">Item name</th>
          <th scope="col">Item type</th>
          <th scope="col">Item description</th>
          <th scope="col">Item price</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody id="itemsTable">

      </tbody>
    </table>
  </div>
</div>


<div class="modal fade" id="addItemModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
  aria-labelledby="addItemModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itemModal_title">Add new item</h5>
      </div>
      <div class="modal-body">
        <form class="needs-validation" id="itemModal_form" novalidate>
          <div class="form-group">
            <label for="itemModal_itemName">Item name</label>
            <input type="text" class="form-control" id="itemModal_itemName" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="itemModal_itemPrice">Item price</label>
            <input type="text" class="form-control" id="itemModal_itemPrice" type="number" required>
          </div>

          <div class="form-group">
            <label for="itemModal_itemType">Item type</label>
            <select class="custom-select" id="itemModal_itemType" required>
              <option value="">Select item type</option>
              <option value="cpanel">CPANEL</option>
              <option value="leads">LEADS</option>
              <option value="rdp">RDP</option>
              <option value="shell">SHELL</option>
              <option value="ssh">SSH</option>
            </select>
          </div>
          <div class="form-group">
            <label for="itemModal_itemDescription" class="col-form-label">Item Description</label>
            <textarea class="form-control" id="itemModal_itemDescription"></textarea>
          </div>
        </form>
        <div class="alert alert-danger" id="addItemModal_errors" role="alert" hidden></div>
      </div>

      <div class="modal-footer">
        <div class="float-right">
          <button class="btn btn-primary" type="button" id="addItemModal_saveItem">
            Save
          </button>
          <button type="button" class="btn btn-secondary" id="addItemModal_closeModal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteItemModal" tabindex="-1" role="dialog" aria-labelledby="addItemModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this item ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="deleteItemModal_confirmDelete">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"
          id="deleteItemModal_closeModal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

  var items_list = [];
  var editedItemId = null;
  var deletedItemId = null;

  function getData() {
    $.ajax({
      type: 'GET',
      url: 'http://localhost/oluxclone/seller/get_items',
      success: function (data) {
        if (data.response_type == 'success') {

          items_list = data.response_data
          renderItemsList(items_list)
        }
      },
      error: function (e) {
        console.log(e.status, e.statusText)
      }
    });
  }

  function renderItemsList(items_list) {
    $("#itemsTable").html("");
    items_list.forEach(function (item, idx) {
      var item_row = "<tr>";
      item_row += "<td>" + item.item_name + "</td>"
      item_row += "<td>" + item.item_type + "</td>"
      item_row += "<td>" + item.item_description + "</td>"
      item_row += "<td>" + item.item_price + "</td>"
      item_row += `
            <td>
            <div style="float: left;">
                <button id="item_editItemModal" class="btn btn-warning btn-sm btn-block" data-toggle="modal" onclick="toggleEditItem(${item.id})">
                  <i class="fas fa-pencil-alt"></i>
                </button>
            </div>
            &nbsp;
            <div style="float: right;">
                <button id="item_deleteItemModal" class="btn btn-danger btn-sm btn-block" data-toggle="modal" onclick="toggleDeleteItem(${item.id})">
                  <i class="fas fa-trash-alt"></i>
                </button>
            </div>
          </td>
            `;
      item_row += "</tr>";
      $("#itemsTable").html($("#itemsTable").html() + item_row);
    })
  }

  $(document).ready(function () {
    getData();
  });

  function toggleAddItem() {
    $("#itemModal_title").text("Add nex item");
    $("#addItemModal_saveItem").addClass('btn-primary');
    $("#addItemModal_saveItem").removeClass('btn-warning');
    $("#addItemModal").modal('show');
  }
  function toggleEditItem(itemId) {

    items_list.forEach(function (item) {
      if (itemId == item.id) {
        editedItemId = itemId
        $("#itemModal_itemName").val(item.item_name);
        $("#itemModal_itemType").val(item.item_type);
        $("#itemModal_itemDescription").val(item.item_description);
        $("#itemModal_itemPrice").val(item.item_price)
        return;
      }
    })

    $("#addItemModal_saveItem").removeClass('btn-primary');
    $("#addItemModal_saveItem").addClass('btn-warning');
    $("#itemModal_title").text("Edit Item");
    $("#addItemModal").modal('show');
  }
  function toggleDeleteItem(itemId) {
    deletedItemId = itemId;
    $("#deleteItemModal").modal('show');
  }
  $("#addItemModal_saveItem").click(function () {
    var item_name = $("#itemModal_itemName").val();
    var item_type = $("#itemModal_itemType").val();
    var item_description = $("#itemModal_itemDescription").val();
    var item_price = parseFloat($("#itemModal_itemPrice").val());

    var modal_type = $("#addItemModal_saveItem").hasClass('btn-warning') ? "edit" : "add";

    if (item_name && item_name.trim().length > 0) $("#itemModal_itemName").removeClass('is-invalid');
    else { $("#itemModal_itemName").addClass('is-invalid'); return; }

    if (item_price) $("#itemModal_itemPrice").removeClass('is-invalid');
    else { $("#itemModal_itemPrice").addClass('is-invalid'); return; }

    if (item_type && item_type.trim().length > 0) $("#itemModal_itemType").removeClass('is-invalid');
    else { $("#itemModal_itemType").addClass('is-invalid'); return; }


    $("#addItemModal_saveItem").attr('disabled', true)
    $("#addItemModal_saveItem").html("Saving ...");
    $("#addItemModal_closeModal").attr('disabled', true)

    $.ajax({
      type: 'POST',
      url: 'http://localhost/oluxclone/seller/save',
      data: {
        operation: modal_type,
        item_id: editedItemId,
        name: item_name,
        type: item_type,
        price: item_price,
        description: item_description
      },
      success: function (data) {
        if (data.response_type == 'success') {
          getData();
          $("#addItemModal_errors").html();
          $("#addItemModal_errors").hide();
          $('#addItemModal').modal('hide');
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
    $("#addItemModal_saveItem").attr('disabled', false)
    $("#addItemModal_saveItem").html("Save");
    $("#addItemModal_closeModal").attr('disabled', false)
  })
  $('#addItemModal').on('hidden.bs.modal', function (e) {
    $("#itemModal_form").trigger("reset");
  });
  $('#addItemModal_closeModal').click(function () {
    $("#addItemModal").modal('hide');
  });
  $("#deleteItemModal_confirmDelete").click(function () {
    $("#deleteItemModal_confirmDelete").attr('disabled', true)
    $("#deleteItemModal_confirmDelete").html("Deleting ...");
    $("#deleteItemModal_closeModal").attr('disabled', true)

    $.ajax({
      type: 'POST',
      url: 'http://localhost/oluxclone/seller/delete',
      data: {
        item_id: deletedItemId,
      },
      success: function (data) {
        if (data.response_type == 'success') {
          getData();
          $('#deleteItemModal').modal('hide');
        }
      },
      error: function (e) {
        console.log(e.status, e.statusText)
      }
    });
    $("#deleteItemModal_confirmDelete").attr('disabled', false)
    $("#deleteItemModal_confirmDelete").html("Delete");
    $("#deleteItemModal_closeModal").attr('disabled', false)
  });

  $("#item_searchItemsInput").keyup(function () {

    var searchValue = $("#item_searchItemsInput").val();
    var searchResultList =  []

    if(searchValue && searchValue.length>0){
      searchValue = searchValue.toLowerCase();
      $("#item_searchItemsButton").html('<i class="fas fa-times"></i>');
      $("#item_searchItemsButton").click(function(){
        $("#item_searchItemsInput").val('');
        $("#item_searchItemsInput").trigger('keyup');
      })
      items_list.forEach(function (item, idx) {
        if(
          item.item_name.toLowerCase().includes(searchValue) 
          || item.item_price.toLowerCase().includes(searchValue) 
          || item.item_description.toLowerCase().includes(searchValue) 
          || item.item_type.toLowerCase().includes(searchValue)
        ) searchResultList.push(item)
     })
     renderItemsList(searchResultList);
    }else{
      $("#item_searchItemsButton").html('<i class="fas fa-search"></i>');
      $("#item_searchItemsButton").click(function(){
      })
      renderItemsList(items_list);
    }
       
  });

</script>