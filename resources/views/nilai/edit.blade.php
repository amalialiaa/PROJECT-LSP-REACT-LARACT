@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>TAMBAH EDIT NILAI</h2>
    <form method="POST" action="/nilai/update/{{ $nilai->id }}">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">GURU MAPEL</td>
                <td class="bar">
                    <select name="mengajar_id">
                        <option>pilih guru mapel</option>
                        @foreach($mengajar as $each)
                            <option value="{{ $each->id }}" @if ($each->id == $nilai->mengajar_id) selected @endif>{{ $each->mapel->nama_mapel }}</option>
                        @endforeach 
                    </select>
                </td>
            </tr>
            <tr>
                <td class="bar">SISWA</td>
                <td class="bar">
                    <select name="siswa_id">
                        <option>pilih nama siswa</option>
                        @foreach($siswa as $each)
                            <option value="{{ $each->id }}"  @if ($each->id == $nilai->siswa_id) selected @endif>{{ $each->nama_siswa }}</option>
                        @endforeach 
                    </select>
                </td>
            </tr>
            <tr>
                <td width="25%">UH</td>
                <td width="25%"><input type="number" name="uh" value="{{ $nilai->uh }}"></td>
            </tr>
            <tr>
                <td width="25%">UTS</td>
                <td width="25%"><input type="number" name="uts" value="{{ $nilai->uts }}"></td>
            </tr>
            <tr>
                <td width="25%">UAS</td>
                <td width="25%"><input type="number" name="uas" value="{{ $nilai->uas }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">UBAH</button></center>
                </td>
            </tr>
        </table>
    </form>
</center>
@endsection