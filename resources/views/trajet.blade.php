

<!DOCTYPE html>
<!-- saved from url=(0052)https://colorlib.com/etc/bforms/colorlib-booking-11/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Booking Form HTML Template</title>

<style id="" media="all">/* devanagari */
.section{position:relative;height:100vh}
.section .section-center{
    position:absolute;top:50%;left:0;right:0;
    -webkit-transform:translateY(-50%);transform:translateY(-50%)}
    #booking{font-family:poppins,sans-serif;background-image:url({{ url('assets/img/blog/blog-5.webp')}});background-size:cover;background-position:center}#booking::before{content:'';position:absolute;left:0;right:0;bottom:0;top:0;background:rgba(255,255,255,.15)}.booking-form{background:#fff;border-radius:2px}.booking-form>form .row.no-margin{margin-right:0;margin-left:0}.booking-form>form .row.no-margin>[class*=col-]{padding-right:0;padding-left:0}.booking-form .form-group{position:relative;padding:25px;margin-bottom:0}.booking-form .form-group:after{content:'';background:rgba(129,131,144,.15);position:absolute;top:25px;bottom:0;right:0;width:2px;height:75px}.booking-form .form-control{background-color:transparent;border-radius:0;border:none;height:50px;-webkit-box-shadow:none;box-shadow:none;font-size:20px;color:#222;font-weight:400;padding:0}.booking-form .form-control::-webkit-input-placeholder{color:#818390}.booking-form .form-control:-ms-input-placeholder{color:#818390}.booking-form .form-control::placeholder{color:#818390}.booking-form input[type=date].form-control:invalid{color:#818390}.booking-form select.form-control{-webkit-appearance:none;-moz-appearance:none;appearance:none}.booking-form select.form-control+.select-arrow{position:absolute;right:0;bottom:30px;width:32px;line-height:32px;height:32px;text-align:center;pointer-events:none;color:#818390;font-size:14px}.booking-form select.form-control+.select-arrow:after{content:'\279C';display:block;-webkit-transform:rotate(90deg);transform:rotate(90deg)}.booking-form .form-label{color:#ff0063;display:block;font-weight:400;height:25px;line-height:25px;font-size:14px}.booking-form .form-btn{padding:25px}.booking-form .submit-btn{background:#ff0063;border:none;text-transform:capitalize;display:block;
        border-radius:2px;width:100%;height:75px;
        font-size:16px;font-weight:400;color:#fff}
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


td{
    border: solid;
}
</style>

<link type="text/css" rel="stylesheet" href="{{ url('Booking Form HTML Template_files/bootstrap.min.css')}}">

<link type="text/css" rel="stylesheet" href="{{ url('Booking Form HTML Template_files/style.css')}}">


<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<meta name="robots" content="noindex, follow">
<body>
<div id="booking" class="section">
<div class="section-center">
<div class="container">
<div class="row">
<div class="booking-form">
<form action="{{url('/search-trajet')}}" method="post">
    @csrf
<div class="row no-margin">

<div class="col-md-8">
<div class="row no-margin">
<div class="col-md-4">
<div class="form-group">
<span class="form-label">Adresse de départ</span>

<select name="depart" id="pet-select" class="form-control">
    <option value="Ariana">Ariana</option>
    <option value="Béja">Béja</option>
    <option value="Ben Arous">Ben Arous	</option>
    <option value="Bizerte">Bizerte</option>
    <option value="Gabès">Gabès</option>
    <option value="Gafsa">Gafsa</option>
    <option value="Jendouba">Jendouba</option>
    <option value="Kairouan">Kairouan</option>
    <option value="Kasserine">Kasserine</option>
    <option value="Kébili">Kébili</option>
    <option value="Le Kef">Le Kef</option>
    <option value="Mahdia">Mahdia</option>
    <option value="La Manouba">La Manouba</option>
    <option value="Médenine">Médenine</option>
    <option value="Monastir">Monastir</option>
    <option value="Nabeul">Nabeul</option>
    <option value="Sfax">Sfax</option>
    <option value="Sidi Bouzid">Sidi Bouzid</option>
    <option value="Siliana">Siliana</option>
    <option value="Sousse">Sousse</option>
    <option value="Tataouine">Tataouine</option>
    <option value="Tozeur">Tozeur</option>
    <option value="Tunis">Tunis</option>
    <option value="Zaghouane">Zaghouane</option>

</select>
<span class="select-arrow"></span>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span class="form-label">Adresse d'arrivée</span>

<select name="arr" id="pet-select" class="form-control">
    <option value="Ariana">Ariana</option>
    <option value="Béja">Béja</option>
    <option value="Ben Arous">Ben Arous	</option>
    <option value="Bizerte">Bizerte</option>
    <option value="Gabès">Gabès</option>
    <option value="Gafsa">Gafsa</option>
    <option value="Jendouba">Jendouba</option>
    <option value="Kairouan">Kairouan</option>
    <option value="Kasserine">Kasserine</option>
    <option value="Kébili">Kébili</option>
    <option value="Le Kef">Le Kef</option>
    <option value="Mahdia">Mahdia</option>
    <option value="La Manouba">La Manouba</option>
    <option value="Médenine">Médenine</option>
    <option value="Monastir">Monastir</option>
    <option value="Nabeul">Nabeul</option>
    <option value="Sfax">Sfax</option>
    <option value="Sidi Bouzid">Sidi Bouzid</option>
    <option value="Siliana">Siliana</option>
    <option value="Sousse">Sousse</option>
    <option value="Tataouine">Tataouine</option>
    <option value="Tozeur">Tozeur</option>
    <option value="Tunis">Tunis</option>
    <option value="Zaghouane">Zaghouane</option>

</select>

<span class="select-arrow"></span>


</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span class="form-label">Date DD/MM/YYYY</span>
<input type="date" placeholder="DD/MM/YYYY" class="form-control" name = "date"/>


</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-btn">
<button class="submit-btn" type="submit">recherche</button>
</div>
</div>
</div>
</form>
</div>
@if(session()->has("trajets"))
    @if(count(session()->get("trajets")) > 0)



            <h1 style="color: red;">Trajet trouvé</h1>
            <table style="float: right;,width: 80%; height: 200px;">
                <thead>
                <tr>
                    <td  style="background-color: white;" >Adresse de départ</td>
                    <td style="background-color:white ;">Adresse d'arrivée</td>
                    <td  style="background-color: white;">Date</td>
                    <td  style="background-color: white;">Nombre de place</td>
                    <td  style="background-color: white;">Postion de place</td>
                    <td  style="background-color: white;">action</td>

    </tr>
                </thead>
                <tbody>
                @foreach(session()->get("trajets") as $item)
                @if($item->nombreplace > 0)
                  <tr>
                    <td style="color: white;">{{ $item->addepart  }}</td>
                    <td style="color: white;">{{ $item->addarrivee  }}</td>
                    <td style="color: white;">{{ $item->date  }}</td>
                    <td style="color: white; text-align-last: center;">{{ $item->nombreplace  }}</td>
                    <td style="color: white; text-align-last: center;">
                        @foreach ($item->postion as $key => $positon )
                        @if ($positon == 0)
                        {{$key}}
                        @endif

                        @endforeach



                    </td>
                    <td style="color: white;"> @if(Auth::user()->role=="passager")


                 <a href ="res" class="btn btn-danger">reserver</a>
                 @endif
                  </tr>

                  @endif


                  @endforeach

                </tbody>
            </table>
    @else
        <h1 style="color: rgb(218, 209, 209)"><b>Trajet non trouvé<b></h1>
    @endif
@endif
</div>
</div>
</div>
</div>

<script async="" src="{{ url('Booking Form HTML Template_files/js')}}"></script>


</body>
</html>
