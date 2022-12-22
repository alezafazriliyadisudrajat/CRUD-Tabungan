<!doctype html>
<html lang="en">
  <head>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Uang Anda <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
          </svg></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>
        </div>
      </nav>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <title>Tabungan</title>
  </head>
  <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <body style="background:'#fad2d2';">
    <div class="form-check form-switch d-flex justify-content-center mt-5">
        <input class="form-check-input" type="checkbox" role="switch" id="switch" checked="" onchange="switchMode()">
        <label class="form-check-label ms-3" style="color: rgb(255, 255, 255);" for="flexSwitchCheckChecked" id="label"></label>
    </div>

        <li class="nav-item">
    <h1 class="text-center mb-4">Tabungan</h1>
    <div class="container">
    <form action="{{ route('updatedata', $data->id) }}" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-2">
        <label for="">nis</label>
          <input type="text" class="form-control" maxlength="8" minlength="8" name="nis" placeholder="12....." value="{{ $data->nis }}">
        </div>
        <div class="col-md-2">
         <label for="">nama lengkap</label>
            <input type="text" class="form-control" placeholder="aleza" name="nama" value="{{ $data->nama }}">
        </div>
        <div class="col-md-2">Rayon:
            <select class="form-control mt-2" name="rayon" id="rayon" value="{{ $data->region }}">
                @for ($i = 1; $i <= 3; $i++)
                <option @if($data->rayon == 'Cibedug '.$i) {{ 'selected' }} @endif>Cibedug {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 5; $i++)
                <option @if($data->rayon == 'Ciawi '.$i) {{ 'selected' }} @endif>Ciawi {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 7; $i++)
                <option @if($data->rayon == 'Cicurug '.$i) {{ 'selected' }} @endif>Cicurug {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 6; $i++)
                <option @if($data->rayon == 'Cisarua '.$i) {{ 'selected' }} @endif>Cisarua {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 5; $i++)
                <option @if($data->rayon == 'tajur '.$i) {{ 'selected' }} @endif>Tajur {{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-2">
            <label for="">Uang</label>
               <input type="text" class="form-control" placeholder="your money" name="uang" value="{{ $data->uang }}">
           </div>
           <div class="col-md-2 mt-3">
            <select class="form-control mt-3" name="action" id="action">
                <option value="add">Add Money</option>
                <option value="take">Take Money</option>
            </select>
        </div>
        <br>
        <div class="col-md-2 mt-2">
            <input class= "btn btn-primary mt-4" type="submit" value="Kirim">
        </div>
    </form>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script>
      Swal.fire(
        ''.{{ Session::get('succcess') }}.'',
        'You clicked the button!',
        'success'
      )
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
        function switchMode() {
            let body = document.querySelector('body');
            let switchEl = document.querySelector('#switch');
            let label = document.querySelector('#label');
            if (switchEl.checked) {
                body.style.background = '#87CEEB';
                label.style.color = '#fff';
            }else {
                body.style.background = '#fff';
                label.style.color = '#fad2d2';
            }
        }
    </script>
  </body>
</html>
