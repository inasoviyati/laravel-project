@extends('admin.layout')
@section('main')
<h1> Ini halaman Mahasiwa</h1>
<table id="datatable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>User</th>
                <th>Npm</th>
                <th>Kelas</th>
                <th>Last Acces</th>
                <th>Acction</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td><a class="btn btn-success" href="#" role="button">tampil</a>
                    <a class="btn btn-primary" href="#" role="button">edit</a>
                    <a class="btn btn-danger" href="#" role="button">hapus</a></td>
            </tr>
            
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010-06-09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009-04-10</td>
                <td>$237,500</td>
            </tr>
            
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011-01-25</td>
                <td>$112,000</td>
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

