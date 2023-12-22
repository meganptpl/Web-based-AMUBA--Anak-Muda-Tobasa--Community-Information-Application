@php
    $total = 0;
    foreach ($totals as $item) {
        $total += $item->jumlah;
    }
    $total = number_format($total,0,',','.');
@endphp
@can('role-create')

<h4>Total Sumbangan = Rp. {{ $total }}</h4>

<table class="table cart">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Jenis</th>
        <th>Jumlah</th>
        <th>status</th>
        <th>Bukti Sumbangan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($sumbangan as $i=> $item)
    <tr>
        <td>{{ $sumbangan->firstItem() + $i }}</td> 
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->notelp }}</td>
        <td>{{ $item->jenis }}</td>
        <td>{{ $item->jumlah }}</td>
        <td>{{ $item->status }}</td>
        <td><img src="{{asset('asset/gambar/'.$item->gambar)}}" style="width:100%;height:250px;"></td>
        <td>
            @if($item->status == 'Diterima')
                No Action
            @elseif($item->status == 'Ditolak')
                No Action
            @else
            <form action="{{ route('sumbangan.ditolak',$item->id) }}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-primary">Ditolak</button>
            </form>
            <form action="{{ route('sumbangan.diterima',$item->id) }}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-primary">Diterima</button>
            </form>
            @endif
        </td>
    </tr>
    @endforeach
</table>
@else
<table class="table cart">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Jenis</th>
        <th>Jumlah</th>
        <th>Bukti Sumbangan</th>
    </tr>
    @foreach ($sumbangan as $i => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->notelp }}</td>
        <td>{{ $item->jenis }}</td>
        <td>{{ $item->jumlah }}</td>
        <td><img src="{{asset('asset/gambar/'.$item->gambar)}}" style="width:100%;height:250px;"></td>
    </tr>
    @endforeach
</table>
@endif
{!! $sumbangan->links('vendor.pagination.bootstrap-4') !!}