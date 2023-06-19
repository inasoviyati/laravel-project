@extends('admin.layout')
@section('main')
<h1> Ini halaman ruang pertemuan </h1>
<table id="datatable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>Kelas</th>
                <th>Nama Istruktur</th>
                <th>Acction</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>
                    <a class="btn btn-success" href="#" role="button">tampil</a>
                    <a class="btn btn-primary" href="#" role="button">edit</a>
                    <a class="btn btn-danger" href="#" role="button">hapus</a>
                </td>
                
            </tr>
            
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                
            </tr>
        </tbody>
    </table>
    <script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            responsive: true,
            order: [
                [0, 'asc']
            ]
        });
    });
</script>
@endsection

