<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New revenue</h4>
            </div>
            <div class="modal-body">
                <div class="page">
                   <center>

                       <form class="form-horizontal" role="form" method="POST" action="{{ route('revenue') }}">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <div class="form-group">
                               <label for="recipient-name" class="control-label">Dayli Revenue:</label>
                               <input type="text" name="revenue_total_diario" class="form-control" id="recipient-name">
                           </div>
                           <div class="form-group">
                               <label for="message-text" class="control-label">Date Revenue:</label>
                               <input type="text" id="datepickerrevenue" name="fecha" class="form-control">
                           </div>

                   </center>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
            </form>
        </div>
    </div>
</div>