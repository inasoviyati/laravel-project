@extends('admin.layout')
@section('main')
<h1> Ini halaman Instruktur</h1>
<table id="datatable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama </th>
                <th>User</th>
                <th>Mata Kuliah</th>
                <th>Kelas</th>
                <th>Last Accses</th>
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
                <td>
                    <a class="btn btn-success" href="#" role="button">tampil</a>
                    <a class="btn btn-primary" href="#" role="button">edit</a>
                    <a class="btn btn-danger" href="#" role="button">hapus</a>
                </td>

            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008-11-28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012-12-02</td>
                <td>$372,000</td>
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

