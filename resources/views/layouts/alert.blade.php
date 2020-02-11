<div class="container">
@if (session('success'))
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Tambah Data Berhasil!</h4>
</div>
</div>
@endif
<div class="container">
@if (session('info'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Update Data Berhasil!</h4>
</div>
@endif
</div>
<div class="container">
@if (session('danger'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Hapus Data Berhasil!</h4>
</div>
@endif
</div>
