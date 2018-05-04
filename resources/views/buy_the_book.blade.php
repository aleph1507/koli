@extends('layouts.master')

@section('content')
<div class=" no-marginrow">
  <div class=" no-margincontainer-fluid content-wr">
    <div class=" no-margin">
      <div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class='content-p white-text padding-bottom-div'>
              <p>You can buy the electronic version of the book (epub) or order a printed copy (hard cover or paperback) </p>
              <p class='black-text'>Buy the book via PayPal: $19.99 for the book plus $2.99 for shipping</p>
               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="H9MCY5DU4RNSA">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" width="300px" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
