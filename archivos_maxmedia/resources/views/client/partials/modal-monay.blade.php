<div  id="Mymodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Request  Payment</h4>
            </div>
            <div class="modal-body">
                <center><form role="form" method="POST" action="{{ route('client.mailpayment.store') }}" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="revenue" value="{{ $r->reve }}">

                    <div class="form-group">
                        <label for="ejemplo_password_1">Quantity</label>

                        <input type="number" name="cantidad" class="form-control" min="1"  max="{{ ($r->reve - $re->c)- $payment->b }}" id="ejemplo_password_1"
                               placeholder="Dolars">

                    </div>
                    <div class="form-group">
                        <label for="ejemplo_email_1">Description</label>
                        <textarea name="descripcion" class="form-control" cols="30" rows="10" id="ejemplo_email_1"
                               placeholder="Suggestion"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Send</button>
                </form>
            </center>
            </div>
            <div class="modal-footer">
                <button type="submint" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

</div>