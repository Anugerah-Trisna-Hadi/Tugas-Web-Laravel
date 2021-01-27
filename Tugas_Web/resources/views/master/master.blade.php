<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<title>@yield('title')</title>
</head>
<body>
	@include('master._navigation')
	@yield('content')
	<footer class="footer bg-primary">
      <div class="container text-center">
       	<br>
        <span class="text-white mt-5 mb-5">Copyright &copy; 2021 BY Anugerah Trisna Hadi</span>
        <br>
        <br>
      </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.select').select2({
        placeholder: '-- Pilih Kelas --',
        allowClear: true
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</html>