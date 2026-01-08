@extends('layouts.admin')

@section('title', 'Nutrition Orbit - Data Fetch')

@section('header_title', 'Nutrition Orbit Fetched Data')
@section('header_subtitle', 'Data from Fetch operation including Email contacts')

@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
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
                @if($item->Email)
                    <a href="mailto:{{ $item->Email }}" class="contact-link">{{ $item->Email }}</a>
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
            <td colspan="7" style="text-align: center; padding: 3rem;">
                No data found in the database.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
