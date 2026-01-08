@extends('layouts.admin')

@section('title', 'Nutrition Orbit - Data Scrapper')

@section('extra_css')
<style>
    :root {
        --primary: #6366f1;
        --primary-dark: #4338ca;
        --secondary: #ec4899;
    }
    thead {
        background-color: rgba(99, 102, 241, 0.1);
    }
    .badge {
        background-color: rgba(99, 102, 241, 0.1);
    }
</style>
@endsection

@section('header_title', 'Nutrition Orbit Data')
@section('header_subtitle', 'Scraped data records from the database')

@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Reviews</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $item)
        <tr>
            <td>#{{ $item->id }}</td>
            <td style="font-weight: 500; color: var(--text-main);">{{ $item->Name }}</td>
            <td>{{ $item->Address ?? 'N/A' }}</td>
            <td>
                @if($item->Phone)
                    <a href="tel:{{ $item->Phone }}" class="contact-link">{{ $item->Phone }}</a>
                @else
                    -
                @endif
            </td>
            <td>
                @if($item->Website)
                    <a href="{{ $item->Website }}" target="_blank" class="contact-link">Visit Site</a>
                @else
                    -
                @endif
            </td>
            <td>
                @if($item->Review)
                    <span class="badge">{{ $item->Review }} Stars</span>
                @else
                    -
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="text-align: center; padding: 3rem;">
                No data found in the database.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
