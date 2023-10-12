@extends('app')

@section('content')
    <h1>Data Pemain</h1>
    <p>Daftar Pemain:</p>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>Nomor Pemain</th>
                <th>Posisi Pemain</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemainn as $c)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $c->nama_pemain }}</td>
                    <td>{{ $c->nomor_pemain }}</td>
                    <td>{{ $c->posisi_pemain }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
