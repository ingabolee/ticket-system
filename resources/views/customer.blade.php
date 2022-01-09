
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Scheduled Events</h2>

  <ul class="list-group">
  
@foreach($events as $event)
        <li class="list-group-item"> {{ $event['event_name'] }}| {{ $event['event_time'] }}| {{ $event['event_location'] }}| price: sh.{{ $event['event_price'] }}
<form>
	 @csrf
   <input type="submit" name="Book Event">
</form> 
<?php

  if(isset($_POST["submit"])){
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,document.getElementById('{{$loop->index}}').innerHTML);
	$pdf->Output();
}
?>    

	
    @endforeach
 
</ul>
</div>

</body>
<div class="footer">
  <p>2020</p>
  <button class="button"><a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form></button>
</div>
<style>
.button {
  background-color: #66CCCC;
  border: none;
  color: white;
  padding: 10px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 3px 1px;
  cursor: pointer;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: white;
   text-align: center;
}
</style>

</html>
