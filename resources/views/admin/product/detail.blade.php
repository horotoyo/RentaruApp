<div class="modal fade" id="modal-baru">
  <div class="modal-dialog" style="width:900px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><i class="fa fa-shopping-cart"></i> Detail Member</b></h4>
      </div>
      <div class="modal-body">
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
              Date at
              <address>
                <strong> WIB</strong><br>
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
              Table Number
              <address>
                <strong></strong><br>
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
              Customer Email
              <address>
                <strong></strong>
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
              Chasieer
              <address>
                <strong></strong>
              </address>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Product Name</th>
                  <th>Note</th>
                  <th>Price</th>
                  <th>Qty</th>
                  <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>

                    <tr v-for="(detail, index) in orders.detail" :key="detail.id">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment Methods: <b></b></p>

              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                  If you have a problem with our service, you can complain to our customer service or call 0879878223781.
              </p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">

              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Discount : </th>
                    <td> %</td>
                  </tr>
                  <tr>
                    <th style="width:50%">Total : </th>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <form method="post" action="" class="sendmail">
                @csrf
                <a href="" target="_blank" class="btn btn-default printinvoice"><i class="fa fa-print"></i> Print</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Mail</button>
                <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;" data-dismiss="modal" aria-label="Close">
                  <i class="fa fa-remove"></i> Cancel
                </button>

              </form>
            </div>
          </div>
      
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->