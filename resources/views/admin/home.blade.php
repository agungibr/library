@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        @if(Auth::user()->role == 'admin')
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Buku</h1>
                <a href="{{ route('home.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Buku</a>
            </div>
        @endif
            <div class="container">
                <div class="row">
                    <div class="card-deck mt-2">
                        <div class="card text-center">
                            <div class="card-block d-flex flex-row align-items-center">
                                @foreach ($books as $book)
                                    <x-card :image="$book->sampul" :title="$book->judul"  :id="$book->id" :author="$book->pengarang" :publisher="$book->penerbit"/>
                                @endforeach
                            </div>  
                        </div>
                    </div>
                </div>  
            </div>
        {{ $books->links() }}
    </div>
@endsection