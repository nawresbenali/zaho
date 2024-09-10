<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeMarch">
  <!-- Site Title -->
  <title>Facture</title>
  <link rel="stylesheet" href="assets3/css/style.css">
</head>

<body>
  <div class="cs-container">
    <div class="cs-invoice cs-style1">
      <div class="cs-invoice_in" id="download_section">
        <div class="cs-invoice_head cs-type1 cs-mb25">


          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title"></h4>
                        <p class="card-title-desc">
                        </p>

                        <table   id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" style="background-color:#f5f0ea;">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">nom</th>
                                <th class="wd-15p border-bottom-0">prenom</th>
                                <th class="wd-20p border-bottom-0">email</th>
                                <th class="wd-20p border-bottom-0">tel</th>
                                <th class="wd-20p border-bottom-0">adresse</th>



                            </tr>
                            </thead>


                            <tbody>
                                @foreach($donnee as $data)
                            <tr>

                                <td> {{$data->nom}}</td>
                                <td> {{$data->prenom}}</td>



                                <td>{{$data->email}}</td>
                                <td>{{$data->tel}}</td>
                                <td>{{$data->adresse}}</td>


                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
          <div class="card-body">

            </div>
        </div><!-- .cs-note -->
      </div>
      <div class="cs-invoice_btns cs-hide_print">
        <a href="javascript:window.print()" class="cs-invoice_btn cs-color1">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24"/></svg>
          <span>Print</span>
        </a>
        <button id="download_btn" class="cs-invoice_btn cs-color2">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Download</title><path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
          <span>Download</span>
        </button>
      </div>
    </div>
  </div>
  <script src="assets3/js/jquery.min.js"></script>
  <script src="assets3/js/jspdf.min.js"></script>
  <script src="assets3/js/html2canvas.min.js"></script>
  <script src="assets3/js/main.js"></script>
</body>

</html>
