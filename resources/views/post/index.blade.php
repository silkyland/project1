@extends('layout.master')

@section('content')
    <h1>ข่าว</h1>
    <a href="/post/create">+ เพิ่มข่าวใหม่</a>
    <table>
        <thead>
            <tr>
                <td>ลำดับ</td>
                <td>หัวข้อ</td>
                <td>รูปประจำข่าว</td>
                <td>หมวดหมู่ข่าว</td>
                <td>ผู้เขียนข่าว</td>
                <td>สร้างเมื่อ</td>
                <td>จัดการ</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->thumbnail}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->user->name}}</td>
                <td>{{$item->created_at}}</td>
                <td> <a href="/user/edit/{{$item->id}}">แก้ไข</a> |<a href="/user/delete/{{$item->id}}">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

