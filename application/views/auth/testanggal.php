<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/datepicker/css/bootstrap-datepicker.css">

</head>
<body>

<div class="row">
 <div class="col-lg-6">
  <div class="form-group">
   <label>Tgl Awal</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
   </div>
  </div>
  <div class="form-group">
   <label>Tgl Akhir</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <input placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir">
   </div>
  </div>
 </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>



</body>

</html>