<div id="page-title">
    <h2>Invoice</h2>
    <p>Example invoice page build with DelightUI Framework</p>
</div>
<script>
    function printInvoice() {
        window.print();
    }
</script>
<div class="content-box pad25A">
    <div class="row">
        <div class="col-sm-3">
            <div class="dummy-logo">Your Company Logo</div><address class="invoice-address">Loyola University Medical Center<br>2160 South 1st Avenue<br>Maywood, IL 60153</address></div>
        <div class="col-sm-6 float-right text-right">
            <h4 class="invoice-title">Invoice</h4>No. <b>#5970486</b>
            <div class="divider"></div>
            <div class="invoice-date mrg20B">5 December 2014</div>
            <button onclick="printInvoice()" class="btn btn-alt btn-hover btn-info"><span>Print Invoice</span> <i class="glyph-icon icon-print"></i></button>
            <button onclick="printInvoice()" class="btn btn-alt btn-hover btn-danger"><span>Cancel Invoice</span> <i class="glyph-icon icon-trash"></i></button>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row">
        <div class="col-md-4">
            <h2 class="invoice-client mrg10T">Client information:</h2>
            <h5>Jerald Mavarro</h5><address class="invoice-address">101 Harris Road<br>Kilmarnock, VA(Virginia) 22482<br>(804) 435-8000</address></div>
        <div class="col-md-4">
            <h2 class="invoice-client mrg10T">Order Info:</h2>
            <ul class="reset-ul">
                <li><b>Date:</b> December 17, 2014</li>
                <li><b>Status:</b> <span class="bs-label label-warning">Pending</span></li>
                <li><b>Id:</b> #474356</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2 class="invoice-client mrg10T">Order Details:</h2>
            <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce.</p>
            <br>
            <p>Pronunciation and more common words.</p>
        </div>
    </div>
    <table class="table mrg20T table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th class="text-center">Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lenovo Laptop</td>
                <td class="text-center">1</td>
                <td>$433.10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mighty Mouse</td>
                <td class="text-center">4</td>
                <td>$41.00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Samsung LED TV</td>
                <td class="text-center">1</td>
                <td>$389.50</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Apple iMac 27"</td>
                <td class="text-center">1</td>
                <td>$1999.05</td>
            </tr>
            <tr class="font-bold font-black">
                <td colspan="3" class="text-right">Subtotal:</td>
                <td colspan="3">$2312.50</td>
            </tr>
            <tr class="font-bold font-black">
                <td colspan="3" class="text-right">Shipping:</td>
                <td colspan="3">$12.20</td>
            </tr>
            <tr class="font-bold font-black">
                <td colspan="3" class="text-right">Discount:</td>
                <td colspan="3" class="font-red">$5.10</td>
            </tr>
            <tr class="font-bold font-black">
                <td colspan="3" class="text-right">TOTAL:</td>
                <td colspan="3" class="font-blue font-size-23">$2710.65</td>
            </tr>
        </tbody>
    </table>
</div>
